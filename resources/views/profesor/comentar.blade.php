@extends('templates.master')

@section('if-nombre')
    @if(Route::current()->getName()=='profesor.comentar')
        <h4 class="fw-bold">Profesor</h4>
    @endif
@endsection
@section('if-contenido')
    @if(Route::current()->getName()=='profesor.comentar')
    <li class="nav-item"><a class="nav-link active" aria-current="page" href="{{route('profesor.index')}}">Inicio</a></li>
    <li class="nav-item"><a class="nav-link active" aria-current="page" href="{{route('profesor.comentarios')}}">Comentarios</a></li>
    @endif
@endsection


@section('contenido-principal')
<div class="container-fluid min-vh-100" style="background-color:#051f31;">
        <div class="row">
            <div class="col-3"></div>
            <div class="col d-flex flex-column py-5">
                <div class="card">
                    <div class="card-header d-flex justify-content-center">
                        <p>Agregar Comentario</p>
                    </div>
                    <div class="card-body">
                        <form action="{{route('profesor.addComentario',$propuesta->id)}}" method="POST">
                            @csrf
                            <div>
                                <label class="form-label" for="rut">Seleccionar Profesor</label>
                                <select id="rut" name="rut" class="form-control">
                                    @foreach($profesores as $profesor)
                                        <option value="{{$profesor->rut}}">{{$profesor->nombre}} {{$profesor->apellido}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div>
                                <label for="id">Propuesta ID</label>
                                <input for="id" id="id" name="id" class="form-control" type="text" value="{{$propuesta->id}}" disabled>
                            </div>
                            <div class="mb-3">
                                    <label for="comentario" class="form-label">Comentario</label>
                                    <div class="form-floating">
                                        <textarea class="form-control" placeholder="Leave a comment here" id="comentario" name="comentario"></textarea>                                
                                    </div>
                                </div>
                            <div class="d-flex justify-content-end pt-4">
                                <button class="btn btn-warning px-2" type="reset">Cancelar</button>
                                <button class="btn btn-success" type="submit">Confirmar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-3"></div>
        </div>
    </div>
<!-- <div class="container-fluid min-vh-100 d-flex flex-column  align-items-center bg-primary">
    <div class="row m-5">
        <div class="col rounded" style="height: 36rem; width: 33rem;">
            <div class="row ">
                <div class="col d-flex flex-column align-items-center py-5">                   
                    <div class="col py-3">
                        <h4>Comentar propuesta</h4>
                    </div>
                    <div class="col py-5 " style="width: 30rem;">
                        <div class="card-body ">
                            <form method="POST" action="#">
                                @method('PUT')
                                @csrf
                                <label class="form-label" for="equipo">Seleccionar Profesor</label>
                                <select id="profesor" name="" class="form-control">      
                                    @foreach($profesores as $profesor)                             
                                    <option value="">{{$profesor->nombre}} {{$profesor->apellido}}</option>  
                                    @endforeach                                 
                                </select>
                                <div class="mb-3">
                                    <label for="id" class="form-label">N° Propuesta</label>
                                    <input type="text" id="id" name="id" class="form-control" value="N°{{$propuesta->id}}">
                                </div>
                                <div class="mb-3">
                                    <label for="comentario" class="form-label">Comentario</label>
                                    <div class="form-floating">
                                        <textarea class="form-control" placeholder="Leave a comment here" id="comentario"></textarea>                                
                                    </div>
                                </div>  
                            </form>                         
                                </div>
                                    <button type="reset" class="btn btn-warning">Cancelar</button>
                                    <a href="{{route('profesor.index')}}" class="btn btn-success">Agregar Comentario</a>
                                    <button type="submit" class="btn btn-success">Agregar comentario</button>  
                                </div>  
                            </div>                                                                                                                                                                         
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->
@endsection