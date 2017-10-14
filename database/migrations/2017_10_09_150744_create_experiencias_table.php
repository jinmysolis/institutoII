<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExperienciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('experiencias', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
             
            $table->string('nombre_empresa');
            $table->string('actividad_empresa');
            $table->string('puesto');
            $table->string('nivel_experiencia');
            $table->string('pais');
            $table->string('ano_inicio_trabajo');
            $table->string('ano_fin_trabajo');
            $table->string('descripcion_puesto');
               
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('experiencias');
    }
}
