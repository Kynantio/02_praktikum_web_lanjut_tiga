<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    function contactUs(){
        return redirect('https:://www.educastudio.com/contact-us');
    }
}
