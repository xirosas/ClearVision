<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Laravel') }}</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="robots" content="all,follow">
        <!-- Bootstrap CSS-->
        <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">
        <!-- Font Awesome CSS-->
        <link rel="stylesheet" href="{{ asset('vendor/font-awesome/css/font-awesome.min.css') }}">
        <!-- Fontastic Custom icon font-->
        <link rel="stylesheet" href="{{ asset('css/fontastic.css') }}">
        <!-- Google fonts - Poppins -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,700">
        <!-- theme stylesheet-->
        <link rel="stylesheet" href="{{ asset('css/style.default.css') }}" id="theme-stylesheet">
        <!-- Custom stylesheet - for your changes-->
        <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
        <!-- Favicon-->
        <link rel="shortcut icon" href="{{ asset('img/favicon.ico') }}">
        <!-- Tweaks for older IEs--><!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
    </head>
    <body>
        <div class="page login-page">
            <div class="container d-flex align-items-center">
                <div class="form-holder has-shadow">
                    <div class="row">
                        @yield('contenido')
                    </div>
                </div>
            </div>
            <div class="copyrights text-center">
                <p>Design by <a href="https://xiro.net.co" class="external">Krijosoft</a>
                  <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
            </p>
            </div>
        </div>
        <!-- Javascript files-->
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script src="{{ asset('vendor/popper.js/umd/popper.min.js') }}"> </script>
        <script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('vendor/jquery.cookie/jquery.cookie.js') }}"> </script>
        <script src="{{ asset('vendor/chart.js/Chart.min.js') }}"></script>
        <script src="{{ asset('vendor/jquery-validation/jquery.validate.min.js') }}"></script>
        <!-- Main File-->
        <script src="{{ asset('js/front.js') }}"></script>
    </body>
</html>