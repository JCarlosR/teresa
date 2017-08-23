@extends('layouts.panel')

@section('styles')
    <link rel="stylesheet" href="{{ asset('/panel/google-results/results.css') }}">
@endsection

@section('dashboard_content')
<div class="page-content container-fluid">
    <ol class="breadcrumb">
        <li><a href="{{ url(auth()->user()->root_route) }}"><i class="ion-home mr-5"></i> Inicio</a></li>
        <li><a href="/servicios">Servicios</a></li>
        <li class="active">Ver servicio</li>
    </ol>

    <div class="widget">
        <div class="widget-heading">
            <h1 class="widget-title">{{ $service->name }}</h1>
            <a href="/servicio/{{ $service->id }}/editar" title="Editar servicio"
               class="pull-right"
               style="color: #57caff; font-size: 2em;">
                <i class="glyphicon glyphicon-pencil"></i>
            </a>
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

    <div class="widget">
        <div class="widget-heading">
            <h3 class="widget-title">Search Engine Results Page</h3>
        </div>
        <div class="widget-body">
            <div class="google-results">
                <a href="#" onclick="return false;">
                    <span class="title">{{ $service->title ?: 'Sin título' }}</span>
                </a>
                <div>
                    <cite>{{ $client->domain }}/servicios/<span>{{ str_slug($service->title) }}</span></cite>
                </div>
                <span class="description">{{ $service->description ?: 'Sin descripción' }}</span>
            </div>
        </div>
    </div>

</div>
@endsection
