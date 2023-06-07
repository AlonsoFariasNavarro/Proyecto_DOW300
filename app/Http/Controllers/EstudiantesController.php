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
        return view('estudiante.create');
    }

    public function destroy(Estudiante $estudiante){
        $estudiante->delete();
        return redirect()->route('admin.index');
    }
}
