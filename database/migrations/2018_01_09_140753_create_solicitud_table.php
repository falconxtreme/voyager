<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSolicitudTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solicitud', function (Blueprint $table) {
            $table->increments('id');
            $table->string('idBeneficiario');
            $table->string('fechaSolicitud');
            $table->string('codigoAtencion');
            $table->string('servicioSolicitado');
            $table->string('personaSolicitante');
            $table->string('tipoPersona');
            $table->string('nroTelefonoSolicitante');
            $table->string('nroCelularSolicitante');
            $table->string('emailSolicitante');
            $table->string('centroAtencion');
            $table->string('provincia');
            $table->string('distrito');
            $table->string('localidad');
            $table->string('fechaInstalacion');
            $table->string('status');
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
        Schema::dropIfExists('solicitud');
    }
}
