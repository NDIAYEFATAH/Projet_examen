<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Compte;

class CompteAController extends Controller
{

public function index()
{
    $comptes = Compte::all();

    return view('admin.listeCompte', ['comptes' => $comptes]);
}
}
