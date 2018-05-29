<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstudiantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estudiantes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cursos_id')->unsigned();
            $table->integer('ensenanzas_id')->unsigned();
            $table->string('codigo_barra',8);
            $table->string('nombres',150); 
            $table->string('apellidos',200);
            $table->string('rut',9)->nullable();
            $table->string('entrada_especial',350)->nullable();
            $table->string('permisos_entrada_id')->nullable();
            $table->string('salida_especial',350)->nullable();   
            $table->string('permisos_salida_id')->nullable();
            $table->string('permisos_almuerzo_id')->nullable();
            $table->string('permisos_utp_id')->nullable();
            $table->timestamps();
            $table->foreign('cursos_id')->references('id')->on('cursos');
            $table->foreign('ensenanzas_id')->references('id')->on('ensenanzas');
     
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('estudiantes');
    }
}
