@extends('templates.master')

@section('if-nombre')
    @if(Route::current()->getName()=='admin.estados')
        <h4 class="fw-bold">Administrador</h4>
    @endif
@endsection

@section('if-contenido')
    @if(Route::current()->getName()=='admin.estados')
    <li class="nav-item"><a class="nav-link active" aria-current="page" href="{{route('admin.index')}}">Inicio</a></li>
    <li class="nav-item"><a class="nav-link active" aria-current="page" href="{{route('admin.estados')}}">Estados</a><li>
    @endif
@endsection

@section('hojas-estilo')
<link rel="stylesheet" href="css/custom-colors.min.css">
@endsection

@section('contenido-principal')
    <div class="container-fluid min-vh-100 d-flex flex-column">
        <div class="row">
            <div class="col py-4">
                <div class="card">
                    <table class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr>
                                <th>N° Propuesta</th>
                                <th>RUT Estudiante</th>
                                <th>Fecha</th>
                                <th>Estado</th>
                                <th>Permutar Estado</th>
                                <th colspan="2">Ver propuesta</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($propuestas as $propuesta)
                            <tr>
                                <td class="align-middle">{{$propuesta->id}}</td>
                                <td class="align-middle">{{$propuesta->estudiante_rut}}</td>
                                <td class="align-middle">{{$propuesta->fecha}}</td>
                                <td class="align-middle">
                                    @if($propuesta->estado==0)
                                        Por revisar
                                    @elseif($propuesta->estado==1)
                                        Aceptado
                                    @elseif($propuesta->estado==2)
                                        Rechazado
                                    @elseif($propuesta->estado==3)
                                        Corregir
                                    @endif
                                </td>
                                <td><a href="{{route('admin.editarEstados',$propuesta->id)}}" class=" d-flex justify-items-center"><span class="material-icons">edit</span></a></td>
                                <td><a href="{{$propuesta->documento}}">click aqui</a></td>
                            </tr>
                        </tbody>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection