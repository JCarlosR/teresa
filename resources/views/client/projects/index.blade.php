@extends('layouts.panel')

@section('styles')
    <link rel="stylesheet" href="{{ asset('/plugins/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/plugins/summernote/dist/summernote.css') }}">
    <style>
        textarea { display: none; }
    </style>
@endsection

@section('dashboard_content')
<div class="page-content container-fluid">
    <div class="widget">
        <div class="widget-heading">
            <h3 class="widget-title">Proyectos profesionales</h3>
        </div>
        <div class="widget-body">
            @if (session('notification'))
                <div class="alert alert-success">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>

                    <p>{{ session('notification') }}</p>
                </div>
            @endif

            @if (auth()->user()->is_admin)
                <div class="widget">
                    <div class="widget-heading clearfix">
                        <h3 class="widget-title pull-left">Search Engine Results Page</h3>
                        <ul class="widget-tools pull-right list-inline">
                            <li><a href="javascript:;" class="widget-collapse"><i class="ion-chevron-down"></i></a></li>
                        </ul>
                    </div>
                    <div class="widget-body" style="display: none;">
                        <form action="{{ url('/proyectos/descripcion') }}" class="form-horizontal" method="POST">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="description" class="col-md-12">Descripción de los proyectos:</label>
                            <div>
                                <div class="col-md-11">
                                    <input type="text" placeholder="Ingresa aquí un resumen de los proyectos realizados por la empresa, en menos de 155 caracteres." required class="form-control" value="{{ $description }}" name="description">
                                </div>
                                <div class="col-md-1">
                                    <button type="submit" class="btn btn-primary">
                                        <span class="glyphicon glyphicon-floppy-disk"></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                    </div>
                </div>
            @endif

            <div class="widget">
                <div class="widget-heading clearfix">
                    <h3 class="widget-title pull-left">Presentación</h3>
                    <ul class="widget-tools pull-right list-inline">
                        <li><a href="javascript:;" class="widget-collapse"><i class="ion-chevron-up"></i></a></li>
                    </ul>
                </div>
                <div class="widget-body">
                    <form action="{{ url('/page/projects/presentation') }}" method="POST">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <h4>
                                ¿Cómo presentarías los proyectos de tu empresa?
                                <small>Presenta la página de proyectos a tus potenciales clientes.</small>
                            </h4>
                            <span id="limit1"></span>
                            <span id="status1" class="pull-right"></span>
                            <textarea name="presentation" id="note1" title="Descripción de los proyectos">{{ old('presentation', $presentation) }}</textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">
                            <span class="glyphicon glyphicon-floppy-disk"></span> Guardar
                        </button>
                    </form>
                </div>
            </div>

            <a href="{{ url('/proyectos/registrar') }}" class="btn btn-success pull-right">
                <span class="glyphicon glyphicon-plus"></span>
                Registrar nuevo proyecto
            </a>
            <p class="mb-20">A continuación, un listado de <strong>todos los proyectos</strong> realizados por la empresa.</p>

            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th></th>{{-- Semaphore--}}
                        <th>Nombre</th>
                        <th>Tipo</th>
                        <th class="text-center">Fotos</th>
                        <th class="text-right">Contador</th>
                        <th class="text-center">Porcentaje</th>
                        <th>Opciones</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($projects as $key => $project)
                        <tr>
                            <th scope="row">{{ ++$key }}</th>
                            <td><img src="/images/semaphores/{{ $project->status_color }}.png" alt="Semáforo de estado" height="40"></td>
                            <td>
                                {{ $project->name }}
                            </td>
                            <td>{{ $project->type ?: 'Sin especificar' }}</td>
                            <td class="text-center text-{{ $project->hasPhotos ? 'success' : 'danger' }}">
                                @if ($project->hasPhotos)
                                    <i class="ion-checkmark-round"></i>
                                @else
                                    <i class="ion-close"></i>
                                @endif
                            </td>
                            <td class="text-right">{{ $project->characters_count }}</td>
                            <td class="text-center">{{ $project->characters_percent }}</td>
                            <td>
                                <a href="{{ url("proyecto/$project->id/ver") }}" class="btn btn-default btn-sm" title="Ver datos">
                                    <span class="glyphicon glyphicon-eye-open"></span>
                                </a>

                                <a href="{{ url("proyecto/$project->id/editar") }}" class="btn btn-info btn-sm" title="Editar datos">
                                    <span class="glyphicon glyphicon-edit"></span>
                                </a>

                                <a href="{{ url("proyecto/$project->id/imagenes") }}" class="btn btn-warning btn-sm" title="Editar imágenes">
                                    <span class="glyphicon glyphicon-picture"></span>
                                </a>

                                <a href="{{ url('/proyecto/'.$project->id.'/eliminar') }}"
                                   class="btn btn-danger btn-sm" title="Eliminar proyecto"
                                   onclick="return confirm('¿Estás seguro que deseas eliminar este proyecto?');">
                                    <span class="glyphicon glyphicon-remove"></span>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
    <script src="{{ asset('/plugins/summernote/dist/summernote.min.js') }}"></script>
    <script src="{{ asset('/panel/projects/index.js') }}"></script>
@endsection