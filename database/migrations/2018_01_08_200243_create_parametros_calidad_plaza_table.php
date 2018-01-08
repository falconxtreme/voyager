<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParametrosCalidadPlazaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parametros_calidad_plaza', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idDispositivoPlaza')->unsigned()->nullable();
            $table->string('latencia');
            $table->string('jitter');
            $table->string('packetLoss');
            $table->string('descripcion');
            $table->timestamps();

            $table->foreign('idDispositivoPlaza')->references('id')->on('dispositivo_plaza');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('parametros_calidad_plaza');
    }
}
