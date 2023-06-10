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

<div class="container-fluid min-vh-100 d-flex  justify-content-center " style="background-color: #05334F;">    
            <div class="row">
                <div class="col pt-5">
                    <div class="card bg-secondary" style="width: 35rem;">
                        <div class="card-body bg-secondary" style="background-color:#5db4b9 ;">
                            <!-- form -->
                            <form action="{{route('estudiante.guardarPropuesta')}}" method="POST" enctype= multipart/form-data>
                                @csrf
                                <div class="text-white">
                                    <h2>Ingresar una propuesta</h2>
                                </div>
                                <div class="form-group py-3">
                                    <select name="rut" class="form-select">
                                        @foreach($estudiantes as $estudiante)
                                        <option name="rut" value="{{$estudiante->rut}}">{{$estudiante->rut}}</option>
                                        @endforeach
                                    </select>
                                    
                                </div>                               
                                <div class="form-group py-3 text-white">
                                    <label class="form-label" for="Propuesta"><h6>Propuesta</h6></label>
                                    <input class="form-control" type="file" id="archivo" name="archivo">
                                </div>
                                <div class="text-start">
                                    <button type ="submit" class="btn btn-success">ENVIAR PROPUESTA</button>
                                </div>                               
                            </form>                       
                        </div>
                    </div>
                </div>
            </div>
</div>
@endsection


