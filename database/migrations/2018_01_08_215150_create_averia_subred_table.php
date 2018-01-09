<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAveriaSubredTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('averia_subred', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idSubred')->unsigned()->nullable();
            $table->string('idReporte');
            $table->string('fechaAveria');
            $table->string('descripcion');
            $table->string('reportador');
            $table->string('fechaSolucion');
            $table->string('medioReporteAveria');
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
        Schema::dropIfExists('averia_subred');
    }
}
