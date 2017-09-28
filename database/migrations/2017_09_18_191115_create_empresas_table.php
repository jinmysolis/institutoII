<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpresasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empresas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->string('cover');
             $table->string('extension')->nullable();
             $table->string('informacion_empresa');
             $table->string('numero_tributario');
             $table->string('sitio_web')->nullable();
             $table->string('lema');
             $table->string('objeto_social');
             $table->string('sector_empresarial');
             $table->string('Direccion_postal');
             $table->string('ciudad2');
             $table->string('estado2');
             $table->string('codigo_postal');
             $table->string('pais2');
             $table->string('telefono');
             $table->string('nombre_contacto');
             $table->string('cargo');
             $table->enum('autorizacion', ['si','no']); 
             $table->enum('socio', ['si','no']); 
             $table->enum('representante_legal', ['si','no']); 
             $table->enum('tipo_empresa', ['empleador','agencia','temporal']); 
             
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
        Schema::dropIfExists('empresas');
    }
}
