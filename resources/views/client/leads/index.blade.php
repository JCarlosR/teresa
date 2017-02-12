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
                        <a href="{{ url('/leads/'.$schedule->id) }}" class="btn btn-primary btn-sm" title="Ver leads">
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
@endsection

@section('scripts')
    <script src="{{ asset('/panel/employees/create.js') }}"></script>
@endsection
