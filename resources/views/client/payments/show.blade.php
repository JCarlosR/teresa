@extends('layouts.panel')

@section('dashboard_content')
<div class="page-content container-fluid">
    <div class="widget">
        <div class="widget-heading">
            <h3 class="widget-title">Cronograma de pagos # {{ $paymentSchedule->id }}</h3>
        </div>
        <div class="widget-body">

            @if (session('notification'))
                <div class="alert alert-success">
                    <p>{{ session('notification') }}</p>
                </div>
            @endif

            <h3>{{ $paymentSchedule->title }}</h3>
            <p class="mb-20">Cronograma de pago seleccionado, y sus periodos.</p>

            <table class="table table-hover">
                <thead>
                <tr>
                    <th>Periodo</th>
                    <th>Total</th>
                    <th>Neto</th>
                    <th>Emisión</th>
                    <th>Pago</th>
                    <th>Estado</th>
                    <th>Días de diferencia</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($paymentSchedule->details as $key => $detail)
                <form action="{{ url('/admin/pagos/detalles') }}" method="POST">
                    {{ csrf_field() }}
                    <input type="hidden" name="detail_id" value="{{ $detail->id }}">

                    <tr>
                        <th scope="row">{{ $paymentSchedule->modality_text }} {{ $key+1 }}</th>
                        <td>{{ $detail->total }}</td>
                        <td>{{ $detail->net }}</td>
                        <td>{{ $detail->emission_date->format('d/m/Y') }}</td>
                        <td class="col-md-2">
                            {{ $detail->payment_date ? $detail->payment_date->format('Y-m-d') : '-' }}
                        </td>
                        <td>{{ $detail->payment_date ? 'Pagado' : 'Pendiente' }}</td>
                        <td>
                            {{ $detail->days_difference }}
                        </td>
                    </tr>
                </form>
                @endforeach
                </tbody>
            </table>

        </div>
    </div>
</div>
@endsection

@section('scripts')
    <script src="{{ asset('/panel/employees/create.js') }}"></script>
@endsection
