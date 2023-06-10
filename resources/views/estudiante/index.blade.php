@extends('templates.master')

@section('if-nombre')
    @if(Route::current()->getName()=='estudiante.index')
        <h4  class="px-2 fw-bold">Estudiantes</h4>
    @endif
@endsection
@section('if-contenido')
    @if(Route::current()->getName()=='estudiante.index')
    <li class="nav-item"><a class="nav-link active" aria-current="page" href="{{route('estudiante.index')}}">Propuestas</a></li>
    <li class="nav-item"><a class="nav-link active" aria-current="page" href="{{route('estudiante.create')}}">Agregar propuesta</a></li>
    @endif
@endsection


@section('contenido-principal')
<div class="container-fluid flex-column min-vh-100 align-items-start" style="background-color: #05334F;" >
    <div class="row">
        <div class="col py-2 ">
            @foreach($propuestas as $propuesta)
                <div class="card bg-white px-2 py-2 m-3 " style="width: 50rem;">
                    <div class="row ">
                        <div class="col-6 bg-secondary">
                            <div class="card-body bg-secondary">                            
                                <div class="card-body bg-white rounded p-2">                        
                                        <div class="m-2 px-1">
                                            <h4 class="card-title" >Propuesta {{$propuesta->id}}</h4>
                                            <span class="fw-bold">RUT del estudiante :</span>
                                            {{$propuesta->estudiante_rut}}                      
                                        </div>
                                        <div class="m-2 px-1">
                                            <span class="fw-bold">Fecha :</span>
                                            {{$propuesta->fecha}}                      
                                    </div>                              
                                </div>                                                                
                            </div>
                        </div>
                        <div class="col-6 bg-secondary">
                            <div class="card m-3 ">   
                                <div class="card-header bg-white align-middle text-center">
                                    <h6>Comentarios</h6>
                                </div>                            
                                <div class="card-body ">
                                    <div class="d-flex flex-column justify-content-center">
                                        @foreach($comentarios as $comentario)
                                            @if($propuesta->id==$comentario->propuesta_id)
                                            <table class="align-middle text-center border-end border-top border-start table-striped table-hover">
                                                <tbody>
                                                    <td>{{$comentario->comentario}}</td>
                                                </tbody>
                                            </table>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                            </div>                                        
                        </div>
                    </div>
                </div>             
            @endforeach            
        </div>
        <div class="col flex-column py-2">
            <div class="card mt-3">
                <card class="card-header align-middle text-center">
                    <h3>Estado de las propuestas</h3>
                </card>
                <div class="card-body bg-secondary">
                    <table class=" table table-bordered table-striped table-hover align-items-center bg-ligh" style="border: solid #05334F;">
                        <thead>
                            <tr>
                                <th class="text-center">N° DE PROPUESTA</th>
                                <th class="text-center">ESTADO DE LA PROPUESTA</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($propuestas as $propuesta)
                            <tr>
                                <td class="align-middle text-center"> {{$propuesta->id}}</td>
                                @if($propuesta->estado==0)
                                <td class="align-middle text-center">Por revisar</td>
                                @endif
                                @if($propuesta->estado==1)
                                <td class="align-middle text-center">Aceptado</td>
                                @endif
                                @if($propuesta->estado==2)
                                <td class="align-middle text-center">Rechazado</td>
                                @endif
                                @if($propuesta->estado==3)
                                <td class="align-middle text-center">Corregir</td>
                                @endif
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