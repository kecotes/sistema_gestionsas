<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSubcontratosTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subcontratos', function (Blueprint $table) {
            $table->increments('id');
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
        Schema::drop('subcontratos');
    }
}
