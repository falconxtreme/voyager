<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKpisEquipoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kpis_equipo', function (Blueprint $table) {
            $table->increments('id');
            $table->string('equipo', 30);
            $table->string('nodo',60);
            $table->string('ipEquipo', 30);

            $table->string('traficoInterfaces',500);
            $table->string('potenciaOpticas',500);
            $table->string('usoCpu',500);
            $table->string('usoMemoria',500);
            $table->string('jitterLatencia',500);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kpis_equipo');
    }
}
