<?php

namespace App\Http\Controllers;
use App\Torneo;
use App\CalendarioJuego;
use App\User;
use App\Equipo;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;
use Session;
use App\Coordinador;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Redirect;
use Mpdf\Mpdf;
use App;

class torneoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
		 
     */
		
		public function updateStatus($id, Request $request)
		{
			$estatus= request('estatus');
			$query = DB::select("UPDATE torneos SET estatus=? WHERE id=?",[$estatus ,$id]);
			$torneos=Torneo::all();
			return view('admin.verTorneos',array('torneos'=>$torneos));
		}
	
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
  			
			
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
			$id=Auth::user()->id;
			//$coordinador= DB::table('coordinadores')->where('id_persona', $id)->get();
				
			$cor = DB::table('coordinadores')->where('id_persona', $id)->first();
			
			$torneo = new Torneo;
			$torneo->nombre= request('nombre');
			$torneo->categoria= request('categoria');
			$torneo->num_equipos = request('num_equipos');
			$torneo->num_vueltas= request('num_vueltas');
			$torneo->calle= request('calle');
			$torneo->colonia = request('colonia');
			$torneo->ciudad = request('ciudad');
			$torneo->estado = request('estado');
			$torneo->rama = request('rama');
			$torneo->descripcion = request('descripcion');
			$torneo->pago_inscripcion = request('pago_inscripcion');
			$torneo->pago_arbitraje = request('pago_arbitraje');
			$torneo->id_coordinador = $cor->id;
			
			if(Input::hasFile('file')){
				$file = Input::file('file');
				$file->move('torneos_imagenes', now()->timestamp . '.' . $file->getClientOriginalExtension());
				$torneo->foto = now()->timestamp . '.' . $file->getClientOriginalExtension();
		
			}
			
			$torneo->save();
			
			
			
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
			
			return view('coordinador/inicio',array('torneos'=>$torneos, 'usuario' => $usuario, 'NumTorneos' =>$NumTorneos, 'NumeroEquipos' => $numeroEquiposPorTorneo));
			
	    //$id = Auth::user()->id;#id del usuario actual(session)
			//$torneos = Torneo::where('id_coordinador', $id)->get();
			//return view('coordinador/inicio',array('torneos'=>$torneos)); 
    }
	

	
    /**
     * Display the specified resource.
     *
     * @param  \App\Torneo  $torneo
     * @return \Illuminate\Http\Response
     */
	
	#VER LOS TORNEOS DEL COORDINADOR
	public function showTornesRegistradosCoordinador(){
			$id = Auth::user()->id;
			//$torneos = Torneo::where('id_coordinador', $id)->get();
			$torneos_idlist = DB::select("SELECT id FROM torneos t WHERE t.id_coordinador = ?",[$id]);
			$torneos = array();
			for($i = 0; $torneos_idlist<$i; $i++){
				$torneos[$i] = array();
				$torneos = DB::select("SELECT * FROM equipos e WHERE e.id_torneo = ?",[$torneos_idlist[$i]]);
			}
			dd($torneos);
			//$NumTorneos = count($torneos);
		 //return view('coordinador.propuestaVerTorneos',array('torneos'=>$torneos, 'NumTorneos' =>$NumTorneos));
	}
	
	
	
    public function showTorneosAdmin()
    {
			$torneos = Torneo::all();
			return view('admin.verTorneos',array('torneos'=>$torneos));
				//
    }
		#funcion para ver los torneos en la vista del coordinadr
		public function showTorneoCoordinador()
		{
			$id = Auth::user()->id;
			$usuario = User::where('id',$id)->get();
			$torneos = Torneo::where('id_coordinador', $id)->get();
			$NumTorneos = count($torneos);
		 return view('coordinador/inicio',array('torneos'=>$torneos, 'usuario' => $usuario, 'NumTorneos' =>$NumTorneos));
			
		}

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Torneo  $torneo
     * @return \Illuminate\Http\Response
     */
		public function edit($id){
			$torneo = DB::select("SELECT * FROM torneos t WHERE t.id=?",[$id])[0];
			$categorias = ["Infantil","Juvenil","Libre"];
			$ramas = ["Varonil", "Femenil", "Otra"];
			return view('coordinador.torneos.edit', ['torneo' => $torneo, 'categorias' => $categorias, 'ramas' => $ramas]);
		}
	
		//Muestra los equipos correspondientes a un torneo para gestionarlos dentro de este
    public function administrarEquipos($id)
    {
			//$t = Equipo::where('id_torneo',$id)->orderBy('juegos_ganados', 'desc')->orderBy('juegos_empatados', 'desc')->get();

			$t =  DB::table('equipos')
					->select('*', DB::raw('goles_favor - goles_contra as diferenciaGoles'))
					->where('id_torneo', $id)
					->orderBy('juegos_ganados', 'desc')
					->orderBy('diferenciaGoles', 'desc')
					->get();

			$jornadas = CalendarioJuego::where('id_torneo',$id)->get();
			$torneo = Torneo::where('id',$id)->get();
			
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
				foreach($jornadas as $jornada) {
					if($jornada->num_jornada == $i+1) {
						array_push($partido, $jornada);
					}
				}
				array_push($jornadas_arreglo, $partido);
			}

			//dd($jornadas_arreglo);
			
			return view('coordinador/torneos/configurarTorneo',array('totalVueltas'=>$total_vueltas,'numeroJornadas'=>$numeroJornadas,'equipos'=>$t, 'id' => $id,'jornadas'=>$jornadas_arreglo,'torneos'=>$torneo));
			
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Torneo  $torneo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Torneo $torneo)
    {
			$id=Auth::user()->id;
			$id_coordinador = DB::table('coordinadores')->where('id_persona', $id)->first();
			$query=0;
			if($request->file!=null){				
				$file = $request->file;
				$file->move('torneos_imagenes', now()->timestamp.'.'.$file->getClientOriginalExtension());
				$file_name = now()->timestamp.'.'.$file->getClientOriginalExtension();
				$query = DB::select("UPDATE torneos SET nombre=?, categoria=?, num_equipos=?, num_vueltas=?, calle=?,
						colonia=?, ciudad=?, estado=?, rama=?, descripcion=?, pago_inscripcion=?, pago_arbitraje=?, foto=? WHERE id=?",
						[ $request->nombre, $request->categoria, $request->num_equipos, $request->num_vueltas,
						$request->calle, $request->colonia, $request->ciudad, $request->estado, $request->rama, $request->descripcion,
						$request->pago_inscripcion, $request->pago_arbitraje, $file_name, $request->id]);
			}else{
				$query = DB::select("UPDATE torneos SET nombre=?, categoria=?, num_equipos=?, num_vueltas=?, calle=?,
						colonia=?, ciudad=?, estado=?, rama=?, descripcion=?, pago_inscripcion=?, pago_arbitraje=? WHERE id=?",
						[ $request->nombre, $request->categoria, $request->num_equipos, $request->num_vueltas,
						$request->calle, $request->colonia, $request->ciudad, $request->estado, $request->rama, $request->descripcion,
						$request->pago_inscripcion, $request->pago_arbitraje, $request->id]);
				
			}
			return redirect()->route('dashboard');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Torneo  $torneo
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_torneo)
    {
				$query_equipos = DB::select('DELETE FROM equipos WHERE id_torneo=?',[$id_torneo]);
				$query_torneo = DB::select('DELETE FROM torneos WHERE id=?',[$id_torneo]);
			
			//return redirect()->route('dashboard');
			return response()->json(['response' => true]);
    }
	
	public function guardarResultado(Request $request)
	{
		
			//echo '' . $request->opcion;
			
			if( isset($request->opcion) && $request->opcion == 'editar'){
				
				$id_enfrentamiento = $request->id_enfrentamiento;
				$goles_local = $request->goles_local_txt;
				$goles_visitante = $request->goles_visitante_txt;
				$id_torneo = $request->id_torneo;
				
				$goles_local_anterior = $request->goles_local_anterior;
				$goles_visitante_anterior = $request->goles_visitante_anterior;
				
				//echo 'Goles local anterior ' . $goles_local_anterior . ' Goles visitante anterior ' . $goles_visitante_anterior;
				
			  if( $goles_local == ''  || $goles_local == null ||
					$goles_visitante == ''  || $goles_visitante == null)
				{
					return redirect(url()->previous() .'#tab-2')->withErrors(['error', $id_enfrentamiento]);
				}
				
				$t = Equipo::where('id_torneo', $id_torneo)->get();
				$jornadas = CalendarioJuego::where('id_torneo', $id_torneo)->get();
				
				$enfrentamiento = CalendarioJuego::find($id_enfrentamiento);
				
				$enfrentamiento->resultado_1 = $goles_local;
				$enfrentamiento->resultado_2 = $goles_visitante;
				$enfrentamiento->save();
				
				
				// ***** Guardar datos del equipo local *****
				$equipo_local = Equipo::find($enfrentamiento->local);
				$equipo_local->goles_favor =  ($equipo_local->goles_favor - $goles_local_anterior)      + $goles_local;
				$equipo_local->goles_contra = ($equipo_local->goles_contra - $goles_visitante_anterior) + $goles_visitante;
				
				//Quitar los juegos del anterior
				if($goles_local_anterior > $goles_visitante_anterior) {
					$equipo_local->juegos_ganados = $equipo_local->juegos_ganados - 1;
				}else if($goles_local_anterior < $goles_visitante_anterior) {
					$equipo_local->juegos_perdidos = $equipo_local->juegos_perdidos - 1;
				}else{
					$equipo_local->juegos_empatados = $equipo_local->juegos_empatados - 1;
				} 
				
				//Esto significa que el local gano
				if($goles_local > $goles_visitante) {
					$equipo_local->juegos_ganados = $equipo_local->juegos_ganados + 1;
				}else if($goles_local < $goles_visitante) {
					$equipo_local->juegos_perdidos = $equipo_local->juegos_perdidos + 1;
				}else{
					$equipo_local->juegos_empatados = $equipo_local->juegos_empatados + 1;
				} 
				
				$equipo_local->save();
				
				//Guardar datos del equipo visitante
				$equipo_visitante = Equipo::find($enfrentamiento->visitante);
				$equipo_visitante->goles_favor =  ($equipo_visitante->goles_favor - $goles_visitante_anterior)  + $goles_visitante;
				$equipo_visitante->goles_contra = ($equipo_visitante->goles_contra - $goles_local_anterior) + $goles_local;			
				
				if($goles_visitante_anterior > $goles_local_anterior ) {
					$equipo_visitante->juegos_ganados = $equipo_visitante->juegos_ganados - 1;
				}else if($goles_visitante_anterior < $goles_local_anterior) {
					$equipo_visitante->juegos_perdidos = $equipo_visitante->juegos_perdidos - 1;
				}else{
					$equipo_visitante->juegos_empatados = $equipo_visitante->juegos_empatados - 1;
				}
				
				
				//Esto significa que el visitante gano
				if($goles_visitante > $goles_local ) {
					$equipo_visitante->juegos_ganados = $equipo_visitante->juegos_ganados + 1;
				}else if($goles_visitante < $goles_local) {
					$equipo_visitante->juegos_perdidos = $equipo_visitante->juegos_perdidos + 1;
				}else{
					$equipo_visitante->juegos_empatados = $equipo_visitante->juegos_empatados + 1;
				}
				
				$equipo_visitante->save();
				return($this->administrarEquipos($id_torneo));
				
				
			}else{
				
				$id_enfrentamiento = $request->id_enfrentamiento;
				$goles_local = $request->goles_local_txt;
				$goles_visitante = $request->goles_visitante_txt;
				$id_torneo = $request->id_torneo;

				if( $goles_local == ''     || $goles_local == null ||
					$goles_visitante == ''  || $goles_visitante == null)
				{
					return redirect(url()->previous() .'#tab-2')->withErrors(['error', $id_enfrentamiento]);
				}

				$t = Equipo::where('id_torneo', $id_torneo)->get();
				$jornadas = CalendarioJuego::where('id_torneo', $id_torneo)->get();

				$enfrentamiento = CalendarioJuego::find($id_enfrentamiento);
				$enfrentamiento->resultado_1 = $goles_local;
				$enfrentamiento->resultado_2 = $goles_visitante;
				$enfrentamiento->estatus = 'Jugado';
				$enfrentamiento->save();

				//Guardar datos del equipo local
				$equipo_local = Equipo::find($enfrentamiento->local);
				$equipo_local->goles_favor =  $equipo_local->goles_favor  +  $goles_local;
				$equipo_local->goles_contra = $equipo_local->goles_contra + $goles_visitante;

				$equipo_local->juegos_jugados = $equipo_local->juegos_jugados + 1;

				//Esto significa que el local gano
				if($goles_local > $goles_visitante) {
					$equipo_local->juegos_ganados = $equipo_local->juegos_ganados + 1;
				}else if($goles_local < $goles_visitante) {
					$equipo_local->juegos_perdidos = $equipo_local->juegos_perdidos + 1;
				}else{
					$equipo_local->juegos_empatados = $equipo_local->juegos_empatados + 1;
				}

				$equipo_local->save();

				//Guardar datos del equipo visitante
				$equipo_visitante = Equipo::find($enfrentamiento->visitante);
				$equipo_visitante->goles_favor =  $equipo_visitante->goles_favor  + $goles_visitante;
				$equipo_visitante->goles_contra = $equipo_visitante->goles_contra + $goles_local;

				$equipo_visitante->juegos_jugados = $equipo_visitante->juegos_jugados + 1;

				//Esto significa que el local gano
				if($goles_visitante > $goles_local ) {
					$equipo_visitante->juegos_ganados = $equipo_visitante->juegos_ganados + 1;
				}else if($goles_visitante < $goles_local) {
					$equipo_visitante->juegos_perdidos = $equipo_visitante->juegos_perdidos + 1;
				}else{
					$equipo_visitante->juegos_empatados = $equipo_visitante->juegos_empatados + 1;
				}
				
				$equipo_visitante->save();
				return($this->administrarEquipos($id_torneo));
				
			}
			
			/*$id_enfrentamiento = $request->id_enfrentamiento;
			$goles_local = $request->goles_local_txt;
			$goles_visitante = $request->goles_visitante_txt;
			$id_torneo = $request->id_torneo;
			
			if( $goles_local == ''     || $goles_local == 0     || $goles_local == null ||
				$goles_visitante == '' || $goles_visitante == 0 || $goles_visitante == null)
			{
				return redirect(url()->previous() .'#tab-2')->withErrors(['error', $id_enfrentamiento]);
			}
			
			$t = Equipo::where('id_torneo', $id_torneo)->get();
			$jornadas = CalendarioJuego::where('id_torneo', $id_torneo)->get();
			
			$enfrentamiento = CalendarioJuego::find($id_enfrentamiento);
		 	$enfrentamiento->resultado_1 = $goles_local;
			$enfrentamiento->resultado_2 = $goles_visitante;
			$enfrentamiento->estatus = 'Jugado';
		 	$enfrentamiento->save();
			
			//Guardar datos del equipo local
			$equipo_local = Equipo::find($enfrentamiento->local);
			$equipo_local->goles_favor =  $equipo_local->goles_favor  +  $goles_local;
			$equipo_local->goles_contra = $equipo_local->goles_contra + $goles_visitante;

			$equipo_local->juegos_jugados = $equipo_local->juegos_jugados + 1;
			
			//Esto significa que el local gano
			if($goles_local > $goles_visitante) {
				$equipo_local->juegos_ganados = $equipo_local->juegos_ganados + 1;
			}else if($goles_local < $goles_visitante) {
				$equipo_local->juegos_perdidos = $equipo_local->juegos_perdidos + 1;
			}else{
				$equipo_local->juegos_empatados = $equipo_local->juegos_empatados + 1;
			}
			
			$equipo_local->save();
			
			//Guardar datos del equipo visitante
			$equipo_visitante = Equipo::find($enfrentamiento->visitante);
			$equipo_visitante->goles_favor =  $equipo_visitante->goles_favor  + $goles_visitante;
			$equipo_visitante->goles_contra = $equipo_visitante->goles_contra + $goles_local;

			$equipo_visitante->juegos_jugados = $equipo_visitante->juegos_jugados + 1;
			
			//Esto significa que el local gano
			if($goles_visitante > $goles_local ) {
				$equipo_visitante->juegos_ganados = $equipo_visitante->juegos_ganados + 1;
			}else if($goles_visitante < $goles_local) {
				$equipo_visitante->juegos_perdidos = $equipo_visitante->juegos_perdidos + 1;
			}else{
				$equipo_visitante->juegos_empatados = $equipo_visitante->juegos_empatados + 1;
			}*/
			
			
			
			
			
	}
	
	
	
		public function genera_pdf_jornada(Request $request, $id, $num_jornada){


			$jornadas = CalendarioJuego::
						join('equipos as elocal',   'elocal.id', '=', 'calendario_juegos.local')
						->join('equipos as evisitante',   'evisitante.id', '=', 'calendario_juegos.visitante')
						->select('calendario_juegos.*', 'elocal.foto as flocal', 'evisitante.foto as fvisitante' ,'elocal.nombre as local', 'evisitante.nombre as visitante')
						->where('calendario_juegos.id_torneo',$id)->where('num_jornada', $num_jornada)->get();

			$torneo = Torneo::where('id',$id)->get();
			
			$pdf = App::make('dompdf.wrapper');
			$pdf->loadView('template_pdfs.jornadas', ['jornadas' => $jornadas, 'torneo' => $torneo, 'numeroJornada' => $num_jornada]);


			//$pdf->setPaper('a4', 'landscape');
			return $pdf->download();
			//return $pdf->stream();


			
		}

		public function genera_pdf_tablageneral(Request $request, $id)
		{
			echo "Prueba del metodo genera pdf tabla general";
			echo "El id del torneo es: " . $id;
		}

		public function genera_pdf_jornada_resultado(Request $request){

/*$id_torneo = $request->id;
			$num_jornada = $request->num_jornada;
			
			$partidos_jornada = DB::table('calendario_juegos')->where(['id_torneo'=>$id_torneo, 'num_jornada' => $num_jornada])->get();
			
			$mpdf = new Mpdf([
					'tempDir' => public_path('storage/resolutivos/registro_civil/matrimonio/')
			]);
			
			$template_pdf = view('template_pdfs.jornadas',['nombre' => 'Luis xd']);
			echo($template_pdf);
			$mpdf->WriteHTML($template_pdf);
			$file_name = 'reporte_jornada'."_".$num_jornada.'_torneo_'.$id_torneo.".pdf";
			$mpdf->Output( public_path('storage/reportes/jornadas/').$file_name,'D');//F
			//dd($partidos_jornada);*/

		}
}
