<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profesor;
use App\Models\Estudiante;
use App\Models\Propuesta;
use App\Models\ProfesorPropuesta;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;

class EstudiantesController extends Controller
{
    public function index(){
        $propuestas = Propuesta::orderBy('id')->get();
        $estudiantes = Estudiante::orderBy('rut')->get();
        $comentarios = ProfesorPropuesta::orderBy('propuesta_id')->get();
        return view('estudiante.index',compact(['estudiantes','propuestas','comentarios']));
    }
    
    public function status(){
        return view('estudiante.estado');
    }

    public function create(){
        $estudiantes = Estudiante::orderBy('rut')->get();
        return view('estudiante.create',compact('estudiantes'));
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

    public function guardarPropuesta(Request $request){
        $request->file('archivo')->storeAs('',$request->file('archivo')->getClientOriginalName());
        $propuesta = new Propuesta;
        $propuesta->fecha =Carbon::now();
        $propuesta->estudiante_rut = $request->rut;
        $propuesta->documento=$request->file('archivo')->getClientOriginalName();
        $propuesta->save();
        return redirect()->route('estudiante.index');
    }

    
}
