<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateArchivosactividadescontratosTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('archivosactividadescontratos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('archivo');
            $table->string('titulo');
            $table->string('descripcion');
            $table->integer('idactividadescontratos')->unsigned();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('idactividadescontratos')->references('id')->on('actividadescontratos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('archivosactividadescontratos');
    }
}
