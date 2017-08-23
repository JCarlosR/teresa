@extends('layouts.panel')

@section('styles')
    <link rel="stylesheet" href="{{ asset('/panel/google-results/results.css') }}">
@endsection

@section('dashboard_content')
<div class="page-content container-fluid">
    <ol class="breadcrumb">
        <li><a href="{{ url(auth()->user()->root_route) }}"><i class="ion-home mr-5"></i> Inicio</a></li>
        <li><a href="/proyectos">Proyectos</a></li>
        <li class="active">Ver proyecto</li>
    </ol>

    <div class="widget">
        <div class="widget-heading">
            <a href="/proyecto/{{ $project->id }}/editar" title="Editar proyecto"
               class="pull-right"
               style="color: #57caff; font-size: 2em;">
                <i class="glyphicon glyphicon-pencil"></i>
            </a>
            <h1 class="widget-title">{{ $project->question_0 }}</h1>
        </div>
        <div class="widget-body">
            <div class="row">
                <div class="col-md-8">
                    <fieldset>
                        {{--<small>¿Cuál fue el encargo?</small>--}}
                        {!! $project->question_1 !!}

                        {{--<small>¿Cuál fue el planteamiento del proyecto?</small>--}}
                        {!! $project->question_2 !!}

                        {{--<small>¿Qué detalles técnicos especificarías?</small>--}}
                        {!! $project->question_3 !!}
                    </fieldset>
                </div>
                <div class="col-md-4">
                    <fieldset>
                        <legend>Evaluación</legend>
                        <p>Título: <i class="ion-record text-{{ $project->questionStatus(0) }}"></i></p>
                        <p>Pregunta 1: <i class="ion-record text-{{ $project->questionStatus(1) }}"></i></p>
                        <p>Pregunta 2: <i class="ion-record text-{{ $project->questionStatus(2) }}"></i></p>
                        <p>Pregunta 3: <i class="ion-record text-{{ $project->questionStatus(3) }}"></i></p>
                    </fieldset>

                    <fieldset>
                        <legend>Ficha del proyecto</legend>

                        <p class="small">Nombre del proyecto</p>
                        <p>{{ $project->name }}</p>

                        <p class="small">Servicios</p>
                        @if ($project->services->count() == 0)
                            <p>---</p>
                        @else
                            <ul>

                                @foreach ($project->services as $service)
                                    <li>{{ $service->name }}</li>
                                @endforeach
                            </ul>
                        @endif

                        <p class="small">Cliente</p>
                        <p>{{ $project->client ?: '---' }}</p>

                        <p class="small">Año del proyecto</p>
                        <p>{{ $project->year }}</p>


                        <p class="small">Tipo de proyecto</p>
                        <p>{{ $project->type ?: '---' }}</p>

                        <p class="small">Duración</p>
                        <p>{{ $project->duration ?: '---' }}</p>

                        <p class="small">Estado</p>
                        {{ $project->status ?: '---' }}

                        <p class="small">Reconocimientos</p>
                        <p>{{ $project->acknowledgments ?: '---' }}</p>
                    </fieldset>

                    @if ($client->client_type_id)
                        <fieldset>
                            <legend>Datos específicos del proyecto</legend>
                            @if ($client->client_type_id == 1)
                                @include('layouts.projects.architects.show', ['architect_project' => $project->architect_project])
                            @endif
                        </fieldset>
                    @endif
                </div>
            </div>
            <div class="text-right">
                <a href="/proyectos" type="button" class="btn btn-default">
                    Volver al listado
                </a>
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
                    <span class="title">{{ $project->title ?: 'Sin título' }}</span>
                </a>
                <div>
                    <cite>{{ $client->domain }}/proyectos/<span>{{ str_slug($project->title) }}</span></cite>
                </div>
                <span class="description">{{ $project->description ?: 'Sin descripción' }}</span>
            </div>
        </div>
    </div>

</div>
@endsection

@section('scripts')

@endsection