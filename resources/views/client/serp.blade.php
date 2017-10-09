@extends('layouts.panel')

@section('styles')
    <link rel="stylesheet" href="{{ asset('/panel/google-results/results.css') }}">
@endsection

@section('dashboard_content')
<div class="page-content container-fluid">

    <div class="widget">
        <div class="widget-heading">
            <h3 class="widget-title">Resumen SERP - General</h3>
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
                    <a href="/servicios" class="btn btn-secondary pull-right" title="Editar servicios">
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
                    <a href="/proyectos" class="btn btn-secondary pull-right" title="Editar proyectos">
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
                    <a href="/nosotros" class="btn btn-secondary pull-right" title="Editar sección nosotros">
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
                <div class="col-md-6">
                    <a href="/citas" class="btn btn-secondary pull-right" title="Editar citas">
                        <span class="glyphicon glyphicon-pencil"></span>
                    </a>
                    <div class="google-results">
                        <a href="#" onclick="return false;">
                            <span class="title">{{ $client->trade_name }} - Citas</span>
                        </a>
                        <div>
                            <cite>{{ $client->domain }}/citas</cite>
                        </div>
                        <span class="description">{{ $client->quotes_description }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="widget">
        <div class="widget-heading">
            <h3 class="widget-title">Resumen SERP - Servicios</h3>
        </div>
        <div class="widget-body">
            <div class="row">
                <div class="col-md-6">
                    @foreach ($services as $service)
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
@endsection
