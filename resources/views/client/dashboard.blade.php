@extends('layouts.panel')

@section('styles')
    <!-- DataTables-->
    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/datatables.net-buttons-bs/css/buttons.bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/datatables.net-responsive-bs/css/responsive.bootstrap.min.css') }}">
    <style>
        .col-social {
            width: 12.5%;
            /*border: 1px solid grey;*/
            float:left;
            position: relative;
            min-height: 1px;
            padding-right: 1em;
            padding-left: 1em;
        }
        .col-professional {
            width: 20%;
            float:left;
            position: relative;
            min-height: 1px;
            padding: 1em;
        }
        @media(max-width:576px) {
            .col-social {
                width: 33.33%;
            }
            .col-professional {
                width: 33.33%;
            }
        }
    </style>
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
    <script type="text/javascript" src="{{ asset('plugins/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('plugins/datatables.net-responsive-bs/js/responsive.bootstrap.js') }}"></script>
    {{-- Dashboard logic --}}
    <script type="text/javascript" src="{{ asset('build/js/page-content/dashboard/index.js') }}"></script>
    <script type="text/javascript" src="{{ asset('build/js/page-content/tables/data-tables.js') }}"></script>
@endsection
