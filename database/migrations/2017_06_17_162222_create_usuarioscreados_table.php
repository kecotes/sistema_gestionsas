<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsuarioscreadosTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarioscreados', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idpersonas')->unsigned();
            $table->integer('idusers')->unsigned();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('idpersonas')->references('id')->on('personas');
            $table->foreign('idusers')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('usuarioscreados');
    }
}
