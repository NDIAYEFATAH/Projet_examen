<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarteController extends Controller
{
    public function showCarte()
    {
        return view('client.listeCartes');
    }
}
