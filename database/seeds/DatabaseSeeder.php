<?php

use Illuminate\Database\Seeder;
use App\User;
use App\jugador;
use App\Coordinador;
use Illuminate\Support\Facades\DB;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
       Eloquent::unguard();
        $this->call(UsersTablesSeeder::class);
				$this->call(CoordinadorTableSeeder::class);
						

    }
}
