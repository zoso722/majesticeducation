<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Subsistema;
use App\Semestre;
use App\User;

class Libro extends Model
{
    //Muchos a muchos
    //Un libro puede pertenecer a muchos subsistemas
    public function subsistemas(){
        return $this->belongsToMany(Subsistema::class);
    }

    //Muchos a muchos
    //Un libro puede pertenecer a muchos semestres
    public function semestres(){
        return $this->belongsToMany(Semestre::class);
    }

    //Muchos a muchos (Inversa)
    //Un libro puede pertencer a muchos usuarios
    public function users(){
        return $this->belongsToMany(User::class)->withPivot('id');
    }
}
