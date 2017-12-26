<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateNovedadesfechasTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('novedadesfechas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('plazoinicial');
            $table->dateTime('fechainiciacion');
            $table->dateTime('fechafinalizacion');
            $table->dateTime('fechasuspension');
            $table->dateTime('fechareinicio');
            $table->string('adicciontiempo');
            $table->dateTime('fechafinalizacionadiccion');
            $table->string('agregar');
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
        Schema::drop('novedadesfechas');
    }
}
