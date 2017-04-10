@extends('layouts.panel')

@section('styles')
    <style>
        .big-icon {
            font-size: 2em;
        }
    </style>
@endsection

@section('dashboard_content')
<div class="page-content container-fluid">
    <ol class="breadcrumb">
        <li><a href="{{ url(auth()->user()->root_route) }}"><i class="ion-home mr-5"></i> Inicio</a></li>
        <li><a href="/admin/cronograma">Cronogramas</a></li>
        <li class="active">Ver cronograma</li>
    </ol>

    <div class="widget">
        <div class="widget-heading">
            <h3 class="widget-title">Cronograma de trabajo</h3>
        </div>
        <div class="widget-body">
            @if (session('notification'))
                <div class="alert alert-success">
                    <p>{{ session('notification') }}</p>
                </div>
            @endif

            <p class="mb-20">Los cronogramas de trabajo permiten a los clientes conocer qué actividades
                se han realizado, se están realizando o se realizarán como parte de la estrategia de Teresa.</p>

            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <th>{{ $client->trade_name }}</th>
                        <th colspan="12">2017</th>
                    </tr>
                    <tr>
                        <th>Actividad</th>
                        <th>Marzo</th>
                        <th>Abril</th>
                        <th>Mayo</th>
                        <th>Junio</th>
                        <th>Julio</th>
                        <th>Agosto</th>
                        <th>Setiembre</th>
                        <th>Octubre</th>
                        <th>Noviembre</th>
                        <th>Diciembre</th>
                        <th>Enero</th>
                        <th>Febrero</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">Optimización SEO</th>
                    </tr>
                    <tr>
                        <td>Proyectos en sitio web</td>
                        @foreach (range(1, 12) as $i)
                            <td class="text-center text-{{ $i%2==0 ? 'default' : 'success' }}">
                                <i class="ion-{{ $i%2==0 ? 'clock' : 'checkmark-round' }} big-icon"></i>
                            </td>
                        @endforeach
                    </tr>
                    <tr>
                        <td>Artículos</td>
                        @foreach (range(1, 12) as $i)
                            <td class="text-center text-{{ $i%2==0 ? 'default' : 'success' }}">
                                <i class="ion-{{ $i%2==0 ? 'clock' : 'checkmark-round' }} big-icon"></i>
                            </td>
                        @endforeach
                    </tr>
                    <tr>
                        <td>Proyecto para medios profesionales</td>
                        @foreach (range(1, 12) as $i)
                            <td class="text-center text-{{ $i%2==0 ? 'default' : 'success' }}">
                                <i class="ion-{{ $i%2==0 ? 'clock' : 'checkmark-round' }} big-icon"></i>
                            </td>
                        @endforeach
                    </tr>
                    <tr>
                        <td>Vídeos en Youtube</td>
                        @foreach (range(1, 12) as $i)
                            <td class="text-center text-{{ $i%2==0 ? 'default' : 'success' }}">
                                <i class="ion-{{ $i%2==0 ? 'clock' : 'checkmark-round' }} big-icon"></i>
                            </td>
                        @endforeach
                    </tr>
                    <tr>
                        <th scope="row">Registro en Google Maps</th>
                        @foreach (range(1, 12) as $i)
                            <td class="text-center text-{{ $i%2==0 ? 'default' : 'success' }}">
                                <i class="ion-{{ $i%2==0 ? 'clock' : 'checkmark-round' }} big-icon"></i>
                            </td>
                        @endforeach
                    </tr>
                    <tr>
                        <th scope="row">Perfile sociales</th>
                    </tr>
                    <tr>
                        <td>Publicaciones en Facebook, LinkedIn y Google+</td>
                        @foreach (range(1, 12) as $i)
                            <td class="text-center text-{{ $i%2==0 ? 'default' : 'success' }}">
                                <i class="ion-{{ $i%2==0 ? 'clock' : 'checkmark-round' }} big-icon"></i>
                            </td>
                        @endforeach
                    </tr>
                    <tr>
                        <td>Publicidad en Facebook</td>
                        @foreach (range(1, 12) as $i)
                            <td class="text-center text-{{ $i%2==0 ? 'default' : 'success' }}">
                                <i class="ion-{{ $i%2==0 ? 'clock' : 'checkmark-round' }} big-icon"></i>
                            </td>
                        @endforeach
                    </tr>
                    <tr>
                        <td>Publicidad en LinkedIn</td>
                        @foreach (range(1, 12) as $i)
                            <td class="text-center text-{{ $i%2==0 ? 'default' : 'success' }}">
                                <i class="ion-{{ $i%2==0 ? 'clock' : 'checkmark-round' }} big-icon"></i>
                            </td>
                        @endforeach
                    </tr>
                    <tr>
                        <th scope="row">Botón de llamada (call me back)</th>
                        @foreach (range(1, 12) as $i)
                            <td class="text-center text-{{ $i%2==0 ? 'default' : 'success' }}">
                                <i class="ion-{{ $i%2==0 ? 'clock' : 'checkmark-round' }} big-icon"></i>
                            </td>
                        @endforeach
                    </tr>
                    <tr>
                        <th scope="row">Informes de resultado</th>
                        @foreach (range(1, 12) as $i)
                            <td class="text-center text-{{ $i%2==0 ? 'default' : 'success' }}">
                                <i class="ion-{{ $i%2==0 ? 'clock' : 'checkmark-round' }} big-icon"></i>
                            </td>
                        @endforeach
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
@endsection

@section('scripts')
    <script src="{{ asset('/panel/employees/create.js') }}"></script>
@endsection
