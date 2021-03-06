@extends('layouts.panel')

@section('dashboard_content')
<div class="page-content container-fluid">
    <div class="widget">
        <div class="widget-heading">
            <h3 class="widget-title">Cronogramas de trabajo</h3>
        </div>
        <div class="widget-body">

            <p class="mb-20">Los cronogramas de trabajo permiten a los clientes conocer qué actividades
                se han realizado, se están realizando o se realizarán como parte de la estrategia de Teresa.</p>

            <table class="table table-hover">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Fecha de inicio</th>
                    <th>Actividades realizadas</th>
                    <th>Opciones</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($workSchedules as $key => $workSchedule)
                <tr>
                    <th scope="row">{{ $key +1 }}</th>
                    <td>{{ $workSchedule->start_date->format('d/m/Y') }}</td>
                    <td>{{ $workSchedule->completed_string }}</td>
                    <td>
                        <a href="{{ url('/admin/cronograma/' . $workSchedule->id) }}" class="btn btn-default btn-sm" title="Ver">
                            <span class="glyphicon glyphicon-eye-open"></span>
                        </a>

                        <a href="{{ url('/admin/cronograma/' . $workSchedule->id . '/editar') }}" class="btn btn-primary btn-sm" title="Editar">
                            <span class="glyphicon glyphicon-edit"></span>
                        </a>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <div class="widget">
        <div class="widget-heading">
            <h3 class="widget-title">Nuevo cronograma de trabajo</h3>
        </div>
        <div class="widget-body">
            @if (session('notification'))
                <div class="alert alert-success">
                    <p>{{ session('notification') }}</p>
                </div>
            @endif

                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

            <p>Para registrar un nuevo cronograma <strong>simplemente ingresa la fecha de inicio</strong>.</p>
            <ul>
                <li>
                    Ten en cuenta que se <strong>destacará siempre el último</strong> en el dashboard del cliente.
                </li>
                <li>
                    Según la fecha ingresada se <strong>determinará el primer mes</strong> del cronograma.
                    <small>Por ejemplo: si la fecha es 07/07/2017 el primer mes será Julio del 2017. Hasta Junio del 2018.</small>
                </li>
            </ul>
            <form action="" method="POST">
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="start_date">Fecha de inicio:</label>
                    <input type="date" name="start_date" id="start_date" class="form-control" required>
                </div>
                <div class="text-right">
                    <button type="submit" class="btn btn-success">
                        Registrar nuevo cronograma
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

    {{-- Modals to delete --}}
    {{--@foreach ($employees as $employee)--}}
        {{--<div tabindex="-1" role="dialog" class="modal fade" id="modal-delete-{{ $employee->id }}">--}}
            {{--<div role="document" class="modal-dialog">--}}
                {{--<div class="modal-content">--}}
                    {{--<div class="modal-header">--}}
                        {{--<button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>--}}
                        {{--<h4 class="modal-title">Eliminar datos de contacto</h4>--}}
                    {{--</div>--}}
                    {{--<form action="{{ url('/admin/personal/eliminar') }}" class="form-horizontal" method="POST">--}}
                        {{--{{ csrf_field() }}--}}
                        {{--<input type="hidden" name="employee_id" value="{{ $employee->id }}">--}}

                        {{--<div class="modal-body">--}}
                            {{--<fieldset>--}}
                                {{--<div class="form-group">--}}
                                    {{--<label for="job" class="col-lg-2 control-label">Cargo</label>--}}
                                    {{--<div class="col-lg-10">--}}
                                        {{--<input type="text" class="form-control" name="job" placeholder="Cargo del representante" value="{{ $employee->job }}" readonly>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="form-group">--}}
                                    {{--<label for="name" class="col-lg-2 control-label">Nombre</label>--}}
                                    {{--<div class="col-lg-10">--}}
                                        {{--<input type="text" class="form-control" name="name" placeholder="Nombre del representante" value="{{ $employee->name }}" readonly>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="form-group">--}}
                                    {{--<label for="emails" class="col-lg-2 control-label">Correo electrónico</label>--}}
                                    {{--<div class="col-lg-10">--}}
                                        {{--<textarea class="form-control" name="emails" placeholder="Correo electrónico" readonly>{{ $employee->emails }}</textarea>--}}
                                        {{--<span class="help-block">Escribir un correo por línea.</span>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="form-group">--}}
                                    {{--<label for="phones" class="col-lg-2 control-label">Teléfonos</label>--}}
                                    {{--<div class="col-lg-10">--}}
                                        {{--<textarea class="form-control" name="phones" placeholder="Listado de teléfonos" readonly>{{ $employee->phones }}</textarea>--}}
                                        {{--<span class="help-block">Escribir un teléfono por línea.</span>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</fieldset>--}}
                        {{--</div>--}}
                        {{--<div class="modal-footer">--}}
                            {{--<button type="button" data-dismiss="modal" class="btn btn-default">Cancelar</button>--}}
                            {{--<button type="submit" class="btn btn-black">Eliminar datos</button>--}}
                        {{--</div>--}}
                    {{--</form>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--@endforeach--}}
@endsection
