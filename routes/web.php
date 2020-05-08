<?php
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// RUTAS PARA LA AUTENTICACION DE USUARIO
Route::get('/','MainController@index');
//Route::get('/uploadfile', 'UploadfileController@index');
//Route::post('/uploadfile', 'UploadfileController@upload');
Route::post('/main/checklogin', 'MainController@checklogin')->name('check.dqogin');
Route::get('/dashboard', 'MainController@successlogin')->name('dashboard');

//RUTAS PARA GUARDAR LOS DATOS 
Route::post('/registro', 'MainController@registrarPersona');


Auth::routes();
//Solo se puede acceder a estas rutas cuando se está loggeado en el sistema con una cuenta
Route::group(['middleware'=>['auth']], function () {
	
	Route::get('vistasal', function(){
		return view('coordinador.propuestaVerTorneos');
	});
	Route::get('redirsal',function(){
		alert()->error('Error Message', 'Optional Title')->persistent('Close');
		return redirect('/vistasal');
	});
	
	//RUTAS PARA MANDAR MENSAJE SMS 
  //Route::get('/mensajes', function () {return view('sms');});
  //Route::post('/sms', 'SmsController@SendSms');
  
  #RUTAS DEL COORDINADOR
 Route::get('/imprimir',function(){
   $pdf = PDF::loadView('inicio');
   return $pdf->stream();
 });
  
  //Route::get('/Torneos', 'torneoController@showTorneosCoordinador');#ver torneos en la vista del coordinador

	
  Route::get('/modificarEquipo/{id}','equipoController@update');#ver form modificar equipo
  Route::get('/borrarEquipo/{id}/torneo/{id_torneo}','equipoController@borrar');#borrar equipo
  Route::get('/verEquipos', 'equipoController@show')->name('show.equipos');#ver form crear equipo view coordinador
  
	Route::group(['middleware'=>['AuthUserSession:admin']], function() {
		///RUTAS ADMINISTRADOR
		Route::get('/admin/dashboard','MainController@adminInicio')->name('admin.dashboard');
		Route::get('/admin/registro', function(){ return view('admin.registro'); })->name('admin.registro');
		Route::get('/admin/ModificarTorneo/{id}','MainController@adminTorneo')->name('admin.ModificarTorneo');#VER TORNEO Y MODIFICAR STATUS	
		Route::get('/admin/verJugadores','jugadorController@showJugadorAdmin')->name('admin.verJugadores');#ver jugadores
		Route::get('/admin/verTorneos','torneoController@showTorneosAdmin')->name('admin.verTorneos');//ver Administrado
		Route::get('/admin/crearCausales','causalController@create')->name('admin.causales');#muestra el form
		Route::post('/admin/registrarCausal','causalController@store')->name('admin.registrarCausales');#registrarCausal
		Route::get('/admin/showCausales','causalController@show')->name('admin.showCausales');#muestra causales
		Route::post('/admin/updateSatusTorneo/{id}','torneoController@updateStatus')->name('admin.updateSatus');
	
		Route::get('/admin/crearCalendario/{id}', 'calendarioJuegoController@index')->name('admin.calendarioJuegos');
		
		
	});
  //AuthUserSession
  /*///RUTAS ADMINISTRADOR
		Route::get('/admin/dashboard','MainController@adminInicio')->name('admin.dashboard');
		//Muestra formulario para editar los datos de un registro de torneo
		Route::get('/admin/torneo/{id}','MainController@adminTorneo')->name('admin.torneos.edit');#VER TORNEO Y MODIFICAR STATUS	
		//Muestra vista de Listado de registros de jugadores
		Route::get('/admin/jugadores/list','jugadorController@showJugadorAdmin')->name('admin.jugadores.list');#ver jugadores
		//Muestra vista de Listado de registros de torneos
		Route::get('/admin/torneos/list','torneoController@showTorneosAdmin')->name('admin.torneos.list');//ver Administrado
		//Muestra vista para nuevo registro de causal
		Route::get('/admin/nuevo/causal','causalController@create')->name('admin.causales.create');#muestra el form
		//Envia datos del formulario al controlador
		Route::post('/admin/causal','causalController@store')->name('admin.causales.store');#registrarCausal
		//Muestra vista de Listado de registros de causales
		Route::get('/admin/causales/list','causalController@show')->name('admin.causales.list');#muestra causales
  */
  

  //Route::get('/home', 'HomeController@index')->name('home'); DEBO DE ELIMINAR LA VISTA ESTA
  #prueba
  #Route::get('/crearTorneo1', function () {return view('coordinador/crearTorneo1');});
	
	Route::get('Coordinador/Torneo','coordinadorController@showCreateTorneo')->name('Coordinador.Torneo');///Vista formulario Torneo
	Route::post('CrearTorneo','torneoController@store')->name('Coordinador.CrearTorneo');
	//Trae la interfaz para editar un registro de Torneo
	Route::get('torneo/edit/{id}','torneoController@edit')->name('torneo.edit');
	#Crear equipo

	//11/02/2020 - F. Ruta para editar los datos del coordinador
	Route::get('Coordinador/configuracion', 'coordinadorController@showConfiguracion')->name('Coordinador.Configuracion');
	Route::post('/actualizarDatosCoordinador', 'coordinadorController@update')->name('Coordinador.update');
	
	
  Route::post('Coordinador/crearEquipo', 'equipoController@store')->name('Coordinador.crearEquipo');
	Route::post('Coordinador/crearEquipoWTorneo', 'equipoController@storeWT')->name('Coordinador.crearEquipoWTorneo');
	Route::post('Coordinador/actualizarEquipo', 'equipoController@modificarEquipo')->name('Coordinador.actualizarEquipo');
 	Route::get('Coordinador/Equipo', 'equipoController@showCreateEquipo')->name('Coordinador.Equipo');#ver form crear equipo view coordinador
	Route::get('crearEquipo/{id}','equipoController@showCreateEquipoTorneo');
   
	//Muestra la vista donde se editarán los campos del registro de torneo
	Route::get('coordinador/torneo/edit/{id}','torneoController@edit')->name('coordinador.torneo.edit');
	//Actualiza los datos del registro de torneo
	Route::post('coordinador/torneo/update/{id}','torneoController@update')->name('coordinador.torneo.update');
	//Elimina registro de torneo y todos los registros de equipos relacionados a este
	Route::get('coordinador/torneo/delete/{id_torneo}',"torneoController@destroy")->name("coordinador.torneo.delete");
	//Muestra vista para editar los equipos que pertenecen a un torneo
	Route::get('coordinador/torneo/gestionar-equipos/{id}','torneoController@administrarEquipos')->name('coordinador.torneo.gestionar_equipos');

	Route::get('coordinador/jornada/pdf/{id}/{num_jornada}','torneoController@genera_pdf_jornada')->name('coordinador.jornada.pdf');

	Route::get('coordinador/jornada/pdf/{id}','torneoController@genera_pdf_tablageneral')->name('coordinador.jornada.pdftabla');

	//Route::get('coordinador/jornada/pdf/{id}/{num_jornada}','torneoController@genera_pdf_jornada_resultado')->name('coordinador.jornada.pdfresultado');


	Route::get('/main/logout', 'MainController@logout')->name('logout');
	
	//Ruta para guardar los resultados
	Route::post('/guardarResultado', 'torneoController@guardarResultado')->name('coordinador.torneo.guardarResultado');
  
  
	
});





