@extends('templates.master')

@section('if-nombre')
    @if(Route::current()->getName()=='profesor.comentarios')
        <h4 class="fw-bold">Profesor</h4>
    @endif
@endsection
@section('if-contenido')
    @if(Route::current()->getName()=='profesor.comentarios')
    <li class="nav-item"><a class="nav-link active" aria-current="page" href="{{route('profesor.index')}}">Inicio</a></li>
    <li class="nav-item"><a class="nav-link active" aria-current="page" href="{{route('profesor.comentarios')}}">Comentarios</a></li>
    @endif
@endsection

@section('contenido-principal')
<div class="container-fluid   min-vh-100 d-flex flex-column" style="background-color: #05334F;">   
    <div class="row">
        <div class="col py-4">
            <div class="card" style="background-color: #05334F;">
                <table class="table table-bordered table-striped table-hover" style="border: solid #05334F;">
                    <thead class="bg-secondary text-white">
                        <tr>
                            <th>Propuesta ID</th>
                            <th>RUT Profesor</th>
                            <th>Fecha</th>
                            <th>Comentario</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody class="bg-ligh">
                        @foreach($propuestas as $propuesta)
                            <tr>
                                <td class="align-middle">{{$propuesta->propuesta_id}}</td>
                                <td class="align-middle">{{$propuesta->profesor_rut}}</td>                       
                                <td class="align-middle">{{$propuesta->fecha}}</td>
                                <td class="align-middle">{{$propuesta->comentario}}</td>
                                <form action="{{route('profesor.deleteConfirm',$propuesta->propuesta_id)}}" hidden>
                                    @csrf
                                    <input type="text" hidden name="id" value="$propuesta->propuesta_id">
                                    <input type="text" hidden name="comentario" value="{{$propuesta->comentario}}">
                                    <input type="text" hidden name="rut" value="{{$propuesta->profesor_rut}}">
                                    <td><button class="btn btn-sm btn-danger p-0 my-0" type="submit"><span class="material-icons">delete</span></button></td>
                                </form>
                            </tr>
                        @endforeach
                    </tbody>
                    
                </table>
            </div>
        </div>   
</div>
@endsection