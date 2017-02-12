@extends('layouts.panel')

@section('dashboard_content')
<div class="page-content container-fluid">

    <div class="widget">
        <div class="widget-heading">
            <h3 class="widget-title">Registrar nuevo cronograma de pago</h3>
        </div>
        <div class="widget-body">
            <p class="mb-20">Por favor ingresa la siguiente información sobre el nuevo cronograma de pagos.</p>
            <form class="form" method="POST" action="">
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
                    <div class="row">
    <div class="col-md-12">
        <div class="form-group">
            <label for="title">Título del cronograma</label>
            <input type="text" name="title" id="title" value="{{ old('title') }}"
                   placeholder="Ejemplo: 2017 - 2018" class="form-control">
        </div>
    </div>
</div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="starter_date">Fecha de inicio</label>
                                <input type="date" class="form-control" name="starter_date" value="{{ old('starter_date', date('Y-m-d')) }}">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="coin_type">Seleccione moneda</label>
                                <select name="coin_type" id="coin_type" class="form-control">
                                    <option value="USD">(USD) Dólares</option>
                                    <option value="PEN">(PEN) Soles</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="total_amount">Monto total bruto</label>
                                <input type="number" class="form-control" name="total_amount" placeholder="Monto total a pagar" value="{{ old('total_amount') }}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="income_tax">Impuesto a la renta</label>
                                <input class="form-control" name="income_tax" placeholder="Impuesto a la renta" type="number" value="{{ old('income_tax', 0.08) }}">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="modality">Modalidad de pago</label>
                                <select name="modality" id="modality" class="form-control">
                                    <option value="">Seleccione modalidad</option>
                                    <option value="Q">Trimestral</option>
                                    <option value="M">Mensual</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="quotas">Número de cuotas</label>
                                <input class="form-control" name="quotas" type="number" value="{{ old('quotas', 4) }}">
                            </div>
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
@endsection

@section('scripts')
    <script src="{{ asset('/panel/employees/create.js') }}"></script>
@endsection
