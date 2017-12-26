<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateArchivospolizasTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('archivospolizas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('archivo');
            $table->string('titulo');
            $table->string('descripcion');
            $table->integer('idpolizas')->unsigned();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('idpolizas')->references('id')->on('polizas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('archivospolizas');
    }
}
