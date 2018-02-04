<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePacientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pacientes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cedula');
            $table->string('nombre1');
            $table->string('nombre2')->nulleable($value = true);
            $table->string('apellido1');
            $table->string('apellido2')->nulleable($value = true);
            $table->string('telefono')->nulleable($value = true);
            $table->string('celular')->nulleable($value = true);
            $table->string('direccion')->nulleable($value = true);
            $table->integer('id_sexo')->unsigned();
            $table->foreign('id_sexo')->references('id')->on('sexos')->onDelete('cascade');
            $table->integer('id_eps')->unsigned();
            $table->foreign('id_eps')->references('id')->on('epss')->onDelete('cascade');
            $table->integer('id_estadocivil')->unsigned();
            $table->foreign('id_estadocivil')->references('id')->on('estadosciviles')->onDelete('cascade');
            $table->integer('id_ocupacion')->unsigned();
            $table->foreign('id_ocupacion')->references('id')->on('ocupaciones')->onDelete('cascade');
            $table->integer('id_parentesco')->unsigned();
            $table->foreign('id_parentesco')->references('id')->on('parentescos')->onDelete('cascade');  
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
        Schema::dropIfExists('pacientes');
    }
}
