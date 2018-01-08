<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParametrosCalidadDispositivoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parametros_calidad_dispositivo', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idDispositivo')->unsigned()->nullable();
            $table->string('latencia');
            $table->string('jitter');
            $table->string('packetLoss');
            $table->string('delay');
            $table->string('BER');
            $table->string('velocidadSubida');
            $table->string('velocidadBajada');
            $table->string('porcentajeCongestion');
            $table->string('simultaneidad');
            $table->timestamps();

            $table->foreign('idDispositivo')->references('id')->on('dispositivo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('parametros_calidad_dispositivo');
    }
}
