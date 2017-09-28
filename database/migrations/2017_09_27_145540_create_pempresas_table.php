<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePempresasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pempresas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->string('titulo_oferta');
            $table->string('area');
            $table->string('tipo_jornada');
            $table->string('tipo_contrato');
            $table->string('tareas');
            $table->string('salario');
            $table->string('pais2');
            $table->string('ciudad2');
            $table->string('estado2');
            $table->string('anos_experiencia');
            $table->string('edad_minima');
            $table->string('edad_maxima');
            $table->string('estudios_minimos');
            $table->string('idiomas');
            $table->string('idioma_nivel');
            $table->enum('viajar', ['si','no']);
            $table->enum('licencia', ['vehiculos','camiones']);
          
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
        Schema::dropIfExists('pempresas');
    }
}
