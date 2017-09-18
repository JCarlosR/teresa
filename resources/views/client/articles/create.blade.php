@extends('layouts.panel')

@section('styles')
    <link rel="stylesheet" href="{{ asset('/plugins/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/plugins/summernote/dist/summernote.css') }}">
    <style>
        textarea {
            display: none;
        }
        [id^="status"] {
            font-size: 1.2em;
        }
    </style>
@endsection

@section('dashboard_content')
<div class="page-content container-fluid">
    <ol class="breadcrumb">
        <li><a href="{{ url(auth()->user()->root_route) }}"><i class="ion-home mr-5"></i> Inicio</a></li>
        <li><a href="/articulos">Artículos</a></li>
        <li class="active">Nuevo artículo</li>
    </ol>

    <div class="widget">
        <div class="widget-heading">
            <h3 class="widget-title">Registrar nuevo artículo</h3>
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

            <form action="{{ url('/articulos/registrar') }}" method="POST" class="form-horizontal">
                {{ csrf_field() }}

                <fieldset>

                    <h3>
                        Título del artículo
                        <small>Debe ser interesante para los lectores. Es una buena idea tener un ranking (los mejores 10 factores, las 7 mejores ideas, los 3 mejores productos, etcétera). <em>Entre 55 y 70 caracteres.</em></small>
                    </h3>
                    <span id="limit0"></span>
                    <span id="status0" class="pull-right"></span>
                    <input type="text" name="title" id="note0" class="form-control" placeholder="Título del artículo" value="{{ old('title') }}">

                    <h3>
                        ¿Qué encontraremos en este artículo?
                        <small>Resumen de la idea principal, que irá en texto grande a manera de introducción. Acuérdate que las personas no tienen tiempo de leer todo. Aquí debes convencerlos de seguir leyendo!</small>
                    </h3>
                    <span id="limit1"></span>
                    <span id="status1" class="pull-right"></span>
                    <textarea id="note1" rows="5" title="Pregunta 1" name="idea">{{ old('idea') }}</textarea>

                    <h3>
                        Desarrollo del artículo
                        <small>Aquí puedes escribir todo lo que necesites comunicar. Recuerda usar "bullets", resaltar textos importantes y vincular el contenido con otros sitios web.</small>
                    </h3>
                    <span id="limit2"></span>
                    <span id="status2" class="pull-right"></span>
                    <textarea id="note2" rows="7" title="Pregunta 2" name="idea_development">{{ old('idea_development') }}</textarea>

                    <h3>
                        ¿Qué queda por hacer?
                        <small>Como remate peudes recomendar a tus lectores visitar algún otro artículo, página, producto, para afianzar tu autoridad en la materia. No olvides agradecer siempre a tus colaboradores o sponsors.</small>
                    </h3>
                    <span id="limit3"></span>
                    <span id="status3" class="pull-right"></span>
                    <textarea id="note3" rows="6" title="Pregunta 3" name="bottom_line">{{ old('bottom_line') }}</textarea>

                </fieldset>

                <div class="text-right">
                    <button type="button" class="btn btn-default" onclick="window.history.back();">
                        Cancelar registro
                    </button>
                    <button type="submit" class="btn btn-primary">
                        Registrar artículo
                    </button>
                </div>
            </form>

        </div>
    </div>
</div>
@endsection

@section('scripts')
    <!-- Summer note editor for text-areas -->
    <script src="{{ asset('/plugins/summernote/dist/summernote.min.js') }}"></script>
    <script src="{{ asset('/panel/articles/create.js') }}"></script>
@endsection