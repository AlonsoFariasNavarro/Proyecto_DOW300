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

    public function addComentario($propuesta,Request $request){
        $rutprofe = $request->rut;
        $comentario = Propuesta::where('id',$propuesta)->first();
        $profesor = Profesor::find($rutprofe);
        $comentario->profesores()->attach($profesor->rut,['fecha'=> Carbon::now(),'hora'=> Carbon::now(),'comentario'=>$request->comentario]);
        return redirect()->route('profesor.comentarios');
    }

    public function deleteComentario(Request $request, $profesor){
        $comentario = Propuesta::find($request->id);
        $profesor = Profesor::find($request->rut);
        $comentario->profesoresConPivot()->detach($profesor->rut);
        return redirect()->route('profesor.comentarios');
    }

    public function mostrarComentarios(){
        $propuestas = ProfesorPropuesta::orderBy('propuesta_id')->get();
        return view('profesor.comentarios',compact('propuestas'));
    }

    public function deleteConfirm($propuesta,Request $request){
        $comentario = $request->comentario;
        $profesor = Profesor::find($request->rut);
        $propuesta = Propuesta::where('id',$propuesta)->first();
        // echo($propuesta->id);
        // exit();
        return view('profesor.borrarComentario',compact(['propuesta','profesor','comentario']));
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

