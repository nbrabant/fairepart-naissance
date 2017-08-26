@extends('admin.layout')

@section('title')

    <div class="page_header clearfix">
        <div class="pull-left">
            <h1>Emails</h1>
        </div>
        <div class="pull-right">
            <a href="{{ url('/emails/create') }}" class="btn btn-sm btn-success">
				<span class="glyphicon glyphicon-plus"></span> Ajouter un mail
			</a>
        </div>
    </div>


@endsection

@section('content')

    <div class="page-content">

    </div>

@endsection
