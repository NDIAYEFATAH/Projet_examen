<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Carte;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;



class CarteController extends Controller
{
    public function listerCartes()
{
    $user = Auth::user();
    $compteCourant = $user->compteCourant;

    $cartes = Carte::all();

    return view('client.listeCartes', compact('cartes', 'compteCourant'));
}

    
public function show($id)
{
    $carte = Carte::findOrFail($id);
    return view('client.show', compact('carte'));
}

    public function addCarte()
    {
        return view('client.createCarte');
    }
    public function saveCarte(Request $request)
    {
        $request->validate([
            'montant' => 'required|integer|min:0',
        ]);
    
        $user = auth()->user();
        $compteCourant = $user->compteCourant;
    
        if (!$compteCourant) {
            return redirect()->back()->with('error', 'Vous n\'avez pas de compte courant pour effectuer cette opération.');
        }
    
        if ($request->montant > $compteCourant->solde) {
            return redirect()->back()->with('error', 'Solde insuffisant.');
        }
    
        $cvv = str_pad(rand(0, 999), 3, '0', STR_PAD_LEFT) ;
    
        Carte::create([
            'compte_id' => $compteCourant->id,
            'cvv' => $cvv,
            'montant' => $request->montant,
            'dateExpiration' => now()->addYear(),
        ]);
    
        $compteCourant->solde -= $request->montant;
        $compteCourant->save();
    
        return redirect()->back()->with('success', 'Carte générée avec succès. CVV : ' . $cvv);
    }


}
