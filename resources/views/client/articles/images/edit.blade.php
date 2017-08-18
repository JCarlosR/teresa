@extends('layouts.panel')

@section('styles')
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/min/dropzone.min.css">
    <style>
        .img-responsive { margin: 0 auto; }
    </style>
@endsection

@section('dashboard_content')
<div class="page-content container-fluid">
    <ol class="breadcrumb">
        <li><a href="{{ url(auth()->user()->root_route) }}"><i class="ion-home mr-5"></i> Inicio</a></li>
        <li><a href="/articulos">Artículos</a></li>
        <li><a href="/articulos/{{ $article->id }}/imagenes">Imágenes de {{ $article->title }}</a></li>
        <li class="active">Editar imagen</li>
    </ol>

    <div class="widget">
        <div class="widget-heading">
            <h3 class="widget-title">Editar datos de la imagen seleccionada</h3>
        </div>
        <div class="widget-body">
            @if (session('notification'))
                <div class="alert alert-success">
                    <p>{{ session('notification') }}</p>
                </div>
            @endif

            <div class="text-center">
                <img class="img-responsive" src="/images/articles/{{ $image->file_name }}"
                    alt="{{ $image->name }}"
                    title="{{ $image->description }}">
            </div>

            <form action="" method="POST">
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="name">Nombre o título</label>
                    <input type="text" class="form-control" name="name" id="name" value="{{ $image->name }}">
                </div>
                <div class="form-group">
                    <label for="description">Descripción</label>
                    <input type="text" class="form-control" name="description" id="description" value="{{ $image->description }}">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Guardar cambios</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
