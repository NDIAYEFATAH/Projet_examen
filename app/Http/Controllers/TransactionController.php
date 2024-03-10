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
}
