<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profesor;
use App\Models\Estudiante;
use App\Models\Propuesta;

class AdministradoresController extends Controller
{
    public function index(){
        $profesores = Profesor::orderBy('rut')->get();
        $estudiantes = Estudiante::orderBy('rut')->get();
        $propuestas = Propuesta::orderBy('id')->get();
        return view('admin.index',compact(['profesores','estudiantes','propuestas']));
    }

    public function edit($profesor){
        $profesor = Profesor::find($profesor);
        return view('admin.editProfesor',compact('profesor'));
    }

    public function agregarEstudiante(){
        return view('admin.createEstuidante');
    }

    public function agregarProfesor(){
        return view('admin.createProfesor');
    }

    public function verestados(){
        $propuestas = Propuesta::orderBy('id')->get();
        return view('admin.estados',compact('propuestas'));
    }

    public function editarEstados($propuesta){
        $propuesta = Propuesta::find($propuesta);
        return view('admin.editarEstado',compact('propuesta'));
    }

    public function estadoUpdate(Request $request,$propuesta){
        $propuesta = Propuesta::find($propuesta);
        $propuesta->estado = $request->estado;
        $propuesta->save();
        return redirect()->route('admin.estados');
    }

}
