@extends('layouts.user')

@section('dashboard_content')
<div class="page-content container-fluid">
    <div class="widget">
        <div class="widget-heading">
            <h3 class="widget-title">Servicios profesionales</h3>
        </div>
        <div class="widget-body">
            <a href="{{ url('/servicios/registrar') }}" class="btn btn-success pull-right">
                <span class="glyphicon glyphicon-plus"></span>
                Registrar nuevo servicio
            </a>
            <p class="mb-20">A continuación, un listado de los servicios profesionales brindados por la empresa.</p>
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Opciones</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Supervisión</td>
                    <td>
                        <a href="{{ url('/servicio/1/proyectos') }}" class="btn btn-primary btn-sm" title="Ver proyectos">
                            <span class="glyphicon glyphicon-log-in"></span>
                        </a>
                        <a href="#" class="btn btn-info btn-sm" title="Ver o editar datos">
                            <span class="glyphicon glyphicon-edit"></span>
                        </a>
                    </td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Construcción</td>
                    <td>
                        <a href="#" class="btn btn-primary btn-sm" title="Ver proyectos">
                            <span class="glyphicon glyphicon-log-in"></span>
                        </a>
                        <a href="#" class="btn btn-info btn-sm" title="Ver o editar datos">
                            <span class="glyphicon glyphicon-edit"></span>
                        </a>
                    </td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Gerencia de proyectos</td>
                    <td>
                        <a href="#" class="btn btn-primary btn-sm" title="Ver proyectos">
                            <span class="glyphicon glyphicon-log-in"></span>
                        </a>
                        <a href="#" class="btn btn-info btn-sm" title="Ver o editar datos">
                            <span class="glyphicon glyphicon-edit"></span>
                        </a>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
