<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profesor;
use App\Models\Estudiante;
use App\Models\Propuesta;

class EstudiantesController extends Controller
{
    public function index(){
        return view('estudiante.index');
    }
    
    public function status(){
        return view('estudiante.estado');
    }

    public function create(){
        return view('admin.createEstudiante');
    }

    public function destroy(Estudiante $estudiante){
        $estudiante->delete();
        return redirect()->route('admin.index');
    }

    public function Eedit($estudiante){
        $estudiante=Estudiante::find($estudiante);
        return view('admin.editEstudiante',compact('estudiante'));
    }

    public function update(Request $request, $estudiante){
        $estudiante=Estudiante::find($estudiante);
        $estudiante->rut = $request->rut;
        $estudiante->nombre = $request->nombre;
        $estudiante->apellido = $request->apellido;
        $estudiante->email = $request->email;
        $estudiante->save();
        return redirect()->route('admin.index');
    }

    public function store(Request $request){
        $estudiante = new Estudiante;
        $estudiante->rut = $request->rut;
        $estudiante->nombre = $request->nombre;
        $estudiante->apellido = $request->apellido;
        $estudiante->email = $request->email;
        $estudiante->save();
        return redirect()->route('admin.index');
    }

}
