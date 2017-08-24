<!DOCTYPE html>
<html>
    <head>
        <title>@lang('errors.error403').</title>

        <link href="https://fonts.googleapis.com/css?family=Roboto:200,400" rel="stylesheet" type="text/css">
		<link href="{{ asset('la-assets/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" />

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                color: #B0BEC5;
                display: table;
                font-weight: 200;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 72px;
                margin-bottom: 40px;
				color: #444;
            }
			a {
				font-weight:normal;
				color:#3061B6;
				text-decoration: none;
			}
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
				<i class="fa fa-ban" style="font-size:120px;color:#FF5959;margin-bottom:30px;"></i>
                <div class="title">@lang('errors.error403')</div>
				@if(Auth::guest())
					<a href="{{ url('/') }}">@lang('global.homepage')</a> |
					<a href="javascript:history.back()">@lang('global.go_back')</a>
				@else
					<a href="{{ url(config('laraadmin.adminRoute')) }}">@lang('global.dashboard').</a> |
					<a href="javascript:history.back()">@lang('global.go_back')</a>
				@endif
            </div>
        </div>
    </body>
</html>
