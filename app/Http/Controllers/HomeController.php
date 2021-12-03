<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {
        //dd("hola controller");
        $name="Manuel";    
        return view('welcome',compact('name') );
    }


}
