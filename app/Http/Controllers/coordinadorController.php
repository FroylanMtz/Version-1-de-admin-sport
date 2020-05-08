<?php

namespace App\Http\Controllers;

use App\Coordinador;
use App\Torneo;
use App\User;
use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;

class coordinadorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
		 
     */
		public function inicio()
		{			
			$id = Auth::user()->id;
			$usuario = User::where('id',$id)->get();
			$torneos = Torneo::where('id_coordinador', $id)->get();
			$NumTorneos = count($torneos);
		 return view('coordinador/inicio',array('torneos'=>$torneos, 'usuario' => $usuario, 'NumTorneos' =>$NumTorneos));
		}
	
		public function showCreateTorneo(Request $request){
			#$torneo = $request->session()->get('torneo');#Se crea la sesion con su nombre
			return view('coordinador.torneos.crearTorneo');
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
     * @param  \App\Coordinador  $coordinador
     * @return \Illuminate\Http\Response
     */
    public function show(Coordinador $coordinador)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Coordinador  $coordinador
     * @return \Illuminate\Http\Response
     */
    public function edit(Coordinador $coordinador)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Coordinador  $coordinador
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
			
			$usuario = User::where('id', Session::get('id') )->first();
			
			$usuario->name = request('nombre');
			$usuario->calle = request('calle');
			$usuario->colonia = request('colonia');
			$usuario->estado = request('estado');
			$usuario->ciudad = request('ciudad');
			$usuario->pais = request('pais');
			$usuario->dia_nacimiento = request('dia');
			$usuario->mes_nacimiento = request('mes');
			$usuario->año_nacimiento = request('año');
			$usuario->sexo = request('sexo');
			$usuario->curp = request('curp');
			$usuario->nacionalidad = request('nacionalidad');
			
			if($request->hasfile('foto_user')) 
			{ 
				$file = $request->file('foto_user');
				$extension = $file->getClientOriginalExtension(); // getting image extension
				$filename = time().'.'.$extension;
				$file->move('images/users', $filename);
				$usuario->foto = $filename;
			}
			
			 Session::put('name', $usuario->name);
			 Session::put('calle', $usuario->calle);
			 Session::put('colonia', $usuario->colonia);
			 Session::put('ciudad', $usuario->ciudad);
			 Session::put('estado', $usuario->estado);
			 Session::put('pais', $usuario->pais);
			 Session::put('dia_nacimiento', $usuario->dia_nacimiento);
			 Session::put('mes_nacimiento', $usuario->mes_nacimiento);
			 Session::put('año_nacimiento', $usuario->año_nacimiento);
			 Session::put('sexo', $usuario->sexo);
			 Session::put('curp', $usuario->curp);
			 Session::put('foto', $usuario->foto);
			
			$usuario->save();
			//print_r($usuario->email );
			
			return Redirect::back()->withErrors(['msg', 'Usuario editado con exito']);
			//echo 'Hola que ondas';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Coordinador  $coordinador
     * @return \Illuminate\Http\Response
     */
    public function destroy(Coordinador $coordinador)
    {
        
    }


    public function showConfiguracion(Request $request)
    {
        //echo 'Aqui va el formulario de usuario';
				$usuario = ["email" => Session::get('email'),
				"id" => Session::get('id'),
				"name" => Session::get('name'),
			  "calle" => Session::get('calle'),
				"colonia" => Session::get('colonia'),
				"ciudad" => Session::get('ciudad'),
				"estado" => Session::get('estado'),
				"pais" => Session::get('pais'),
				"nacionalidad" => Session::get('nacionalidad'),
				"dia_nacimiento" => Session::get('dia_nacimiento'),
				"mes_nacimiento" => Session::get('mes_nacimiento'),
				"año_nacimiento" => Session::get('año_nacimiento'),
				"sexo" => Session::get('sexo'),
				"curp" => Session::get('curp'),
				"foto" => Session::get('foto'),
				"tipo_usuario" => Session::get('tipo_usuario') ];
				
				//echo $usuario['name'];
				return view('coordinador.configurarPerfil')->with('usuario', $usuario);
    }

}
