<?php

use Illuminate\Database\Seeder;
use App\User;
use App\jugador;
use App\Coordinador;
use Illuminate\Support\Facades\DB;

class UsersTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
				DB::table('users')->delete();
        User::create([
            'name'    => 'Juan Diego',
            'email'    => '1530334@upv.edu.mx',
            'password'   =>  Hash::make('password'),
						'tipo_usuario'   =>  'admin',
            'remember_token' =>  str_random(10),
        ]);
      
       User::create([
            'name'    => 'Cristian Echartea',
            'email'    => '1530229@upv.edu.mx',
            'password'   =>  Hash::make('password'),
						'tipo_usuario'   =>  'admin',
            'remember_token' =>  str_random(10),
        ]);
      User::create([
            'name'    => 'Luis Angel',
            'email'    => '1530277@upv.edu.mx',
            'password'   =>  Hash::make('password'),
						'tipo_usuario'   =>  'admin',
            'remember_token' =>  str_random(10),
        ]);
      User::create([
            'name'    => 'Froylan Wbario',
            'email'    => '1530006@upv.edu.mx',
            'password'   =>  Hash::make('password'),
						'tipo_usuario'   =>  'admin',
            'remember_token' =>  str_random(10),
        ]);
      User::create([
            'name'    => 'Leonardo Alonso',
            'email'    => '1530438@upv.edu.mx',
            'password'   =>  Hash::make('password'),
						'tipo_usuario'   =>  'admin',
            'remember_token' =>  str_random(10),
        ]);

		}
}
