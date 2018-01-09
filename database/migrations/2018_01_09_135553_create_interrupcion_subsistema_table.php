<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInterrupcionSubsistemaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('interrupcion_subsistema', function (Blueprint $table) {
            $table->increments('id');
            $table->string('idSubred');
            $table->string('tipoInterrupcion');
            $table->string('fechaInterrupcion');
            $table->string('fechaSolucion');
            $table->string('terminoDistancia');
            $table->string('problema');
            $table->string('nroConstanciaReparacion');
            $table->string('situacionActual');
            $table->string('motivoExclusion');
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
        Schema::dropIfExists('interrupcion_subsistema');
    }
}
