<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Hello the world! - admin</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700'>
        <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css" />
        <link rel="stylesheet" type="text/css" href="/css/bootstrap-theme.min.css" />
        <link rel='stylesheet' type='text/css' href="/css/backpack.css">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->

    </head>
    <body>

        @include('admin.partials.header')

        <div id="main-container" class="container-fluid theme-showcase" role="main">

            <div class="row">

                @include('admin.partials.sidebar')

                <div id="main-container-inner" class="col-sm-offset-2 col-sm-10">

                    <div id="breadcrumbs" class="breadcrumbs">
                        @yield('breadcrumb')
                    </div>

                    @include('admin.partials.message')

                    @yield('content')

                </div>

            </div>

            @include('admin.partials.footer')
        </div>

        <script type="text/javascript" src="js/jquery-2.1.1.js" ></script>
        <script type="text/javascript" src="js/bootstrap.min.js" ></script>

    </body>

</html>
