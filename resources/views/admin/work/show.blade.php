@extends('layouts.panel')

@section('styles')
    <style>
        .big-icon {
            font-size: 1.2em;
        }
        #schedule-table td, #schedule-table th {
            padding-top: 0;
            padding-bottom: 0;
            min-height: 1.2em;
        }
        #schedule-table td {
            padding-left: 1.5em;
        }
    </style>
    <link rel="stylesheet" type="text/css" media="print" href="{{ asset('panel/admin/work/print-show.css') }}">
@endsection

@section('dashboard_content')
<div class="page-content container-fluid">
    <ol class="breadcrumb">
        <li><a href="{{ url(auth()->user()->root_route) }}"><i class="ion-home mr-5"></i> Inicio</a></li>
        <li><a href="/admin/cronograma">Cronogramas</a></li>
        <li class="active">Ver cronograma</li>
    </ol>

    <div class="widget">
        <div class="widget-heading">
            <h3 class="widget-title">Cronograma de trabajo</h3>
        </div>
        <div class="widget-body">
            @if (session('notification'))
                <div class="alert alert-success">
                    <p>{{ session('notification') }}</p>
                </div>
            @endif

            <button type="button" onclick="window.print();" class="btn btn-info btn-sm pull-right">
                <i class="glyphicon glyphicon-print"></i>
            </button>

            <p class="mb-20">Los cronogramas de trabajo permiten a los clientes conocer qué actividades
                se han realizado, se están realizando o se realizarán como parte de la estrategia de Teresa.</p>

            @include('includes.user.work.show_activities_table')
        </div>
    </div>

</div>

<div id="modalActivityMonth" tabindex="-1" role="dialog" class="modal fade bs-example-modal-lg" style="display: none;">
    <div role="document" class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-black no-border">
                <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title">Seleccione el estado de la actividad</h4>
            </div>
            <form action="{{ url('/admin/cronograma/'.$workSchedule->id.'/detalle') }}" method="get" id="formUpdateState">
                <input type="hidden" name="type" value="">
                <input type="hidden" name="month_offset" value="">
                <div class="modal-body">
                    <p><strong>Mes seleccionado:</strong> <span id="spanMonth"></span></p>
                    <p><strong>Actividad seleccionada:</strong> <span id="spanActivity"></span></p>
                    <p><strong>Estado de la actividad:</strong></p>
                    <div class="radio-custom">
                        <input id="complete" name="state" type="radio" value="1">
                        <label for="complete">Actividad completada <i class="ion-checkmark-round text-success"></i></label>
                    </div>
                    <div class="radio-custom">
                        <input id="awaiting" name="state" type="radio" value="0">
                        <label for="awaiting">Actividad en espera <i class="ion-clock text-default"></i></label>
                    </div>
                    <div class="radio-custom">
                        <input id="cancel" name="state" type="radio" value="-1">
                        <label for="cancel">Actividad cancelada <i class="ion-close-round text-danger"></i></label>
                    </div>
                    <div class="radio-custom">
                        <input id="empty" name="state" type="radio" value="-2">
                        <label for="empty">Sin actividad</label>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" data-dismiss="modal" class="btn btn-default">No aplicar cambios</button>
                    <button type="submit" class="btn btn-black">Aplicar</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@section('scripts')
    {{--<script src="{{ asset('/vendor/jspdf/jspdf.debug.js') }}"></script>--}}
    {{--<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/2.3.0/jspdf.plugin.autotable.js"></script>--}}
    <script src="{{ asset('panel/admin/work/show.js') }}"></script>
@endsection
