<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsuarioscontratadosTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarioscontratados', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idpersonas')->unsigned();
            $table->integer('idcontratos')->unsigned();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('idpersonas')->references('id')->on('personas');
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
        Schema::drop('usuarioscontratados');
    }
}
