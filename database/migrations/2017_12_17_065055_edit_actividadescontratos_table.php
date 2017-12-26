<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class EditActividadescontratosTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('actividadescontratos', function (Blueprint $table) {
            $table->dropColumn('titulo');
            $table->dropColumn('contenido');
            $table->dropColumn('estado');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('actividadescontratos');
    }
}
