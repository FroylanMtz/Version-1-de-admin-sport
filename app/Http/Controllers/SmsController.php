<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Nexmo\Laravel\Facade\Nexmo;

class SmsController extends Controller
{
    public function SendSms(Request $request){ 
    Nexmo::message()->send([
    'to'   =>  $request->mobile,
    'from' => '5554616500',
    'text' => 'Hola soy Juan Diego Lumbreras'
    ]);
    //Session::flash('success', 'Sms Send Successfully');
    return redirect('/'); 
    }
}
