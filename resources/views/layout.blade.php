<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Hello the world!</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->

        <link rel="stylesheet" type="text/css" href="/fonts.css" />
        <link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700'>
        <link rel='stylesheet' type='text/css' href='/jquery.selectbox.css'>
        <link rel='stylesheet' type='text/css' href='/perfect-scrollbar.min.css'>
        <link rel='stylesheet' type='text/css' href="/app.css">

        <link href="/components/require.css" rel="stylesheet" type="text/css">
        <script src="/components/require.js"></script>
    </head>
    <body>

        <div class='content'>
            @yield('content')
        </div>

        <script>
            require(['modernizr','jquery','jquery-ui'], function() {
                requirejs(['/jquery.selectbox-0.2.min.js','/OAuthSimple.js','/perfect-scrollbar.jquery.min.js'], function () {
                    requirejs(['/app.js']);
                });
            });
        </script>

    </body>
</html>
