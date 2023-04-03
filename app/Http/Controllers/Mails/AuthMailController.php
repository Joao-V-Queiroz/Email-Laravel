<?php

namespace App\Http\Controllers\Mails;

use App\Http\Controllers\Controller;
use App\Mail\RegisterEmail;
use Illuminate\Support\Facades\Mail;

class AuthMailController extends Controller
{
    public function sendRegisterMail(){
       $registerMail = new RegisterEmail();
       Mail::to('jvey102524@gmail.com')->send($registerMail);
    }
}
