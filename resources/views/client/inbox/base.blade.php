@extends('layouts.panel')

@section('dashboard_content')
<div class="page-content container-fluid">
    <div class="sidebar-container sidebar-sm">
        <div class="sidebar-toggle bg-white"><i class="ion-grid"></i></div>
        <div data-mcs-theme="minimal-dark" class="sidebar sidebar-sm bg-white mCustomScrollbar">
            {{--<a href="{{ url('/inbox/new') }}" class="btn btn-rounded btn-success mb-20">--}}
                {{--<i class="ion-paintbrush mr-5"></i> Redactar--}}
            {{--</a>--}}
            <div class="list-group no-border">
                <a href="{{ url('/inbox') }}" class="list-group-item active">
                    <i class="ion-filing"></i> Inbox ({{ $pending_count }})
                </a>
                {{--<a href="javascript:;" class="list-group-item">--}}
                    {{--<i class="ion-paper-airplane"></i> Enviados--}}
                {{--</a>--}}
                {{--<a href="javascript:;" class="list-group-item">--}}
                    {{--<i class="ion-edit"></i> Borradores (2)--}}
                {{--</a>--}}
                <a href="javascript:;" class="list-group-item">
                    <i class="ion-pricetag"></i> Importantes
                </a>
                <a href="javascript:;" class="list-group-item">
                    <i class="ion-trash-b"></i> Eliminados ({{ $deleted_count }})
                </a>
            </div>

            <h6 class="text-uppercase">Categorías</h6>
            <div class="list-group no-border">
                <a href="{{ url('/inbox?categoria=Todos') }}"
                   class="list-group-item @if($topic == 'Todos') active @endif">
                    <i class="ion-folder"></i> Todas
                </a>
                @foreach ($categories as $category)
                <a href="{{ url('/inbox?categoria='.$category) }}"
                   class="list-group-item @if($topic == $category) active @endif">
                    <i class="ion-folder"></i> {{ $category }}
                </a>
                @endforeach
            </div>
            {{--<h6 class="text-uppercase">Labels</h6>--}}
            {{--<div class="list-group no-border"><a href="javascript:;" class="list-group-item"><i class="ion-record text-danger"></i> Family</a><a href="javascript:;" class="list-group-item"><i class="ion-record text-success"></i> Work</a><a href="javascript:;" class="list-group-item"><i class="ion-record text-primary"></i> Shop</a><a href="javascript:;" class="list-group-item"><i class="ion-record text-warning"></i> Google</a></div>--}}
            <div class="block mb-10"><span>2% de Spam</span></div>
            <div class="progress progress-xs mb-0">
                <div role="progressbar" data-transitiongoal="2" class="progress-bar progress-bar-danger"></div>
            </div>
        </div>
    </div>
    <div class="main-content content-sm">
        @yield('inbox_content')
    </div>
</div>
@endsection
