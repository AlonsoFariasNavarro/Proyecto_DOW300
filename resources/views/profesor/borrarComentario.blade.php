@extends('templates.master')

@section('if-nombre')
    @if(Route::current()->getName()=='profesor.deleteConfirm')
        <h4 class="fw-bold">Profesor</h4>
    @endif
@endsection
@section('if-contenido')
    @if(Route::current()->getName()=='profesor.deleteConfirm')
    <li class="nav-item"><a class="nav-link active" aria-current="page" href="{{route('profesor.index')}}">Inicio</a></li>
    <li class="nav-item"><a class="nav-link active" aria-current="page" href="{{route('profesor.comentarios')}}">Comentarios</a></li>
    @endif
@endsection

@section('contenido-principal')
<div class="container-fluid min-vh-100" style="background-color:#051f31;">
        <div class="row">
            <div class="col-3"></div>
            <div class="col d-flex flex-column py-5">
                <div class="card">
                    <div class="card-header d-flex justify-content-center">
                        <p>Confirmar Borrado de Comentario</p>
                    </div>
                    <div class="card-body">
                        <form action="{{route('profesor.deleteComentario',$profesor->rut)}}" method="POST">
                            @method('delete')
                            @csrf
                            <label for="id">Propuesta ID {{$propuesta->id}}</label>
                            <input type="text" for="id" name="id" id="id" class="form-control" value="{{$propuesta->id}}" hidden>
                            <input for="id" id="id" name="id" class="form-control" type="text" value="{{$propuesta->id}}" disabled>
                            <label for="rut">RUT Profesor</label>
                            <input for="rut" id="rut" name="rut" class="form-control" type="text" value="{{$profesor->rut}} / {{$profesor->nombre}} {{$profesor->apellido}}" disabled>
                            <input for="rut" id="rut" name="rut" class="form-control" type="text" value="{{$profesor->rut}}" hidden>

                            <label for="comentario" class="form-label">Comentario</label>
                            <input class="form-control" type="text" name="comentario" value="{{$comentario}}" disabled>
                            <input class="form-control" type="text" name="comentario" value="{{$comentario}}" hidden>
                            
                            <div class="d-flex justify-content-end pt-4">
                                <a href="{{route('profesor.index')}}" class="btn btn-warning">Cancelar</a>
                                <button class="btn btn-success" type="submit">Confirmar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-3"></div>
        </div>
    </div>
@endsection