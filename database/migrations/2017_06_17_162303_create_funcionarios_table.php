<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFuncionariosTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('funcionarios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('apellido');
            $table->string('tipofuncionario');
            $table->string('usuario');
            $table->string('contrasena');
            $table->integer('idpnaturales')->unsigned();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('idpnaturales')->references('id')->on('pnaturales');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('funcionarios');
    }
}
