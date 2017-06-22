@extends('layouts.panel')

@section('dashboard_content')
<div class="page-content container-fluid">
    <div class="widget">
        <div class="widget-heading">
            <h3 class="widget-title">Cursos profesionales</h3>
        </div>
        <div class="widget-body">
            @if (session('notification'))
                <div class="alert alert-success">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <p>{{ session('notification') }}</p>
                </div>
            @endif

            {{--<form action="{{ url('/proyectos/descripcion') }}" class="form-horizontal" method="POST">--}}
                {{--{{ csrf_field() }}--}}
                {{--<div class="form-group">--}}
                    {{--<label for="description" class="col-md-12">Descripción de los proyectos:</label>--}}
                    {{--<div>--}}
                        {{--<div class="col-md-11">--}}
                            {{--<input type="text" placeholder="Ingresa aquí un resumen de los proyectos realizados por la empresa, en menos de 155 caracteres." required class="form-control" value="{{ $description }}" name="description">--}}
                        {{--</div>--}}
                        {{--<div class="col-md-1">--}}
                            {{--<button type="submit" class="btn btn-primary">--}}
                                {{--<span class="glyphicon glyphicon-floppy-disk"></span>--}}
                            {{--</button>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</form>--}}

            <a href="{{ url('/cursos/registrar') }}" class="btn btn-success pull-right">
                <span class="glyphicon glyphicon-plus"></span>
                Registrar nuevo curso
            </a>
            <p class="mb-20">
                A continuación, un listado de <strong>todos los cursos</strong> brindados por la empresa.
            </p>

            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Nombre</th>
                        <th>Descripción</th>
                        <th class="text-center">Precio</th>
                        <th class="text-center">Descuento</th>
                        <th>Opciones</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($courses as $key => $course)
                        <tr>
                            <th scope="row">{{ ++$key }}</th>
                            <td>{{ $course->name }}</td>
                            <td>{{ $course->description ?: 'Sin descripción' }}</td>
                            <td class="text-center">{{ $course->price }}</td>
                            <td class="text-center">{{ $course->discount }}</td>
                            <td>
                                {{--<a href="{{ url("curso/$course->id/ver") }}" class="btn btn-default btn-sm" title="Ver datos">--}}
                                    {{--<span class="glyphicon glyphicon-eye-open"></span>--}}
                                {{--</a>--}}
                                <a href="{{ url("cursos/$course->id/editar") }}" class="btn btn-info btn-sm" title="Editar datos">
                                    <span class="glyphicon glyphicon-edit"></span>
                                </a>
                                <a href="{{ url('/cursos/'.$course->id.'/eliminar') }}"
                                   class="btn btn-danger btn-sm" title="Eliminar servicio"
                                   onclick="return confirm('¿Estás seguro que deseas eliminar este curso?');">
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
