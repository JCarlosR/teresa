@extends('layouts.panel')

@section('dashboard_content')
<div class="page-content container-fluid">
    <div class="widget">
        <div class="widget-heading">
            <h3 class="widget-title">Proyectos profesionales</h3>
        </div>
        <div class="widget-body">
            @if (session('notification'))
                <div class="alert alert-success">
                    <p>{{ session('notification') }}</p>
                </div>
            @endif


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
                            <td class="text-center">
                                @if ($key%2==0)
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
                                   class="btn btn-danger btn-sm" title="Eliminar servicio"
                                   onclick="return confirm('¿Estás seguro que deseas eliminar este proyecto?');"
                                >
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
