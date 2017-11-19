<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\SendMail;
class mailCotroller extends Controller
{
    public function send(){

        Mail::send(new SendMail());
    }

    public function email(){
        
       return view('email');
    }
}
