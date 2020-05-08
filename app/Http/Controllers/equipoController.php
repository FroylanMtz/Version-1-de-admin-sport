<?php

namespace App\Http\Controllers;

use App\Equipo;
use App\Torneo;
use App\User;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class equipoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
		#form creear equipos desde la vista del coordinador
		public function showCreateEquipo()
		{
			//$torneos = Torneo::all();
			$id = Auth::user()->id;
			$cor = DB::table('coordinadores')->where('id_persona', $id)->first();
			$torneos = Torneo::where('id_coordinador', $cor->id)->get();
			return view('coordinador/crearEquipo',array('torneos'=>$torneos));
		}
	  //form para crear equipos desde la vista del torneo
		public function showCreateEquipoTorneo($id_torneo)
		{
			$id = Auth::user()->id;
			$cor = DB::table('coordinadores')->where('id_persona', $id)->first();
			$torneos = Torneo::where('id_coordinador', $cor->id)->get();
			return view('coordinador/crearEquipo',array('torneos'=>$torneos,'id'=>$id_torneo));
		}
	
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
			$equipo = new Equipo;
			$equipo->nombre= request('nombre');
			$equipo->id_torneo= request('torneo');
			
			//////////////////////////
			
			if($request->hasfile('foto_equipo')) 
			{ 
				$file = $request->file('foto_equipo');
				$extension = $file->getClientOriginalExtension(); // getting image extension
				$filename = time().'.'.$extension;
				$file->move('equipos_imagenes', $filename);
				$equipo->foto = $filename;
			}
			
			///////////////////////////
			
			$equipo->id_persona = Auth::user()->id;
			$equipo->save();
			
			$id = Auth::user()->id;
			$cor = DB::table('coordinadores')->where('id_persona', $id)->first();
			$usuario = User::where('id',$id)->get();
			$torneos = Torneo::where('id_coordinador', $cor->id)->get();
			$NumTorneos = count($torneos);
			
			$numeroEquiposPorTorneo = [];
			$torneo = [];
			foreach($torneos as $torneo)
			{
					$equipos = DB::table('equipos')->where('id_torneo', $torneo->id )->get();
					array_push($numeroEquiposPorTorneo, count($equipos) );
			}
			
			return Redirect::back()->withErrors(['msg', 'Equipo creado correctamente']);
			
			//return view("coordinador/inicio",array('torneos'=>$torneos, 'usuario' => $usuario, 'NumTorneos' =>$NumTorneos, 'NumeroEquipos' => $numeroEquiposPorTorneo));		  //return redirect()->route('dashboard');
			//return redirect()->route('dashboard',array('torneos'=>$torneos, 'usuario' => $usuario, 'NumTorneos' =>$NumTorneos, 'NumeroEquipos' => $numeroEquiposPorTorneo));
    }
	
	  public function storeWT(Request $request)
    {
			$equipo = new Equipo;
			$equipo->nombre= request('nombre');
			$equipo->id_torneo= request('torneo');
			$id_torneo=request('torneo');//
			echo $id_torneo;
			//////////////////////////
			
			if($request->hasfile('foto_equipo')) 
			{ 
				$file = $request->file('foto_equipo');
				$extension = $file->getClientOriginalExtension(); // getting image extension
				$filename = time().'.'.$extension;
				$file->move('equipos_imagenes', $filename);
				$equipo->foto = $filename;
			}
			
			///////////////////////////
			
			$equipo->id_persona = Auth::user()->id;
			$equipo->save();
			
			$id = Auth::user()->id;
			$cor = DB::table('coordinadores')->where('id_persona', $id)->first();
			$usuario = User::where('id',$id)->get();
			$torneos = Torneo::where('id_coordinador', $cor->id)->get();
			$NumTorneos = count($torneos);
			
			$numeroEquiposPorTorneo = [];
			$torneo = [];
			foreach($torneos as $torneo)
			{
					$equipos = DB::table('equipos')->where('id_torneo', $torneo->id )->get();
					array_push($numeroEquiposPorTorneo, count($equipos) );
			}
			
			//return view("coordinador/inicio",array('torneos'=>$torneos, 'usuario' => $usuario, 'NumTorneos' =>$NumTorneos, 'NumeroEquipos' => $numeroEquiposPorTorneo));
      //
				$t =  DB::table('equipos')
					->select('*', DB::raw('goles_favor - goles_contra as diferenciaGoles'))
					->where('id_torneo', $id)
					->orderBy('juegos_ganados', 'desc')
					->orderBy('diferenciaGoles', 'desc')
					->get();

			//$jornadas = CalendarioJuego::where('id_torneo',$id_torneo)->get();//condicionar que si no existe las jornadas no las pida
			$torneo = Torneo::where('id',$id_torneo)->get();
			
			$total_vueltas = $torneo[0]->num_vueltas;
			
			//print_r($torneo[0]->num_vueltas);
			
			$numeroJornadas = 0;
			$numero_equipos = count($t) - 1;
			
			if($numero_equipos % 2 == 0) {
				$numeroJornadas = ($numero_equipos - 1);
			}else{
				$numeroJornadas = $numero_equipos;
			}
			
			$jornadas_arreglo = [];
			
			for($i=0; $i < $numeroJornadas * $total_vueltas; $i++) {
				$partido = [];
				////foreach($jornadas as $jornada) {
				///	if($jornada->num_jornada == $i+1) {
			///			array_push($partido, $jornada);
				//	}
				//}
				array_push($jornadas_arreglo, $partido);
			}

			//dd($jornadas_arreglo);
			
			return view('coordinador/torneos/configurarTorneo',array('totalVueltas'=>$total_vueltas,'numeroJornadas'=>$numeroJornadas,'equipos'=>$t, 'id' => $id,'jornadas'=>$jornadas_arreglo,'torneos'=>$torneo));
			
			
			//
			
			
			
		  //return redirect()->route('dashboard');
			//return redirect()->route('dashboard',array('torneos'=>$torneos, 'usuario' => $usuario, 'NumTorneos' =>$NumTorneos, 'NumeroEquipos' => $numeroEquiposPorTorneo));
    }
		
		public function StoreTeam()
		{
			 
		}
															 
															 
															 

    /**
     * Display the specified resource.
     *
     * @param  \App\Equipo  $equipo
     * @return \Illuminate\Http\Response
     */
    public function show(Equipo $equipo)
    {
			$equipos = Equipo::all();
			return view('coordinador/verEquipos',array($equipos,'equipos'));
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Equipo  $equipo
     * @return \Illuminate\Http\Response
     */


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Equipo  $equipo
     * @return \Illuminate\Http\Response
     */
	
	   public function edit($id)
    {
			$t = Equipo::where('id_torneo',$id)->get();
			return view('coordinador/configurarTorneo',array('torneos'=>$t));
        //
    }
	
    public function update($id)
    {
			//$team = Equipo::find($id);
			$t = Equipo::where('id',$id)->get();
			return view('coordinador/modificarEquipo',array('equipo'=>$t));
		}

	
	  public function borrar($id,$id_torneo)
		{	
		$team = Equipo::find($id);
		$team->delete();
		//$equipos = Equipo::all();
		//return view('coordinador/verEquipos', array($equipos,'equipos'));	
			
			$t = Equipo::where('id_torneo',$id_torneo)->get();
			return view('coordinador.torneos.configurarTorneo',array('equipos'=>$t, 'id'=>$id_torneo));
		}
	
		//FUNCIÓN QUE SIRVE PARA HACER LA INSERCION DE LA MODIFICACION DEL EQUIPO
		public function modificarEquipo(Request $request)
		{
			//$id=Auth::user()->id;
			//$id_coordinador = DB::table('coordinadores')->where('id_persona', $id)->first();
			$id= request('equipoId');
			$query=0;
			//echo "file: ".$request->file;
			//dd($request);
			if($request->foto_equipo!=null){				
				
				$file = $request->foto_equipo;
				$file->move('images', now()->timestamp.'.'.$file->getClientOriginalExtension());
				$file_name = now()->timestamp.'.'.$file->getClientOriginalExtension();
				//echo "entra a if";
			//	$query = DB::table("UPDATE equipos SET nombre=?, foto=? WHERE id=?",
				//		[ $request->nombre, $file_name, $request->id]);
				$affected = DB::table('equipos')
              ->where('id', $request->id)
              ->update(['nombre' => $request->nombre],
											 ['foto'=>$file_name]);
				
				dd($affected);
			}else{
				echo "entra a else";
				$query = DB::select("UPDATE equipos SET nombre=? WHERE id=?",
						[ $request->nombre,  $request->id]);
						
				
			}
			return redirect()->route('dashboard');	
			
		}
	
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Equipo  $equipo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Equipo $equipo)
    {
        //
    }
}
