@extends('layouts.panel')

@section('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/min/dropzone.min.css">
    <style>
        .thumbnail {
            height: 180px;
        }
        .thumbnail img {
            max-height: 95%;
        }
    </style>
@endsection

@section('dashboard_content')
<div class="page-content container-fluid">
    <ol class="breadcrumb">
        <li><a href="{{ url(auth()->user()->root_route) }}"><i class="ion-home mr-5"></i> Inicio</a></li>
        <li><a href="/proyectos">Proyectos</a></li>
        <li class="active">Imágenes</li>
    </ol>

    <div class="widget">
        <div class="widget-heading">
            <h3 class="widget-title">Imágenes del proyecto {{ $project->name }}</h3>
        </div>
        <div class="widget-body">
            @if (session('notification'))
                <div class="alert alert-success">
                    <p>{{ session('notification') }}</p>
                </div>
            @endif

            <div class="row">
                @foreach ($project->images as $image)
                    <div class="col-md-3">
                        <div class="widget">
                            <div class="widget-heading">
                                <h3 class="widget-title">{{ $image->name }}</h3>
                            </div>
                            <div class="widget-body">
                                <div class="thumbnail">
                                    <img src="/images/projects/{{ $image->file_name }}" alt="{{ $image->name }}">
                                </div>
                                <div class="row btn-demo animation-demo">
                                    <div class="col-xs-6">
                                        <button type="button" class="btn btn-sm btn-block btn-outline btn-rounded btn-primary">
                                            <span class="glyphicon glyphicon-edit"></span> Editar
                                        </button>
                                    </div>
                                    <div class="col-xs-6">
                                        <a href="{{ url('/proyecto/imagenes/'.$image->id.'/eliminar') }}" onclick="return confirm('Está seguro que desea eliminar esta imagen?');" class="btn btn-sm btn-block btn-outline btn-rounded btn-danger">
                                            <span class="glyphicon glyphicon-remove"></span> Eliminar
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <div class="widget">
        <div class="widget-heading">
            <h3 class="widget-title">Subir imágenes al proyecto {{ $project->name }}</h3>
        </div>
        <div class="widget-body">
            <form action="{{ asset('/proyecto/'.$project->id.'/imagenes') }}"
                  class="dropzone" id="my-awesome-dropzone">
                {{ csrf_field() }}
            </form>
        </div>
    </div>
</div>
@endsection

@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/min/dropzone.min.js"></script>
    <script>
        // "myAwesomeDropzone" is the camelized version of the HTML element's ID
        Dropzone.options.myAwesomeDropzone = {
            paramName: "file", // The name that will be used to transfer the file
            maxFilesize: 2 // MB
        };
    </script>
@endsection
