@extends('templates.master')
@section('titulo','estado')
@section('body')
<div class="container d-flex  justify-content-center">    
        <div class="row">
            <div class="col-12 px-6 py-5 ">                
                <div class="card" >
                    <div class="card-body" style="background-color:#5db4b9 ;">
                        <form>
                            <div class="title">
                                <h1>Estado de las propuestas</h1>
                                                            
                            </div>

                            @foreach()
                            <table class="table table-bordered table-striped table-hover align-items-center">
                                <thead>
                                    <tr>                                                                            
                                        <th>N° DE PROPUESTA</th>
                                        <th>ESTADO DE LA PROPUESTA</th>                                        
                                    </tr>
                                </thead>
                                <tbody>                                   
                                    <tr>                                                                               
                                        <td class="align-middle">1</td>
                                        <td class="align-middle">2</td>

                                    </tr>                                    
                                </tbody>
                            </table>
                            @endforeach
                                                       
                        </div>
                    
                    </div>
                </div>
            </div>
    </div>

@endsection
