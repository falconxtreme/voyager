<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDispositivoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dispositivo', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idNodo')->unsigned();
            $table->string('dispositivo',30)->unique();
            $table->string('tipoDispositivo');
            $table->string('descripcion');
            $table->timestamps();

            $table->foreign('idNodo')->references('id')->on('nodo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dispositivo');
    }
}
