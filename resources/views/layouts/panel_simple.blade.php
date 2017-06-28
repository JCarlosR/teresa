<!DOCTYPE html>
<html lang="es">
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
    <!-- Malihu Scrollbar-->
    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.min.css') }}">
    <!-- Animo.js-->
    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/animo.js/animate-animo.min.css') }}">
    <!-- Bootstrap Progressbar-->
    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css') }}">
    <!-- Toastr-->
    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/toastr/toastr.min.css') }}">
    <!-- SpinKit-->
    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/SpinKit/css/spinners/2-double-bounce.css') }}">
    <!-- Weather Icons-->
    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/weather-icons/css/weather-icons-wind.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/weather-icons/css/weather-icons.min.css') }}">
    <!-- Bootstrap Date Range Picker-->
    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/bootstrap-daterangepicker/daterangepicker.css') }}">
    <!-- Core CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('build/css/first-layout.css') }}">
    <style>
        @media (max-width: 767px) {
            /* No header for mobile */
            header {
                display: none;
            }
            .main-container {
                padding-top: 0;
            }
        }
    </style>
    @yield('styles')
</head>
<body>

<header>
    <a href="{{ url(auth()->user()->root_route) }}" class="brand">
        <img src="{{ asset('images/logo.jpg') }}" alt="Logo Teresa" width="100">
    </a>
    <ul class="notification-bar list-inline pull-right">
        <li class="dropdown hidden-sm hidden-xs">
            <a id="dropdownMenu2" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle header-icon lh-1 pt-10 pb-10">
                <div class="media mt-0">
                    <div class="media-left avatar">
                        <img src="{{ asset(auth()->user()->photo_route) }}" alt="" class="media-object img-circle">
                        <span class="status bg-success"></span>
                    </div>
                    <div class="media-right media-middle pl-0">
                        <p class="fs-12 mb-0">Hola, {{ auth()->user()->short_name }}</p>
                    </div>
                </div>
            </a>
            <ul aria-labelledby="dropdownMenu2" class="dropdown-menu dropdown-menu-right animated fadeInUp icon">
                <li><a href="{{ url('admin/datos') }}"><i class="ion-person mr-5"></i> Mis datos</a></li>
                <li><a href="{{ url('/admin/mensajes') }}"><i class="ion-filing mr-5"></i> Mensajes</a></li>
                <li><a href="{{ url('/logout') }}"><i class="ion-unlocked mr-5"></i> Cerrar sesión</a></li>
            </ul>
        </li>
    </ul>
</header>
<div class="main-container">
    @yield('dashboard_content')
</div>

<!-- jQuery-->
<script type="text/javascript" src="{{ asset('plugins/jquery/dist/jquery.min.js') }}"></script>
<!-- Bootstrap JavaScript-->
<script type="text/javascript" src="{{ asset('plugins/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<!-- Malihu Scrollbar-->
<script type="text/javascript" src="{{ asset('plugins/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js') }}"></script>
<!-- Animo.js-->
<script type="text/javascript" src="{{ asset('plugins/animo.js/animo.min.js') }}"></script>
<!-- Bootstrap Progressbar-->
<script type="text/javascript" src="{{ asset('plugins/bootstrap-progressbar/bootstrap-progressbar.min.js') }}"></script>
<!-- jQuery Easy Pie Chart-->
<script type="text/javascript" src="{{ asset('plugins/jquery.easy-pie-chart/dist/jquery.easypiechart.min.js') }}"></script>
<!-- MomentJS-->
<script type="text/javascript" src="{{ asset('plugins/moment/min/moment.min.js') }}"></script>
<!-- jQuery BlockUI-->
<script type="text/javascript" src="{{ asset('plugins/blockUI/jquery.blockUI.js') }}"></script>
<!-- jQuery Counter Up-->
<script type="text/javascript" src="{{ asset('plugins/jquery-waypoints/waypoints.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('plugins/Counter-Up/jquery.counterup.min.js') }}"></script>
<!-- Flot Charts-->
<script type="text/javascript" src="{{ asset('plugins/flot/jquery.flot.js') }}"></script>
<script type="text/javascript" src="{{ asset('plugins/flot/jquery.flot.resize.js') }}"></script>
<script type="text/javascript" src="{{ asset('plugins/flot.curvedlines/curvedLines.js') }}"></script>
<script type="text/javascript" src="{{ asset('plugins/flot.tooltip/js/jquery.flot.tooltip.min.js') }}"></script>
<!-- Bootstrap Date Range Picker-->
<script type="text/javascript" src="{{ asset('plugins/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
<!-- Core JS-->
<script type="text/javascript" src="{{ asset('build/js/first-layout/app.js') }}"></script>
<script type="text/javascript" src="{{ asset('build/js/first-layout/demo.js') }}"></script>
@yield('scripts')

</body>
</html>
