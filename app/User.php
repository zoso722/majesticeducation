<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Tipo;
use App\Libro;

class User extends Authenticatable
{
    use Notifiable;
    
    const ADMIN = 1;
    const PROFESOR = 2;
    const ALUMNO = 3; 

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'clave', 'tipo_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    //Uno a uno
    //Un usuario solo puede tener un tipo
    public function tipo(){
        return $this->hasOne(Tipo::class);
    }

    //Muchps a muchos
    //Un usuario puede tener muchos libros
    public function libros(){
        return $this->belongsToMany(Libro::class);
    }
}
