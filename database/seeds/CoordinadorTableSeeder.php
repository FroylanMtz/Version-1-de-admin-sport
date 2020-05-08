<?php

use Illuminate\Database\Seeder;
use App\User;
use App\jugador;
use App\Coordinador;
use Illuminate\Support\Facades\DB;

class CoordinadorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
				DB::table('coordinadores')->delete();
				$luis= 'Luis Angel';
				$froy= 'Froylan Wbario';
				$leo=	'Leonardo Alonso';
				$diego= 'Juan Diego';
				$cris = 'Cristian Echartea';
				#$id= DB::select('SELECT id FROM users WHERE name = ?', [$var]);
				$users = DB::table('users')->get();
				$id_cris=$id_luis=$id_diego=$id_froy=$id_leo=0;
				foreach ($users as $user)
				{
						if($user->name==$cris){
							$id_cris= $user->id;
						}
						if($user->name==$luis){
							$id_luis= $user->id;
						}		
						if($user->name==$froy){
							$id_froy= $user->id;
						}			
						if($user->name==$diego){
							$id_diego= $user->id;
						}
						if($user->name==$leo){
							$id_leo= $user->id;
						}								
				}
        DB::table('coordinadores')->insert([
            'id_persona' => $id_leo,
        ]);
        DB::table('coordinadores')->insert([
            'id_persona' => $id_froy,
        ]);
        DB::table('coordinadores')->insert([
            'id_persona' => $id_luis,
        ]);
        DB::table('coordinadores')->insert([
            'id_persona' => $id_diego,
        ]);
        DB::table('coordinadores')->insert([
            'id_persona' => $id_cris,
        ]);			
        //
    }
}
