@extends('layouts.panel')

@section('dashboard_content')
<div class="page-content container-fluid">
    <div class="widget">
        <div class="widget-heading">
            <h3 class="widget-title">Cronogramas de trabajo</h3>
        </div>
        <div class="widget-body">
            @if (session('notification'))
                <div class="alert alert-success">
                    <p>{{ session('notification') }}</p>
                </div>
            @endif

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
                <tr>
                    <th scope="row">1</th>
                    <td>12/06/2017</td>
                    <td><strong>7</strong> / 21</td>
                    <td>
                        <a href="{{ url('/admin/cronograma/' . 7) }}" class="btn btn-default btn-sm" title="Ver">
                            <span class="glyphicon glyphicon-eye-open"></span>
                        </a>

                        <a href="{{ url('/admin/cronograma/' . 7 . '/editar') }}" class="btn btn-primary btn-sm" title="Editar">
                            <span class="glyphicon glyphicon-edit"></span>
                        </a>
                    </td>
                </tr>
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
            <form action="#">
                <div class="form-group">
                    <label for="start_date">Fecha de inicio:</label>
                    <input type="date" class="form-control">
                </div>
            </form>
            <div class="text-right">
                <a href="#" class="btn btn-success">
                    Registrar nuevo cronograma
                </a>
            </div>
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

@section('scripts')
    <script src="{{ asset('/panel/employees/create.js') }}"></script>
@endsection
