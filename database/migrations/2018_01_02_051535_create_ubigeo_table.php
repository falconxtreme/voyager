<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUbigeoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ubigeo', function (Blueprint $table) {
            $table->string('id',6);
            $table->timestamps();

            $table->string('idDepartamento');
            $table->string('idProvincia');
            $table->string('idDistrito');
            $table->string('departamento');
            $table->string('provincia');
            $table->string('distrito');

            $table->primary('id');
            //$table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        /*
        Schema::table('messages', function (Blueprint $table){
            $table->dropForeign('messages_user_id_foreign');
            $table->dropColumn('user_id');
        });
        */
        Schema::dropIfExists('ubigeo');
    }
}
