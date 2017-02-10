@extends('layouts.panel')

@section('dashboard_content')
<div class="page-content container-fluid">

    <div class="widget">
        <div class="widget-heading">
            <h3 class="widget-title">Registrar nuevo cronograma de pago</h3>
        </div>
        <div class="widget-body">
            <p class="mb-20">Por favor ingresa la siguiente información sobre el nuevo cronograma de pagos.</p>
            <form class="form-horizontal" method="POST" action="">
                {{ csrf_field() }}

                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <fieldset>
                    <div class="form-group">
                        <div class="col-md-6">
                            <label for="starter_date">Fecha de inicio</label>
                            <input type="date" class="form-control" name="starter_date" value="{{ old('starter_date', date('Y-m-d')) }}">
                        </div>

                        <div class="col-md-6">
                            <label for="coin_type">Seleccione moneda</label>
                            <select name="coin_type" id="coin_type" class="form-control">
                                <option value="USD">(USD) Dólares</option>
                                <option value="PEN">(PEN) Soles</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-6">
                            <label for="total_amount">Monto total bruto</label>
                            <input type="number" class="form-control" name="total_amount" placeholder="Monto total a pagar" value="{{ old('total_amount') }}">
                        </div>
                        <div class="col-md-6">
                            <label for="income_tax">Impuesto a la renta</label>
                            <input class="form-control" name="income_tax" placeholder="Impuesto a la renta" type="number" value="{{ old('income_tax', 0.08) }}">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-6">
                            <label for="modality">Modalidad de pago</label>
                            <select name="modality" id="modality" class="form-control">
                                <option value="">Seleccione modalidad</option>
                                <option value="Q">Trimestral</option>
                                <option value="M">Mensual</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="quotas">Número de cuotas</label>
                            <input class="form-control" name="quotas" type="number" value="{{ old('quotas', 4) }}">
                        </div>
                    </div>

                    <div class="text-right">
                        <button type="reset" class="btn btn-default">Limpiar campos</button>
                        <button type="submit" class="btn btn-primary">Registrar nuevo cronograma</button>
                    </div>

                </fieldset>
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

@section('scripts')
    <script src="{{ asset('/panel/employees/create.js') }}"></script>
@endsection
