<?php

namespace App\Http\Controllers;

use App\Mail\CompteMail;
use App\Models\Compte;
use App\Models\Table_pack;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
//use Mail;

class CompteController extends Controller
{
    public function createCompte()
    {
        if (!Auth::check())
        {
            return view('auth.login');
        }
        $compte = new Compte();
        return view('client.createCompte',['compte' => $compte,
            'table_pack' => Table_pack::all()]);
    }
    public function saveCompte(Request $request)
    {
        $request->validate([
            'type_compte' => 'required',
            'table_pack_id' => 'required',
        ]);

        $compte = Compte::create([
            'type_compte' => $request->type_compte,
            'table_pack_id' => $request->table_pack_id,
            'rib' => $this->generateRib(),
            'solde' => 50000,
            'statut' => true,
            'user_id' => Auth::user()->id,
        ]);
        // Masquer les quatre derniers chiffres du RIB
        $rib = substr_replace($compte->rib, '****', -4);
        $subject = 'Confirmation de création de compte';
        $body = "Bonjour,\n\n";
        $body .= "Nous sommes heureux de vous informer que votre compte a été créé avec succès.\n\n";
        $body .= "Voici les informations de votre compte :\n";
        $body .= "Type de compte : " . $compte->type_compte . "\n";
        $body .= "Numéro de compte (RIB) : " . $rib . "\n";
        $body .= "Solde initial : " . $compte->solde . " FCFA\n\n";
        $body .= "Merci de votre confiance.\n\n";
        $body .= "Cordialement,\nVotre équipe bancaire";

        Mail::to(Auth::user()->email)->send(new CompteMail($subject,$body));

        //dd($compte);
        return view('welcome');
    }
    function generateRib(): string
    {
        // Préfixe "SN"
        $rib = "SN";

        // Génération du reste du RIB (20 chiffres)
        $max = pow(10, 18) - 1; // Valeur maximale pour un entier de 18 chiffres
        $resteRib = str_pad(mt_rand(0, $max), 18, '0', STR_PAD_LEFT); // Utilisation de $max comme limite

        // Concaténation du préfixe et du reste du RIB
        $rib .= $resteRib;

        return $rib;
    }
    public function showCompte()
    {
        $user = auth()->user();
        $compte = Compte::where('user_id', $user->id)->get();

        return view('client.showCompte',['compte' => $compte]);
    }
}
