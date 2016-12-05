@extends('layouts.user')

@section('dashboard_content')
<div class="page-content container-fluid">
    <div class="widget">
        <div class="widget-heading">
            <h3 class="widget-title">Proyectos profesionales</h3>
        </div>
        <div class="widget-body">

            @if (isset($service))
                <a href="{{ url('/servicio/1/proyectos/registrar') }}" class="btn btn-success pull-right">
                    <span class="glyphicon glyphicon-plus"></span>
                    Registrar nuevo proyecto
                </a>
                <p class="mb-20">A continuación, un listado de los proyectos realizados por la empresa en el servicio <b>ABC</b>.</p>
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
                <tr>
                    <th scope="row">1</th>
                    <td>Tienda Samsonite Larcomar</td>
                    <td>2015</td>
                    <td>SAMSONITE PERU S.A.C.</td>
                    <td>
                        <a href="#" class="btn btn-info btn-sm" title="Ver o editar datos">
                            <span class="glyphicon glyphicon-edit"></span>
                        </a>
                    </td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Tienda Samsonite INOUTLET Faucett</td>
                    <td>2015</td>
                    <td>SAMSONITE PERU S.A.C.</td>
                    <td>
                        <a href="#" class="btn btn-info btn-sm" title="Ver o editar datos">
                            <span class="glyphicon glyphicon-edit"></span>
                        </a>
                    </td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Tienda Colloky Jockey Plaza ETAPA 2</td>
                    <td>2015</td>
                    <td>Comercial Colride S.A.C.</td>
                    <td>
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
