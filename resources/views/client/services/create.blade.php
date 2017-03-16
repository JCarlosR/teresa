@extends('layouts.panel')

@section('styles')
    <link rel="stylesheet" href="{{ asset('/plugins/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/plugins/summernote/dist/summernote.css') }}">
    <style>
        textarea {
            display: none;
        }
    </style>
@endsection

@section('dashboard_content')
<div class="page-content container-fluid">
    <ol class="breadcrumb">
        <li><a href="{{ url(auth()->user()->root_route) }}"><i class="ion-home mr-5"></i> Inicio</a></li>
        <li><a href="/servicios">Servicios</a></li>
        <li class="active">Nuevo servicio</li>
    </ol>

    <div class="widget">
        <div class="widget-heading">
            <h3 class="widget-title">Nuevo servicio profesional</h3>
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

            <form action="" method="POST">
                {{ csrf_field() }}

                <fieldset>
                    <legend>Datos generales</legend>
                    <div class="form-group">
                        <label for="service-name">Nombre del servicio</label>
                        <input type="text" name="name" id="service-name" class="form-control" placeholder="Ingresa aquí el nombre del servicio" value="{{ old('name') }}">
                    </div>
                </fieldset>

                <fieldset>
                    <legend>Memoria descriptiva</legend>
                    <p class="mb-20">Por favor responde las siguientes preguntas.</p>

                    <h3>
                        ¿Cuál es el servicio?
                        <small>La idea principal del servicio</small>
                    </h3>
                    <span id="limit1"></span>
                    <span id="status1" class="pull-right"></span>
                    <textarea id="note1" title="Pregunta 1" name="question_1">{{ old('question_1') }}</textarea>

                    <h3>
                        ¿Tienen experiencia?
                        <small>Desde cuándo lo vienen haciendo, para qué clientes o tipo de clientes.</small>
                    </h3>
                    <span id="limit2"></span>
                    <span id="status2" class="pull-right"></span>
                    <textarea id="note2" title="Pregunta 2" name="question_2">{{ old('question_2') }}</textarea>

                    <h3>
                        ¿En qué ciudades han desarrollado proyectos
                        <small>Hasta dónde ofrecen sus servicios, en qué país, región, ciudad.</small>
                    </h3>
                    <span id="limit3"></span>
                    <span id="status3" class="pull-right"></span>
                    <textarea id="note3" title="Pregunta 3" name="question_3">{{ old('question_3') }}</textarea>

                    <h3>
                        ¿Cuál es el proyecto símbolo del servicio?
                        <small>¿Por qué?</small>
                    </h3>
                    <span id="limit4"></span>
                    <span id="status4" class="pull-right"></span>
                    <textarea id="note4" title="Pregunta 4" name="question_4">{{ old('question_4') }}</textarea>

                    <h3>
                        ¿Cual es el valor añadido que otorga el servicio?
                        <small>¿De qué manera el cliente resulta beneficiado por este?</small>
                    </h3>
                    <span id="limit5"></span>
                    <span id="status5" class="pull-right"></span>
                    <textarea id="note5" title="Pregunta 5" name="question_5">{{ old('question_5') }}</textarea>
                </fieldset>

                <div class="text-right">
                    <button type="submit" class="btn btn-primary">
                        Registrar servicio
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
@endsection