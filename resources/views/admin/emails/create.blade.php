@extends('admin.layout')

@section('title')

    <div class="page_header clearfix">
        <div class="pull-left">
            <h1>Emails - ajout</h1>
        </div>
    </div>

@endsection

@section('content')

    <div class="page-content">

        {!! Form::open(['url' => 'admin/emails/store', 'class' => 'form-horizontal']) !!}

            <div class="form-group">
                {!! Form::label('email', 'Adresse E-mail', array('class' => 'col-md-3 control-label')) !!}
                <div class="col-md-9">
                    {!! Form::text('email', null, array('class' => 'form-control')) !!}
                </div>
            </div>

            <div class="form-group">
                {!! Form::label('ip_address', 'Adresse IP', array('class' => 'col-md-3 control-label')) !!}
                <div class="col-md-9">
                    {!! Form::text('ip_address', null, array('class' => 'form-control')) !!}
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-9 col-md-offset-3">
                    {!! Form::submit('Enregistrer', array('class' => 'btn btn-primary')) !!}
                </div>
            </div>

        {!! Form::close() !!}

    </div>

@endsection
