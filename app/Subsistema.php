<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Semestre;
use App\Libro;

class Subsistema extends Model
{
    //Muchos a muchos
    //Un subsistema puede tener muchos semestres
    public function semestres(){
        return $this->belongsToMany(Semestre::class);
    }

    //Muchos a muchos
    //Un subsistema puede tener muchos libros
    public function libros(){
        return $this->belongsToMany(Libros::class);
    }
}
