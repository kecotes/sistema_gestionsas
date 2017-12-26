<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateArchivoscontratosTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('archivoscontratos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('archivo');
            $table->string('titulo');
            $table->string('descripcion');
            $table->string('tipo');
            $table->integer('idcontratos')->unsigned();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('idcontratos')->references('id')->on('contratos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('archivoscontratos');
    }
}
