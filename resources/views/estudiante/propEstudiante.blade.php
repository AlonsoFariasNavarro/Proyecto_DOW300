@extends('templates.master')
@section('if-nombre')
    @if(Route::current()->getName()=='estudiante.indexUnico')
        <h4  class="px-2 fw-bold">Estudiantes</h4>
    @endif
@endsection
@section('if-contenido')
    @if(Route::current()->getName()=='estudiante.indexUnico')
    <li class="nav-item"><a class="nav-link active" aria-current="page" href="{{route('estudiante.index')}}">Propuestas</a></li>
    <li class="nav-item"><a class="nav-link active" aria-current="page" href="{{route('estudiante.create')}}">Agregar propuesta</a></li>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle text-black pt-2 pb-1" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Elegir Único Estudiante
        </a>
        <ul class="dropdown-menu">
            @foreach($estudiantes as $estudiante)
                <li><a class="dropdown-item" href="{{route('estudiante.indexUnico',$estudiante->rut)}}">{{$estudiante->rut}} / {{$estudiante->nombre}} {{$estudiante->apellido}}</a></li>
            @endforeach
        </ul>
    </li>
    @endif
@endsection


@section('contenido-principal')

<div class="container-fluid flex-column min-vh-100 align-items-start bg-ligh" >

    <div class="row">
        <div class="col-6 py-2 ">
            <select name="estudiantes" id="estudiantes" class="form-select">
                @foreach($estudiantes as $estudiante)
                    <option value="{{$estudiante->rut}}">{{$estudiante->rut}} / {{$estudiante->nombre}} {{$estudiante->apellido}}</option>
                @endforeach
            </select>
            @foreach($propuestas as $propuesta)
            <div class="card bg-white px-2 py-2 m-3" style="width: 50rem;">
                <div class="row">
                    <div class="col-6">
                        <div class="card-body">                            
                            <h4 class="card-title" >Propuesta  {{$propuesta->id}}</h4>
                            <div class="card-body bg-white rounded p-2">
                                <div class="card m-3">                        
                                    <div class="m-2 px-1 fw-bold">
                                        Rut del estudiante :                        
                                    </div>
                                    <div class=" px-3 ">
                                     {{$propuesta->estudiante_rut}}                      
                                    </div>
                                </div>
                                <div class="card m-3">                               
                                    @foreach($comentarios as $comentario)
                                    @if($propuesta->id==$comentario->propuesta_id)
                                        <div class="card-header bg-white">
                                            Comentarios
                                        </div>
                                        <div class="card-body bg-warning">
                                            <p class="card-text">{{$comentario->comentario}}</p>
                                        </div>
                                    @endif
                                    @endforeach 
                                </div>                               
                            </div>                                                                
                        </div>
                    

                    </div>
                    <div class="col-6">
                        <div class="card-body">
                            <h4>Ver propuesta:</h4>
                            <div>
                                <a href="{{$propuesta->documento}}" class="btn btn-sm btn-success d-flex justify-content-center "><span class="material-icons">visibility</span></a>
                            </div>
                        </div>                                       
                    </div>.
                </div>
            </div>             
            @endforeach            
        </div>

        <div class="col-6 flex-column py-2">
            <h1 >Estado de las propuestas</h1>
            <table class=" table table-bordered table-striped table-hover align-items-center bg-white">                    
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
@endsection