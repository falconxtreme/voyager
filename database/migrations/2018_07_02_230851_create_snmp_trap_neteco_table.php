<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSnmpTrapNetecoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('snmp_trap_neteco', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ipEquipo', 30);
            $table->dateTime('fechaProblema');
            $table->dateTime('fechaClareo');
            $table->string('elementoAfectado',50);
            $table->string('status',50);
            $table->string('severidad',50);
            $table->tinyInteger('estado');
            $table->string('alarmSource',80);
            $table->string('locationInfo', 400);
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
        Schema::dropIfExists('snmp_trap_neteco');
    }
}
