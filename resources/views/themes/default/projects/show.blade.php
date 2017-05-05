@extends('themes.default.base')

@section('content')
    <!--CTA1 START-->
    <div class="cta-1">
        <div class="container">
            <div class="row text-center white">
                <h1 class="cta-title">{{ $project->name }}</h1>
                <p class="cta-sub-title">{{ $project->description }}</p>
            </div>
        </div>
    </div>
    <!--CTA1 END-->

    <!--PORTFOLIO START-->
    <div class="section-padding">
        <div class="container">
            <div class="row">
                <div class="panel">
                    <div class="panel-heading">
                        <h1>{{ $project->question_0 }}</h1>
                    </div>
                    <div class="panel-body">

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
                                    @if (! isset($project->services) || $project->services->count() == 0)
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

                                @if ($me->client_type_id)
                                    <fieldset>
                                        <legend>Datos específicos del proyecto</legend>
                                        @if ($me->client_type_id == 1)
                                            @include('layouts.projects.architects.show', ['architect_project' => $project->architect_project])
                                        @endif
                                    </fieldset>
                                @endif
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--PORTFOLIO END-->


@endsection