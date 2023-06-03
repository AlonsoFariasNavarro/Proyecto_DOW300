<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function login(){
        return view('home.index');
    }

    public function loginUser(Request $request){
        if($request = 'Estudiante'){
            return view('estudiante.index');
        }

        if($request = 'Profesor'){
            return view('profesor.index');
        }

        if($request = 'Administrador'){
            return view('administrador.index');
        }
    }
}
