@extends('templates.master')

@section('if-nombre')
    @if(Route::current()->getName()=='estudiante.create')
        <h4 class="fw-bold">Estudiantes</h4>
    @endif
@endsection
@section('if-contenido')
    @if(Route::current()->getName()=='estudiante.create')
    <li class="nav-item"><a class="nav-link active" aria-current="page" href="{{route('estudiante.index')}}">Propuestas</a></li>
    <li class="nav-item"><a class="nav-link active" aria-current="page" href="{{route('estudiante.create')}}">Agregar propuesta</a></li>
    @endif
@endsection
@section('contenido-principal')

<div class="container d-flex align-items-center justify-content-center">    
            <div class="row-12">
                <div class="col-12 px-6 py-5 ">
                    <div class="card">
                        <div class="card-body" style="background-color:#5db4b9 ;">
                            <!-- form -->
                            <form action="{{route('estudiante.guardarPropuesta')}}" method="POST" enctype= multipart/form-data>
                                @csrf
                                <div class="title">
                                    <h1>Ingresar una propuesta</h1>
                                </div>
                                <div class="form-group py-3">
                                    <select name="rut" class="form-select">
                                        @foreach($estudiantes as $estudiante)
                                        <option name="rut" value="{{$estudiante->rut}}">{{$estudiante->rut}}</option>
                                        @endforeach
                                    </select>
                                    
                                </div>                               
                                <div class="form-group py-3">
                                    <label class="form-label " for="Propuesta">Propuesta</label>
                                    <input class="form-control" type="file" id="archivo" name="archivo">
                                </div>
                                <div class="text-start py-3">
                                    <button type ="submit" class="btn btn-success">ENVIAR PROPUESTA</button>
                                </div>                               
                            </form>                       
                        </div>
                    </div>
                </div>
            </div>
</div>
@endsection


