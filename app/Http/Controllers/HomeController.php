<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //invoker una sola ruta para un controlador
    public function __invoke()
    {
        return view('home');
    }
}
