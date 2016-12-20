@extends('layouts.user')

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

            @if (isset($service))
                <a href="{{ url("/servicio/$service->id/proyectos/registrar") }}" class="btn btn-success pull-right">
                    <span class="glyphicon glyphicon-plus"></span>
                    Registrar nuevo proyecto
                </a>
                <p class="mb-20">A continuación, un listado de los proyectos realizados por la empresa en el servicio <b>{{ $service->name }}</b>.</p>
            @else
                <a href="{{ url('/proyectos/registrar') }}" class="btn btn-success pull-right">
                    <span class="glyphicon glyphicon-plus"></span>
                    Registrar nuevo proyecto
                </a>
                <p class="mb-20">A continuación, un listado de <strong>todos los proyectos</strong> realizados por la empresa.</p>
            @endif

            {{-- TODO: Mostrar una columna con el tipo de servicio cuando se están mostrando TODOS los proyectos en general. --}}
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Año</th>
                    <th>Cliente</th>
                    <th>Opciones</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($projects as $key => $project)
                    <tr>
                        <th scope="row">{{ ++$key }}</th>
                        <td>{{ $project->name }}</td>
                        <td>{{ $project->year }}</td>
                        <td>{{ $project->client }}</td>
                        <td>
                            <a href="{{ url("proyecto/$project->id/editar") }}" class="btn btn-info btn-sm" title="Ver o editar datos">
                                <span class="glyphicon glyphicon-edit"></span>
                            </a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
