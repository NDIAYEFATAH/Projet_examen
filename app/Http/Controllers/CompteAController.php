<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Compte;
use PhpParser\Node\Scalar\String_;

class CompteAController extends Controller
{

    public function index()
    {
        $comptes = Compte::all();

        return view('admin.listeCompte', ['comptes' => $comptes]);
    }

    public function bloquer(string $id)
    {
        $comptes = Compte::find($id);
        $comptes->statut = false;
        $comptes->save();
        return redirect()->back();
    }
    public function debloquer(string $id)
    {
        $compte = Compte::find($id);
        $compte->statut = true;
        $compte->save();
        return redirect()->back();
    }
}
