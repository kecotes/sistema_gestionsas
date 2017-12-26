<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateNumunionesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('numuniones', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idpjuridicas')->unsigned();
            $table->integer('idunionestemporales')->unsigned();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('idpjuridicas')->references('id')->on('pjuridicas');
            $table->foreign('idunionestemporales')->references('id')->on('unionestemporales');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('numuniones');
    }
}
