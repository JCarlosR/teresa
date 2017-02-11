@extends('layouts.panel')

@section('dashboard_content')
<div class="page-content container-fluid">
    <div class="widget">
        <div class="widget-heading">
            <h3 class="widget-title">Leads</h3>
        </div>
        <div class="widget-body">
            @if (session('notification'))
                <div class="alert alert-success">
                    <p>{{ session('notification') }}</p>
                </div>
            @endif

            <a href="{{ url('/admin/pagos') }}" class="btn btn-primary pull-right">
                <span class="glyphicon glyphicon-link"></span>
                Ir a facturación
            </a>

            <p class="mb-20">Los leads se organizan en función a los cronogramas, correspondientes a los contratos firmados con la empresa.</p>
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Fecha de inicio</th>
                    <th>Modalidad de pago</th>
                    <th>Número de cuotas</th>
                    <th>Opciones</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($schedules as $schedule)
                <tr>
                    <th scope="row">{{ $schedule->id }}</th>
                    <td>{{ $schedule->starter_date->format('d/m/Y') }}</td>
                    <td>{{ $schedule->modality_text }}</td>
                    <td>{{ $schedule->quotas }}</td>
                    <td>
                        <a href="{{ url('/admin/leads/'.$schedule->id) }}" class="btn btn-primary btn-sm" title="Editar">
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
