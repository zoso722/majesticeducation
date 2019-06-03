<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Libro;

class Link extends Model
{
    //Uno a muchos (Inversa)
    //Un link solo puede pertencer a un libro
    public function libro(){
        return $this->belongsTo(Libro::class);
    }
}
