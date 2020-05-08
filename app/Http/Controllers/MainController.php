<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use validator;
use Auth;
use App\User;
use App\Torneo;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Session;
use App\Coordinador;
use App\Jugador;

class MainController extends Controller{
	#FUNCIONES PARA EL ADMIN
		#INICIO ADMIM
		function adminInicio(){
			$admin = DB::table('users')->where('tipo_usuario', 'admin')->get();//te retorna las filas de los administradores
			$jugador = DB::table('users')->where('tipo_usuario', 'Jugador')->get();//te retorna las filas de los Jugadores
			$coordinador = DB::table('users')->where('tipo_usuario', 'Coordinador')->get();//te retorna las filas de los administradores
			$admin= Count($admin);
			$jugador= Count($jugador);
			$coordinador= Count($coordinador);
			$foto = Session::put('foto', $usuario->foto);
			return view('admin/inicio',array('admin'=>$admin,'coordinador'=>$coordinador,'jugador'=>$jugador, 'foto'=>$foto));
		}
    #VER TORNEO PARA EDITAR STATUS
		
	function adminTorneo($id){
			$torneo=Torneo::find($id);
			$cor = Coordinador::find($torneo->id_coordinador);
			$coordinador=User::find($cor->id_persona);
			return view('admin/torneo',array('torneo'=>$torneo,'coordinador'=>$coordinador));
		}
	
    function index(){
    	return view('auth.login');
    }
  
    function checklogin(Request $request){
       
			$this->validate($request, [
        'email'   => 'required|email',
        'password'  => 'required|alphaNum|min:3'
       ]);

       $user_data = array(
        'email'  => $request->get('email'),
        'password' => $request->get('password')
       );

       if(Auth::attempt($user_data)){
				 	$usuario = DB::table('users')->where('email', $request->get('email') )->first();
				 	
				 Session::put('email', $usuario->email);
				 Session::put('id', $usuario->id);
				 Session::put('name', $usuario->name);
				 Session::put('calle', $usuario->calle);
				 Session::put('colonia', $usuario->colonia);
				 Session::put('ciudad', $usuario->ciudad);
				 Session::put('estado', $usuario->estado);
				 Session::put('pais', $usuario->pais);
				 Session::put('nacionalidad', $usuario->nacionalidad);
				 Session::put('dia_nacimiento', $usuario->dia_nacimiento);
				 Session::put('mes_nacimiento', $usuario->mes_nacimiento);
				 Session::put('año_nacimiento', $usuario->año_nacimiento);
				 Session::put('sexo', $usuario->sexo);
				 Session::put('curp', $usuario->curp);
				 Session::put('foto', $usuario->foto);
				 Session::put('tipo_usuario', $usuario->tipo_usuario);
				 	
				 //print_r( $usuario );
        	return redirect('/dashboard');
			 } else{
         return back()->with('error', 'Verifica el correo y la contraseña');
       }
			
			 //Session::put('key', 'value');
    }
  
    public function registrarPersona(Request $request)
    {

				$e = 'registro';
			
				$validator = Validator::make($request->all(), [
						'email' => 'required|string|email|max:191|unique:users',
            'password' => 'required|string|min:6'
				]);

				if( $validator->fails() || ( $request['password'] != $request['password2'] ) ) {
						return redirect('/')
						->with($e)
						->withErrors($validator)
						->withInput();
				}

				$usuario = new User;
				$usuario->name = $request['name'];
				$usuario->email = $request['email'];
				$usuario->tipo_usuario = $request['tipoUsuario'];
				$usuario->password = Hash::make($request['password']);
				$usuario->save();
			
			
				if( $request['tipoUsuario']  == 'Jugador' ){
					
					Jugador::create([
						'id_user' => $usuario->id
					]);
					
				}else{
					Coordinador::create([
						'id_persona' => $usuario->id
					]);
				}
			
			
				return redirect('/');

    } 
  

    function successlogin()
    {
			
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
    }

    function logout()
    {
     Auth::logout();
     return redirect('/');
    }
}
