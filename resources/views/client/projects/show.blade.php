@extends('layouts.panel')

@section('styles')
    <link rel="stylesheet" href="{{ asset('/plugins/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/plugins/summernote/dist/summernote.css') }}">
    <style>
        textarea {
            display: none;
        }
    </style>

    {{-- Tag-it styles --}}
    <link href="{{ asset('vendor/tag-it/jquery.tagit.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('vendor/tag-it/tagit.ui-zendesk.css') }}" rel="stylesheet" type="text/css">
@endsection

@section('dashboard_content')
<div class="page-content container-fluid">
    <div class="widget">
        <div class="widget-heading">
            <h3 class="widget-title">Ver proyecto</h3>
        </div>
        <div class="widget-body">

            <div class="row">
                <div class="col-md-8">
                    <fieldset>
                        <legend>Memoria descriptiva</legend>

                        {!! $project->question_0 !!}

                        <h3>
                            ¿Cuál fue el encargo?
                        </h3>
                        {!! $project->question_1 !!}

                        <h3>
                            ¿Cuál fue el planteamiento del proyecto?
                        </h3>
                        {!! $project->question_2 !!}

                        <h3>
                            ¿Qué detalles técnicos especificarías?
                        </h3>
                        {!! $project->question_3 !!}
                    </fieldset>
                </div>
                <div class="col-md-4">
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
                <button type="button" class="btn btn-default" onclick="window.history.back();">
                    Volver al listado
                </button>
            </div>

        </div>
    </div>
</div>
@endsection

@section('scripts')
    <!-- Tag-it and the required jquery ui -->
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js" type="text/javascript" charset="utf-8"></script>
    <script src="{{ asset('vendor/tag-it/tag-it.min.js') }}" type="text/javascript" charset="utf-8"></script>
@endsection