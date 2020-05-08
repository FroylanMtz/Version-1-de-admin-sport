<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class imprimirController extends Controller
{
    //
  public function imprimir(){
    $pdf = \PDF::loadView('verEquipos/3');
    return $pdf->download('verEquipos.pdf');
  }
}
