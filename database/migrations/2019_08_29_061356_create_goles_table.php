<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('goles', function (Blueprint $table) {
            $table->bigIncrements('id');
						$table->unsignedBigInteger('id_calendario');
						$table->integer('id_equipo');
						$table->integer('id_jugador');
						$table->integer('goles');
						$table->foreign('id_calendario')->references('id')->on('calendario_juegos')->onDelete('cascade');
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
        Schema::dropIfExists('goles');
    }
}
