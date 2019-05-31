<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Tipo extends Model
{
    //Uno a uno (Inversa)
    //Un tipo puede tener un solo usuario
    public function user(){
        return $this->belongsTo(User::class);
    }
}
