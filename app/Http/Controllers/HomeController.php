<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home.index');
    }


    public function deportes()
    {
        return view('home.deportes');
    }

    public function negocios()
    {
        return view('home.negocios');
    }

    public function noticias()
    {
        return view('home.noticias');
    }
}
