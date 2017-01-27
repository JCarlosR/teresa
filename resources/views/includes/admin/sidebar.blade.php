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
                <i class="ion-ios-home-outline bg-purple"></i>
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
            </ul>
        </li>
        {{-- Datos de contacto --}}
        <li class="panel">
            <a href="{{ url('/admin/personal') }}">
                <i class="ion-ios-people bg-warning"></i>
                <span class="sidebar-title">Personal</span>
            </a>
        </li>

        <li class="panel">
            <a href="{{ url('/admin/servicios') }}">
                <i class="ion-ios-browsers bg-danger"></i>
                <span class="sidebar-title">Servicios</span>
            </a>
        </li>
        <li class="panel">
            <a href="{{ url("/admin/proyectos") }}">
                <i class="ion-ios-pricetag-outline bg-primary"></i>
                <span class="sidebar-title">Proyectos</span>
            </a>
        </li>
        {{--<li class="panel">--}}
        {{--<a href="{{ url('/pagos') }}">--}}
        {{--<i class="ion-ios-calendar-outline bg-info"></i>--}}
        {{--<span class="sidebar-title">Pagos</span>--}}
        {{--</a>--}}
        {{--</li>--}}


        <li class="sidebar-category">Sección reportes</li>
        <li class="panel">
            <a href="{{ url('/leads') }}">
                <i class="ion-ios-pie-outline bg-black"></i>
                <span class="sidebar-title">Leads</span>
            </a>
        </li>
    </ul>

</aside>