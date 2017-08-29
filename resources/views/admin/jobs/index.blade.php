@extends('admin.layout')

@section('title')

    <div class="page_header clearfix">
        <div class="pull-left">
            <h1>Emails</h1>
        </div>
    </div>

@endsection

@section('content')

    <div class="page-content">

        @if(empty($jobs))
            <div class="alert alert-warning">
                Aucune donnée.
            </div>
        @else
            <table class="table">
                <tr>
                    <th>Id</th>
                    <th>Queue</th>
                    <th>Tentatives</th>
                    <th>Reserved</th>
                    <th>Reserved à</th>
                    <th>Valide jusqu'à</th>
                </tr>
                <tbody>
                    @foreach($jobs as $job)
                        <tr>
                            <td>{{ $job->id }}</td>
                            <td>{{ $job->queue }}</td>
                            <td>{{ $job->attempts }}</td>
                            <td>{{ $job->reserved }}</td>
                            <td>{{ $job->reserved_at }}</td>
                            <td>{{ $job->available_at }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif

    </div>

@endsection
