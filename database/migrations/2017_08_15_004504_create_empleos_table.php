<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpleosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleos', function (Blueprint $table) {
             $table->increments('id');
             $table->integer('user_id')->unsigned();
             $table->string('profesion');
             $table->string('segundo_nombre');
             $table->string('zona_horaria');
             $table->string('idiomas');
             $table->string('nacionalidad');
             $table->enum('estado_civil', ['casado','viudo','soltero','separado']);
             $table->string('tipo_documento');
             $table->string('cedula_ciudadania');
              $table->enum('licencia', ['motos','vehiculos','camiones']);
             $table->string('licencia_conducir')->nullable();
             $table->string('fecha_nacimiento');
             $table->string('lugar_nacimiento');
             $table->string('pais_residencia');
             $table->string('ciudad');
             $table->text('biografia');
//           $table->enum('certificados', ['sin_estudios','cursos','primaria','secundaria','tecnico','diplomado','pregrado','especializacion','master','doctorado']);
             $table->string('codigo_telefono');
             $table->string('telefono');
             $table->string('salario_minimo');
             $table->string('rif_nit_iss');
             $table->string('genero');
            
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
        Schema::dropIfExists('empleos');
    }
}
