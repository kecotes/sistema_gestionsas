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
            $table->integer('iduser');
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
