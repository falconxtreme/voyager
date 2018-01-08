<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParametrosEthernetDispositivoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parametros_ethernet_dispositivo', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idDispositivo')->unsigned()->nullable();
            $table->string('conectividadEnlace');
            $table->string('tasaTransmision');
            $table->string('packetLoss');
            $table->string('latenciaTramos');
            $table->string('jitterTramos');
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
        Schema::dropIfExists('parametros_ethernet_dispositivo');
    }
}
