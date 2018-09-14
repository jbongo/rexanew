<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContacForm;
use App\User;

class contactFormController extends Controller
{
    //
    public function sendMail( Request $request){
 
        $user = User::where('id',1)->firstorfail(); 
       
        Mail::to($request)->send(new ContacForm());
    }
}
