<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profesor;
use App\Models\Estudiante;

class AdministradoresController extends Controller
{
    public function index(){
        $profesores = Profesor::orderBy('rut')->get();
        $estudiantes = Estudiante::orderBy('rut')->get();
        return view('admin.index',compact(['profesores','estudiantes']));
    }
}
