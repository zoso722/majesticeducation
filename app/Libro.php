<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Subsistema;
use App\Semestre;
use App\User;
use App\Documento;
use App\Link;
use App\Video;
use App\Song;

class Libro extends Model
{
    //Muchos a muchos
    //Un libro puede pertenecer a muchos subsistemas
    public function subsistemas(){
        return $this->belongsToMany(Subsistema::class, 'libro_semestre_subsistema');
    }

    //Muchos a muchos
    //Un libro puede pertenecer a muchos semestres
    public function semestres(){
        return $this->belongsToMany(Semestre::class, 'libro_semestre_subsistema');
    }

    //Muchos a muchos (Inversa)
    //Un libro puede pertencer a muchos usuarios
    public function users(){
        return $this->belongsToMany(User::class)->withPivot('id');
    }

    //Uno a muchos
    //Un libro puede tener muchos videos
    public function videos(){
        return $this->hasMany(Video::class);
    }
    //Uno a muchos
    //Un libro puede tener muchos links
    public function links(){
        return $this->hasMany(Link::class);
    }
    //Uno a muchos
    //Un libro puede tener muchos documentos
    public function documentos(){
        return $this->hasMany(Documento::class);
    }

    //Uno a muchos
    //Un libro puede tener muchos audios
    public function songs(){
        return $this->hasMany(Song::class);
    }
}
