<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carte extends Model
{
    use HasFactory;
    protected $fillable = [
        'compte_id',
        'dateExpiration',
        'cvv',
        'montant',
    ];
    public function compte()
    {
        return $this->belongsTo(Compte::class);
    }
}
