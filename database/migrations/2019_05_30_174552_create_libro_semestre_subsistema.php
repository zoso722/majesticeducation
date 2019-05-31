<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLibroSemestreSubsistema extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('libro_semestre_subsistema', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('libro_id');
            $table->foreign('libro_id')->references('id')->on('libros');
            $table->unsignedInteger('semestre_id');
            $table->foreign('semestre_id')->references('id')->on('semestres');
            $table->unsignedInteger('subsistema_id');
            $table->foreign('subsistema_id')->references('id')->on('subsistemas');            
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
        Schema::dropIfExists('libro_semestre_subsistema');
    }
}
