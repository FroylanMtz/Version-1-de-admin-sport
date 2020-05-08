<?php

namespace App\Http\Controllers;

use App\CalendarioJuego;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Torneo;

class calendarioJuegoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   public function index($id)
	{
		echo '<h1> id {{ '. $id .'}} </h1>';
		$equipos_tabla = DB::table('equipos')->where('id_torneo', $id)->get();
		$torneo = Torneo::find($id);
		 
		$jornadas = [];
		$N = count($equipos_tabla); //Total de equipos para este caso
		$equipos = []; 				//Arreglo para el nombre de los equipos
		
		 $numero_vueltas = $torneo->num_vueltas;
		 
		//Inicializa el nombre de los equipos
		for($i=0; $i < $N; $i++)
		{
			array_push($equipos, $equipos_tabla[$i]->id);
		}
		
		if($N % 2 != 0)
		{
			$PF = $N; //Número total de fechas 
			$NPxF = ($N -1)/ 2; //Número de partidos por fecha
			$TPT = $PF * $NPxF; //Cantidad Total de Partidos en el Torneo

			for($i = 0; $i < $PF ; $i ++)
			{
				$jornada_n = [];//Este arreglo se inicializará en cada iteración con los partidos por cada jornada
				//Primero se inicializa como una matriz de [$NPxF, 2]
				for($k=0;$k<$NPxF+1;$k++)
					$jornada_n[$k] = [0,0];

				$flag = 0; //Bandera ara saber el sentido de la sobre escritura de la matríz (ascendente/descendente)

				for($j=$i,$count = 1;(true);){
					
					if($j == $i)
					{
						$jornada_n[0] = ['descanso', $j];
						$j=$i-1;
					}
					
					if($j==-1)
						$j = $N-1;

					if($flag==0){
						$jornada_n[$count][0]=$j;
						$count++;
					}else{
						$jornada_n[$count][1]=$j;
						$count--;
					}
					$j--;

					if($j==-1)
						$j = $N-1;

					if($count == ($NPxF)){
						$flag = 1;
						$jornada_n[$count][0]=$j;
						$j--;
						$jornada_n[$count][1]=$j;
					}
					
					if($count == 0 && $flag == 1)
						break;
				}
				
				$jornadas[$i]=$jornada_n;//Cada iteración se inicializa vacío el arreglo jornada_n asi que se guardan los datos en otro para no perder la información
			}

		}else{

			$PF = $N -1; //Número total de fechas 
			$NPxF = $N / 2; //Número de partidos por fecha
			$TPT = $PF * $NPxF; //Cantidad Total de Partidos en el Torneo
			
			

			for($i = 0,$i_partido = 0; $i < $PF ; $i ++)
			{
					$jornada_n = [];//Este arreglo se inicializará en cada iteración con los partidos por cada jornada
					//Primero se inicializa como una matriz de [$NPxF, 2]
					for($k=0;$k<$NPxF;$k++)
							$jornada_n[$k] = [0,0];

					$flag = 0; //Bandera ara saber el sentido de la sobre escritura de la matríz (ascendente/descendente)

					for($j=$i+1,$count = 1;(true);){
							if($j == $i+1){
									$jornada_n[0] = [0, $j];
									$j=$i;
							}
							if($j==0)
									$j = $PF;

							if($flag==0){
									$jornada_n[$count][0]=$j;
									$count++;
							}else{
									$jornada_n[$count][1]=$j;
									$count--;
							}
							$j--;

							if($j==0)
									$j = $PF;

							if($count == ($NPxF -1)){
									$flag = 1;
									$jornada_n[$count][0]=$j;
									$j--;
									$jornada_n[$count][1]=$j;
							}
							if($count == 0 && $flag == 1)
									break;
					}

					$jornadas[$i]=$jornada_n;//Cada iteración se inicializa vacío el arreglo jornada_n asi que se guardan los datos en otro para no perder la información
			}
		}
	   
		 
		 
	   $i = 1;
		 
		 for($h = 0; $h < $numero_vueltas; $h++)
		 {
			 foreach($jornadas as $jornada_n) {

				 $j=0;
				foreach($jornada_n as $jornada)
				{
					$juego = new CalendarioJuego;
					$juego->id_torneo = $id;
					$juego->num_jornada = $i;
					$juego->fecha = date('Y-m-d');
					$juego->hora = date('H:i:s');

					if($N % 2 != 0){

						if( $j == 0 )
						{

							$juego->visitante = $equipos[$jornada[1]];
						}else{
							
							if($h % 2 == 0)
							{
								$juego->local = $equipos[$jornada[0]];
								$juego->visitante = $equipos[$jornada[1]];
							}else{
								$juego->local = $equipos[$jornada[1]]; 
								$juego->visitante = $equipos[$jornada[0]];
							}
							
						}

					}else{
						
						if($h % 2 == 0)
							{
								$juego->local = $equipos[$jornada[0]];
								$juego->visitante = $equipos[$jornada[1]];
							}else{
								$juego->local = $equipos[$jornada[1]]; 
								$juego->visitante = $equipos[$jornada[0]];
							}
						
						/*$juego->local = $equipos[$jornada[0]];
						$juego->visitante = $equipos[$jornada[1]];*/

					}

					$juego->save();

					$j++;
				}
				$i++;
			}
		}
		
		 $torneo->estatus = 'Jugandose';
		 $torneo->save();
	   
	   return redirect('/');
	}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CalendarioJuego  $calendarioJuego
     * @return \Illuminate\Http\Response
     */
    public function show(CalendarioJuego $calendarioJuego)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CalendarioJuego  $calendarioJuego
     * @return \Illuminate\Http\Response
     */
    public function edit(CalendarioJuego $calendarioJuego)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CalendarioJuego  $calendarioJuego
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CalendarioJuego $calendarioJuego)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CalendarioJuego  $calendarioJuego
     * @return \Illuminate\Http\Response
     */
    public function destroy(CalendarioJuego $calendarioJuego)
    {
        //
    }
}
