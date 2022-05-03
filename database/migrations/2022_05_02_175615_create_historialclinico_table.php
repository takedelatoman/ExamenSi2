<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHistorialclinicoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('historialclinico', function (Blueprint $table) {
            $table->id();
            $table->string('ocupacion');
            
            $table->string('enfermedad_actual');
            $table->string('alergias');
            $table->string('enfermedad_herencia');
            $table->string('tipo_sangre');
            $table->string('tabaquismo');
            $table->string('alcoholismo');
            $table->string('drogodependencias');
            
            $table->unsignedBigInteger('Id_paciente');
            $table->foreign('Id_paciente')->references('id')->on ('pacientes'); 
            $table->unsignedBigInteger('Id_medico');
            $table->foreign('Id_medico')->references('id')->on ('medicos');  //foranea 
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
        Schema::dropIfExists('historialclinico');
    }
}
