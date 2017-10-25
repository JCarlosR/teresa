@extends('layouts.panel')

@section('styles')
    <link rel="stylesheet" href="{{ asset('/plugins/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/plugins/summernote/dist/summernote.css') }}">
    <style>
        textarea {
            display: none;
        }
        [id^="status"] {
            font-size: 1.8em;
        }
    </style>
    <link rel="stylesheet" href="{{ asset('/panel/google-results/results.css') }}">
@endsection

@section('dashboard_content')
<div class="page-content container-fluid">

    <div class="widget">
        <div class="widget-heading">
            <h3 class="widget-title">Editar SERP del link seleccionado</h3>
        </div>
        <div class="widget-body">
            <form action="" method="POST" class="form-horizontal">
                {{ csrf_field() }}
                <fieldset>
                    <legend>Search Engine Results Page</legend>

                    <div class="form-group">
                        <label for="project-title" class="col-sm-2 control-label">Título</label>
                        <div class="col-sm-10">
                            <input type="text" name="title" id="project-title" class="form-control" placeholder="Título de la página" value="{{ old('title', $link->name) }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="project-description" class="col-sm-2 control-label">Descripción</label>
                        <div class="col-sm-10">
                            <input type="text" name="description" id="project-description" class="form-control" placeholder="Descripción de la página del proyecto" value="{{ old('description', $link->description) }}">
                        </div>
                    </div>
                    <div class="google-results">
                        <a href="#" onclick="return false;">
                            <span class="title">{{ old('title', $link->name) ?: 'Sin título' }}</span>
                        </a>
                        <div>
                            <cite>{{ $client->domain }}/<span>{{ ltrim($link->slug, '/') }}</span></cite>
                        </div>
                        <span class="description">{{ old('description', $link->description) }}</span>
                    </div>
                </fieldset>
                <fieldset>
                    <legend>Contenido</legend>
                    {{--<span id="status0" class="pull-right"></span>--}}
                    {{--<span id="limit0"></span>--}}
                    <textarea id="content" title="Contenido de la página" name="content" class="form-control">{{ old('content', $link->content) }}</textarea>
                </fieldset>
                <a href="{{ url('/serp/resumen') }}" class="btn btn-default">Volver sin guardar</a>
                <button class="btn btn-primary">
                    <i class="fa fa-save"></i> Guardar cambios
                </button>
            </form>
        </div>
    </div>

</div>
@endsection

@section('scripts')
    <script src="{{ asset('/plugins/summernote/dist/summernote.min.js') }}"></script>
    <script src="{{ asset('/src//panel/serp/edit.js') }}"></script>
    <script src="{{ asset('/panel/google-results/results.js') }}"></script>
    <script>
        googleResults('[name="title"]', '[name="description"]', '.google-results');
    </script>
@endsection