<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateActividadeseguimientosTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actividadeseguimientos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombreinforme');
            $table->integer('idactividadescontratos')->unsigned();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('idactividadescontratos')->references('id')->on('actividadescontratos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('actividadeseguimientos');
    }
}
