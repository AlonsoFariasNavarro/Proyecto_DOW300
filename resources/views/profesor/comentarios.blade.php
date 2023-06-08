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
<div class="container-fluid   min-vh-100 d-flex flex-column">   
    <div class="row">
        <div class="col py-4">
            <div class="card">
                <table class="table table-bordered table-striped table-hover">
                    <thead>
                        <tr>
                            <th>Propuesta ID</th>
                            <th>RUT Profesor</th>
                            <th>Fecha</th>
                            <th>Comentario</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($propuestas as $propuesta)
                            <tr>
                                <td class="align-middle">{{$propuesta->propuesta_id}}</td>
                                <td class="align-middle">{{$propuesta->profesor_rut}}</td>                       
                                <td class="align-middle">{{$propuesta->fecha}}</td>
                                <td class="align-middle">{{$propuesta->comentario}}</td>
                                <td>
                                    <form action="#" method='POST'>
                                        @method('DELETE')
                                        @csrf
                                        <button class="btn btn-sm btn-danger p-0 my-0" type="submit"><span class="material-icons">delete</span></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                    
                </table>
            </div>
        </div>   
</div>
@endsection