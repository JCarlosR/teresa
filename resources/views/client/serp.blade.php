@extends('layouts.panel')

@section('styles')
    <link rel="stylesheet" href="{{ asset('/panel/google-results/results.css') }}">
@endsection

@section('dashboard_content')
<div class="page-content container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="widget">
                <div class="widget-heading">
                    <h3 class="widget-title">Resumen SERP</h3>
                </div>
                <div class="widget-body">
                    <p>Previsualización de un resumen SERP (Search Engine Results Page).</p>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="google-results">
                                <a href="#" onclick="return false;">
                                    <span class="title">{{ $client->title }}</span>
                                </a>
                                <div>
                                    <cite>{{ $client->domain }}</cite>
                                </div>
                                <span class="description">{{ $client->description }}</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="google-results">
                                <a href="#" onclick="return false;">
                                    <span class="title">{{ $client->trade_name }} - Servicios</span>
                                </a>
                                <div>
                                    <cite>{{ $client->domain }}/servicios</cite>
                                </div>
                                <span class="description">{{ $client->services_description }}</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="google-results">
                                <a href="#" onclick="return false;">
                                    <span class="title">{{ $client->trade_name }} - Proyectos</span>
                                </a>
                                <div>
                                    <cite>{{ $client->domain }}/proyectos</cite>
                                </div>
                                <span class="description">{{ $client->projects_description }}</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="google-results">
                                <a href="#" onclick="return false;">
                                    <span class="title">Sobre {{ $client->trade_name }}</span>
                                </a>
                                <div>
                                    <cite>{{ $client->domain }}/nosotros</cite>
                                </div>
                                <span class="description">{{ $client->about_us->description }}</span>
                            </div>
                        </div>
                        <div class="col-md-6">
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
        </div>
    </div>
</div>
@endsection

@section('scripts')
    <!-- Google maps-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDK0Wk9CEkyOK4MtWPFkzvhBmxly_5TpU0"></script>
    <script src="{{ asset('build/js/page-content/maps/google-maps.js') }}"></script>
@endsection
