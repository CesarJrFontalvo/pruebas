<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservas', function (Blueprint $table) {
            $table->integer('id_reserva')->unsigned();
            $table->primary('id_reserva');
            $table->integer('id_user_reserva')->unsigned();
            $table->foreign('id_user_reserva')->references('id_user')->on('users')->onDelete('cascade');
            $table->integer('id_cancha_reserva')->unsigned();
            $table->foreign('id_cancha_reserva')->references('id_cancha')->on('canchas')->onDelete('cascade');
            $table->date('fecha');
            $table->dateTime('hora', $precision = 0);
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
        Schema::dropIfExists('reservas');
    }
}
