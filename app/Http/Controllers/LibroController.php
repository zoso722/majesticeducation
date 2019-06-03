<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Libro;
use App\Documento;
use App\Video;
use App\Link; 
use App\Song;


class LibroController extends Controller
{
    
    public function contenido($id){
        $libro = Libro::whereId($id)->with('subsistemas', 'semestres')->first();

        $documentos = Documento::where('libro_id', $libro->id)->get();
        $videos = Video::where('libro_id', $libro->id)->get();
        $links = Link::where('libro_id', $libro->id)->get();
        $songs = Song::where('libro_id', $libro->id)->get();
        //dd($songs);
        return view('contenido', compact('libro', 'documentos', 'videos', 'links', 'songs'));
    }
}
