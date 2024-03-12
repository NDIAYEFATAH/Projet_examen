<?php

namespace App\Console\Commands;

use App\Models\Compte;
use App\Models\Table_pack;
use Illuminate\Console\Command;

class PayerFraisMensuels extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'frais:payer';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $comptes = Compte::all();

        foreach ($comptes as $compte) {

            //if ($compte->type_compte === 'courant'){
                $fraisMensuels = $this->calculerFraisMensuels($compte->table_pack_id);
                $compte->solde -= $fraisMensuels;
                $compte->save();
            //}


            // Enregistrer la transaction (facultatif)
            // $compte->transactions()->create([...]);
        }
    }
    private function calculerFraisMensuels($typeCompte)
    {
        // Logique de calcul des frais mensuels en fonction du type de compte
//        switch ($typeCompte) {
//            case 4:
//                return 3000;
//            case 5:
//                return 5000;
//            case 6:
//                return 12000;
//            default:
//                return 0;
//        }
//        $pack = Table_pack::all();
        if ($typeCompte == 4)
            return 3000;
        else if ($typeCompte == 5)
            return 5000;
        else if ($typeCompte == 6)
            return 12000;
        else
            return 0;
    }
}
