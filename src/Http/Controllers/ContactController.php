<?php

namespace Saidul\Contact\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function showForm(){
        return view('contact::contact');
    }

    public function sendMail(){
        return view('contact::contact');
    }
}
