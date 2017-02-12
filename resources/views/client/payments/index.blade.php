@extends('layouts.panel')

@section('dashboard_content')
<div class="page-content container-fluid">
    <div class="widget">
        <div class="widget-heading">
            <h3 class="widget-title">Facturación</h3>
        </div>
        <div class="widget-body">
            @if (session('notification'))
                <div class="alert alert-success">
                    <p>{{ session('notification') }}</p>
                </div>
            @endif

            <a href="{{ url('/admin/pagos/registrar') }}" class="btn btn-success pull-right">
                <span class="glyphicon glyphicon-plus"></span>
                Registrar nuevo cronograma de pagos
            </a>

            <p class="mb-20">Listado de cronogramas de pago, y sus correspondientes contratos asociados.</p>
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Título</th>
                    <th>Fecha de inicio</th>
                    <th>Moneda</th>
                    <th>Monto total bruto</th>
                    <th>Impuesto de retención</th>
                    <th>Modalidad de pago</th>
                    <th>Opciones</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($schedules as $schedule)
                <tr>
                    <td>{{ $schedule->id }}</td>
                    <th>{{ $schedule->title }}</th>
                    <td>{{ $schedule->starter_date->format('d/m/Y') }}</td>
                    <td>{{ $schedule->coin_type }}</td>
                    <td>{{ $schedule->total_amount }}</td>
                    <td>{{ $schedule->income_tax }}</td>
                    <td>{{ $schedule->modality_text }}</td>
                    <td>
                        <a href="{{ url('/pagos/'.$schedule->id) }}" class="btn btn-primary btn-sm" title="Ver cronograma">
                            <span class="glyphicon glyphicon-eye-open"></span>
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
    @foreach ($schedules as $schedule)
        <div tabindex="-1" role="dialog" class="modal fade" id="modal-delete-{{ $schedule->id }}">
            <div role="document" class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                        <h4 class="modal-title">Eliminar cronograma de pago</h4>
                    </div>
                    <form action="{{ url('/admin/pagos/eliminar') }}" method="POST">
                        {{ csrf_field() }}
                        <input type="hidden" name="schedule_id" value="{{ $schedule->id }}">

                        <div class="modal-body">
                            <fieldset>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="title">Título del cronograma</label>
                                            <input type="text" name="title" id="title" value="{{ $schedule->title }}"
                                                   class="form-control" readonly>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="starter_date">Fecha de inicio</label>
                                            <input type="date" class="form-control" name="starter_date" value="{{ $schedule->starter_date->format('Y-m-d') }}" readonly>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="coin_type">Tipo de moneda moneda</label>
                                            <select name="coin_type" id="coin_type" class="form-control" readonly>
                                                <option value="USD" @if($schedule->coin_type=='USD') selected @endif>(USD) Dólares</option>
                                                <option value="PEN" @if($schedule->coin_type=='PEN') selected @endif>(PEN) Soles</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="total_amount">Monto total bruto</label>
                                            <input type="number" class="form-control" name="total_amount" placeholder="Monto total a pagar" value="{{ $schedule->total_amount }}" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="income_tax">Impuesto a la renta</label>
                                            <input class="form-control" name="income_tax" placeholder="Impuesto a la renta" type="number" value="{{ $schedule->income_tax }}" readonly>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="modality">Modalidad de pago</label>
                                            <select name="modality" id="modality" class="form-control" readonly>
                                                <option value="">Seleccione modalidad</option>
                                                <option value="Q" @if($schedule->modality=='Q') selected @endif>Trimestral</option>
                                                <option value="M" @if($schedule->modality=='M') selected @endif>Mensual</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="quotas">Número de cuotas</label>
                                            <input class="form-control" name="quotas" type="number" value="{{ $schedule->quotas }}" readonly>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                        <div class="modal-footer">
                            <button type="button" data-dismiss="modal" class="btn btn-default">Cancelar</button>
                            <button type="submit" class="btn btn-black">Anular cronograma</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endforeach
@endsection

@section('scripts')
    <script src="{{ asset('/panel/employees/create.js') }}"></script>
@endsection
