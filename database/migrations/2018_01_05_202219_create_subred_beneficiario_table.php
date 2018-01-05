<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubredBeneficiarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subred_beneficiario', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idBeneficiario')->unsigned();
            $table->string('subred',30)->unique();
            $table->string('tipo');
            $table->string('descripcion');
            $table->timestamps();

            $table->foreign('idBeneficiario')->references('id')->on('beneficiario');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subred_beneficiario');
    }
}
