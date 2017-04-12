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
                        <th colspan="12">{{ $workSchedule->start_date->format('Y') }}</th>
                    </tr>
                    <tr>
                        <th>Actividad</th>
                        @for ($i=0; $i<12; ++$i)
                            <th>{{ $workSchedule->start_date->addMonth($i)->format('M') }}</th>
                        @endfor

                        {{--<th>Marzo</th>--}}
                        {{--<th>Abril</th>--}}
                        {{--<th>Mayo</th>--}}
                        {{--<th>Junio</th>--}}
                        {{--<th>Julio</th>--}}
                        {{--<th>Agosto</th>--}}
                        {{--<th>Setiembre</th>--}}
                        {{--<th>Octubre</th>--}}
                        {{--<th>Noviembre</th>--}}
                        {{--<th>Diciembre</th>--}}
                        {{--<th>Enero</th>--}}
                        {{--<th>Febrero</th>--}}
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">Optimización SEO</th>
                    </tr>
                    <tr>
                        <td>Proyectos en sitio web</td>
                        @include('includes.user.work.show_activities_in_tds', ['type' => 'project_in_website' ])
                    </tr>
                    <tr>
                        <td>Artículos</td>
                        @include('includes.user.work.show_activities_in_tds', ['type' => 'articles' ])
                    </tr>
                    <tr>
                        <td>Proyecto para medios profesionales</td>
                        @include('includes.user.work.show_activities_in_tds', ['type' => 'project_in_professional_media' ])
                    </tr>
                    <tr>
                        <td>Vídeos en Youtube</td>
                        @include('includes.user.work.show_activities_in_tds', ['type' => 'youtube_video' ])
                    </tr>
                    <tr>
                        <th scope="row">Registro en Google Maps</th>
                        @include('includes.user.work.show_activities_in_tds', ['type' => 'register_in_google_maps' ])
                    </tr>
                    <tr>
                        <th scope="row">Perfile sociales</th>
                    </tr>
                    <tr>
                        <td>Publicaciones en Facebook, LinkedIn y Google+</td>
                        @include('includes.user.work.show_activities_in_tds', ['type' => 'social_post' ])
                    </tr>
                    <tr>
                        <td>Publicidad en Facebook</td>
                        @include('includes.user.work.show_activities_in_tds', ['type' => 'facebook_ads' ])
                    </tr>
                    <tr>
                        <td>Publicidad en LinkedIn</td>
                        @include('includes.user.work.show_activities_in_tds', ['type' => 'linkedin_ads' ])
                    </tr>
                    <tr>
                        <th scope="row">Botón de llamada (call me back)</th>
                        @include('includes.user.work.show_activities_in_tds', ['type' => 'button_call_me_back' ])
                    </tr>
                    <tr>
                        <th scope="row">Informes de resultado</th>
                        @include('includes.user.work.show_activities_in_tds', ['type' => 'results_report' ])
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
