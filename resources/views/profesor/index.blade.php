
@extends('templates.master')

@section('if-nombre')
    @if(Route::current()->getName()=='profesor.index')
        <h4 class="fw-bold">Profesor</h4>
    @endif
@endsection

@section('if-contenido')
    @if(Route::current()->getName()=='profesor.index')
    <li class="nav-item"><a class="nav-link active" aria-current="page" href="{{route('profesor.index')}}">Inicio</a></li>
    <li class="nav-item"><a class="nav-link active" aria-current="page" href="{{route('profesor.comentarios')}}">Comentarios</a></li>
    @endif
@endsection

@section('contenido-principal')
<div class="container-fluid min-vh-100 d-flex flex-column " style="background-color: #05334F;">   
    <div class="row">
        <div class="col py-4">
            <div class="card" style="background-color: #05334F;">
                <table class="table table-bordered table-striped table-hover" style="border: solid #05334F;">
                    <thead class="bg-secondary text-white">
                        <tr>
                            <th>N° Propuesta</th>
                            <th>Rut alumno</th>
                            <th>Fecha</th>
                            <th>Estado</th>
                            <th >Ver propuesta</th>
                            <th>Comentar</th>
                        </tr>
                    </thead>
                    <tbody class="bg-ligh">
                        @foreach ($propuestas as $propuesta)
                            <tr>
                                <td class="align-middle">{{$propuesta->id}}</td>
                                <td class="align-middle">{{$propuesta->estudiante_rut}}</td>                            
                                <td class="align-middle">{{$propuesta->fecha}}</td>
                                @if($propuesta->estado==0)
                                <td class="align-middle">Por revisar</td>
                                @elseif($propuesta->estado==1)
                                <td class="align-middle">Aceptado</td>
                                @elseif($propuesta->estado==2)
                                <td class="align-middle">Rechazado</td>
                                @elseif($propuesta->estado==3)
                                <td class="align-middle">Corregir</td>
                                @endif
                                <td><a href="#">click aqui</a></td>
                                <td>
                                    <a href="{{route('profesor.comentar',$propuesta->id)}}" class="btn btn-sm btn-success p-0 my-0"><span class="material-icons">add</span></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                    
                </table>
            </div>
        </div>   
</div>
@endsection