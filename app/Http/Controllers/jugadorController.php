<?php

namespace App\Http\Controllers;

use App\Jugador;
use Illuminate\Http\Request;

class jugadorController extends Controller
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
     * @param  \App\Jugador  $jugador
     * @return \Illuminate\Http\Response
     */
		#ver jugadores desde la vista del admin
    public function showJugadorAdmin()
    {
			$jugador = Jugador::all();
			return view('admin/verJugador',array('jugador'=>$jugador));
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Jugador  $jugador
     * @return \Illuminate\Http\Response
     */
    public function edit(Jugador $jugador)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Jugador  $jugador
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Jugador $jugador)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Jugador  $jugador
     * @return \Illuminate\Http\Response
     */
    public function destroy(Jugador $jugador)
    {
        //
    }
}