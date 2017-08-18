@extends('layouts.panel')

@section('styles')
    <link rel="stylesheet" href="{{ asset('/plugins/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/plugins/summernote/dist/summernote.css') }}">
    <style>#note1, #note2 { display: none; }</style>
@endsection

@section('dashboard_content')
<div class="page-content container-fluid">
    <ol class="breadcrumb">
        <li><a href="{{ url(auth()->user()->root_route) }}"><i class="ion-home mr-5"></i> Inicio</a></li>
        <li><a href="/articulos">Artículos</a></li>
        <li class="active">Editar artículo</li>
    </ol>

    <div class="widget">
        <div class="widget-heading">
            <h3 class="widget-title">Editar artículo</h3>
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

            <form action="" method="POST" class="form-horizontal">
                {{ csrf_field() }}

                <fieldset>
                    <legend>Ficha del artículo</legend>

                    <div class="form-group">
                        <label for="article-title" class="col-sm-2 control-label">Título del artículo</label>
                        <div class="col-sm-10">
                            <input type="text" name="title" id="article-title" class="form-control" placeholder="Título del artículo (1 oración)" value="{{ old('title', $article->title) }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="article-idea" class="col-sm-2 control-label">Idea principal</label>
                        <div class="col-sm-10">
                            <textarea name="idea" id="article-idea" rows="2" class="form-control" placeholder="Sugerencia: 2 oraciones">{{ old('idea', $article->idea) }}</textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="article-objective" class="col-sm-2 control-label">Objetivo frente a nuestra audiencia</label>
                        <div class="col-sm-10">
                            <textarea name="objective" id="article-objective" rows="2" class="form-control" placeholder="Una frase breve (difundir ideas sobre... generar conciencia acerca de... indicar las ventajas de... demostrar el expertise de... comunicar los avances de... establecer los parámetros de...)">{{ old('objective', $article->objective) }}</textarea>
                        </div>
                    </div>

                </fieldset>

                <fieldset>
                    <legend>Memoria descriptiva</legend>

                    <h3>
                        Contexto.
                        <small>Sugerencia: 100 palabras</small>
                    </h3>
                    <span id="limit1"></span>
                    <span id="status1" class="pull-right"></span>
                    <textarea id="note1" title="Pregunta 1" name="context">{{ old('context', $article->context) }}</textarea>

                    <h3>
                        Desarrollo de la idea central
                        <small>Sugerencia: 150 palabras</small>
                    </h3>
                    <span id="limit2"></span>
                    <span id="status2" class="pull-right"></span>
                    <textarea id="note2" title="Pregunta 2" name="idea_development">{{ old('idea_development', $article->idea_development) }}</textarea>
                </fieldset>

                <div class="text-right">
                    <button type="button" class="btn btn-default" onclick="window.history.back();">
                        Cancelar registro
                    </button>
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
    <!-- Summer note editor for text-areas -->
    <script src="{{ asset('/plugins/summernote/dist/summernote.min.js') }}"></script>
    <script src="{{ asset('/panel/articles/create.js') }}"></script>
@endsection