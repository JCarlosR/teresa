@extends('layouts.panel')

@section('styles')
    <!-- DataTables-->
    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/datatables.net-buttons-bs/css/buttons.bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/datatables.net-responsive-bs/css/responsive.bootstrap.min.css') }}">
@endsection

@section('dashboard_content')
    <div class="page-content container-fluid">
        @if (auth()->user()->is_client)
        <div class="row">
            <div class="col-md-12">
                <div class="widget">
                    <div class="widget-body">
                        <p><b>Bienvenido {{ auth()->user()->name }}!</b></p>
                        <p>Seleccione una opción del menú de la izquierda para acceder a la sección de su interés.</p>
                    </div>
                </div>
            </div>
        </div>
        @endif

        @include('includes.dashboard')
    </div>
@endsection

@section('scripts')
    {{-- Flot Charts --}}
    <script type="text/javascript" src="{{ asset('plugins/flot/jquery.flot.js') }}"></script>
    <script type="text/javascript" src="{{ asset('plugins/flot/jquery.flot.time.js') }}"></script>
    <script type="text/javascript" src="{{ asset('plugins/flot/jquery.flot.resize.js') }}"></script>
    <script type="text/javascript" src="{{ asset('plugins/flot/jquery.flot.pie.js') }}"></script>
    <script type="text/javascript" src="{{ asset('plugins/flot.curvedlines/curvedLines.js') }}"></script>
    <script type="text/javascript" src="{{ asset('plugins/flot.tooltip/js/jquery.flot.tooltip.min.js') }}"></script>
    {{-- Social counters --}}
    <script type="text/javascript" src="{{ asset('vendor/SocialCounters/js/api.js') }}"></script>
    {{-- Data tables --}}
    <script type="text/javascript" src="{{ asset('plugins/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('plugins/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('plugins/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('plugins/datatables.net-buttons-bs/js/buttons.bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('plugins/jszip/dist/jszip.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('plugins/pdfmake/build/pdfmake.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('plugins/pdfmake/build/vfs_fonts.js') }}"></script>
    <script type="text/javascript" src="{{ asset('plugins/datatables.net-buttons/js/buttons.colVis.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('plugins/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('plugins/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('plugins/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('plugins/datatables.net-responsive-bs/js/responsive.bootstrap.js') }}"></script>
    {{-- Dashboard logic --}}
    <script type="text/javascript" src="{{ asset('build/js/page-content/dashboard/index.js') }}"></script>
    <script type="text/javascript" src="{{ asset('build/js/page-content/tables/data-tables.js') }}"></script>
@endsection