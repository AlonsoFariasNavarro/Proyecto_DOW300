@extends('templates.master')

@section('hojas-estilo')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
@endsection

@section('contenido-principal')
    <div class="container-fluid   min-vh-100 d-flex flex-column">
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
                                <th>Editar</th>
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
                                <td><a href="#" class=" d-flex justify-items-center"><span class="material-icons">edit</span></a></td>
                                <td><a href="{{$propuesta->documento}}">click aqui</a></td>
                            </tr>
                        </tbody>
                        @endforeach
                    </table>
                </div>
            </div>
    </div>

@endsection