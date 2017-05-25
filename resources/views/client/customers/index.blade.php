@extends('layouts.panel')

@section('dashboard_content')
<div class="page-content container-fluid">
    <div class="widget">
        <div class="widget-heading">
            <h3 class="widget-title">Clientes de la empresa</h3>
        </div>
        <div class="widget-body">
            @if (session('notification'))
                <div class="alert alert-success">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>

                    <p>{{ session('notification') }}</p>
                </div>
            @endif

            {{--<form action="{{ url('/clientes/descripcion') }}" class="form-horizontal" method="POST">--}}
                {{--{{ csrf_field() }}--}}
                {{--<div class="form-group">--}}
                    {{--<label for="description" class="col-md-12">Descripción de los clientes:</label>--}}
                    {{--<div>--}}
                        {{--<div class="col-md-11">--}}
                            {{--<input type="text" placeholder="Ingresa aquí un resumen de los clientes habituales la empresa, en menos de 155 caracteres." required class="form-control" value="{{ $description }}" name="description">--}}
                        {{--</div>--}}
                        {{--<div class="col-md-1">--}}
                            {{--<button type="submit" class="btn btn-primary">--}}
                                {{--<span class="glyphicon glyphicon-floppy-disk"></span>--}}
                            {{--</button>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</form>--}}

            <a href="{{ url('/clientes/registrar') }}" class="btn btn-success pull-right">
                <span class="glyphicon glyphicon-plus"></span>
                Registrar nuevo cliente
            </a>
            <p class="mb-20">A continuación, un listado de <strong>todos los clientes</strong> de la empresa.</p>

            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Nombre</th>
                        <th>URL</th>
                        <th class="text-center">Imagen</th>
                        <th>Opciones</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($customers as $key => $customer)
                        <tr>
                            <th scope="row">{{ ++$key }}</th>
                            <td>{{ $customer->name }}</td>
                            <td>{{ $customer->url ?: 'Sin asignar' }}</td>
                            <td class="text-center">
                                @if ($customer->image)
                                    <img src="{{ asset('images/customers/'.$customer->image) }}" alt="Imagen del cliente {{ $customer->name }}">
                                @else
                                    Sin imagen
                                @endif
                            </td>
                            <td>
                                <a href="{{ url("clientes/$customer->id/editar") }}" class="btn btn-info btn-sm" title="Editar datos">
                                    <span class="glyphicon glyphicon-edit"></span>
                                </a>

                                <a href="{{ url('/clientes/'.$customer->id.'/eliminar') }}"
                                   class="btn btn-danger btn-sm" title="Eliminar servicio"
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
