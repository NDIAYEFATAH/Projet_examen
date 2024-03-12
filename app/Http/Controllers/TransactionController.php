<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Models\User;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function saveTransaction(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'prenom' => 'required',
            'rib' => 'required',
            'montant' => 'required',
            'motif' => 'required'
        ]);

        $beneficiaire = User::whereHas('compte', function ($query) use ($request) {
            $query->where('rib', $request->input('rib'));
        })->where('name', $request->input('name'))
            ->where('prenom', $request->input('prenom'))
            ->first();

        if ($beneficiaire) {
            $emetteur = auth()->user();
            $compteEmetteur = $emetteur->compte;

            // Récupérer la somme des transactions de l'utilisateur dans le mois en cours
            $transactionsTotal = $emetteur->transactions()->whereMonth('created_at', now()->month)->sum('montant');
            // Déterminer la limite de transaction en fonction du type de pack
            $pack = $emetteur->pack;
            $limit = ($pack == 'Standard') ? 1000000 : 5000000;


            if ($compteEmetteur->solde > $request->input('montant') || $compteEmetteur->type_compte === 'courant')
            {
                $compteBeneficiaire = $beneficiaire->compte()->where('rib', $request->input('rib'))->first();
                if($compteBeneficiaire->type_compte !== 'epargne')
                {
                    if ($transactionsTotal != 0 && $request->montant < $limit)
                    {
                        $compteBeneficiaire->solde += $request->input('montant');
                        $compteBeneficiaire->save();
                        $compteEmetteur->solde -= $request->input('montant');
                        $compteEmetteur->save();

                        Transaction::create([
                            'user_id_emetteur' => $emetteur->id,
                            'user_id_beneficiaire' => $beneficiaire->id,
                            'motif' => $request->motif,
                            'montant' => $request->montant,
                        ]);
                        // Retourner une réponse JSON indiquant le succès du transfert
                        return response()->json(['success' => 'Transfert réussi.']);
                    }
                    else
                    {
                        return response()->json(['error' => 'Vous avez dépassé la limite autorisée de transactions pour ce mois.'], 400);
                    }
                }
            }
            else
            {
                return response()->json(['error' => 'Les comptes épargne ne sont pas autorisés à effectuer des transferts.'], 400);
            }
        }
        else
        {
            return response()->json(['error' => 'Le numero de compte est incorrecte.'], 400);
        }
    }

    public function bilanTransaction()
    {
        // Exemple de code pour extraire les données des transactions par jour
        $transactions = Transaction::all(); // Supposons que Transaction est le modèle pour les transactions
        $transactionsByDay = $transactions->groupBy(function ($transaction) {
            return $transaction->created_at->format('Y-m-d'); // Regrouper les transactions par jour
        });

        // Compter le nombre de transactions par jour
        $transactionsCountByDay = $transactionsByDay->map(function ($transactions) {
            return $transactions->count();
        });

        // Convertir les données en format JSON pour Chart.js
        $labels = $transactionsCountByDay->keys()->toJson();
        $data = $transactionsCountByDay->values()->toJson();
//        dd($transactionsCountByDay);
//        dd($transactionsByDay);
        return view('admin.dashadmin',compact('labels', 'data','transactionsCountByDay'));
    }
    public function transactionsParUtilisateur()
    {
        $users = User::all();
        $transactionsParUtilisateur = [];
        foreach ($users as $user) {
            $nombreTransactions = Transaction::where('user_id_emetteur', $user->id)
                ->orWhere('user_id_beneficiaire', $user->id)
                ->count();
            $transactionsParUtilisateur[$user->name] = $nombreTransactions;
        }

        $labels = json_encode(array_keys($transactionsParUtilisateur));
        $data = json_encode(array_values($transactionsParUtilisateur));

        return view('votre_vue', compact('labels', 'data'));
    }
}
