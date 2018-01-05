<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDispositivoPlazaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dispositivo_plaza', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idPlaza')->unsigned();
            $table->string('dispositivoPlaza', 30)->unique();
            $table->timestamps();

            $table->foreign('idPlaza')->references('id')->on('plaza');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dispositivo_plaza');
    }
}
