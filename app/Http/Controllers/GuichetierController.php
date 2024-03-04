<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class GuichetierController extends Controller
{
    public function createGuichet()
    {
        return view('admin.addguichetier');
    }
    public function saveguichet(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'prenom' => 'required',
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'numero_cni' => ['required', 'max:13'],
            'cni_file' => ['required','mimes:jpg,jpeg,png'],
            'telephone' => ['required', 'max:9'],
            'adresse' => 'required',
        ]);
        $fileName = time() . '.' . $request->cni_file->extension();
        $request->cni_file->storeAs('public/images', $fileName);
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'userType' => 2,
            'prenom' => $request->prenom,
            'numero_cni' => $request->numero_cni,
            'cni_file' => $fileName,
            'telephone' => $request->telephone,
            'adresse' => $request->adresse,
        ]);

        event(new Registered($user));

        return view('admin.addguichetier');
    }
}
