<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEquiposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipos', function (Blueprint $table) {
            $table->bigIncrements('id');
						$table->unsignedBigInteger('id_torneo');
						$table->unsignedBigInteger('id_persona');
						$table->string('nombre');
						$table->integer('juegos_jugados')->default(0);
						$table->integer('goles_favor')->default(0);
						$table->integer('goles_contra')->default(0);
						$table->integer('juegos_ganados')->default(0);
						$table->integer('juegos_perdidos')->default(0);
						$table->integer('juegos_empatados')->default(0);
						$table->string('foto')->default('equipo.jpg');;
						$table->foreign('id_torneo')->references('id')->on('torneos')->onDelete('cascade');
						$table->foreign('id_persona')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('equipos');
    }
}
