<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    //
    public function index()
    {
        return view('cursos.index');
    }

    public function create()
    {
        return 'En esta página podrás crear un curso';
    }

    public function show($curso)
    {
        return view('cursos.show', compact('curso'));
    }
}
