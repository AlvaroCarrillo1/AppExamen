@extends('admin.template')

@section('content')

    <div class="container text-center">
        <div class="page-header">
            <h1>
                <i class="fa fa-info"></i>
                Autoridades <small>[Agregar autoridad]</small>
            </h1>
        </div>

        <div class="row">
            <div class="col-md-offset-3 col-md-6">

                <div class="page">

                    @if (count($errors) > 0)
                        @include('admin.partials.errors')
                    @endif

                        {!! Form::open(['route' => 'admin.autoridades.store', 'enctype' => 'multipart/form-data','files' => true, 'method'=> 'POST' ]) !!}

                      

                          <div class="form-group">
                            <label class="control-label" for="dependencias_id">Dependencias</label>

                            {!! Form::select('dependencias_id', $dependencias, null, ['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            <label for="name">Cargo:</label>

                            {!!
                                Form::text(
                                    'cargo',
                                    null,
                                    array(
                                        'class'=>'form-control',
                                        'placeholder' => 'Ingresa el cargo...',
                                        'autofocus' => 'autofocus'
                                    )
                                )
                            !!}
                        </div>

                        <div class="form-group">
                            <label for="extract">Nombre:</label>

                            {!!
                                Form::text(
                                    'nombre',
                                    null,
                                    array(
                                        'class'=>'form-control',
                                        'placeholder' => 'Ingresa el nombre..',
                                    )
                                )
                            !!}
                        </div>

                        <div class="form-group">
                            <label for="description">App Paterno:</label>

                            {!!
                                Form::text(
                                    'primer_apellido',
                                    null,
                                    array(
                                        'class'=>'form-control',
                                        'placeholder' => 'Ingresa el app paterno...',
                                    )
                                )
                            !!}
                        </div>

                        <div class="form-group">
                            <label for="price">App Materno:</label>

                            {!!

                                Form::text(
                                    'segundo_apellido',
                                    null,
                                    array(
                                        'class'=>'form-control',
                                        'placeholder' => 'Ingresa el app materno...',
                                    )
                                )
                            !!}
                        </div>

                        <div class="form-group">
                            <label for="image">Fecha Nac: </label>
                              {!!

                               Form::text(
                                   'fecha_nacimiento',
                                   null,
                                   array(
                                       'class'=>'form-control',
                                       'placeholder' => 'Ingresa tu fecha de Nacimiento',

                                   )
                               )
                           !!}
                        </div>

                        <div class="form-group">
                            <label for="image">UIID: </label>
                              {!!

                               Form::text(
                                   'uiid',
                                   null,
                                   array(
                                       'class'=>'form-control',
                                       'placeholder' => 'Ingresa el UIDD',

                                   )
                               )
                           !!}
                        </div>
                        

                        <div class="form-group">
                            {!! Form::submit('Guardar', array('class'=>'btn btn-primary')) !!}
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