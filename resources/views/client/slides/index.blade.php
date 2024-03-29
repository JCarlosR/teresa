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

            <a href="{{ url('/sliders/'.$slider->id.'/slides/registrar') }}" class="btn btn-success pull-right">
                <span class="glyphicon glyphicon-plus"></span>
                Registrar nuevo slide
            </a>
            <p class="mb-20">A continuación, un listado de <strong>todos los slides</strong> presentes en el slider <strong>{{ $slider->name }}</strong>.</p>

            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Título</th>
                        <th>Descripción</th>
                        <th class="text-center">Foto</th>
                        <th>Opciones</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($slides as $key => $slide)
                        <tr>
                            <th scope="row">{{ ++$key }}</th>
                            <td>{{ $slide->title }}</td>
                            <td>{{ $slide->description ?: 'Sin especificar' }}</td>
                            <td class="text-center">
                                @if ($slide->image)
                                    <i class="ion-checkmark-round"></i>
                                @else
                                    <i class="ion-close"></i>
                                @endif
                            </td>
                            <td>
                                @if ($slide->image)
                                <a href="{{ url("images/slides/$slide->image") }}" class="btn btn-default btn-sm"
                                   title="Ver imagen" target="_blank">
                                    <span class="glyphicon glyphicon-eye-open"></span>
                                </a>
                                @else
                                    <button class="btn btn-default btn-sm" disabled
                                       title="Este slide no tiene ninguna imagen asociada">
                                        <span class="glyphicon glyphicon-eye-open"></span>
                                    </button>
                                @endif

                                <a href="{{ url("sliders/$slider->id/slides/$slide->id/editar") }}" class="btn btn-info btn-sm" title="Editar slide">
                                    <span class="glyphicon glyphicon-edit"></span>
                                </a>

                                <a href="{{ url('sliders/'.$slider->id.'/slides/'.$slide->id.'/eliminar') }}"
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
