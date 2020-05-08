<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SweetAlertController extends Controller
{
    //
  public function notification()
    {
    
                alert()->info('Notificación tipo Información');
                
        //return redirect('tipo');
    }
}
