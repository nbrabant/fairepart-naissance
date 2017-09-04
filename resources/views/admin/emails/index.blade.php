@extends('admin.layout')

@section('title')

    <div class="page_header clearfix">
        <div class="pull-left">
            <h1>Emails</h1>
        </div>
        <div class="pull-right">
            <a href="{{ url('/saucisson/emails/create') }}" class="btn btn-sm btn-success">
				<span class="glyphicon glyphicon-plus"></span> Ajouter un email
			</a>
        </div>
    </div>

@endsection

@section('content')

    <div class="page-content">

        @if(empty($emails))
            <div class="alert alert-warning">
                Aucune donnée.
            </div>
        @else
            <table class="table">
                <tr>
                    <th>Id</th>
                    <th>Email</th>
                    <th>Adresse IP</th>
                    <th>Envoyé</th>
                    <th>Accédé</th>
                    <th>Actions</th>
                </tr>
                <tbody>
                    @foreach($emails as $email)
                        <tr>
                            <td>{{ $email->id }}</td>
                            <td>{{ $email->email }}</td>
                            <td>{{ $email->ip_address }}</td>
                            <td>{{ $email->sended }}</td>
                            <td>{{ $email->readed }}</td>
                            <td>
                                <a href="{{ url('/saucisson/emails/update/' . $email->id) }}" class="btn btn-sm btn-info">
                    				<span class="glyphicon glyphicon-plus"></span> Editer
                    			</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            {!! $emails->render() !!}
        @endif

    </div>

@endsection
