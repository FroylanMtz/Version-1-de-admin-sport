<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
						$table->string('calle')->default('Sin definir');
						$table->string('colonia')->default('Sin definir');
						$table->string('ciudad')->default('Sin definir');
						$table->string('estado')->default('Sin definir');
						$table->string('pais')->default('Sin definir');
						$table->string('dia_nacimiento')->default('Sin definir');
						$table->string('mes_nacimiento')->default('Sin definir');
						$table->string('año_nacimiento')->default('Sin definir');
						$table->string('sexo')->default('Sin definir');
						$table->string('curp')->default('Sin definir');
						$table->string('nacionalidad')->default('Mexicana');
						$table->string('foto')->default('perfil.jpg');
						$table->string('tipo_usuario');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
