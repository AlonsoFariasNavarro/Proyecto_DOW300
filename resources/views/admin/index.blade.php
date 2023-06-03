@extends('templates.master')

@section('hojas-estilo')
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
@endsection

@section('contenido-principal')
    <div class="container-fluid min-vh-100" style="background-color:#051f31;">
        <div class="row">
            <div class="col py-5">
                <div class="card">
                    <div class="card-header d-flex justify-content-center pt-3">
                        <p>Equipo de Profesores</p>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>RUT</th>
                                    <th>Nombre</th>
                                    <th>Apellido</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody class="p-0">
                                @foreach($profesores as $profesor)
                                    <tr>
                                        <td class="aling-middle">{{$profesor->rut}}</td>
                                        <td class="aling-middle">{{$profesor->nombre}}</td>
                                        <td class="aling-middle">{{$profesor->apellido}}</td>
                                        <td>
                                            <div class="col d-flex m-2" style="">
                                                <form action="#">
                                                    @csrf
                                                    <button class="btn btn-sm btn-danger p-0 my-0" type="submit"><span class="material-icons">delete</span></button>
                                                </form>
                                                <form action="#">
                                                    @csrf
                                                    <button class="btn btn-sm btn-warning text-white mx-2 my-0 p-0" type="submit"><span class="material-icons">edit</span></button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col py-5">
                <div class="card">
                    <div class="card-header d-flex justify-content-center pt-3">
                        <p>Estudiantes</p>
                    </div>
                    <div class="card-body">
                    <table class="table table-bordered table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>RUT</th>
                                    <th>Nombre</th>
                                    <th>Apellido</th>
                                    <th>E-Mail</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($estudiantes as $estudiante)
                                    <tr>
                                        <td class="aling-middle">{{$estudiante->rut}}</td>
                                        <td class="aling-middle">{{$estudiante->nombre}}</td>
                                        <td class="aling-middle">{{$estudiante->apellido}}</td>
                                        <td class="aling-middle">{{$estudiante->email}}</td>
                                        <td class="aling-middle">{{$propuesta->estado}}</td>
                                        <td>
                                            <div class="col d-flex m-2" style="">
                                                <form action="#">
                                                    @csrf
                                                    <button class="btn btn-sm btn-danger p-0 my-0" type="submit"><span class="material-icons">delete</span></button>
                                                </form>
                                                <form action="#">
                                                    @csrf
                                                    <button class="btn btn-sm btn-warning text-white mx-2 my-0 p-0" type="submit"><span class="material-icons">edit</span></button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection