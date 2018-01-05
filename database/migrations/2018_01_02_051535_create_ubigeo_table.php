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
            $table->increments('id');
            $table->string('idDepartamento',2);
            $table->string('idProvincia',4);
            $table->string('idDistrito',6)->unique();
            $table->string('departamento');
            $table->string('provincia');
            $table->string('distrito');
            $table->timestamps();

            // $table->string('distrito')->nullable(); // lo hace opcional
            //$table->string('idDistrito',6)->unique();// agrega un constraint
            //$table->primary('id');
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
