@extends('layouts.panel')

@section('styles')
    <link rel="stylesheet" href="{{ asset('/plugins/font-awesome/css/font-awesome.min.css') }}">
@endsection

@section('dashboard_content')
<div class="page-content container-fluid">
    <ol class="breadcrumb">
        <li><a href="{{ url(auth()->user()->root_route) }}"><i class="ion-home mr-5"></i> Inicio</a></li>
        <li><a href="/slides">Slides</a></li>
        <li class="active">Editar slide</li>
    </ol>

    <div class="widget">
        <div class="widget-heading">
            <h3 class="widget-title">Modificar slide seleccionado</h3>
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

            <form action="" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}

                <fieldset>
                    <div class="form-group">
                        <label for="slide-title">Título del slide</label>
                        <input type="text" name="title" id="slide-title" class="form-control" placeholder="Título principal" value="{{ old('title', $slide->title) }}" required>
                    </div>
                    <div class="form-group">
                        <label for="slide-description">Descripción del slide</label>
                        <input type="text" name="description" id="slide-description" class="form-control" placeholder="Descripción del slide" value="{{ old('description', $slide->description) }}" required>
                    </div>
                    <div class="form-group">
                        <label for="slide-url">URL del slide</label>
                        <input type="text" name="url" id="slide-url" class="form-control" placeholder="Enlace (opcional)" value="{{ old('url', $slide->url) }}" required>
                    </div>
                    <div class="form-group">
                        <label for="slide-image">Imagen para el slide <em>Subir solo si se desea modificar</em></label>
                        <input type="file" name="image" id="slide-image" class="form-control" placeholder="Selecciona una imagen">
                    </div>
                </fieldset>

                <div class="text-right">
                    <a href="/slides" class="btn btn-default">
                        Volver al listado de slides
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
@endsection