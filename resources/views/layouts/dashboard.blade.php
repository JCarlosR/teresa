<!DOCTYPE html>
<html lang="en">
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
<body>
<!-- Header start-->
<header>
    <div class="search-bar closed">
        <form>
            <div class="input-group input-group-lg">
                <input type="text" placeholder="Search for..." class="form-control"><span class="input-group-btn">
              <button type="button" class="btn btn-default search-bar-toggle"><i class="ion-close-round"></i></button></span>
            </div>
        </form>
    </div><a href="javascript:;" role="button" class="hamburger-menu pull-left"><span></span></a>
    <form class="search-form m-10 pull-left hidden-xs">
        <div class="form-group has-feedback mb-0">
            <input type="text" aria-describedby="inputSearchFor" placeholder="Search for..." style="width: 180px" class="form-control rounded"><span aria-hidden="true" class="ion-search form-control-feedback"></span><span id="inputSearchFor" class="sr-only">(default)</span>
        </div>
    </form><a href="index.html" class="brand"><img src="{{ asset('build/images/logo/logo-dark.png') }}" alt="" width="100"></a>
    <ul class="notification-bar list-inline pull-right">
        <li class="visible-xs"><a href="javascript:;" role="button" class="header-icon search-bar-toggle"><i class="ion-search"></i></a></li>
        <li class="visible-lg"><a href="javascript:;" role="button" class="header-icon sidebar-control"><i class="ion-pin"></i></a></li>
        <li class="dropdown"><a id="dropdownMenu0" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle bubble header-icon"><i class="ion-code-working"></i><span class="badge bg-danger">4</span></a>
            <div aria-labelledby="dropdownMenu0" class="dropdown-menu dropdown-menu-right dm-small animated fadeInUp">
                <ul data-mcs-theme="minimal-dark" class="media-list mCustomScrollbar">
                    <li class="media"><a href="javascript:;">
                            <div class="block clearfix mb-10"><span class="pull-left">HTML5</span><span class="pull-right label label-outline label-primary">65% Complete</span></div>
                            <div class="progress progress-xs mb-0">
                                <div role="progressbar" data-transitiongoal="65" class="progress-bar"></div>
                            </div></a></li>
                    <li class="media"><a href="javascript:;">
                            <div class="block clearfix mb-10"><span class="pull-left">CSS3</span><span class="pull-right label label-outline label-success">80% Complete</span></div>
                            <div class="progress progress-xs mb-0">
                                <div role="progressbar" data-transitiongoal="80" class="progress-bar progress-bar-success"></div>
                            </div></a></li>
                    <li class="media"><a href="javascript:;">
                            <div class="block clearfix mb-10"><span class="pull-left">PHP</span><span class="pull-right label label-outline label-danger">20% Complete</span></div>
                            <div class="progress progress-xs mb-0">
                                <div role="progressbar" data-transitiongoal="20" class="progress-bar progress-bar-danger"></div>
                            </div></a></li>
                    <li class="media"><a href="javascript:;">
                            <div class="block clearfix mb-10"><span class="pull-left">Javascript</span><span class="pull-right label label-outline label-purple">45% Complete</span></div>
                            <div class="progress progress-xs mb-0">
                                <div role="progressbar" data-transitiongoal="45" class="progress-bar progress-bar-purple"></div>
                            </div></a></li>
                </ul>
            </div>
        </li>
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
                        <p class="fs-12 mb-0">Hi, Ryan</p>
                    </div>
                </div></a>
            <ul aria-labelledby="dropdownMenu2" class="dropdown-menu dropdown-menu-right animated fadeInUp icon">
                <li><a href="profile.html"><i class="ion-person mr-5"></i> My Profile</a></li>
                <li><a href="email-inbox.html"><i class="ion-filing mr-5"></i> Inbox</a></li>
                <li><a href="profile.html"><i class="ion-gear-b mr-5"></i> Account Settings</a></li>
                <li><a href="login.html"><i class="ion-unlocked mr-5"></i> Logout</a></li>
            </ul>
        </li>
        <li><a href="javascript:;" role="button" class="right-sidebar-toggle bubble header-icon"><i class="ion-arrow-return-right"></i><span class="badge bg-danger">5</span></a></li>
    </ul>
</header>
<!-- Header end-->
<div class="main-container">
    <!-- Main Sidebar start-->
    <aside data-mcs-theme="minimal-dark" class="main-sidebar mCustomScrollbar">
        <div class="media user">
            <div class="media-left">
                <div id="esp-user-profile" data-percent="66" style="height: 56px; width: 56px; line-height: 40px; padding: 8px;" class="easy-pie-chart"><img src="{{ asset('build/images/users/04.jpg') }}" alt="" class="avatar img-circle"></div>
            </div>
            <div style="overflow: visible" class="media-body media-middle">
                <h4 class="media-heading fs-16">Ryan Moreno</h4>
                <div class="dropdown"><a id="dropdown-status" href="javascript:;" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true" class="dropdown-toggle"><span class="status bg-success"></span> Online <span class="caret"></span></a>
                    <ul aria-labelledby="dropdown-status" class="dropdown-menu animated fadeInUp">
                        <li><a href="#">Offline</a></li>
                        <li><a href="#">Busy</a></li>
                        <li><a href="#">Away</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="login.html">Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>
        {{--<div class="list-group">--}}
            {{--<a class="list-group-item" href="{{ url('/datos/principales') }}">Datos principales</a>--}}
            {{--<a class="list-group-item" href="{{ url('/datos/contacto') }}">Datos de contacto</a>--}}
            {{--<a class="list-group-item" href="{{ url('/datos/acceso') }}">Accesos al servidor</a>--}}
            {{--<a class="list-group-item" href="{{ url('/datos/sociales') }}">Perfiles sociales</a>--}}
            {{--<a class="list-group-item" href="{{ url('/datos/perfiles') }}">Perfiles profesionales</a>--}}
            {{--<a class="list-group-item" href="{{ url('/datos/personal') }}">Personal</a>--}}
            {{--<a class="list-group-item" href="{{ url('/proyectos') }}">Proyectos</a>--}}
            {{--<a class="list-group-item" href="{{ url('/pagos') }}">Pagos</a>--}}
            {{--<a class="list-group-item" href="{{ url('/resumen') }}">Resumen</a>--}}
        {{--</div>--}}
        <ul class="list-unstyled navigation mb-0">
            <li class="sidebar-category">Main</li>
            <li class="panel"><a role="button" data-toggle="collapse" data-parent=".navigation" href="#collapse1" aria-expanded="false" aria-controls="collapse1" class="active collapsed"><i class="ion-ios-home-outline bg-purple"></i><span class="sidebar-title">Dashboard</span><span class="badge bg-danger">2</span></a>
                <ul id="collapse1" class="list-unstyled collapse">
                    <li><a href="index.html" class="active">Dashboard v1</a></li>
                    <li><a href="index-v2.html">Dashboard v2</a></li>
                </ul>
            </li>
            <li class="panel"><a href="profile.html"><i class="ion-ios-person-outline bg-success"></i><span class="sidebar-title">Profile</span></a></li>
            <li class="panel"><a href="chat-dashboard.html"><i class="ion-ios-chatbubble-outline bg-primary"></i><span class="sidebar-title">Chat dashboard</span></a></li>
            <li class="panel"><a href="calendar.html"><i class="ion-ios-calendar-outline bg-info"></i><span class="sidebar-title">Calendar</span></a></li>
            <li class="panel"><a role="button" data-toggle="collapse" data-parent=".navigation" href="#collapse2" aria-expanded="false" aria-controls="collapse2" class="collapsed"><i class="ion-ios-printer-outline bg-danger"></i><span class="sidebar-title">Email</span></a>
                <ul id="collapse2" class="list-unstyled collapse">
                    <li><a href="email-inbox.html">Inbox</a></li>
                    <li><a href="email-read.html">Read email</a></li>
                    <li><a href="email-compose.html">Compose email</a></li>
                </ul>
            </li>
            <li class="panel"><a href="widgets.html"><i class="ion-ios-albums-outline bg-warning"></i><span class="sidebar-title">Widgets</span></a></li>
            <li class="sidebar-category">Menu Levels</li>
            <li class="panel"><a role="button" data-toggle="collapse" data-parent=".navigation" href="#collapse20" aria-expanded="false" aria-controls="collapse20" class="collapsed"><i class="ion-ios-folder-outline bg-black"></i><span class="sidebar-title">Menu levels</span></a>
                <ul id="collapse20" class="list-unstyled collapse">
                    <li><a role="button" data-toggle="collapse" data-parent="#collapse20" href="#collapse201" aria-expanded="false" aria-controls="collapse201" class="collapsed">Menu level 2.1</a>
                        <ul id="collapse201" class="list-unstyled collapse">
                            <li><a href="#">Menu level 3.1</a></li>
                            <li><a href="#">Menu level 3.2</a></li>
                            <li><a href="#">Menu level 3.3</a></li>
                        </ul>
                    </li>
                    <li><a role="button" data-toggle="collapse" data-parent="#collapse20" href="#collapse202" aria-expanded="false" aria-controls="collapse202" class="collapsed">Menu level 2.2</a>
                        <ul id="collapse202" class="list-unstyled collapse">
                            <li><a href="#">Menu level 3.4</a></li>
                            <li><a role="button" data-toggle="collapse" data-parent="#collapse202" href="#collapse302" aria-expanded="false" aria-controls="collapse302" class="collapsed">Menu level 3.5</a>
                                <ul id="collapse302" class="list-unstyled collapse">
                                    <li><a href="#">Menu level 4.1</a></li>
                                    <li><a role="button" data-toggle="collapse" data-parent="#collapse302" href="#collapse402" aria-expanded="false" aria-controls="collapse402" class="collapsed">Menu level 4.2</a>
                                        <ul id="collapse402" class="list-unstyled collapse">
                                            <li><a href="#">Menu level 5.1</a></li>
                                            <li><a href="#">Menu level 5.2</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="#">Menu level 3.6</a></li>
                        </ul>
                    </li>
                    <li><a role="button" data-toggle="collapse" data-parent="#collapse20" href="#collapse203" aria-expanded="false" aria-controls="collapse203" class="collapsed">Menu level 2.3</a>
                        <ul id="collapse203" class="list-unstyled collapse">
                            <li><a href="#">Menu level 3.7</a></li>
                            <li><a href="#">Menu level 3.8</a></li>
                            <li><a href="#">Menu level 3.9</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class="sidebar-category">Components</li>
            <li class="panel"><a role="button" data-toggle="collapse" data-parent=".navigation" href="#collapse6" aria-expanded="false" aria-controls="collapse6" class="collapsed"><i class="ion-ios-list-outline bg-black"></i><span class="sidebar-title">UI Elements</span></a>
                <ul id="collapse6" class="list-unstyled collapse">
                    <li><a href="animations.html">Animations</a></li>
                    <li><a href="buttons.html">Buttons</a></li>
                    <li><a href="carousels.html">Carousels</a></li>
                    <li><a href="containers.html">Containers</a></li>
                    <li><a href="dialogs.html">Dialogs</a></li>
                    <li><a href="indicators.html">Indicators</a></li>
                    <li><a href="navigations.html">Navigations</a></li>
                    <li><a href="progress-bars.html">Progress bars</a></li>
                    <li><a href="typography.html">Typography</a></li>
                </ul>
            </li>
            <li class="panel"><a role="button" data-toggle="collapse" data-parent=".navigation" href="#collapse9" aria-expanded="false" aria-controls="collapse9" class="collapsed"><i class="ion-ios-photos-outline bg-black"></i><span class="sidebar-title">Forms</span></a>
                <ul id="collapse9" class="list-unstyled collapse">
                    <li><a href="forms-layouts.html">Form layouts</a></li>
                    <li><a href="basic-forms.html">Basic forms</a></li>
                    <li><a href="advanced-elements.html">Advanced elements</a></li>
                    <li><a href="forms-validation.html">Forms validation</a></li>
                    <li><a href="forms-wizard.html">Form wizard</a></li>
                    <li><a href="file-uploads.html">File uploads</a></li>
                    <li><a href="image-cropper.html">Image cropper</a></li>
                    <li><a href="text-editors.html">Text editors</a></li>
                </ul>
            </li>
            <li class="panel"><a role="button" data-toggle="collapse" data-parent=".navigation" href="#collapse10" aria-expanded="false" aria-controls="collapse10" class="collapsed"><i class="ion-ios-ionic-outline bg-black"></i><span class="sidebar-title">Icons</span></a>
                <ul id="collapse10" class="list-unstyled collapse">
                    <li><a href="glyphicons.html">Glyphicons</a></li>
                    <li><a href="font-awesome.html">Font awesome</a></li>
                    <li><a href="material-design.html">Material design</a></li>
                    <li><a href="themify.html">Themify</a></li>
                    <li><a href="weather-icons.html">Weather</a></li>
                    <li><a href="flag-icons.html">Flag</a></li>
                </ul>
            </li>
            <li class="panel"><a role="button" data-toggle="collapse" data-parent=".navigation" href="#collapse11" aria-expanded="false" aria-controls="collapse11" class="collapsed"><i class="ion-ios-browsers-outline bg-black"></i><span class="sidebar-title">Tables</span></a>
                <ul id="collapse11" class="list-unstyled collapse">
                    <li><a href="basic-tables.html">Basic tables</a></li>
                    <li><a href="data-tables.html">Data tables</a></li>
                </ul>
            </li>
            <li class="panel"><a role="button" data-toggle="collapse" data-parent=".navigation" href="#collapse12" aria-expanded="false" aria-controls="collapse12" class="collapsed"><i class="ion-ios-pie-outline bg-black"></i><span class="sidebar-title">Charts</span></a>
                <ul id="collapse12" class="list-unstyled collapse">
                    <li><a href="flot-charts.html">Flot charts</a></li>
                    <li><a href="morris-charts.html">Morris charts</a></li>
                    <li><a href="chart-js.html">Chart.js</a></li>
                    <li><a href="chartist.html">Chartist</a></li>
                    <li><a href="other-charts.html">Other charts</a></li>
                </ul>
            </li>
            <li class="panel"><a role="button" data-toggle="collapse" data-parent=".navigation" href="#collapse13" aria-expanded="false" aria-controls="collapse13" class="collapsed"><i class="ion-ios-analytics-outline bg-black"></i><span class="sidebar-title">Maps</span></a>
                <ul id="collapse13" class="list-unstyled collapse">
                    <li><a href="vector-maps.html">Vector maps</a></li>
                    <li><a href="google-maps.html">Google maps</a></li>
                </ul>
            </li>
            <li class="sidebar-category">Page kits</li>
            <li class="panel"><a role="button" data-toggle="collapse" data-parent=".navigation" href="#collapse14" aria-expanded="false" aria-controls="collapse14" class="collapsed"><i class="ion-ios-medkit-outline bg-black"></i><span class="sidebar-title">Error pages</span></a>
                <ul id="collapse14" class="list-unstyled collapse">
                    <li><a href="error-400.html">Error 400</a></li>
                    <li><a href="error-401.html">Error 401</a></li>
                    <li><a href="error-403.html">Error 403</a></li>
                    <li><a href="error-404.html">Error 404</a></li>
                    <li><a href="error-500.html">Error 500</a></li>
                    <li><a href="error-503.html">Error 503</a></li>
                </ul>
            </li>
            <li class="panel"><a role="button" data-toggle="collapse" data-parent=".navigation" href="#collapse15" aria-expanded="false" aria-controls="collapse15" class="collapsed"><i class="ion-ios-browsers-outline bg-black"></i><span class="sidebar-title">User pages</span></a>
                <ul id="collapse15" class="list-unstyled collapse">
                    <li><a href="login.html">Login</a></li>
                    <li><a href="register.html">Register</a></li>
                    <li><a href="forgot-password.html">Forgot password</a></li>
                    <li><a href="lock-screen.html">Lock screen</a></li>
                    <li><a href="profile.html">Profile</a></li>
                </ul>
            </li>
            <li class="sidebar-category">Help</li>
            <li class="panel"><a href="documentation.html"><i class="ion-ios-help-outline bg-black"></i><span class="sidebar-title">Documentation</span></a></li>
        </ul>
        <div class="sidebar-category">Downloads</div>
        <div class="sidebar-widget">
            <ul class="list-unstyled pl-15 pr-15">
                <li class="mb-20">
                    <div class="block clearfix mb-10"><span class="pull-left text-muted">image_01.jpg</span><span class="pull-right label label-outline label-success">48 sec</span></div>
                    <div class="progress progress-xs mb-0">
                        <div role="progressbar" data-transitiongoal="45" class="progress-bar progress-bar-success"></div>
                    </div>
                </li>
                <li class="mb-20">
                    <div class="block clearfix mb-10"><span class="pull-left text-muted">image_02.jpg</span><span class="pull-right label label-outline label-purple">22 sec</span></div>
                    <div class="progress progress-xs mb-0">
                        <div role="progressbar" data-transitiongoal="58" class="progress-bar progress-bar-purple"></div>
                    </div>
                </li>
            </ul>
        </div>
    </aside>
    <!-- Main Sidebar end-->
    <div class="page-container">
        @yield('dashboard_content')
    </div>
    <!-- Right Sidebar start-->
    <aside class="right-sidebar closed">
        <ul role="tablist" class="nav nav-tabs nav-justified nav-sidebar">
            <li role="presentation" class="active"><a href="#chat" aria-controls="chat" role="tab" data-toggle="tab"><i class="ion-ios-chatboxes-outline"></i></a></li>
            <li role="presentation"><a href="#system" aria-controls="system" role="tab" data-toggle="tab"><i class="ion-ios-pie-outline"></i></a></li>
            <li role="presentation"><a href="#ticket" aria-controls="ticket" role="tab" data-toggle="tab"><i class="ion-ios-list-outline"></i></a></li>
            <li role="presentation"><a href="#setting" aria-controls="setting" role="tab" data-toggle="tab"><i class="ion-ios-gear-outline"></i></a></li>
        </ul>
        <div data-mcs-theme="minimal-dark" class="tab-content nav-sidebar-content mCustomScrollbar">
            <div id="chat" role="tabpanel" class="tab-pane fade in active">
                <form>
                    <div class="form-group has-feedback">
                        <input type="text" aria-describedby="inputChatSearch" placeholder="Chat with..." class="form-control rounded"><span aria-hidden="true" class="ion-search form-control-feedback"></span><span id="inputChatSearch" class="sr-only">(default)</span>
                    </div>
                </form>
                <div class="sidebar-category">Online</div>
                <ul class="chat-list mb-0 media-list">
                    <li class="media"><a href="javascript:;" class="conversation-toggle">
                            <div class="media-left avatar"><img src="{{ asset('build/images/users/20.jpg') }}" alt="" class="media-object img-circle"><span class="status bg-success"></span></div>
                            <div class="media-body">
                                <h5 class="media-heading">Crystal Wheeler</h5>
                                <p class="text-muted mb-0">United States</p>
                            </div>
                            <div class="media-right"><span class="badge bg-danger">1</span></div></a></li>
                    <li class="media"><a href="javascript:;" class="conversation-toggle">
                            <div class="media-left avatar"><img src="{{ asset('build/images/users/01.jpg') }}" alt="" class="media-object img-circle"><span class="status bg-success"></span></div>
                            <div class="media-body">
                                <h5 class="media-heading">Brian Austin</h5>
                                <p class="text-muted mb-0">brianaustin@example.com</p>
                            </div></a></li>
                    <li class="media"><a href="javascript:;" class="conversation-toggle">
                            <div class="media-left avatar"><img src="{{ asset('build/images/users/02.jpg') }}" alt="" class="media-object img-circle"><span class="status bg-success"></span></div>
                            <div class="media-body">
                                <h5 class="media-heading">David Clark</h5>
                                <p class="text-muted mb-0">david.clark@example.com</p>
                            </div></a></li>
                    <li class="media"><a href="javascript:;" class="conversation-toggle">
                            <div class="media-left avatar"><img src="{{ asset('build/images/users/12.jpg') }}" alt="" class="media-object img-circle"><span class="status bg-success"></span></div>
                            <div class="media-body">
                                <h5 class="media-heading">Emma Lawrence</h5>
                                <p class="text-muted mb-0">(707) 680 1328</p>
                            </div>
                            <div class="media-right"><span class="badge bg-danger">3</span></div></a></li>
                    <li class="media"><a href="javascript:;" class="conversation-toggle">
                            <div class="media-left avatar"><img src="{{ asset('build/images/users/06.jpg') }}" alt="" class="media-object img-circle"><span class="status bg-success"></span></div>
                            <div class="media-body">
                                <h5 class="media-heading">Brian Hudson</h5>
                                <p class="text-muted mb-0">06/03/1989</p>
                            </div></a></li>
                </ul>
                <div class="sidebar-category">Away</div>
                <ul class="chat-list mb-0 media-list">
                    <li class="media"><a href="javascript:;" class="conversation-toggle">
                            <div class="media-left avatar"><img src="{{ asset('build/images/users/16.jpg') }}" alt="" class="media-object img-circle"><span class="status bg-warning"></span></div>
                            <div class="media-body">
                                <h5 class="media-heading">Evelyn Martinez</h5>
                                <p class="text-muted mb-0">evelyn_84@example.com</p>
                            </div>
                            <div class="media-right"><span class="badge bg-danger">1</span></div></a></li>
                    <li class="media"><a href="javascript:;" class="conversation-toggle">
                            <div class="media-left avatar"><img src="{{ asset('build/images/users/09.jpg') }}" alt="" class="media-object img-circle"><span class="status bg-warning"></span></div>
                            <div class="media-body">
                                <h5 class="media-heading">Nicholas Mitchell</h5>
                                <p class="text-muted mb-0">(752) 282 4218</p>
                            </div></a></li>
                    <li class="media"><a href="javascript:;" class="conversation-toggle">
                            <div class="media-left avatar"><img src="{{ asset('build/images/users/03.jpg') }}" alt="" class="media-object img-circle"><span class="status bg-warning"></span></div>
                            <div class="media-body">
                                <h5 class="media-heading">Tyler Gordon</h5>
                                <p class="text-muted mb-0">tylergordon@example.com</p>
                            </div></a></li>
                </ul>
                <div class="sidebar-category">Busy</div>
                <ul class="chat-list mb-0 media-list">
                    <li class="media"><a href="javascript:;" class="conversation-toggle">
                            <div class="media-left avatar"><img src="{{ asset('build/images/users/15.jpg') }}" alt="" class="media-object img-circle"><span class="status bg-danger"></span></div>
                            <div class="media-body">
                                <h5 class="media-heading">Stephanie Ford</h5>
                                <p class="text-muted mb-0">29/06/1992</p>
                            </div></a></li>
                    <li class="media"><a href="javascript:;" class="conversation-toggle">
                            <div class="media-left avatar"><img src="{{ asset('build/images/users/07.jpg') }}" alt="" class="media-object img-circle"><span class="status bg-danger"></span></div>
                            <div class="media-body">
                                <h5 class="media-heading">Adam Sandoval</h5>
                                <p class="text-muted mb-0">adam-86@example.com</p>
                            </div></a></li>
                </ul>
            </div>
            <div id="system" role="tabpanel" class="tab-pane fade">
                <div class="sidebar-category">System</div>
                <ul class="list-group divider mb-0">
                    <li class="list-group-item">
                        <div class="block clearfix"><span class="pull-left">Current user</span><span class="pull-right text-muted">lethemes</span></div>
                    </li>
                    <li class="list-group-item">
                        <div class="block clearfix"><span class="pull-left">Primary domain</span><span class="pull-right text-muted">lethemes.net</span></div>
                    </li>
                    <li class="list-group-item">
                        <div class="block clearfix"><span class="pull-left">Home directory</span><span class="pull-right text-muted">/home/lethemes</span></div>
                    </li>
                    <li class="list-group-item">
                        <div class="block clearfix"><span class="pull-left">Last login</span><span class="pull-right text-muted">10/28/2016</span></div>
                    </li>
                    <li class="list-group-item">
                        <div class="block clearfix"><span class="pull-left">Bandwidth</span><span class="pull-right text-muted">187.38 GB / 2000 GB</span></div>
                    </li>
                </ul>
                <div class="sidebar-category">Statistics</div>
                <ul class="list-group mb-0">
                    <li class="list-group-item">
                        <div class="block clearfix mb-10"><span class="pull-left">Disk Usage</span><span class="pull-right label label-outline label-success">52.49%</span></div>
                        <div class="progress progress-xs mb-10">
                            <div role="progressbar" data-transitiongoal="52" class="progress-bar progress-bar-success"></div>
                        </div>
                        <p class="mb-0">250.43 GB / 498.56 GB</p>
                    </li>
                    <li class="list-group-item">
                        <div class="block clearfix mb-10"><span class="pull-left">Subdomains</span><span class="pull-right label label-outline label-danger">85.51%</span></div>
                        <div class="progress progress-xs mb-10">
                            <div role="progressbar" data-transitiongoal="85" class="progress-bar progress-bar-danger"></div>
                        </div>
                        <p class="mb-0">25 / 30</p>
                    </li>
                    <li class="list-group-item">
                        <div class="block clearfix mb-10"><span class="pull-left">Databases</span><span class="pull-right label label-outline label-purple">65.23%</span></div>
                        <div class="progress progress-xs mb-10">
                            <div role="progressbar" data-transitiongoal="65" class="progress-bar progress-bar-purple"></div>
                        </div>
                        <p class="mb-0">36 / 50</p>
                    </li>
                </ul>
            </div>
            <div id="ticket" role="tabpanel" class="tab-pane fade">
                <ul class="milestones media-list mb-0">
                    <li class="media">
                        <div class="media-left pr-15"><img src="{{ asset('build/images/users/16.jpg') }}" alt="" class="media-object mo-md img-circle"></div>
                        <div class="media-body">
                            <time datetime="2016-12-10T20:50:48+07:00" class="fs-13 text-muted">9 minutes ago</time>
                            <p class="mt-10 mb-0">Ethan Perkins <span class="text-success">commented</span> on your post</p>
                        </div>
                    </li>
                    <li class="media">
                        <div class="media-left pr-15"><i class="ion-document-text media-object mo-md img-circle bg-primary text-center"></i></div>
                        <div class="media-body">
                            <time datetime="2016-12-10T20:50:48+07:00" class="fs-13 text-muted">20 minutes ago</time>
                            <p class="mt-10 mb-0">Prepare for presentation</p>
                        </div>
                    </li>
                    <li class="media">
                        <div class="media-left pr-15"><span class="media-object mo-md img-circle bg-danger text-center fw-700">B</span></div>
                        <div class="media-body">
                            <time datetime="2016-12-10T20:50:48+07:00" class="fs-13 text-muted">28 minutes ago</time>
                            <p class="mt-10 mb-0">Brandon Garcia <span class="text-danger">subscribed</span> to Harold Fuller</p>
                        </div>
                    </li>
                    <li class="media">
                        <div class="media-left pr-15"><img src="{{ asset('build/images/users/05.jpg') }}" alt="" class="media-object mo-md img-circle"></div>
                        <div class="media-body">
                            <time datetime="2016-12-10T20:50:48+07:00" class="fs-13 text-muted">20 minutes ago</time>
                            <p class="mt-10 mb-0">Sell 15 products to LE company</p>
                        </div>
                    </li>
                    <li class="media">
                        <div class="media-left pr-15"><i class="ion-stats-bars media-object mo-md img-circle bg-purple text-center"></i></div>
                        <div class="media-body">
                            <time datetime="2016-12-10T20:50:48+07:00" class="fs-13 text-muted">30 minutes ago</time>
                            <p class="mt-10 mb-0">3 New products were added!</p>
                        </div>
                    </li>
                    <li class="media">
                        <div class="media-left pr-15"><i class="ion-ios-telephone media-object mo-md img-circle bg-success text-center"></i></div>
                        <div class="media-body">
                            <time datetime="2016-12-10T20:50:48+07:00" class="fs-13 text-muted">52 minutes ago</time>
                            <p class="mt-10 mb-0">Contact to the customer service</p>
                        </div>
                    </li>
                    <li class="media">
                        <div class="media-left pr-15"><img src="{{ asset('build/images/users/09.jpg') }}" alt="" class="media-object mo-md img-circle"></div>
                        <div class="media-body">
                            <time datetime="2016-12-10T20:50:48+07:00" class="fs-13 text-muted">2 hours ago</time>
                            <p class="mt-10 mb-0">Paul Clark purchased Sigma web app kit</p>
                        </div>
                    </li>
                </ul>
            </div>
            <div id="setting" role="tabpanel" class="tab-pane fade">
                <form class="form-horizontal">
                    <div class="clearfix">
                        <h5 class="pull-left lh-1">Use SSL</h5>
                        <div class="switch pull-right">
                            <input id="setting-1" type="checkbox" checked="">
                            <label for="setting-1" class="switch-black"></label>
                        </div>
                    </div>
                    <p class="text-muted">Mi mus natoque et eros metus ipsum massa adipiscing massa tincidunt ipsum ad.</p>
                    <div class="clearfix">
                        <h5 class="pull-left lh-1">Use Shared Sessions</h5>
                        <div class="switch pull-right">
                            <input id="setting-2" type="checkbox">
                            <label for="setting-2" class="switch-black"></label>
                        </div>
                    </div>
                    <p class="text-muted">Vel etiam scelerisque lacinia ipsum dis massa at turpis phasellus nam vehicula augue.</p>
                    <div class="clearfix">
                        <h5 class="pull-left lh-1">Use SEO URLs</h5>
                        <div class="switch pull-right">
                            <input id="setting-3" type="checkbox" checked="">
                            <label for="setting-3" class="switch-black"></label>
                        </div>
                    </div>
                    <p class="text-muted">Phasellus ridiculus per tincidunt feugiat cras nam hendrerit consectetur.</p>
                    <div class="clearfix">
                        <h5 class="pull-left lh-1">Maintenance Mode</h5>
                        <div class="switch pull-right">
                            <input id="setting-4" type="checkbox">
                            <label for="setting-4" class="switch-black"></label>
                        </div>
                    </div>
                    <p class="text-muted">Metus cursus dolor lorem suscipit in euismod metus erat turpis elementum vulputate pharetra.</p>
                    <div class="clearfix">
                        <h5 class="pull-left lh-1">Allow Forgotten Password</h5>
                        <div class="switch pull-right">
                            <input id="setting-5" type="checkbox" checked="">
                            <label for="setting-5" class="switch-black"></label>
                        </div>
                    </div>
                    <p class="text-muted">Hendrerit lacus volutpat senectus habitant ligula tortor.</p>
                </form>
            </div>
        </div>
    </aside>
    <aside class="conversation closed">
        <h5 class="text-center m-0 p-20">Emma Lawrence<a href="javascript:;" class="conversation-toggle pull-left"><i class="ion-close-round text-muted"></i></a><a href="javascript:;" class="pull-right"><i class="ion-refresh text-muted"></i></a></h5>
        <ul data-mcs-theme="minimal-dark" class="chat-content pl-20 pr-20 mCustomScrollbar">
            <li class="chat-item self"><img src="{{ asset('build/images/users/04.jpg') }}" alt="" class="img-circle chat-avatar">
                <div class="chat-bubble">
                    <div class="chat-text">Hello.</div>
                </div>
                <time datetime="2016-12-10T20:50:48+07:00" class="block fs-12 text-muted"><i class="ion-clock"></i> 12 minutes ago</time>
            </li>
            <li class="chat-item other"><img src="{{ asset('build/images/users/12.jpg') }}" alt="" class="img-circle chat-avatar">
                <div class="chat-bubble">
                    <div class="chat-text">Hi.</div>
                </div>
                <time datetime="2016-12-10T20:50:48+07:00" class="block fs-12 text-muted"><i class="ion-clock"></i> 11 minutes ago</time>
            </li>
            <li class="chat-item self"><img src="{{ asset('build/images/users/04.jpg') }}" alt="" class="img-circle chat-avatar">
                <div class="chat-bubble">
                    <div class="chat-text">How are you?</div>
                </div>
                <time datetime="2016-12-10T20:50:48+07:00" class="block fs-12 text-muted"><i class="ion-clock"></i> 11 minutes ago</time>
            </li>
            <li class="chat-item other"><img src="{{ asset('build/images/users/12.jpg') }}" alt="" class="img-circle chat-avatar">
                <div class="chat-bubble">
                    <div class="chat-text">I'm good. How are you?</div>
                </div>
                <time datetime="2016-12-10T20:50:48+07:00" class="block fs-12 text-muted"><i class="ion-clock"></i> 10 minutes ago</time>
            </li>
            <li class="chat-item self"><img src="{{ asset('build/images/users/04.jpg') }}" alt="" class="img-circle chat-avatar">
                <div class="chat-bubble">
                    <div class="chat-text">Good. Do you speak English?</div>
                </div>
                <time datetime="2016-12-10T20:50:48+07:00" class="block fs-12 text-muted"><i class="ion-clock"></i> 9 minutes ago</time>
            </li>
            <li class="chat-item other"><img src="{{ asset('build/images/users/12.jpg') }}" alt="" class="img-circle chat-avatar">
                <div class="chat-bubble">
                    <div class="chat-text">A little. Are you American?</div>
                </div>
                <time datetime="2016-12-10T20:50:48+07:00" class="block fs-12 text-muted"><i class="ion-clock"></i> 8 minutes ago</time>
            </li>
            <li class="chat-item self"><img src="{{ asset('build/images/users/04.jpg') }}" alt="" class="img-circle chat-avatar">
                <div class="chat-bubble">
                    <div class="chat-text">Yes.</div>
                </div>
                <time datetime="2016-12-10T20:50:48+07:00" class="block fs-12 text-muted"><i class="ion-clock"></i> 8 minutes ago</time>
            </li>
            <li class="chat-item other"><img src="{{ asset('build/images/users/12.jpg') }}" alt="" class="img-circle chat-avatar">
                <div class="chat-bubble">
                    <div class="chat-text">Where are you from?</div>
                </div>
                <time datetime="2016-12-10T20:50:48+07:00" class="block fs-12 text-muted"><i class="ion-clock"></i> 7 minutes ago</time>
            </li>
            <li class="chat-item self"><img src="{{ asset('build/images/users/04.jpg') }}" alt="" class="img-circle chat-avatar">
                <div class="chat-bubble">
                    <div class="chat-text">I'm from California.</div>
                </div>
                <time datetime="2016-12-10T20:50:48+07:00" class="block fs-12 text-muted"><i class="ion-clock"></i> 6 minutes ago</time>
            </li>
            <li class="chat-item other"><img src="{{ asset('build/images/users/12.jpg') }}" alt="" class="img-circle chat-avatar">
                <div class="chat-bubble">
                    <div class="chat-text">Nice to meet you.</div>
                </div>
                <time datetime="2016-12-10T20:50:48+07:00" class="block fs-12 text-muted"><i class="ion-clock"></i> 15 seconds ago</time>
            </li>
            <li class="chat-item self"><img src="{{ asset('build/images/users/04.jpg') }}" alt="" class="img-circle chat-avatar">
                <div class="chat-bubble">
                    <div class="chat-text">Nice to meet you too.</div>
                </div>
                <time datetime="2016-12-10T20:50:48+07:00" class="block fs-12 text-muted"><i class="ion-clock"></i> Just now</time>
            </li>
        </ul>
        <form class="pl-20 pr-20">
            <div class="form-group has-feedback mb-0">
                <input type="text" aria-describedby="inputSendMessage" placeholder="Sent a message" class="form-control rounded"><span aria-hidden="true" class="ion-edit form-control-feedback"></span><span id="inputSendMessage" class="sr-only">(default)</span>
            </div>
        </form>
    </aside>
    <!-- Right Sidebar end-->
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
<script type="text/javascript" src="{{ asset('build/js/page-content/dashboard/index.js') }}"></script>
</body>
</html>
