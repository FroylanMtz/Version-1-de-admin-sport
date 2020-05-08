<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTorneosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('torneos', function (Blueprint $table) {
            $table->bigIncrements('id');
						$table->unsignedBigInteger('id_coordinador');
						$table->string('estatus')->default('Habilitado');
						$table->string('nombre');
						$table->string('categoria');
						$table->integer('num_equipos');
						$table->integer('num_vueltas');
						$table->string('calle');
						$table->string('colonia');
						$table->string('ciudad');
						$table->string('estado');
						$table->string('rama');
						$table->string('descripcion');
						$table->float('pago_inscripcion');
						$table->float('pago_arbitraje');
						$table->string('foto')->default('torneoPerfil.jpg');
						$table->foreign('id_coordinador')->references('id')->on('coordinadores')->onDelete('cascade');
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
        Schema::dropIfExists('torneos');
    }
}
