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
             $table->string('usuario');
             $table->string('zona_horaria');
             $table->string('primer_nombre');
             $table->string('segundo_nombre');
             $table->string('apellidos');
             $table->string('profesion');
             $table->string('idioma');
             $table->string('nacionalidad');
             $table->enum('estado_civil', ['casado','union','viudo','separado']);
             $table->string('a_que_te_dedicas');
             $table->string('cedula_ciudadania');
             $table->string('licencia_conducir')->nullable();
             $table->string('pasaporte')->nullable();
             $table->string('seguro_social')->nullable();
             $table->string('fecha_nacimiento');
             $table->string('lugar_nacimiento');
             $table->string('pais_residencia');
             $table->string('ciudad');
             $table->text('biografia');
             $table->enum('certificados', ['sin_estudios','cursos','primaria','secundaria','tecnico','diplomado','pregrado','especializacion','master','doctorado']);
             $table->string('nombre_emergencia');
             $table->string('prefijo_movil_emergencia');
             $table->string('telefono_movil_emergencia');
             $table->string('ciudad_emergencia');
             $table->string('email_emergencia');
             $table->string('direccion_postal_alumno');
             $table->string('ciudad_alumno');
             $table->string('codigo_postal_alumno');
             $table->string('pais_alumno');
             $table->string('estado_alumno');
             $table->string('telefono_alumno');
             $table->string('movil_alumno');
             $table->string('nombre_empresa');
             $table->string('cargo');
             $table->string('periodo');
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
