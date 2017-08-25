@extends('admin.layout')

@section('title')

    <h1>Configuration de l'affichage</h1>

@endsection

@section('content')

    <div class="page-content">

        {!! Form::open(['url' => 'admin/configuration', 'class' => 'form-horizontal']) !!}

            @foreach ($configurations as $configuration)

                <div class="form-group">
                    {!! Form::label($configuration->key, $configuration->name, array('class' => 'col-md-3 control-label')) !!}
                    <div class="col-md-9">
                        {!! Form::text($configuration->key, $configuration->value, array('class' => 'form-control')) !!}
                    </div>
                </div>

            @endforeach

            <div class="form-group">
                <div class="col-md-9 col-md-offset-3">
                    {!! Form::submit('Enregistrer', array('class' => 'btn btn-primary')) !!}
                </div>
            </div>

        {!! Form::close() !!}

    </div>

@endsection
