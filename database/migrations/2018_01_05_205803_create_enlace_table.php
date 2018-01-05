<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEnlaceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enlace', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idDispositivoInicio')->unsigned()->nullable();
            $table->integer('idDispositivoFin')->unsigned()->nullable();
            $table->integer('idSubredBeneficiario')->unsigned()->nullable();
            $table->string('descripcion');
            $table->timestamps();

            $table->foreign('idDispositivoInicio')->references('id')->on('dispositivo');
            $table->foreign('idDispositivoFin')->references('id')->on('dispositivo');
            $table->foreign('idSubredBeneficiario')->references('id')->on('subred_beneficiario');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('enlace');
    }
}
