@extends('templates.master')
{{-- PARA SUBIR ARCHIVOS PROPIEDAD DE FROM ENCTYPE="MULTIPART/FORM-DATA"
$propuesta->documento = $request->documento->store('public/propuestas') --}}
@section('if-nombre')
    @if(Route::current()->getName()=='admin.index')
        <H4 class="fw-bold">Administrador</H4>
    @endif
@endsection

@section('if-contenido')
    @if(Route::current()->getName()=='admin.index')
    <li class="nav-item"><a class="nav-link active" aria-current="page" href="{{route('admin.index')}}">Inicio</a></li>
    <li class="nav-item"><a class="nav-link active" aria-current="page" href="{{route('admin.estados')}}">Estados</a><li>
    @endif
@endsection

@section('contenido-principal')
    <div class="container-fluid min-vh-100" style="background-color: #05334F;">
        <div class="row">
            <div class="col py-5">
                <div class="card border-black rounded">
                    <div class="card-header d-flex justify-content-center pt-3 bg-secondary text-white">
                        <div class="col"></div>
                        <h3>Equipo de Profesores</h3>
                        <div class="col d-flex justify-content-end">
                            <a href="{{route('admin.createP')}}" class="btn btn-primary pt-2"><h6>Agregar Profesor</h6></a>
                        </div>
                    </div>
                    <div class="card-body bg-ligh">
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
                                                <form action="{{route('profesor.destroy',$profesor->rut)}}" method="POST">
                                                    @method('delete')
                                                    @csrf
                                                    <button class="btn btn-sm btn-danger pt-2 my-0" type="submit"><span class="material-icons">delete</span></button>
                                                </form>
                                                <form action="{{ route('admin.edit',$profesor->rut) }}">
                                                    @csrf
                                                    <button class="btn btn-sm btn-warning text-white mx-2 my-0 pt-2" type="submit"><span class="material-icons">edit</span></button>
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
                <div class="card border-black">
                    <div class="card-header d-flex justify-content-center pt-3 text-white" style="background-color: #084E79;">
                        <div class="col"></div>
                        <h3>Estudiantes</h3>
                        <div class="col d-flex justify-content-end"><a href="{{route('admin.createE')}}" class="btn pt-2 bg-primary text-white"><h6>Agregar Estudiante</h6></a></div>
                    </div>
                    <div class="card-body bg-ligh">
                    <table class="table table-bordered table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>RUT</th>
                                    <th>Nombre</th>
                                    <th>Apellido</th>
                                    <th>E-Mail</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($estudiantes as $estudiante)
                                    <tr>
                                        <td class="aling-middle">{{$estudiante->rut}}</td>
                                        <td class="aling-middle">{{$estudiante->nombre}}</td>
                                        <td class="aling-middle">{{$estudiante->apellido}}</td>
                                        <td class="aling-middle">{{$estudiante->email}}</td>
                                        <td>
                                            <div class="col d-flex m-2" style="">
                                                <form action="{{route('estudiante.destroy',$estudiante->rut)}}" method="POST">
                                                    @method('delete')
                                                    @csrf
                                                    <button class="btn btn-sm btn-danger pt-2 my-0" type="submit"><span class="material-icons">delete</span></button>
                                                </form>
                                                <form action="{{route('estudiante.edit',$estudiante->rut)}}">
                                                    @csrf
                                                    <button class="btn btn-sm btn-warning text-white mx-2 my-0 pt-2" type="submit"><span class="material-icons">edit</span></button>
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