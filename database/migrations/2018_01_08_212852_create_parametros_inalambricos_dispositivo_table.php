<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParametrosInalambricosDispositivoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parametros_inalambricos_dispositivo', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idDispositivo')->unsigned()->nullable();
            $table->string('potenciaTx');
            $table->string('potenciaRx');
            $table->string('modulacion');
            $table->string('atenuacion');
            $table->string('tasaTransmision');
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
        Schema::dropIfExists('parametros_inalambricos_dispositivo');
    }
}
