<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInformesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('informes', function (Blueprint $table) {
            $table->bigIncrements('id');
          	$table->integer('id_equipo');
            $table->integer('id_torneo');
            $table->integer('id_jugador');
            $table->unsignedBigInteger('id_calendario');
            $table->unsignedBigInteger('id_causal');
            $table->string('tipo');
            $table->string('causal');
            $table->string('fecha');
						$table->string('descripcion');
						$table->foreign('id_calendario')->references('id')->on('calendario_juegos')->onDelete('cascade');
						$table->foreign('id_causal')->references('id')->on('causales')->onDelete('cascade');
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
        Schema::dropIfExists('informes');
    }
}
