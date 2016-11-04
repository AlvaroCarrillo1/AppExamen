@extends('admin.template')

@section('content')

    <div class="container text-center">
        <div class="page-header">
            <h1> Tribunal - Panel de Administración</h1>
        </div>
        
        <h2>Bienvenido(a) {{ Auth::user()->user }} al Panel de administración.</h2><hr>
        
        <div class="row">
            
        <div class="col-md-6">
                <div class="panel">
                    <i class="fa fa-list-alt icon-home fa-3x"></i>
                    <a href="{{url('admin/autoridades') }}" class="btn btn-warning btn-block btn-home-admin">Autoridades</a>
                </div>
            </div> 

            <div class="col-md-6">
                <div class="panel">
                    <i class="fa fa-list-alt icon-home fa-3x"></i>
                    <a href="{{url('admin/dependencias') }}" class="btn btn-warning btn-block btn-home-admin">Dependencias</a>
                </div>
            </div> 

            
            </div>
                    
        </div>
        
    </div>
    <hr>

@stop