@extends('layouts.panel')

@section('styles')
    <style>
        .big-icon {
            font-size: 2em;
        }
    </style>
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

            <p class="mb-20">Los cronogramas de trabajo permiten a los clientes conocer qué actividades
                se han realizado, se están realizando o se realizarán como parte de la estrategia de Teresa.</p>

            <div class="text-right">
                <button id="exportToPdf" class="btn btn-info">Exportar a PDF</button>
            </div>

            @include('includes.user.work.show_activities_table')
        </div>
    </div>

</div>
@endsection

@section('scripts')
    <script src="{{ asset('/vendor/jspdf/jspdf.debug.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/2.3.0/jspdf.plugin.autotable.js"></script>
    <script>
        $(function () {
            $('#exportToPdf').on('click', htmlToPdf);

            function htmlToPdf() {
                var doc = new jsPDF('l', 'mm', [297, 210]);
                doc.text("From HTML", 14, 16);
                var elem = document.getElementById("schedule-table");
                var res = doc.autoTableHtmlToJson(elem);
                console.log(res);
                doc.autoTable(res.columns, res.data, {startY: 20});

                doc.setProperties({
                    title: 'Cronograma de trabajo',
                    subject: 'Cronograma generado por Teresa v1.0'
                });

                doc.save('table.pdf');
            }
        });
    </script>
@endsection
