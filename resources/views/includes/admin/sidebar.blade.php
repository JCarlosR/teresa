<aside data-mcs-theme="minimal-dark" class="main-sidebar mCustomScrollbar">

    <div class="media user">
        <div class="media-left">
            <div id="esp-user-profile" data-percent="66" style="height: 56px; width: 56px; line-height: 40px; padding: 8px;" class="easy-pie-chart">
                <img src="{{ asset(session('client_photo_route')) }}" alt="" class="avatar img-circle">
            </div>
        </div>
        <div style="overflow: visible" class="media-body media-middle">
            <p>Conectado a</p>
            <h4 class="media-heading fs-16">{{ session('client_name') }}</h4>
        </div>
    </div>

    <ul class="list-unstyled navigation mb-0">
        <li class="sidebar-category">Datos principales</li>
        <li class="panel">
            <a href="{{ url("/admin/dashboard") }}">
                <i class="ion-ios-home-outline bg-warning"></i>
                <span class="sidebar-title">Dashboard</span>
            </a>
        </li>

        <li class="panel">
            <a role="button" data-toggle="collapse" data-parent=".navigation" href="#collapse1" aria-expanded="false" aria-controls="collapse1" class="collapsed">
                <i class="ion-ios-person-outline bg-success"></i>
                <span class="sidebar-title">Datos</span>
            </a>
            <ul id="collapse1" class="list-unstyled collapse">
                <li><a href="{{ url("/admin/datos/principales") }}">Datos principales</a></li>
                <li><a href="{{ url("/admin/datos/acceso") }}">Datos de acceso</a></li>
                <li><a href="{{ url("/admin/perfiles/sociales") }}">Perfiles sociales</a></li>
                <li><a href="{{ url("/admin/perfiles/profesionales") }}">Perfiles profesionales</a></li>
                <li><a href="{{ url("/admin/medios/profesionales") }}">Medios profesionales</a></li>
            </ul>
        </li>

        {{-- Datos de contacto --}}
        <li class="panel">
            <a href="{{ url('/admin/personal') }}">
                <i class="ion-ios-people bg-black"></i>
                <span class="sidebar-title">Personal</span>
            </a>
        </li>

        <li class="panel">
            <a href="{{ url('/admin/sitemap') }}">
                <i class="ion-ios-shuffle bg-default"></i>
                <span class="sidebar-title">Sitemap</span>
            </a>
        </li>

        <li class="panel">
            <a role="button" data-toggle="collapse" data-parent=".navigation" href="#collapse2" aria-expanded="false" aria-controls="collapse2" class="collapsed">
                <i class="ion-ios-browsers bg-danger"></i>
                <span class="sidebar-title">Contenido web</span>
            </a>
            <ul id="collapse2" class="list-unstyled collapse">
                <li><a href="{{ url('/admin/sections') }}"><strong>Gestionar secciones</strong></a></li>
                <li><a href="{{ url('/serp/resumen') }}">Resumen SERP</a></li>
                {{-- Slider temporary disable (awaiting for the Theressa's return) --}}
                {{--<li><a href="{{ url('/slides') }}">Slider</a></li>--}}
                <li><a href="{{ url('/nosotros') }}">Nosotros</a></li>

                @foreach (client()->sections as $section)
                    <li><a href="{{ url($section->route) }}">{{ $section->name }}</a></li>
                @endforeach
            </ul>
        </li>

        <li class="panel">
            <a href="{{ url('/admin/cronograma') }}">
                <i class="ion-ios-clock bg-info"></i>
                <span class="sidebar-title">Cronogramas <small>de trabajo</small></span>
            </a>
        </li>

        <li class="sidebar-category">Datos de gestión</li>

        <li class="panel">
            <a role="button" data-toggle="collapse" data-parent=".navigation" href="#collapse3" aria-expanded="false" aria-controls="collapse3" class="collapsed">
                <i class="ion-ios-pie-outline bg-purple"></i>
                <span class="sidebar-title">Leads</span>
            </a>
            <ul id="collapse3" class="list-unstyled collapse">
                <li><a href="{{ url('/admin/leads') }}">Reportes</a></li>
                <li><a href="{{ url('/inbox') }}">Bandeja</a></li>
                <li><a href="{{ url('/admin/inbox/config') }}">Configuración</a></li>
            </ul>
        </li>
        <li class="panel">
            <a href="{{ url('/admin/pagos') }}">
                <i class="ion-ios-calendar-outline bg-purple"></i>
                <span class="sidebar-title">Facturación</span>
            </a>
        </li>

    </ul>

    <div class="sidebar-category">Indicadores</div>
    <div class="sidebar-widget">
        <ul class="list-unstyled pl-15 pr-15">
            <li class="mb-20">
                <div class="block clearfix mb-10">
                    <span class="pull-left text-muted">Theressa v1.1</span>
                    <span class="pull-right label label-outline label-success">78 %</span>
                </div>
                <div class="progress progress-xs mb-0">
                    <div role="progressbar" data-transitiongoal="78" class="progress-bar progress-bar-success"></div>
                </div>
            </li>
        </ul>
    </div>
</aside>
