<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profesor;
use App\Models\Estudiante;
use App\Models\Propuesta;
use App\Models\ProfesorPropuesta;
use Carbon\Carbon;

class ProfesoresController extends Controller
{
    public function index(){
        $propuestas = Propuesta::orderBy('id')->get();
        return view('profesor.index',compact('propuestas'));
    }

    public function comentar($propuesta){
        $profesores = Profesor::orderBy('rut')->get();
        $propuesta = Propuesta::find($propuesta);
        return view('profesor.comentar',compact(['profesores','propuesta']));
    }

    public function addComentario(Request $request){
        $comentario = new ProfesorPropuesta;
        $comentario->propuesta_id = $request->id;
        $comentario->profesor_rut = $request->rut;
        $comentario->fecha = Carbon::now();
        $comentario->hora = Carbon::now();
        $comentario->comentario = $request->comentario;
        $comentario->save();
        return redirect()->route('profesor.comentarios');
    }

    public function deleteComentario(Profesor $profesor){
        echo $profesor;
        $profesor->propuestasConPivot()->detach();
        exit();
        $propuesta->delete();
        return redirect()->route('profesor.comentarios');
    }

    public function mostrarComentarios(){
        $propuestas = ProfesorPropuesta::orderBy('propuesta_id')->get();
        return view('profesor.comentarios',compact('propuestas'));
    }


    public function profesordestroy(Profesor $profesor){
        $profesor->delete();
        return redirect()->route('admin.index');
    }

    public function profesorupdate(Request $request, $profesor){
        $profesor=Profesor::find($profesor);
        $profesor->rut = $request->rut;
        $profesor->nombre = $request->nombre;
        $profesor->apellido = $request->apellido;
        $profesor->save();
        return redirect()->route('admin.index');
    }

    public function store(Request $request){
        $profesor= new Profesor;
        $profesor->rut = $request->rut;
        $profesor->nombre = $request->nombre;
        $profesor->apellido = $request->apellido;
        $profesor->save();
        return redirect()->route('admin.index');
    }


}

