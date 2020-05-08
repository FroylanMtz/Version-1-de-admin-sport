<?php

namespace App\Http\Controllers;

use App\Causal;
use Illuminate\Http\Request;

class causalController extends Controller
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
			return view('admin/crearCausales');
			//
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
			
			$causal = new Causal;
			$causal->tipo= request('tipo');
			$causal->numero=request('numero');
			$causal->causal=request('causal');
			
			$causal->save();
			
			$causal = Causal::all();
			
			return view('admin/verCausales',array('causal'=>$causal));
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Causal  $causal
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
			$causal = Causal::all();
			return view('admin/verCausales',array('causal'=>$causal));
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Causal  $causal
     * @return \Illuminate\Http\Response
     */
    public function edit(Causal $causal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Causal  $causal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Causal $causal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Causal  $causal
     * @return \Illuminate\Http\Response
     */
    public function destroy(Causal $causal)
    {
        //
    }
}
