<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    function aboutUs(){
        return redirect('https:://www.educastudio.com/about-us');
    }
}
