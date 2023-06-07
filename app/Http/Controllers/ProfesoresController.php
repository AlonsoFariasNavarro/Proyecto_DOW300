<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profesor;
use App\Models\Estudiante;
use App\Models\Propuesta;

class ProfesoresController extends Controller
{
    public function index(){
        return view('profesor.index');
    }

    public function revision(){
        return view('profesor.revision');
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


}

