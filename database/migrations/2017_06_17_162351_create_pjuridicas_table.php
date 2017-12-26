<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePjuridicasTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pjuridicas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('apellido');
            $table->string('ciudad');
            $table->string('departamento');
            $table->string('tipopjuridica');
            $table->integer('idpersonas')->unsigned();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('idpersonas')->references('id')->on('personas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('pjuridicas');
    }
}
