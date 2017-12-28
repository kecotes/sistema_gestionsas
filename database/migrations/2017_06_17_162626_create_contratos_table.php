<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateContratosTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contratos', function (Blueprint $table) {
            $table->increments('id');
            $table->longtext('objetocontrato');
            $table->string('nocontrato');
            $table->string('ncontrato');
            $table->string('apodocontrato');
            $table->string('valorcontratol');
            $table->decimal('valorcontrato');
            $table->string('valoranticipol');
            $table->decimal('valoranticipo');
            $table->decimal('porcentajeanticipo');
            $table->string('formapago');
            $table->decimal('valoradicional');
            $table->decimal('valoranticipoadicional');
            $table->string('plazoinicial');
            $table->date('fechainiciacion');
            $table->date('fechafinalizacion');
            $table->string('estado');
            $table->integer('idpersonas')->unsigned();
            $table->integer('identidadescontratantes')->unsigned();
            $table->integer('idtiposcontratos')->unsigned();
            $table->string('idcontratistas');
            $table->string('idrepresentante');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('idpersonas')->references('id')->on('personas');
            $table->foreign('identidadescontratantes')->references('id')->on('entidadescontratantes');
            $table->foreign('idtiposcontratos')->references('id')->on('tiposcontratos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('contratos');
    }
}
