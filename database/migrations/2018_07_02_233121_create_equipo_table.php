<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEquipoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipo', function (Blueprint $table) {
            $table->increments('id');

            $table->string('ipEquipo', 30);
            $table->string('marca', 30);
            $table->string('modelo', 30);
            $table->string('nodoAsociado', 50);
            $table->string('distrito', 50);
            $table->string('provincia', 50);
            $table->string('departamento', 50);

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
        Schema::dropIfExists('equipo');
    }
}
