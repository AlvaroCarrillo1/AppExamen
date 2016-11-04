@extends('admin.template')

@section('content')

	<div class="container text-center">
		<div class="page-header">
			<h1>
				<i class="fa fa-info"></i>
				Dependencias <a href="{{ url('admin/dependencias/create') }}" class="btn btn-warning"><i class="fa fa-plus-circle"></i>Add  </a>
                
			</h1>
		</div>
		<div class="page">
			<div class="table-responsive">
				<table class="table table-striped table-bordered table-hover">
					<thead>
						<tr>
							<th>Nombre</th>
							<th>UUID</th>
							<th>Editar</th>
							<th>Eliminar</th>
							
						</tr>
					</thead>
					<tbody>
						@foreach($dependencias as $dependencia)
							<tr>
								<td>{{ $dependencia->nombre }}</td>
								<td>{{ $dependencia->uuid }}</td>
								<td><a href="#" class="btn btn-primary">
										<i class="fa fa-pencil-square"></i>
									</a></td>
								<td>
									{!! Form::open(['route' => ['admin.dependencias.destroy', $dependencia->id]]) !!}
        								<input type="hidden" name="_method" value="DELETE">
        								<button onClick="return confirm('Eliminar registro?')" class="btn btn-danger">
        									<i class="fa fa-trash-o"></i>
        								</button>
        							{!! Form::close() !!}
								</td>
								
								
								
							</tr>
						@endforeach
					</tbody>
				</table>
			</div>

			             <?php echo $dependencias->render(); ?>

		</div>
	</div>
	
@stop