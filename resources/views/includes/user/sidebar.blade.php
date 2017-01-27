<aside data-mcs-theme="minimal-dark" class="main-sidebar mCustomScrollbar">
    <div class="media user">
        <div class="media-left">
            <div id="esp-user-profile" style="height: 56px; width: 56px; line-height: 40px; padding: 8px;" class="easy-pie-chart" data-percent="66">
                <form action="{{ url('/user/image') }}" id="avatarForm">
                    {{ csrf_field() }}
                    <input type="file" style="display: none" name="photo" id="avatarInput">
                </form>
                <img src="{{ asset(auth()->user()->photo_route) }}" id="avatarImage" alt="Imagen de perfil" class="avatar img-circle">
            </div>
        </div>
        <div style="overflow: visible" class="media-body media-middle">
            <h4 class="media-heading fs-16">{{ auth()->user()->name }}</h4>
            <div class="dropdown"><a id="dropdown-status" href="javascript:;" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true" class="dropdown-toggle"><span class="status bg-success"></span> Online <span class="caret"></span></a>
                <ul aria-labelledby="dropdown-status" class="dropdown-menu animated fadeInUp">
                    <li><a href="#">Desconectado</a></li>
                    <li><a href="#">Ocupado</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="{{ url('/logout') }}">Cerrar sesión</a></li>
                </ul>
            </div>
        </div>
    </div>

    <ul class="list-unstyled navigation mb-0">
        <li class="sidebar-category">Datos principales</li>
        <li class="panel">
            <a href="{{ url('/dashboard') }}">
                <i class="ion-ios-home-outline bg-purple"></i>
                <span class="sidebar-title">Dashboard</span>
            </a>
        </li>
        <li class="panel">
            <a href="{{ url('/datos/principales') }}">
                <i class="ion-ios-person-outline bg-success"></i>
                <span class="sidebar-title">Datos principales</span>
            </a>
        </li>

        <li class="panel">
            <a href="{{ url('/servicios') }}">
                <i class="ion-ios-browsers bg-danger"></i>
                <span class="sidebar-title">Servicios</span>
            </a>
        </li>
        <li class="panel">
            <a href="{{ url('/proyectos') }}">
                <i class="ion-ios-pricetag-outline bg-primary"></i>
                <span class="sidebar-title">Proyectos</span>
            </a>
        </li>
        <li class="panel">
            <a href="{{ url('/pagos') }}">
                <i class="ion-ios-calendar-outline bg-info"></i>
                <span class="sidebar-title">Pagos</span>
            </a>
        </li>


        <li class="sidebar-category">Sección reportes</li>
        <li class="panel">
            <a href="{{ url('/leads') }}">
                <i class="ion-ios-pie-outline bg-black"></i>
                <span class="sidebar-title">Leads</span>
            </a>
        <li class="panel">
            <a href="{{ url('/mapa') }}">
                <i class="ion-ios-analytics-outline bg-black"></i>
                <span class="sidebar-title">Ubicación</span>
            </a>
        </li>

        <li class="sidebar-category">Ayuda</li>
        <li class="panel">
            <a href="{{ url('/ayuda') }}">
                <i class="ion-ios-help-outline bg-black"></i>
                <span class="sidebar-title">Solicitar ayuda</span>
            </a>
        </li>
    </ul>

    <div class="sidebar-category">Indicadores</div>
    <div class="sidebar-widget">
        <ul class="list-unstyled pl-15 pr-15">
            <li class="mb-20">
                <div class="block clearfix mb-10"><span class="pull-left text-muted">Datos ingresados</span><span class="pull-right label label-outline label-success">78 %</span></div>
                <div class="progress progress-xs mb-0">
                    <div role="progressbar" data-transitiongoal="78" class="progress-bar progress-bar-success"></div>
                </div>
            </li>
            <li class="mb-20">
                <div class="block clearfix mb-10"><span class="pull-left text-muted">Atraso en los pagos</span><span class="pull-right label label-outline label-purple">12 días</span></div>
                <div class="progress progress-xs mb-0">
                    <div role="progressbar" data-transitiongoal="24" class="progress-bar progress-bar-purple"></div>
                </div>
            </li>
        </ul>
    </div>
</aside>