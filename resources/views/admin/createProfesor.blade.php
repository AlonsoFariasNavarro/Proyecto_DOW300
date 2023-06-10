@extends('templates.master')

@section('if-nombre')
    @if(Route::current()->getName()=='admin.createP')
        <h4 class="fw-bold">Administrador</h4>
    @endif
@endsection

@section('if-contenido')
    @if(Route::current()->getName()=='admin.createP')
    <li class="nav-item"><a class="nav-link active" aria-current="page" href="{{route('admin.index')}}">Inicio</a></li>
    <li class="nav-item"><a class="nav-link active" aria-current="page" href="{{route('admin.estados')}}">Estados</a><li>
    @endif
@endsection

@section('contenido-principal')
    <div class="container-fluid min-vh-100" style="background-color:#051f31;">
        <div class="row">
            <div class="col-3"></div>
            <div class="col d-flex flex-column py-5">
                <div class="card">
                    <div class="card-header d-flex justify-content-center">
                        <p>Agregar Profesor</p>
                    </div>
                    <div class="card-body">
                        <form action="{{route('profesor.store')}}" method="POST">
                            @csrf
                            <div>
                                <label for="rut">RUT</label>
                                <input for="rut" id="rut" name="rut" class="form-control" type="text" >
                            </div>
                            <div>
                                <label for="nombre">Nombre</label>
                                <input for="nombre" id="nombre" name="nombre" class="form-control" type="text" >
                            </div>
                            <div>
                                <label for="apellido">Apellido</label>
                                <input for="apellido" id="apellido" name="apellido" class="form-control" type="text">
                            </div>
                            <div class="d-flex justify-content-end pt-4">
                                <a href="{{route('admin.index')}}" class="btn btn-warning">Cancelar</a>
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