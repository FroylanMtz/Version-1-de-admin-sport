<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJugadorEquiposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jugador_equipos', function (Blueprint $table) {
            $table->bigIncrements('id');
						$table->unsignedBigInteger('id_equipo');
						$table->unsignedBigInteger('id_jugador');
						$table->foreign('id_equipo')->references('id')->on('equipos')->onDelete('cascade');
						$table->foreign('id_jugador')->references('id')->on('jugadores')->onDelete('cascade');
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
        Schema::dropIfExists('jugador_equipos');
    }
}
