<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compte extends Model
{
    use HasFactory;

    protected $fillable = [
        'type_compte',
        'rib',
        'solde',
        'statut',
        'user_id',
        'table_pack_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }
    public function table_pack()
    {
        return $this->belongsTo(Table_pack::class,'table_pack_id');
    }
}