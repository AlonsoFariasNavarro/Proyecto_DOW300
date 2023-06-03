@extends('templates.master')

@section('hojas-estilo')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
@endsection

@section('contenido-principal')
    <div class="container d-flex align-items-center justify-content-center">    
            <div class="row-12">
                <div class="col-12 px-6 py-5 ">
                    <div class="card" >
                        <div class="card-body" style="background-color:#5db4b9 ;">
                            <form>
                                <div class="title">
                                    <h1>Ingresar una propuesta</h1>
                                </div>
                                <div class="form-group py-3">
                                <label class="form-label" for="">Rut del estudiante </label>
                                <input type="text" class="form-control" id="">
                                </div>
                                
                                <div class="form-group py-3">
                                <label class="form-label " for="Propuesta">Propuesta</label>
                                <textarea class="form-control" id="Propuesta" rows="5"></textarea>
                                </div>
                            </form>
                            <div class="text-end py-3">                        
                                <button class="btn btn-waring" type="reset" >Cancelar</button>
                                <button class="btn btn-success" type="submit" >Agregar Propuesta</button>
                            </div>
                        
                        </div>
                    </div>
                </div>
            </div>
    </div>
@endsection


