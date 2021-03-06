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

        {!! Form::open(['url' => 'saucisson/emails/update/' . $email->id, 'class' => 'form-horizontal']) !!}

            <div class="form-group">
                {!! Form::label('email', 'Adresse E-mail', array('class' => 'col-md-3 control-label')) !!}
                <div class="col-md-9">
                    {!! Form::text('email', $email->email, array('class' => 'form-control')) !!}
                </div>
            </div>

            <div class="form-group">
                {!! Form::label('ip_address', 'Adresse IP', array('class' => 'col-md-3 control-label')) !!}
                <div class="col-md-9">
                    {!! Form::text('ip_address', $email->ip_address, array('class' => 'form-control')) !!}
                </div>
            </div>

            <div class="form-group">
                {!! Form::label('sended', 'Envoyé', array('class' => 'col-md-3 control-label')) !!}
                <div class="col-md-9">
                    {!! Form::checkbox('sended', $email->sended, true, array('class' => 'form-control')) !!}
                </div>
            </div>

            <div class="form-group">
                {!! Form::label('readed', 'Accédé', array('class' => 'col-md-3 control-label')) !!}
                <div class="col-md-9">
                    {!! Form::checkbox('readed', $email->readed, true, array('class' => 'form-control')) !!}
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
