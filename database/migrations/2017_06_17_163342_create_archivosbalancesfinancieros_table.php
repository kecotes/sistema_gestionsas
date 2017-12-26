<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateArchivosbalancesfinancierosTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('archivosbalancesfinancieros', function (Blueprint $table) {
            $table->increments('id');
            $table->string('archivo');
            $table->string('titulo');
            $table->string('descripcion');
            $table->integer('idbalancesfinancieros')->unsigned();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('idbalancesfinancieros')->references('id')->on('balancesfinancieros');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('archivosbalancesfinancieros');
    }
}
