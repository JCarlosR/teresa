@extends('layouts.panel')

@section('dashboard_content')
<div class="page-content container-fluid">
    <div class="widget">
        <div class="widget-heading">
            <h3 class="widget-title">Slider</h3>
        </div>
        <div class="widget-body">
            @if (session('notification'))
                <div class="alert alert-success">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>

                    <p>{{ session('notification') }}</p>
                </div>
            @endif

            <a href="{{ url('/slides/registrar') }}" class="btn btn-success pull-right">
                <span class="glyphicon glyphicon-plus"></span>
                Registrar nuevo slide
            </a>
            <p class="mb-20">A continuación, un listado de <strong>todos los slides</strong> presentados en la página principal.</p>

            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Título</th>
                        <th>Descripción</th>
                        <th>Opciones</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($slides as $key => $slide)
                        <tr>
                            <th scope="row">{{ ++$key }}</th>
                            <td>{{ $project->title }}</td>
                            <td>{{ $project->description ?: 'Sin especificar' }}</td>
                            <td>
                                {{--<a href="{{ url("proyecto/$project->id/ver") }}" class="btn btn-default btn-sm" title="Ver datos">--}}
                                    {{--<span class="glyphicon glyphicon-eye-open"></span>--}}
                                {{--</a>--}}

                                <a href="{{ url("slides/$project->id/editar") }}" class="btn btn-info btn-sm" title="Editar slide">
                                    <span class="glyphicon glyphicon-edit"></span>
                                </a>

                                <a href="{{ url('/slides/'.$project->id.'/eliminar') }}"
                                   class="btn btn-danger btn-sm" title="Eliminar slide"
                                   onclick="return confirm('¿Estás seguro que deseas eliminar este slide?');">
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
