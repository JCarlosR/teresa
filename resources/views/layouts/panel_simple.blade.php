<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TERESA v1.0</title>
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
</head>
<body class="main-sidebar-toggled">
<!-- Header start-->
<header>
    <div class="search-bar closed">
        <form>
            <div class="input-group input-group-lg">
                <input type="text" placeholder="Buscar ..." class="form-control"><span class="input-group-btn">
              <button type="button" class="btn btn-default search-bar-toggle"><i class="ion-close-round"></i></button></span>
            </div>
        </form>
    </div>
    <form class="search-form m-10 pull-left hidden-xs">
        <div class="form-group has-feedback mb-0">
            <input type="text" aria-describedby="inputSearchFor" placeholder="Buscar ..." style="width: 180px" class="form-control rounded"><span aria-hidden="true" class="ion-search form-control-feedback"></span><span id="inputSearchFor" class="sr-only">(default)</span>
        </div>
    </form>
    <a href="{{ url('/home') }}" class="brand">
        <img src="{{ asset('build/images/logo/logo-dark.png') }}" alt="" width="100">
    </a>
    <ul class="notification-bar list-inline pull-right">
        <li class="visible-xs"><a href="javascript:;" role="button" class="header-icon search-bar-toggle"><i class="ion-search"></i></a></li>

        <li class="dropdown"><a id="dropdownMenu1" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle bubble header-icon"><i class="ion-alert"></i><span class="badge bg-danger">6</span></a>
            <div aria-labelledby="dropdownMenu1" class="dropdown-menu dropdown-menu-right dm-medium animated fadeInUp">
                <h5 class="dropdown-header">You have 6 notifications</h5>
                <ul data-mcs-theme="minimal-dark" class="media-list mCustomScrollbar">
                    <li class="media"><a href="javascript:;">
                            <div class="media-left"><i class="ion-chatbubbles media-object mo-md img-circle bg-primary text-center"></i></div>
                            <div class="media-body">
                                <h5 class="media-heading">Brittany Curtis</h5>
                                <p class="text-muted mb-0">Commented on your post</p>
                            </div>
                            <div class="media-right text-nowrap">
                                <time datetime="2016-12-10T20:27:48+07:00" class="fs-13 text-muted">5 mins</time>
                            </div></a></li>
                    <li class="media"><a href="javascript:;">
                            <div class="media-left avatar"><img src="{{ asset('build/images/users/11.jpg') }}" alt="" class="media-object img-circle"><span class="status bg-danger"></span></div>
                            <div class="media-body">
                                <h5 class="media-heading">Judy Fowler</h5>
                                <p class="text-muted mb-0">Sent you a new email</p>
                            </div>
                            <div class="media-right text-nowrap">
                                <time datetime="2016-12-10T20:42:40+07:00" class="fs-13 text-muted">12 mins</time>
                            </div></a></li>
                    <li class="media"><a href="javascript:;">
                            <div class="media-left"><span class="media-object mo-md img-circle bg-success text-center fw-700">S</span></div>
                            <div class="media-body">
                                <h5 class="media-heading">Sean Jenkins</h5>
                                <p class="text-muted mb-0">Sent you a new message</p>
                            </div>
                            <div class="media-right text-nowrap">
                                <time datetime="2016-12-10T20:50:48+07:00" class="fs-13 text-muted">8 hours</time>
                            </div></a></li>
                    <li class="media"><a href="javascript:;">
                            <div class="media-left avatar"><img src="{{ asset('build/images/users/05.jpg') }}" alt="" class="media-object img-circle"><span class="status bg-success"></span></div>
                            <div class="media-body">
                                <h5 class="media-heading">Johnny Dean</h5>
                                <p class="text-muted mb-0">You have 8 unread messages</p>
                            </div>
                            <div class="media-right text-nowrap">
                                <time datetime="2016-12-10T20:35:35+07:00" class="fs-13 text-muted">20 Oct</time>
                            </div></a></li>
                    <li class="media"><a href="javascript:;">
                            <div class="media-left"><i class="ion-person media-object mo-md img-circle bg-purple text-center"></i></div>
                            <div class="media-body">
                                <h5 class="media-heading">Jean Lawrence</h5>
                                <p class="text-muted mb-0">Sent you a new email</p>
                            </div>
                            <div class="media-right text-nowrap">
                                <time datetime="2016-12-10T20:42:40+07:00" class="fs-13 text-muted">20 Oct</time>
                            </div></a></li>
                    <li class="media"><a href="javascript:;">
                            <div class="media-left avatar"><img src="{{ asset('build/images/users/13.jpg') }}" alt="" class="media-object img-circle"><span class="status bg-warning"></span></div>
                            <div class="media-body">
                                <h5 class="media-heading">Karen Reed</h5>
                                <p class="text-muted mb-0">Commented on your post</p>
                            </div>
                            <div class="media-right text-nowrap">
                                <time datetime="2016-12-10T20:27:48+07:00" class="fs-13 text-muted">20 Oct</time>
                            </div></a></li>
                </ul>
                <div class="dropdown-footer"><a href="javascript:;" class="text-muted">View all notifications</a></div>
            </div>
        </li>
        <li class="dropdown hidden-sm hidden-xs"><a id="dropdownMenu2" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle header-icon lh-1 pt-10 pb-10">
                <div class="media mt-0">
                    <div class="media-left avatar"><img src="{{ asset('build/images/users/04.jpg') }}" alt="" class="media-object img-circle"><span class="status bg-success"></span></div>
                    <div class="media-right media-middle pl-0">
                        <p class="fs-12 mb-0">Hola, {{ auth()->user()->short_name }}</p>
                    </div>
                </div></a>
            <ul aria-labelledby="dropdownMenu2" class="dropdown-menu dropdown-menu-right animated fadeInUp icon">
                <li><a href="{{ url('admin/datos') }}"><i class="ion-person mr-5"></i> Mis datos</a></li>
                <li><a href="{{ url('/admin/mensajes') }}"><i class="ion-filing mr-5"></i> Mensajes</a></li>
                <li><a href="{{ url('/logout') }}"><i class="ion-unlocked mr-5"></i> Cerrar sesión</a></li>
            </ul>
        </li>
    </ul>
</header>
<!-- Header end-->
<div class="main-container">
    <!-- Main Sidebar end-->
    <div class="page-container">
        @yield('dashboard_content')
    </div>
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
