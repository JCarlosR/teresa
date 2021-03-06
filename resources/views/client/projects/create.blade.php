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

    <link rel="stylesheet" href="{{ asset('/panel/google-results/results.css') }}">
@endsection

@section('dashboard_content')
<div class="page-content container-fluid">
    <ol class="breadcrumb">
        <li><a href="{{ url(auth()->user()->root_route) }}"><i class="ion-home mr-5"></i> Inicio</a></li>
        <li><a href="/proyectos">Proyectos</a></li>
        <li class="active">Nuevo proyecto</li>
    </ol>

    <div class="widget">
        <div class="widget-heading">
            <h3 class="widget-title">Nuevo proyecto</h3>
        </div>
        <div class="widget-body">
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif


            <form action="{{ url('/proyectos/registrar') }}" method="POST" class="form-horizontal">
                {{ csrf_field() }}

                <fieldset>
                    <legend>Ficha del proyecto</legend>

                    <div class="form-group">
                        <label for="project-client" class="col-sm-2 control-label">Nombre</label>
                        <div class="col-sm-10">
                            <input type="text" name="name" id="project-name" class="form-control"
                                   placeholder="Nombre del proyecto" value="{{ old('name') }}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="project-service" class="col-sm-2 control-label">Servicios</label>
                        <div class="col-sm-10">
                            <ul id="myULServices">
                                <!-- Existing list items will be pre-added -->
                                @if (old('services'))
                                    @foreach (old('services') as $old_service)
                                        <li>{{ $old_service }}</li>
                                    @endforeach
                                @else
                                    @foreach ($services as $service)
                                        <li>{{ $service->name }}</li>
                                    @endforeach
                                @endif
                            </ul>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="project-client" class="col-sm-2 control-label">Cliente</label>
                        <div class="col-sm-10">
                            <input type="text" name="client" id="project-client" class="form-control" placeholder="Cliente del proyecto" value="{{ old('client') }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="project-year" class="col-sm-2 control-label">Año del proyecto</label>
                        <div class="col-sm-10">
                            <input type="number" name="year" id="project-year" class="form-control" placeholder="Año de desarrollo del proyecto" value="{{ old('year') }}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="project-type" class="col-sm-2 control-label">Tipo de proyecto</label>
                        <div class="col-sm-10">
                            <input type="text" name="type" id="project-type" class="form-control" placeholder="Tipo de proyecto" value="{{ old('type') }}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="project-duration" class="col-sm-2 control-label">Duración</label>
                        <div class="col-sm-10">
                            <input type="text" name="duration" id="project-duration" class="form-control" placeholder="Especificar: días, semanas, meses" value="{{ old('duration') }}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="project-status" class="col-sm-2 control-label">Estado</label>
                        <div class="col-sm-10">
                            <input type="text" name="status" id="project-status" class="form-control"
                                   placeholder="Estado del proyecto" value="{{ old('status') }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="project-acknowledgments" class="col-sm-2 control-label">Reconocimientos</label>
                        <div class="col-sm-10">
                            <textarea name="acknowledgments" id="project-acknowledgments" placeholder="Reconocimientos recibidos por el proyecto" rows="2" class="form-control">{{ old('acknowledgments') }}</textarea>
                        </div>
                    </div>

                </fieldset>

                @if ($client->client_type_id)
                    <fieldset>
                        <legend>Datos específicos del proyecto</legend>
                        @if ($client->client_type_id == 1)
                            @include('layouts.projects.architects.create')
                        @endif
                    </fieldset>
                @endif

                <fieldset>
                    <legend>Memoria descriptiva</legend>

                    <h3>
                        Título de la historia del proyecto.
                        <small>¿Qué logramos? ¿En cuánto tiempo? ¿Dónde? <em>(entre 55 y 70 caracteres)</em></small>
                    </h3>
                    <span id="limit0"></span>
                    <span id="status0" class="pull-right"></span>
                    <input type="text" id="note0" title="Pregunta 0" class="form-control"
                           name="question_0" value="{{ old('question_0') }}">

                    <h3>
                        ¿Cuál fue el encargo?
                        <small>¿Se realizo un diagnóstico/estudio previo a la ejecución del proyecto? Descríbelo</small>
                    </h3>
                    <span id="limit1"></span>
                    <span id="status1" class="pull-right"></span>
                    <textarea id="note1" title="Pregunta 1" name="question_1">{{ old('question_1') }}</textarea>

                    <h3>
                        ¿Cuál fue el planteamiento del proyecto?
                        <small>¿Cómo se planteó la ejecución del proyecto y en dónde reside el valor añadido entregado al cliente?</small>
                    </h3>
                    <span id="limit2"></span>
                    <span id="status2" class="pull-right"></span>
                    <textarea id="note2" title="Pregunta 2" name="question_2">{{ old('question_2') }}</textarea>

                    <h3>
                        ¿Qué detalles técnicos especificarías?
                        <small>¿Que dificultades se encontraron pero fueron superadas durante la realización del proyecto? ¿Se entregó un cronograma e informe de resultados?</small>
                    </h3>
                    <span id="limit3"></span>
                    <span id="status3" class="pull-right"></span>
                    <textarea id="note3" title="Pregunta 3" name="question_3">{{ old('question_3') }}</textarea>
                </fieldset>

                @if (auth()->user()->is_admin)
                    <fieldset>
                        <legend>Search Engine Results Page</legend>
                        <div class="form-group">
                            <label for="project-title" class="col-sm-2 control-label">Título</label>
                            <div class="col-sm-10">
                                <input type="text" name="title" id="project-title" class="form-control" placeholder="Título de la página del proyecto" value="{{ old('title') }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="project-description" class="col-sm-2 control-label">Descripción</label>
                            <div class="col-sm-10">
                                <input type="text" name="description" id="project-description" class="form-control"
                                       placeholder="Descripción de la página del proyecto" value="{{ old('description') }}">
                            </div>
                        </div>
                        <div class="google-results">
                            <a href="#" onclick="return false;">
                                <span class="title">
                                    {{ old('title', 'Este es un ejemplo de un título con 70 caracteres de longitud') }}
                                </span>
                            </a>
                            <div>
                                <cite>{{ $client->domain }}/proyectos/<span>example</span></cite>
                            </div>
                            <span class="description">
                                {{ old('description', 'Este es un ejemplo de cómo se muestran los resultados en Google. Este contenido lo obtiene Google (y los demás buscadores) en base a etiquetas meta que se encarga de configurar Teresa.') }}
                            </span>
                        </div>
                    </fieldset>
                @endif

                <div class="text-right">
                    <button type="button" class="btn btn-default" onclick="window.history.back();">
                        Cancelar registro
                    </button>
                    <button type="submit" class="btn btn-primary">
                        Registrar proyecto
                    </button>
                </div>
            </form>

        </div>
    </div>
</div>
@endsection

@section('scripts')
    <script>
        var sampleTags = [];
        @foreach ($services as $service)
            sampleTags.push('{!! $service->name !!}');
        @endforeach
    </script>

    <!-- Tag-it and the required jquery ui -->
    <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js" type="text/javascript" charset="utf-8"></script>
    <script src="{{ asset('vendor/tag-it/tag-it.min.js') }}" type="text/javascript" charset="utf-8"></script>

    <!-- Summer note editor for text-areas -->
    <script src="{{ asset('/plugins/summernote/dist/summernote.min.js') }}"></script>

    <script src="{{ asset('/panel/projects/create.js') }}"></script>
    <script src="{{ asset('/panel/google-results/results.js') }}"></script>
    <script>
        googleResults('[name="title"]', '[name="description"]', '.google-results');
    </script>
@endsection