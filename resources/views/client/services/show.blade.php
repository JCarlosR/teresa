@extends('layouts.panel')

@section('dashboard_content')
<div class="page-content container-fluid">
    <ol class="breadcrumb">
        <li><a href="{{ url(auth()->user()->root_route) }}"><i class="ion-home mr-5"></i> Inicio</a></li>
        <li><a href="/servicios">Servicios</a></li>
        <li class="active">Ver servicio</li>
    </ol>

    <div class="widget">
        <div class="widget-heading">
            <h1>
                {{ $service->name }}
                <a href="/servicio/{{ $service->id }}/editar" title="Editar servicio" style="color: #57caff">
                    <i class="glyphicon glyphicon-pencil"></i>
                </a>
            </h1>
        </div>
        <div class="widget-body">


            <div class="row">
                <div class="col-md-8">
                    <fieldset>
                        {!! $service->question_1 !!}

                        {!! $service->question_2 !!}

                        {!! $service->question_3 !!}

                        {!! $service->question_4 !!}

                        {!! $service->question_5 !!}
                    </fieldset>
                </div>
                <div class="col-md-4">
                    <fieldset>
                        <legend>Evaluación</legend>
                        <p>Pregunta 1: <i class="ion-record text-{{ $service->questionStatus(1) }}"></i></p>
                        <p>Pregunta 2: <i class="ion-record text-{{ $service->questionStatus(2) }}"></i></p>
                        <p>Pregunta 3: <i class="ion-record text-{{ $service->questionStatus(3) }}"></i></p>
                        <p>Pregunta 4: <i class="ion-record text-{{ $service->questionStatus(4) }}"></i></p>
                        <p>Pregunta 5: <i class="ion-record text-{{ $service->questionStatus(5) }}"></i></p>
                    </fieldset>
                </div>
            </div>


            <div class="text-right">
                <button type="button" class="btn btn-default" onclick="window.history.back();">
                    Volver al listado
                </button>
            </div>

        </div>
    </div>
</div>
@endsection
