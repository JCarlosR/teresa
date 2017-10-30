@extends('layouts.panel')

@section('styles')
    <link rel="stylesheet" href="{{ asset('/panel/google-results/results.css') }}">
    <link rel="stylesheet" href="{{ asset('/vendor/prism/prism.css') }}">
    <style>
        .google-results span.description {
            display: none;
        }
    </style>
@endsection

@section('dashboard_content')
<div class="page-content container-fluid">

    <div class="widget">
        <div class="widget-heading">
            <h3 class="widget-title">Resumen SERP General</h3>
        </div>
        <div class="widget-body">
            <p>Previsualización de cada enlace sobre la página de resultados en buscadores.</p>
            <div class="row">
                <div class="col-md-12">
                    <div class="google-results">
                        <a href="{{ $client->getLinkTo('/') }}" target="_blank">
                            <span class="title">{{ $client->title ?: ' Sin título' }}</span>
                        </a>
                        <div>
                            <cite>{{ $client->domain }}</cite>
                        </div>
                        <span class="description">{{ $client->description }}</span>
                    </div>
                </div>
                <div class="col-md-6">
                    <a href="/servicios" class="btn btn-info btn-sm pull-right" title="Editar servicios">
                        <span class="glyphicon glyphicon-pencil"></span>
                    </a>
                    <div class="google-results">
                        <a href="{{ $client->getLinkTo('/servicios') }}" target="_blank">
                            <span class="title">{{ $client->trade_name }} - Servicios</span>
                        </a>
                        <div>
                            <cite>{{ $client->domain }}/servicios</cite>
                        </div>
                        <span class="description">{{ $client->services_description }}</span>
                    </div>
                </div>
                <div class="col-md-6">
                    <a href="/proyectos" class="btn btn-info btn-sm pull-right" title="Editar proyectos">
                        <span class="glyphicon glyphicon-pencil"></span>
                    </a>
                    <div class="google-results">
                        <a href="{{ $client->getLinkTo('/proyectos') }}" target="_blank">
                            <span class="title">{{ $client->trade_name }} - Proyectos</span>
                        </a>
                        <div>
                            <cite>{{ $client->domain }}/proyectos</cite>
                        </div>
                        <span class="description">{{ $client->projects_description }}</span>
                    </div>
                </div>
                <div class="col-md-6">
                    <a href="/nosotros" class="btn btn-info btn-sm pull-right" title="Editar sección nosotros">
                        <span class="glyphicon glyphicon-pencil"></span>
                    </a>
                    <div class="google-results">
                        <a href="{{ $client->getLinkTo('/nosotros') }}" target="_blank">
                            <span class="title">Sobre {{ $client->trade_name }}</span>
                        </a>
                        <div>
                            <cite>{{ $client->domain }}/nosotros</cite>
                        </div>
                        @if($client->about_us)
                        <span class="description">{{ $client->about_us->description }}</span>
                        @endif
                    </div>
                </div>
                {{--<div class="col-md-6">--}}
                    {{--<a href="/citas" class="btn btn-info btn-sm pull-right" title="Editar citas">--}}
                        {{--<span class="glyphicon glyphicon-pencil"></span>--}}
                    {{--</a>--}}
                    {{--<div class="google-results">--}}
                        {{--<a href="#" onclick="return false;">--}}
                            {{--<span class="title">{{ $client->trade_name }} - Citas</span>--}}
                        {{--</a>--}}
                        {{--<div>--}}
                            {{--<cite>{{ $client->domain }}/citas</cite>--}}
                        {{--</div>--}}
                        {{--<span class="description">{{ $client->quotes_description }}</span>--}}
                    {{--</div>--}}
                {{--</div>--}}
            </div>
        </div>
    </div>

    <div class="widget">
        <div class="widget-heading">
            <h3 class="widget-title">Resumen SERP - URLs</h3>
        </div>
        <div class="widget-body">
            <div class="row">
                @foreach ($links as $link)
                <div class="col-md-6">
                    <div class="btn-group pull-right">
                        <button class="btn btn-primary btn-sm waves-effect waves-light" title="Ver código" data-modal="{{ $link->id }}">
                            <span class="glyphicon glyphicon-file"></span>
                        </button>
                        @if (auth()->user()->is_admin)
                            <a href="{{ url('serp/link/'.$link->id.'/edit') }}" class="btn btn-info btn-sm waves-effect waves-light" title="Editar SERP">
                                <span class="glyphicon glyphicon-pencil"></span>
                            </a>
                        @endif
                    </div>

                    <div class="google-results">
                        <a href="{{ $link->url }}" target="_blank">
                            <span class="title">{{ $link->name ?: 'Sin título' }}</span>
                        </a>
                        <div>
                            <cite>{{ $client->domain }}/<span>{{ ltrim($link->url, '/') }}</span></cite>
                        </div>
                        <span class="description">{{ $link->description ?: 'Sin descripción' }}</span>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    <div class="widget">
        <div class="widget-heading">
            <h3 class="widget-title">Resumen SERP - Servicios</h3>
        </div>
        <div class="widget-body">
            <div class="row">
                <div class="col-md-12">
                    @foreach ($services as $service)
                        <div class="btn-group pull-right">
                            <button class="btn btn-primary btn-sm waves-effect waves-light" title="Ver código" data-service="{{ $service->id }}">
                                <span class="glyphicon glyphicon-file"></span>
                            </button>
                            {{--<a href="{{ url('serp/link/'.$link->id.'/edit') }}" class="btn btn-info btn-sm waves-effect waves-light" title="Editar SERP">--}}
                            {{--<span class="glyphicon glyphicon-pencil"></span>--}}
                            {{--</a>--}}
                        </div>
                        <div class="google-results">
                            <a href="{{ $client->getLinkTo('/servicio/'.$service->id) }}" target="_blank">
                                <span class="title">{{ $service->title ?: 'Sin título' }}</span>
                            </a>
                            <div>
                                <cite>{{ $client->domain }}/servicios/<span>{{ str_slug($service->name) }}</span></cite>
                            </div>
                            <span class="description">{{ $service->description ?: 'Sin descripción' }}</span>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <div class="widget">
        <div class="widget-heading">
            <h3 class="widget-title">Resumen SERP - Proyectos</h3>
        </div>
        <div class="widget-body">
            <div class="row">
                <div class="col-md-6">
                    @foreach ($projects as $project)
                        <div class="google-results">
                            <a href="{{ $client->getLinkTo('/proyecto/'.$project->id) }}" target="_blank">
                                <span class="title">{{ old('title', $project->title) ?: 'Sin título' }}</span>
                            </a>
                            <div>
                                <cite>{{ $client->domain }}/proyectos/<span>{{ str_slug($project->title) }}</span></cite>
                            </div>
                            <span class="description">{{ old('description', $project->description) }}</span>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

</div>

@include('client.serp.includes.serp-code-modals')
@include('client.serp.includes.services-serp-modals')
@endsection

@section('scripts')
    <script src="{{ asset('vendor/prism/prism.js') }}"></script>
    <script>
        $(function () {
            // show head code
            $(document).on('click', '[data-modal]', onClickModalBtn);
            $(document).on('click', '[data-service]', onClickServiceModalBtn);

            $('.google-results span.description').each(applyLimitsToDescription);
        });

        function onClickModalBtn() {
            var id = $(this).data('modal');
            $('#modal-code-'+id).modal('show');
        }
        function onClickServiceModalBtn() {
            var id = $(this).data('service');
            $('#modal-service-'+id).modal('show');
        }

        function applyLimitsToDescription(i, e) {
            var description = $(e).text();
            if (description.length > 156) {
                description = description.substr(0, 152) + ' ...';
            }
            $(e).text(description);
            $(e).slideDown();
        }
    </script>
@endsection
