@extends('layouts.panel')

@section('dashboard_content')
<div class="page-content container-fluid">
    <div class="widget">
        <div class="widget-heading">
            <h3 class="widget-title">Leads en función al cronograma # {{ $paymentSchedule->id }}</h3>
        </div>
        <div class="widget-body">

            @if (session('notification'))
                <div class="alert alert-success">
                    <p>{{ session('notification') }}</p>
                </div>
            @endif

            <p class="mb-20">Leads según su tipo y en total, por cada categoría de leads y en cada periodo del servicio.</p>
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>Desde</th>
                    @foreach ($details as $key => $detail)
                        <td class="text-center">{{ $detail->emission_date->format('d/m/Y') }}</td>
                    @endforeach
                    <th></th>
                </tr>
                <tr>
                    <th>Conversiones</th>
                    @foreach ($details as $key => $detail)
                    <td class="text-center">{{ $key+1 }}º {{ $paymentSchedule->modality_short_text }}</td>
                    @endforeach
                    <th>Total</th>
                </tr>
                </thead>
                <tbody>

                    <tr>
                        <th scope="row">Empleo</th>
                        <?php $total['employment'] = 0; ?>
                        @foreach ($details as $detail)
                            <?php $total['employment'] += $detail->employment; ?>
                            <td>
                                {{ $detail->employment ?: 0 }}
                            </td>
                        @endforeach
                        <td class="text-center">
                            {{ $total['employment'] }}
                        </td>
                    </tr>

                    <tr>
                        <th scope="row">Proveedores</th>
                        <?php $total['suppliers'] = 0; ?>
                        @foreach ($details as $detail)
                            <?php $total['suppliers'] += $detail->suppliers; ?>
                            <td>
                                {{ $detail->suppliers ?: 0 }}
                            </td>
                        @endforeach
                        <td class="text-center">
                            {{ $total['suppliers'] }}
                        </td>
                    </tr>

                    <tr>
                        <th scope="row">Seguidores</th>
                        <?php $total['followers'] = 0; ?>
                        @foreach ($details as $detail)
                            <?php $total['followers'] += $detail->followers; ?>
                            <td>
                                {{ $detail->followers ?: 0 }}
                            </td>
                        @endforeach
                        <td class="text-center">
                            {{ $total['followers'] }}
                        </td>
                    </tr>

                    <tr>
                        <th scope="row">Contacto</th>
                        <?php $total['contact'] = 0; ?>
                        @foreach ($details as $detail)
                            <?php $total['contact'] += $detail->contact; ?>
                            <td>
                                {{ $detail->contact ?: 0 }}
                            </td>
                        @endforeach
                        <td class="text-center">
                            {{ $total['contact'] }}
                        </td>
                    </tr>

                    <tr>
                        <th scope="row">Proyectos</th>
                        <?php $total['projects'] = 0; ?>
                        @foreach ($details as $detail)
                            <?php $total['projects'] += $detail->projects; ?>
                            <td>
                                {{ $detail->projects ?: 0 }}
                            </td>
                        @endforeach
                        <td class="text-center">
                            {{ $total['projects'] }}
                        </td>
                    </tr>

                    <tr>
                        <th scope="row">Otros</th>
                        <?php $total['others'] = 0; ?>
                        @foreach ($details as $detail)
                            <?php $total['others'] += $detail->others; ?>
                            <td>
                                {{ $detail->others ?: 0 }}
                            </td>
                        @endforeach
                        <td class="text-center">
                            {{ $total['others'] }}
                        </td>
                    </tr>

                    <tr>
                        <td>Total</td>
                        <?php $total['leads'] = 0; ?>
                        @foreach ($details as $detail)
                            <?php $total['leads'] += $detail->total_leads; ?>
                            <td>
                                {{ $detail->total_leads }}
                            </td>
                        @endforeach
                        <td class="text-center">{{ $total['leads'] }}</td>
                    </tr>
                </tbody>
            </table>

            <div id="donut-chart-legend" class="mb-10"></div>
            <div id="donut-chart" style="height: 300px;"></div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
    <script>
        var employment = 0{{ $total['employment'] }};
        var suppliers = 0{{ $total['suppliers'] }};
        var followers = 0{{ $total['followers'] }};
        var contact = 0{{ $total['contact'] }};
        var projects = 0{{ $total['projects'] }};
        var others = 0{{ $total['others'] }};
    </script>
    <script src="{{ url('/plugins/flot/jquery.flot.js') }}"></script>
    <script src="{{ url('/plugins/flot/jquery.flot.pie.js') }}"></script>
    <script src="{{ url('/panel/leads/flot-charts.js') }}"></script>
@endsection
