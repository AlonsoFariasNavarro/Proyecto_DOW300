@extends('templates.master')

@section('if-nombre')
    @if(Route::current()->getName()=='admin.editarEstados')
        <h4 class="fw-bold">Administrador</h4>
    @endif
@endsection

@section('if-contenido')
    @if(Route::current()->getName()=='admin.editarEstados')
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
                        <p>Editar Propuesta</p>
                    </div>
                    <div class="card-body">
                        <form action="{{route('admin.updateEstados',$propuesta->id)}}" method="POST">
                            @method('PUT')
                            @csrf
                            <div>
                                <label for="id">N° Propuesta</label>
                                <input for="id" id="id" name="id" class="form-control" type="text" value="{{$propuesta->id}}" disabled>
                            </div>
                            <div>
                                <label for="estudiante_rut">RUT Estudiante</label>
                                <input for="estudiante_rut" id="estudiante_rut" name="estudiante_rut" class="form-control" type="text" value="{{$propuesta->estudiante_rut}}" disabled>
                            </div>
                            <div>
                                <label for="fecha">Fecha</label>
                                <input for="fecha" id="fecha" name="fecha" class="form-control" type="text" value="{{$propuesta->fecha}}" disabled>
                            </div>
                            <div>
                                <label for="estado">Estado</label>
                                <select name="estado" id="estado" class="form-control">
                                    <option value="0" @if($propuesta->estado==0) selected @endif>Por Revisar</option>
                                    <option value="1" @if($propuesta->estado==1) selected @endif>Aceptado</option>
                                    <option value="2" @if($propuesta->estado==2) selected @endif>Rechazado</option>
                                    <option value="3" @if($propuesta->estado==3) selected @endif>Corregir</option>
                                </select>
                            </div>
                            <div class="d-flex justify-content-end pt-4">
                                <a href="{{route('admin.estados')}}" class="btn btn-warning">Cancelar</a>
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