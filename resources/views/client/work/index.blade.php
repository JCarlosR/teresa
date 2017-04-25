@extends('layouts.panel')

@section('styles')
    <style>
        .big-icon {
            font-size: 2em;
        }
    </style>
    <link rel="stylesheet" type="text/css" media="print" href="{{ asset('panel/admin/work/print-show.css') }}">
@endsection

@section('dashboard_content')
<div class="page-content container-fluid">

    <div class="widget">
        <div class="widget-heading">
            <h3 class="widget-title">Cronogramas de trabajo</h3>
        </div>
        <div class="widget-body">

            <button type="button" onclick="window.print();" class="btn btn-info btn-sm pull-right">
                <i class="glyphicon glyphicon-print"></i>
            </button>

            <p class="mb-20">A continuación puedes ver qué actividades
                se han realizado, se están realizando o se realizarán como parte de la estrategia de Teresa.</p>

            <p class="text-muted">Al finalizar el año, el cronograma de actividades se actualizará
                a fin de planificar una estrategia adecuada según los progresos alcanzados.</p>

            @include('includes.user.work.show_activities_table')
        </div>
    </div>

</div>
@endsection
