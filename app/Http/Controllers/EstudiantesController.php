<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EstudiantesController extends Controller
{
    public function index(){
        return view('estudiante.index');
    }
    
    public function status(){
        return view('estudiante.estado');
    }

    public function create(){
        return view('estudiante.agregar');
    }
}