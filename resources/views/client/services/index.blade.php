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
            <h3 class="widget-title">Servicios profesionales</h3>
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
                    <form action="{{ url('/servicios/descripcion') }}" method="POST">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="description">Descripción de los servicios:</label>
                            <input type="text" placeholder="Resume aquí los servicios que brinda la empresa en menos de 155 caracteres." required class="form-control" value="{{ $description }}" name="description">
                        </div>

                        <button type="submit" class="btn btn-primary">
                            <span class="glyphicon glyphicon-floppy-disk"></span> Guardar
                        </button>
                    </form>
                </div>
            </div>
            @endif

            <div class="widget">
                <div class="widget-heading clearfix">
                    <h3 class="widget-title pull-left">Presentación</h3>
                    <ul class="widget-tools pull-right list-inline">
                        <li><a href="javascript:;" class="widget-collapse"><i class="ion-chevron-down"></i></a></li>
                    </ul>
                </div>
                <div class="widget-body" style="display: none;">
                    <form action="{{ url('/page/services/presentation') }}" method="POST">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <h4>
                                ¿Cómo presentarías los servicios de tu empresa?
                                <small>Presenta la página de servicios a tus potenciales clientes.</small>
                            </h4>
                            <span id="limit1"></span>
                            <span id="status1" class="pull-right"></span>
                            <textarea name="presentation" id="note1" title="Descripción de los servicios">{{ old('presentation', $presentation) }}</textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">
                            <span class="glyphicon glyphicon-floppy-disk"></span> Guardar
                        </button>
                    </form>
                </div>
            </div>

            <a href="{{ url('/servicios/registrar') }}" class="btn btn-success pull-right">
                <span class="glyphicon glyphicon-plus"></span>
                Registrar nuevo servicio
            </a>
            <p class="mb-20">A continuación, un listado de los servicios profesionales brindados por la empresa.</p>

            <div class="row">
                @foreach ($services as $key => $service)
                    <div class="col-sm-12 col-md-6 col-xl-4">
                        <div class="widget">
                            <div class="widget-heading">
                                <h3 class="widget-title text-center">
                                    ({{ ++$key }})
                                    {{ $service->name }}
                                    <img src="/images/semaphores/{{ $service->status_color }}.png" alt="Semáforo de estado" height="40">
                                </h3>
                            </div>
                            <div class="widget-body">
                                <p>
                                    Fotos:
                                    <span class="text-center text-{{ $service->hasPhotos ? 'success' : 'danger' }}">
                                     @if ($service->hasPhotos)
                                            <i class="ion-checkmark-round"></i>
                                    @else
                                        <i class="ion-close"></i>
                                    @endif
                                    </span>
                                </p>
                                <p>Contador de caracteres: {{ $service->characters_count }}</p>
                                <p>Porcentaje del total sugerido: {{ $service->characters_percent }} %</p>
                                <ul class="list-group">
                                    @foreach ($service->services as $s)
                                        <li class="list-group-item">
                                            {{ $s->name }}
                                            <p class="pull-right">
                                                <a href="{{ url("/servicio/$service->id/ver") }}" class="btn btn-default btn-xs" title="Ver datos">
                                                    <span class="glyphicon glyphicon-eye-open"></span>
                                                </a>
                                                <a href="{{ url('/servicio/'.$service->id.'/editar') }}" class="btn btn-info btn-xs" title="Editar datos">
                                                    <span class="glyphicon glyphicon-edit"></span>
                                                </a>
                                                <a href="{{ url("servicio/$service->id/imagenes") }}" class="btn btn-warning btn-xs" title="Editar imágenes">
                                                    <span class="glyphicon glyphicon-picture"></span>
                                                </a>

                                                <a href="{{ url('/servicio/'.$service->id.'/eliminar') }}"
                                                   class="btn btn-danger btn-xs" title="Eliminar servicio"
                                                   onclick="return confirm('¿Estás seguro que deseas eliminar este servicio?');">
                                                    <span class="glyphicon glyphicon-remove"></span>
                                                </a>
                                            </p>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="widget-footer">
                                <p class="text-center">
                                    <a href="{{ url("/servicio/$service->id/ver") }}" class="btn btn-default btn-sm" title="Ver datos">
                                        <span class="glyphicon glyphicon-eye-open"></span>
                                    </a>

                                    <a href="{{ url('/servicio/'.$service->id.'/editar') }}" class="btn btn-info btn-sm" title="Editar datos">
                                        <span class="glyphicon glyphicon-edit"></span>
                                    </a>

                                    <a href="{{ url("servicio/$service->id/imagenes") }}" class="btn btn-warning btn-sm" title="Editar imágenes">
                                        <span class="glyphicon glyphicon-picture"></span>
                                    </a>

                                    <a href="{{ url('/servicio/'.$service->id.'/eliminar') }}"
                                       class="btn btn-danger btn-sm" title="Eliminar servicio"
                                       onclick="return confirm('¿Estás seguro que deseas eliminar este servicio?');">
                                        <span class="glyphicon glyphicon-remove"></span>
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </div>
</div>
@endsection

@section('scripts')
    <script src="{{ asset('/plugins/summernote/dist/summernote.min.js') }}"></script>
    <script src="{{ asset('/panel/services/index.js') }}"></script>
@endsection