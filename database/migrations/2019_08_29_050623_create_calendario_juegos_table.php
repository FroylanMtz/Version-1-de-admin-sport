<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCalendarioJuegosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calendario_juegos', function (Blueprint $table) {
            $table->bigIncrements('id');
						$table->unsignedBigInteger('id_torneo');
						$table->integer('num_jornada');
					
						$table->unsignedBigInteger('local')->nullable();;
						$table->unsignedBigInteger('visitante')->nullable();;
						$table->date('fecha');
						$table->time('hora');						
						
						$table->integer('resultado_1')->default(0);
						$table->integer('resultado_2')->default(0);
						$table->string('estatus')->default('Pendiente');					
						$table->foreign('id_torneo')->references('id')->on('torneos')->onDelete('cascade');
						$table->foreign('local')->references('id')->on('equipos')->onDelete('cascade');
						$table->foreign('visitante')->references('id')->on('equipos')->onDelete('cascade');
					
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
        Schema::dropIfExists('calendario_juegos');
    }
}
