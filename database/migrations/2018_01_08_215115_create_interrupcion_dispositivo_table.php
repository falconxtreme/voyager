<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInterrupcionDispositivoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('interrupcion_dispositivo', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idDispositivo')->unsigned()->nullable();
            $table->string('tipoInterrupcion');
            $table->string('fechaInterrupcion');
            $table->string('fechaSolucion');
            $table->string('terminoDistancia');
            $table->string('problema');
            $table->string('nroConstanciaReparacion');
            $table->string('situacionActual');
            $table->string('motivoExclusion');
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
        Schema::dropIfExists('interrupcion_dispositivo');
    }
}
