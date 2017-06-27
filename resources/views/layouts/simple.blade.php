<!DOCTYPE html>
<html lang="es" style="height: 100%">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ env('APP_NAME', 'Theressa') }}</title>
    <!-- PACE-->
    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/PACE/themes/blue/pace-theme-flash.css') }}">
    <script type="text/javascript" src="{{ asset('plugins/PACE/pace.min.js') }}"></script>
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/bootstrap/dist/css/bootstrap.min.css') }}">
    <!-- Ionicons-->
    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/Ionicons/css/ionicons.min.css') }}">
    <!-- Itim-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Itim">
    <!-- Core CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('build/css/first-layout.css') }}">
</head>
<body class="body-bg-full">
<div class="container page-container">
    @yield('content')
</div>

<script type="text/javascript" src="{{ asset('plugins/jquery/dist/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('plugins/bootstrap/dist/js/bootstrap.min.js') }}"></script>
</body>
</html>