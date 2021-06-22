<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTipojugadorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipojugador', function (Blueprint $table) {
            $table->integer('id_user_tipojugador')->unsigned();
            $table->foreign('id_user_tipojugador')->references('id_user')->on('users')->onDelete('cascade');
            $table->integer('edad');
            $table->string('genero');
            $table->string('frecu_juego');
            $table->string('posicion');
            $table->string('pierna_habil');
            $table->string('caracteristicas');
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
        Schema::dropIfExists('tipojugador');
    }
}
