<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNodoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nodo', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idUbigeo')->unsigned();
            $table->string('tipoNodo');
            $table->string('descripcion');
            $table->timestamps();

            $table->foreign('idUbigeo')->references('id')->on('ubigeo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nodo');
    }
}
