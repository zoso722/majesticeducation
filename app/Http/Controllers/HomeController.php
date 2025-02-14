<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Libro;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {   
        return view('home', compact('materias'));
    }

    public function buscar(Request $request){
        $this->validate(request(), [
            'clavemat' => 'required|min:5|max:10|string'
        ]);

        $user = auth()->user();
        $libro = Libro::where('clave', $request->clavemat)->first();
        $registrados = $user->libros->where('id', $libro->id)->first();
        
        if($registrados != null){
            return back()->with('message', ['warning', __("Ya tienes registrada esta materia")]);;
        }
        else{
            if($user->tipo_id == 2 && $libro->tipo == "Profesor" || $user->tipo_id == 3 && $libro->tipo == "Alumno"){
                $user->libros()->attach($libro->id, ['user_id' => $user->id]);
                return back()->with('message', ['success', __("Materia guardada")]);;
            }
            else{
                return back()->with('message', ['danger', __("No tienes acceso a este material")]);;
            }
        }
    }
}
