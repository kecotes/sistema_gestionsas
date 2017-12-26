<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEstadospolizasTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estadospolizas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('amparo');
            $table->date('vigenciadesde');
            $table->date('vigenciahasta');
            $table->string('valorasegurado');
            $table->string('estadopoliza');
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
        Schema::drop('estadospolizas');
    }
}
