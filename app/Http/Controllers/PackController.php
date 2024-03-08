<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Table_pack;
use Illuminate\Auth\Events\Registered;

class PackController extends Controller
{
    public function createPack()
    {
        return view('admin.addPack');
    }

    public function savePack(Request $request)
    {
        $request->validate([
            'nom_pack' => 'required',
            'azio' => 'required',
            'plafond' => 'required',
        ]);

        $pack = Table_pack::create([
            'nom_pack' => $request->nom_pack,
            'azio' => $request->azio,
            'plafond' => $request->plafond,
        ]);

        event(new Registered($pack));

        return redirect()->route('addPack');
    }
}
