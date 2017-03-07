<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>TERESA v1.0</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
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
    @yield('styles')
</head>
<body>
<!-- Header start-->
<header>
    <div class="search-bar closed">
        <form>
            <div class="input-group input-group-lg">
                <input type="text" placeholder="Buscar ..." class="form-control"><span class="input-group-btn">
              <button type="button" class="btn btn-default search-bar-toggle"><i class="ion-close-round"></i></button></span>
            </div>
        </form>
    </div><a href="javascript:;" role="button" class="hamburger-menu pull-left"><span></span></a>
    <form class="search-form m-10 pull-left hidden-xs">
        <div class="form-group has-feedback mb-0">
            <input type="text" aria-describedby="inputSearchFor" placeholder="Buscar ..." style="width: 180px" class="form-control rounded"><span aria-hidden="true" class="ion-search form-control-feedback"></span><span id="inputSearchFor" class="sr-only">(default)</span>
        </div>
    </form>
    <a href="{{ url(auth()->user()->root_route) }}" class="brand">
        <img src="{{ asset('images/logo-dark.png') }}" alt="Logo Teresa" width="100">
    </a>
    @include('includes.panel_notification_bar')
</header>
<!-- Header end-->
<div class="main-container">
    @if (auth()->user()->is_admin)
        @include('includes.admin.sidebar')
    @else
        @include('includes.user.sidebar')
    @endif

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
                    <li class="media">
                        <a href="javascript:;" class="conversation-toggle">
                            <div class="media-left avatar"><img src="{{ asset('build/images/users/12.jpg') }}" alt="" class="media-object img-circle"><span class="status bg-success"></span></div>
                            <div class="media-body">
                                <h5 class="media-heading">Emma Lawrence</h5>
                                <p class="text-muted mb-0">(707) 680 1328</p>
                            </div>
                            <div class="media-right"><span class="badge bg-danger">3</span></div>
                        </a>
                    </li>
                </ul>
                <div class="sidebar-category">Away</div>
                <ul class="chat-list mb-0 media-list">
                    <li class="media"><a href="javascript:;" class="conversation-toggle">
                            <div class="media-left avatar"><img src="{{ asset('build/images/users/16.jpg') }}" alt="" class="media-object img-circle"><span class="status bg-warning"></span></div>
                            <div class="media-body">
                                <h5 class="media-heading">Evelyn Martinez</h5>
                                <p class="text-muted mb-0">evelyn_84@example.com</p>
                            </div>
                            <div class="media-right"><span class="badge bg-danger">1</span></div>
                        </a>
                    </li>
                    <li class="media"><a href="javascript:;" class="conversation-toggle">
                            <div class="media-left avatar"><img src="{{ asset('build/images/users/09.jpg') }}" alt="" class="media-object img-circle"><span class="status bg-warning"></span></div>
                            <div class="media-body">
                                <h5 class="media-heading">Nicholas Mitchell</h5>
                                <p class="text-muted mb-0">(752) 282 4218</p>
                            </div>
                        </a>
                    </li>
                    <li class="media"><a href="javascript:;" class="conversation-toggle">
                            <div class="media-left avatar"><img src="{{ asset('build/images/users/03.jpg') }}" alt="" class="media-object img-circle"><span class="status bg-warning"></span></div>
                            <div class="media-body">
                                <h5 class="media-heading">Tyler Gordon</h5>
                                <p class="text-muted mb-0">tylergordon@example.com</p>
                            </div>
                        </a>
                    </li>
                </ul>
                <div class="sidebar-category">Busy</div>
                <ul class="chat-list mb-0 media-list">
                    <li class="media">
                        <a href="javascript:;" class="conversation-toggle">
                            <div class="media-left avatar"><img src="{{ asset('build/images/users/15.jpg') }}" alt="" class="media-object img-circle"><span class="status bg-danger"></span></div>
                            <div class="media-body">
                                <h5 class="media-heading">Stephanie Ford</h5>
                                <p class="text-muted mb-0">29/06/1992</p>
                            </div>
                        </a>
                    </li>
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
            <li class="chat-item self"><img src="{{ asset('build/images/users/16.jpg') }}" alt="" class="img-circle chat-avatar">
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
            <li class="chat-item self"><img src="{{ asset('build/images/users/16.jpg') }}" alt="" class="img-circle chat-avatar">
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
            <li class="chat-item self"><img src="{{ asset('build/images/users/16.jpg') }}" alt="" class="img-circle chat-avatar">
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
            <li class="chat-item self"><img src="{{ asset('build/images/users/16.jpg') }}" alt="" class="img-circle chat-avatar">
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
            <li class="chat-item self"><img src="{{ asset('build/images/users/16.jpg') }}" alt="" class="img-circle chat-avatar">
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
            <li class="chat-item self"><img src="{{ asset('build/images/users/16.jpg') }}" alt="" class="img-circle chat-avatar">
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

<!-- Bootstrap Date Range Picker-->
<script type="text/javascript" src="{{ asset('plugins/bootstrap-daterangepicker/daterangepicker.js') }}"></script>

<!-- Core JS-->
<script type="text/javascript" src="{{ asset('build/js/first-layout/app.js') }}"></script>
<script type="text/javascript" src="{{ asset('build/js/first-layout/demo.js') }}"></script>
<!-- Upload image profile -->
<script type="text/javascript" src="{{ asset('build/js/image-profile.js') }}"></script>
@yield('scripts')
</body>
</html>
