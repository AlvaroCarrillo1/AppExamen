@extends('admin.template')

@section('content')

    <div class="container text-center">
        <div class="page-header">
            <h1>
                <i class="fa fa-shopping-cart"></i>
                Autoridad <small>[Editar ]</small>
            </h1>
        </div>

        <div class="row">
            <div class="col-md-offset-3 col-md-6">

                <div class="page">

                    @if (count($errors) > 0)
                        @include('admin.partials.errors')
                    @endif
                    {!! Form::model($autoridades, array('route' => array('admin.autoridades.update', $autoridades)) !!}
              

                        <input type="hidden" name="_method" value="PUT">
                       
                         <div class="form-group">
                            <label class="control-label" for="dependencia_id">Autoridades</label>
                            {!! Form::select('dependencia_id', $autoridades, null, ['class' => 'form-control']) !!}

                        </div>

                        <div class="form-group">
                            <label for="name">Nombre:</label>

                            {!!
                                Form::text(
                                    'name',
                                    null,
                                    array(
                                        'class'=>'form-control',
                                        'placeholder' => 'Ingresa el nombre...',
                                        'autofocus' => 'autofocus'
                                    )
                                )
                            !!}
                        </div>

                        <div class="form-group">
                            <label for="extract">Ap Paterno:</label>

                            {!!
                                Form::text(
                                    'primer_apellido',
                                    null,
                                    array(
                                        'class'=>'form-control',
                                        'placeholder' => '...',
                                    )
                                )
                            !!}
                        </div>
                        <div class="form-group">
                            <label for="extract">Ap Materno:</label>

                            {!!
                                Form::text(
                                    'segundo_apellido',
                                    null,
                                    array(
                                        'class'=>'form-control',
                                        'placeholder' => '....',
                                    )
                                )
                            !!}
                        </div>
                        <div class="form-group">
                            <label for="extract">Fecha Nac:</label>

                            {!!
                                Form::text(
                                    'fecha_nacimiento',
                                    null,
                                    array(
                                        'class'=>'form-control',
                                        'placeholder' => '....',
                                    )
                                )
                            !!}
                        </div>

                        <div class="form-group">
                            <label for="extract">Email:</label>

                            {!!
                                Form::text(
                                    'email',
                                    null,
                                    array(
                                        'class'=>'form-control',
                                        'placeholder' => '....',
                                    )
                                )
                            !!}
                        </div>

                        

                      

                        
                        <div class="form-group">
                            {!! Form::submit('Actualizar', array('class'=>'btn btn-primary')) !!}
                            <a href="{{ url('admin/autoridades') }}" class="btn btn-warning">Cancelar</a>
                    </div>

                    {!! Form::close() !!}

                </div>

            </div>
        </div>

        <div>

        </div>

    </div>

@stop