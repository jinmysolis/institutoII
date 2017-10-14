<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFormacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formacions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->string('centro_educativo_primaria');
            $table->enum('estado_primaria', ['cursando','completado']);
            $table->string('ano_inicio_primaria');
            $table->string('ano_fin_primaria');
            $table->string('centro_educativo_secundaria');
            $table->enum('estado_secundaria', ['cursando','completado']);
            $table->string('ano_inicio_secundaria');
            $table->string('ano_fin_secundaria');
            $table->string('centro_educativo_universidad');
            $table->enum('estado_universidad', ['cursando','completado']);
            $table->string('ano_inicio_universidad');
            $table->string('ano_fin_universidad');
            $table->string('centro_educativo_posgrado');
            $table->enum('estado_posgrado', ['cursando','completado']);
            $table->string('ano_inicio_posgrado');
            $table->string('ano_fin_posgrado');
            
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
        Schema::dropIfExists('formacions');
    }
}
