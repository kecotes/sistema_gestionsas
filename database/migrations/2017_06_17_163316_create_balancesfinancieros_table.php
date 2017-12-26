<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBalancesfinancierosTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('balancesfinancieros', function (Blueprint $table) {
            $table->increments('id');
            $table->decimal('actaparcial');
            $table->decimal('pendientepagar');
            $table->string('estado');
            $table->integer('idcontratos')->unsigned();
            $table->integer('idtipoactividades')->unsigned();
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
        Schema::drop('balancesfinancieros');
    }
}
