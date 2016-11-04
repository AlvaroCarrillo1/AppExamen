@extends('admin.template')

@section('content')

    <div class="container text-center">
        <div class="page-header">
            <h1>Autoridades
                <a href="{{ url('admin/autoridades/create')}}" class="btn btn-warning"><i class="fa fa-plus-circle"></i>&nbsp;Agregar +</a>

                <form href="{{route('admin.autoridades.index')}}" class="navbar-form navbar-left pull-right" role="search"  method="GET">
                    <div class="form-group">
                        <input class="form-control" name="name" type="text" placeholder="Pon el nombre" required="">
                    </div>
                    <button type="submit" class="btn btn-default">Buscar</button>
                </form>

            </h1>

        </div>
        <div class="page">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                    <tr>
                        
                        <th>Nombre</th>
                        <th>App Paterno</th>
                        <th>App Materno</th>
                        <th>Fecha de nacimiento</th>
                        <th>Email</th>
                        <th>Modificar</th>
                        <th>Eliminar</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach($autoridades as  $autoridad): ?>
                    <tr>

                            
                           
                            <td>{{$autoridad->name}}</td>
                            <td>{{$autoridad->primer_apellido}}</td>
                            <td>{{$autoridad->segundo_apellido}}</td>
                            <td>{{$autoridad->fecha_nacimiento}}</td>
                            <td>{{$autoridad->email}}</td>

                            

                            <td>
                                <a href="{{ route('admin.autoridades.edit', $autoridad->id) }}" class="btn btn-primary">
                                    <i class="fa fa-pencil-square-o"></i>
                                </a>
                            </td>
                            <td>
                                {!! Form::open(['route' => ['admin.autoridades.destroy', $autoridad->id]]) !!}
                                <input type="hidden" name="_method" value="DELETE">
                                <button onClick="return confirm('Eliminar registro?')" class="btn btn-danger">
                                    <i class="fa fa-trash-o"></i>
                                </button>
                                {!! Form::close() !!}
                            </td>
                        </tr>
                    <?php endforeach ?>
                    </tbody>
                </table>
            </div>
            <hr>
             <?php echo $autoridades->render(); ?>
        </div>
    </div>



@stop