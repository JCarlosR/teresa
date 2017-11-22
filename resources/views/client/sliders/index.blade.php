@extends('layouts.panel')

@section('dashboard_content')
<div class="page-content container-fluid">
    <div class="widget">
        <div class="widget-heading">
            <h3 class="widget-title">Sliders</h3>
        </div>
        <div class="widget-body">
            @if (session('notification'))
                <div class="alert alert-success">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>

                    <p>{{ session('notification') }}</p>
                </div>
            @endif

            @if (auth()->user()->is_admin)
                <a href="{{ url('/sliders/registrar') }}" class="btn btn-success pull-right">
                    <span class="glyphicon glyphicon-plus"></span>
                    Registrar nuevo slider
                </a>
            @endif
            <p class="mb-20">A continuación, un listado de <strong>todos los sliders</strong> que serán usados en el sitio web.</p>

            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Nombre</th>
                        <th class="text-center"># Slides</th>
                        <th>Opciones</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($sliders as $key => $slider)
                        <tr>
                            <th scope="row">{{ ++$key }}</th>
                            <td>{{ $slider->name }}</td>
                            <td class="text-center">{{ $slider->slides()->count() }}</td>
                            <td>
                                <a href="{{ url("sliders/$slider->id/slides") }}" class="btn btn-default btn-sm" title="Editar slides">
                                    <span class="glyphicon glyphicon-list"></span>
                                </a>
                                @if (auth()->user()->is_admin)
                                    <a href="{{ url("sliders/$slider->id/editar") }}" class="btn btn-info btn-sm" title="Editar slider">
                                        <span class="glyphicon glyphicon-edit"></span>
                                    </a>
                                    <a href="{{ url('/sliders/'.$slider->id.'/eliminar') }}"
                                       class="btn btn-danger btn-sm" title="Eliminar slider"
                                       onclick="return confirm('¿Estás seguro que deseas eliminar este slider?');">
                                        <span class="glyphicon glyphicon-remove"></span>
                                    </a>
                                @endif
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
