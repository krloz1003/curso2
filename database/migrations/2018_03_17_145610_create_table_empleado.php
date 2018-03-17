<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableEmpleado extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleados', function(Blueprint $table){
            $table->increments('id');
            $table->integer('matricula');
            $table->string('paterno');
            $table->string('materno');
            $table->string('nombre');
            $table->date('fecha_nacimiento');
            $table->enum('sexo',['HOMBRE','MUJER']);
            $table->integer('id_departamento')->unsigned();
            $table->foreign('id_departamento')->references('id')->on('cat_departamentos');
            $table->integer('id_turno')->unsigned();
            $table->foreign('id_turno')->references('id')->on('cat_turnos');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
    
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('empleados');
    }
}
