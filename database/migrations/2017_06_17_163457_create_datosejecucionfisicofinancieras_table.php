<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDatosejecucionfisicofinancierasTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datosejecucionfisicofinancieras', function (Blueprint $table) {
            $table->increments('id');
            $table->double('item');
            $table->string('tema');
            $table->string('descripcion');
            $table->string('ejecucionacumitem');
            $table->string('estado');
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
        Schema::drop('datosejecucionfisicofinancieras');
    }
}
