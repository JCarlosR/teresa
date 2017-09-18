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
    <link rel="stylesheet" href="{{ asset('/panel/google-results/results.css') }}">
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
                    <h3>
                        Título del artículo
                        <small>Debe ser interesante para los lectores. Es una buena idea tener un ranking (los mejores 10 factores, las 7 mejores ideas, los 3 mejores productos, etcétera). <em>Entre 55 y 70 caracteres.</em></small>
                    </h3>
                    <span id="limit0"></span>
                    <span id="status0" class="pull-right"></span>
                    <input type="text" name="title" id="note0" class="form-control" placeholder="Título del artículo" value="{{ old('title', $article->title) }}">

                    <h3>
                        ¿Qué encontraremos en este artículo?
                        <small>Resumen de la idea principal, que irá en texto grande a manera de introducción. Acuérdate que las personas no tienen tiempo de leer todo. Aquí debes convencerlos de seguir leyendo!</small>
                    </h3>
                    <span id="limit1"></span>
                    <span id="status1" class="pull-right"></span>
                    <textarea id="note1" rows="5" title="Pregunta 1" name="idea">{{ old('idea', $article->idea) }}</textarea>


                    <h3>
                        Desarrollo del artículo
                        <small>Aquí puedes escribir todo lo que necesites comunicar. Recuerda usar "bullets", resaltar textos importantes y vincular el contenido con otros sitios web.</small>
                    </h3>
                    <span id="limit2"></span>
                    <span id="status2" class="pull-right"></span>
                    <textarea id="note2" title="Pregunta 2" name="idea_development">{{ old('idea_development', $article->idea_development) }}</textarea>

                    <h3>
                        ¿Qué queda por hacer?
                        <small>Como remate peudes recomendar a tus lectores visitar algún otro artículo, página, producto, para afianzar tu autoridad en la materia. No olvides agradecer siempre a tus colaboradores o sponsors.</small>
                    </h3>
                    <span id="limit3"></span>
                    <span id="status3" class="pull-right"></span>
                    <textarea id="note3" rows="6" title="Pregunta 3" name="bottom_line">{{ old('bottom_line', $article->bottom_line) }}</textarea>

                </fieldset>

                @if (auth()->user()->is_admin)
                    <fieldset>
                        <legend>Search Engine Results Page</legend>

                        <div class="form-group">
                            <label for="article-title" class="col-sm-2 control-label">Título</label>
                            <div class="col-sm-10">
                                <input type="text" name="meta_title" id="article-title" class="form-control" placeholder="Título de la página del artículo" value="{{ old('title', $article->meta_title) }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="article-description" class="col-sm-2 control-label">Descripción</label>
                            <div class="col-sm-10">
                                <input type="text" name="meta_description" id="article-description" class="form-control" placeholder="Descripción de la página del artículo" value="{{ old('description', $article->meta_description) }}">
                            </div>
                        </div>
                        <div class="google-results">
                            <a href="#" onclick="return false;">
                                <span class="title">{{ old('title', $article->meta_title) }}</span>
                            </a>
                            <div>
                                <cite>{{ $client->domain }}/blog/<span>{{ str_slug($article->meta_title) }}</span></cite>
                            </div>
                            <span class="description">{{ old('description', $article->meta_description) }}</span>
                        </div>
                    </fieldset>
                @endif

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

    <script src="{{ asset('/panel/google-results/results.js') }}"></script>
    <script>
        googleResults('[name="meta_title"]', '[name="meta_description"]', '.google-results');
    </script>
@endsection