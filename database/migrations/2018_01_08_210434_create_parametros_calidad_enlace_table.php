<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParametrosCalidadEnlaceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parametros_calidad_enlace', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idEnlace')->unsigned()->nullable();
            $table->string('latencia');
            $table->string('jitter');
            $table->string('packetLoss');
            $table->string('velocidadSubida');
            $table->string('velocidadBajada');
            $table->timestamps();

            $table->foreign('idEnlace')->references('id')->on('enlace');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('parametros_calidad_enlace');
    }
}
