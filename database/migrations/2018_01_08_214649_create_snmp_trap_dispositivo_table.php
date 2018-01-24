<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSnmpTrapDispositivoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('snmp_trap_dispositivo', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idDispositivo')->unsigned()->nullable();
            $table->string('tipoNMS', 20);
            $table->string('fechaInicio', 30);
            $table->string('fechaFin', 30);
            $table->string('elementoAfectado');
            $table->string('descripcion');
            $table->string('estado');
            $table->string('severidad');
            $table->string('nroReparacion');
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
        Schema::dropIfExists('snmp_trap_dispositivo');
    }
}
