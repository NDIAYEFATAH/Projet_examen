<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'userType',
        'prenom',
        'numero_cni',
        'cni_file',
        'telephone',
        'adresse',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
    public function compte()
    {
        return $this->hasOne(Compte::class);
    }
    public function transactions()
    {
        return $this->hasMany(Transaction::class,'user_id_emetteur');
    }
    public function comptes()
    {
        return $this->hasMany(Compte::class);
    }

    public function hasCompteCourant()
    {
        return $this->comptes()->where('type_compte', 'courant')->exists();
    }

    public function hasCompteEpargne()
    {
        return $this->comptes()->where('type_compte', 'epargne')->exists();
    }
    public function compteCourant()
    {
        return $this->hasOne(Compte::class)->where('type_compte', 'courant');
    }
    
}
