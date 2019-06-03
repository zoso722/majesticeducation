@extends('layouts.app')
    
<style>
    #scroll-c{
        overflow:auto; 
        height:450px;
    }

</style>

@section('content')
    <div class="card text-center">
        <div class="card-body">
            {{ $libro->titulo }}
        </div>
    </div>
    <hr>
    <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <!-- <div class="card-header">{{ __("") }}</div> -->
                    <div class="card-body" id="scroll-c">
                        <ul class="list-group list-group-flush">
                            @include('partials.elemento_lista', ['tipo_mat' => $songs, 'titulo_mat' => 'Audios'])
                            @include('partials.elemento_lista', ['tipo_mat' => $videos, 'titulo_mat' => 'Videos'])
                            @include('partials.elemento_lista', ['tipo_mat' => $links, 'titulo_mat' => 'Links'])
                            @include('partials.elemento_lista_where', ['clasif' => 'Reactivos adicionales'])
                            @include('partials.elemento_lista_where', ['clasif' => 'Guia del docente'])
                            @include('partials.elemento_lista_where', ['clasif' => 'Conoce más'])
                            @include('partials.elemento_lista_where', ['clasif' => 'Cuadernillo de tareas'])
                            @include('partials.elemento_lista_where', ['clasif' => 'Evaluación diagnostica'])
                            @include('partials.elemento_lista_where', ['clasif' => 'ECAS'])
                            @include('partials.elemento_lista_where', ['clasif' => 'Recursos adicionales'])
                            @include('partials.elemento_lista_where', ['clasif' => 'Cuadernillo de actividades de acuerdo al nuevo modelo educativo'])
                            @include('partials.elemento_lista_where', ['clasif' => 'Habilidades socioeconomicas'])
                            @include('partials.elemento_lista_where', ['clasif' => 'Planes y programas vigentes'])
                            @include('partials.elemento_lista_where', ['clasif' => 'Talleres para docentes'])
                            @include('partials.elemento_lista_where', ['clasif' => 'Para saber más'])
                            @include('partials.elemento_lista_where', ['clasif' => 'Teacher book'])
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-md-8">
                <div class="card">
                    <div class="card-body" id="scroll-c">
                        <!-- <div class="row">
                            <div class="col-md-4">
                               
                            </div>
                            <div class="col-md-8">
                                {{ $libro->sinopsis }}
                                <hr>
                                @foreach($libro->subsistemas as $subsistema)
                                    {{ $subsistema->subsistema }}
                                @endforeach
                                <br>
                                @foreach($libro->semestres as $semestre)
                                    {{ $semestre->semestre }}
                                @endforeach
                            </div>
                        </div> -->
                        <songs-component :songs="{{ json_encode($songs) }}"></songs-component>
                            
                    </div>
                </div>
            </div>
        </div>

@endsection

