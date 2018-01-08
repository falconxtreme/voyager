<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNetflowSubredTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('netflow_subred', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idSubred')->unsigned()->nullable();
            $table->string('ipOrigen');
            $table->string('ipDestino');
            $table->string('puertoOrigen');
            $table->string('puertoDestino');
            $table->string('protocolo');
            $table->string('cantPqts');
            $table->string('cantBytes');
            $table->string('flagsTCP');
            $table->string('inicioSesion');
            $table->string('finSesion');
            $table->string('duracion');
            $table->string('url');
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
        Schema::dropIfExists('netflow_subred');
    }
}
