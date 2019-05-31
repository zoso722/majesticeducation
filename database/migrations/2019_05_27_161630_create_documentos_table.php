<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDocumentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documentos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('libro_id');
            $table->foreign('libro_id')->references('id')->on('libros');
            $table->string('titulo', 100)->unique();
            $table->text('descripcion');
            $table->string('nombre', 100)->unique();
            $table->string('extension');
            $table->string('size');
            $table->enum('clasificacion', [
                'Reactivos adicionales',    //1
                'Guia del docente',         //2
                'Conoce más',               //3
                'Cuadernillo de tareas',    //4
                'Evaluación diagnostica',
                'ECAS',
                'Recursos adicionales',
                'Cuadernillo de actividades de acuerdo al nuevo modelo educativo',
                'Audios',
                'Habilidades socioeconomicas',
                'Planes y programas vigentes',
                'Talleres para docentes',
                'Para saber más',
                'Teacher book'
            ]);
            $table->string('url', 100)->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('documentos');
    }
}
