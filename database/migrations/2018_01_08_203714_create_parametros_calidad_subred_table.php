<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParametrosCalidadSubredTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parametros_calidad_subred', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idSubred')->unsigned()->nullable();
            $table->string('latencia');
            $table->string('jitter');
            $table->string('packetLoss');
            $table->string('velocidadSubida');
            $table->string('velocidadBajada');
            $table->string('porcentajeCongestion');
            $table->string('simultaneidad');
            $table->timestamps();

            $table->foreign('idSubred')->references('id')->on('subred_beneficiario');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('parametros_calidad_subred');
    }
}
