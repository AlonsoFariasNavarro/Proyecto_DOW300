<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function login(){
        return view('home.index');
    }

    public function loginUser(Request $request){
        if($request->userid == 'Estudiante'){
           return redirect()->route('estudiante.index');
        }

        elseif($request->userid == 'Profesor'){
            return redirect()->route('profesor.index');
        }

        elseif($request->userid == 'Administrador'){
            return redirect()->route('admin.index');
        }
    }
}
