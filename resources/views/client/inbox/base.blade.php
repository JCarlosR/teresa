@extends('layouts.panel')

@section('dashboard_content')
<div class="page-content container-fluid">
    <div class="sidebar-container sidebar-sm">
        <div class="sidebar-toggle bg-white"><i class="ion-grid"></i></div>
        <div data-mcs-theme="minimal-dark" class="sidebar sidebar-sm bg-white mCustomScrollbar"><a href="email-compose.html" class="btn btn-rounded btn-success mb-20"><i class="ion-paintbrush mr-5"></i> Redactar</a>
            <div class="list-group no-border">
                <a href="javascript:;" class="list-group-item active">
                    <i class="ion-filing"></i> Inbox (5)
                </a>
                <a href="javascript:;" class="list-group-item">
                    <i class="ion-paper-airplane"></i> Enviados
                </a>
                <a href="javascript:;" class="list-group-item">
                    <i class="ion-edit"></i> Borradores (2)
                </a>
                <a href="javascript:;" class="list-group-item">
                    <i class="ion-trash-b"></i> Eliminados (7)
                </a>
                <a href="javascript:;" class="list-group-item">
                    <i class="ion-pricetag"></i> Importantes
                </a>
            </div>

            <h6 class="text-uppercase">Categorías</h6>
            <div class="list-group no-border">
                <a href="{{ url('/inbox?categoria=Todas') }}"
                   class="list-group-item @if($topic == 'Todas') active @endif">
                    <i class="ion-folder"></i> Todas
                </a>
                <a href="{{ url('/inbox?categoria=Proyectos') }}"
                   class="list-group-item @if($topic == 'Proyectos') active @endif">
                    <i class="ion-folder"></i> Proyectos
                </a>
                <a href="{{ url('/inbox?categoria=Proveedores') }}"
                   class="list-group-item @if($topic == 'Proveedores') active @endif">
                    <i class="ion-folder"></i> Proveedores
                </a>
                <a href="{{ url('/inbox?categoria=Empleo') }}"
                   class="list-group-item @if($topic == 'Empleo') active @endif">
                    <i class="ion-folder"></i> Empleo
                </a>
                <a href="{{ url('/inbox?categoria=Directo') }}"
                   class="list-group-item @if($topic == 'Directo') active @endif">
                    <i class="ion-folder"></i> C. Directo
                </a>
                <a href="{{ url('/inbox?categoria=Otros') }}"
                   class="list-group-item @if($topic == 'Otros') active @endif">
                    <i class="ion-folder"></i> Otros
                </a>
            </div>
            {{--<h6 class="text-uppercase">Labels</h6>--}}
            {{--<div class="list-group no-border"><a href="javascript:;" class="list-group-item"><i class="ion-record text-danger"></i> Family</a><a href="javascript:;" class="list-group-item"><i class="ion-record text-success"></i> Work</a><a href="javascript:;" class="list-group-item"><i class="ion-record text-primary"></i> Shop</a><a href="javascript:;" class="list-group-item"><i class="ion-record text-warning"></i> Google</a></div>--}}
            <div class="block mb-10"><span>5% de Spam</span></div>
            <div class="progress progress-xs mb-0">
                <div role="progressbar" data-transitiongoal="5" class="progress-bar progress-bar-danger"></div>
            </div>
        </div>
    </div>
    <div class="main-content content-sm">
        @yield('inbox_content')
    </div>
</div>
@endsection
