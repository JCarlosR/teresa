@extends('layouts.panel')

@section('styles')
    <link rel="stylesheet" href="{{ asset('/plugins/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/plugins/summernote/dist/summernote.css') }}">
    <link rel="stylesheet" href="{{ asset('/panel/google-results/results.css') }}">
    <style>
        textarea {
            display: none;
        }
        [id^="status"] {
            font-size: 1.8em;
        }
    </style>
@endsection

@section('dashboard_content')
<div class="page-content container-fluid">
    <ol class="breadcrumb">
        <li><a href="{{ url(auth()->user()->root_route) }}"><i class="ion-home mr-5"></i> Inicio</a></li>
        <li><a href="/servicios">Servicios</a></li>
        <li class="active">Editar servicio</li>
    </ol>

    <div class="widget">
        <div class="widget-heading">
            <h3 class="widget-title">Editar servicio profesional</h3>
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

            <form action="{{ url('/servicio/editar') }}" method="POST">
                {{ csrf_field() }}
                <input type="hidden" name="service_id" value="{{ $service->id }}">

                <fieldset>
                    <legend>Datos generales</legend>
                    <div class="form-group">
                        <label for="service-name">Nombre del servicio</label>
                        <input type="text" name="name" id="service-name" class="form-control" placeholder="Ingresa aquí el nombre del servicio" value="{{ old('name', $service->name) }}">
                    </div>
                    @if (auth()->user()->is_admin)
                        <div class="form-group">
                            <label for="service-short-name">Nombre corto</label>
                            <input type="text" name="short_name" id="service-short-name" class="form-control" placeholder="Ingresa aquí un nombre de corto, un nombre de botón" value="{{ old('short_name', $service->short_name) }}">
                        </div>
                        <div class="form-group">
                            <label for="service-icon">Ícono <em>(código)</em></label>
                            <input type="text" name="icon" id="service-icon" class="form-control" placeholder="Código de un ícono o imagen representativa" value="{{ old('icon', $service->icon) }}">
                        </div>
                    @endif
                </fieldset>

                <fieldset>
                    <legend>Memoria descriptiva</legend>
                    <p class="mb-20">Por favor responde las siguientes preguntas.</p>

                    <span id="status1" class="pull-right"></span>
                    <h3>
                        ¿Cuál es el servicio?
                        <small>La idea principal del servicio</small>
                    </h3>
                    <span id="limit1"></span>
                    <textarea id="note1" title="Pregunta 1" name="question_1">{{ old('question_1', $service->question_1) }}</textarea>

                    <span id="status2" class="pull-right"></span>
                    <h3>
                        ¿Tienen experiencia?
                        <small>Desde cuándo lo vienen haciendo, para qué clientes o tipo de clientes.</small>
                    </h3>
                    <span id="limit2"></span>
                    <textarea id="note2" title="Pregunta 2" name="question_2">{{ old('question_2', $service->question_2) }}</textarea>

                    <span id="status3" class="pull-right"></span>
                    <h3>
                        ¿En qué ciudades han desarrollado proyectos
                        <small>Hasta dónde ofrecen sus servicios, en qué país, región, ciudad.</small>
                    </h3>
                    <span id="limit3"></span>
                    <textarea id="note3" title="Pregunta 3" name="question_3">{{ old('question_3', $service->question_3) }}</textarea>

                    <span id="status4" class="pull-right"></span>
                    <h3>
                        ¿Cuál es el proyecto símbolo del servicio?
                        <small>¿Por qué?</small>
                    </h3>
                    <span id="limit4"></span>
                    <textarea id="note4" title="Pregunta 4" name="question_4">{{ old('question_4', $service->question_4) }}</textarea>

                    <span id="status5" class="pull-right"></span>
                    <h3>
                        ¿Cual es el valor añadido que otorga el servicio?
                        <small>¿De qué manera el cliente resulta beneficiado por este?</small>
                    </h3>
                    <span id="limit5"></span>
                    <textarea id="note5" title="Pregunta 5" name="question_5">{{ old('question_5', $service->question_5) }}</textarea>
                </fieldset>

                @if (auth()->user()->is_admin)
                    <fieldset>
                        <legend>Search Engine Results Page</legend>
                        <div class="form-group">
                            <label for="service-title">Título</label>
                            <input type="text" name="title" id="service-title" class="form-control" placeholder="Título de la página de servicio" value="{{ old('title', $service->title) }}">
                        </div>
                        <div class="form-group">
                            <label for="service-description">Descripción</label>
                            <input type="text" name="description" id="service-description" class="form-control" placeholder="Descripción de la página de servicio" value="{{ old('description', $service->description) }}">
                        </div>
                        <div class="google-results">
                            <a href="#" onclick="return false;">
                                <span class="title">{{ $service->title ?: 'Sin título' }}</span>
                            </a>
                            <div>
                                <cite>{{ $client->domain }}/servicios/<span>{{ str_slug($service->name) }}</span></cite>
                            </div>
                            <span class="description">{{ $service->description ?: 'Sin descripción' }}</span>
                        </div>
                    </fieldset>
                @endif

                <div class="text-right">
                    <a href="/servicios" type="button" class="btn btn-default">
                        Volver sin guardar
                    </a>
                    <button type="submit" class="btn btn-primary">
                        Guardar cambios
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@section('scripts')
    <script src="{{ asset('/plugins/summernote/dist/summernote.min.js') }}"></script>
    <script src="{{ asset('/panel/services/create.js') }}"></script>
    <script src="{{ asset('/panel/google-results/results.js') }}"></script>
    <script>
        googleResults('[name="title"]', '[name="description"]', '.google-results');
    </script>
@endsection