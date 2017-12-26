<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateActividadescontratosTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actividadescontratos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo');
            $table->string('contenido');
            $table->string('estado');
            $table->integer('idcontratos')->unsigned();
            $table->integer('idtipoactividades')->unsigned();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('idcontratos')->references('id')->on('contratos');
            $table->foreign('idtipoactividades')->references('id')->on('tipoactividades');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('actividadescontratos');
    }
}
