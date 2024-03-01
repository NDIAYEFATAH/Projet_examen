<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuichetierController extends Controller
{
    public function createGuichet()
    {
        return view('admin.addguichetier');
    }
}
