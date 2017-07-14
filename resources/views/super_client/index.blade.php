@extends('layouts.panel_simple')

@section('styles')
    <style>
        .big-black-icon {
            color: #1f364f;
            font-size: 1.2em;
        }
        .client-widget {
            height: 360px;
        }
    </style>
@endsection

@section('dashboard_content')
<div class="widget">
    <div class="widget-body">
        @if (session('notification'))
            <div class="alert alert-success">
                {{ session('notification') }}
            </div>
        @endif

        <p><b>Bienvenido {{ auth()->user()->name }}!</b></p>
        <p>Seleccione un cliente a continuación para gestionar su información.</p>

        <div class="row">
            @foreach ($clients as $client)
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="widget client-widget">
                        <div class="widget-body text-center">
                            <p  class="text-right">
                                <a href="/ver/{{ $client->id }}" target="_blank"
                                   data-toggle="tooltip" data-placement="top" title="Previsualizar datos en el theme por defecto">
                                    <i class="glyphicon glyphicon glyphicon-globe big-black-icon"></i>
                                </a>
                                <a href="/admin/cliente/{{ $client->id }}/impersonate"
                                   data-toggle="tooltip" data-placement="top" title="Iniciar sesión como este usuario">
                                    <i class="glyphicon glyphicon-log-in big-black-icon"></i>
                                </a>
                            </p>
                            <a href="{{ url("admin/cliente/seleccionar/$client->id") }}">
                                <img src="{{ url($client->photo_route) }}" width="100" alt="Logo {{ $client->name }}" class="img-circle">
                                <h4 class="mt-20 mb-5 text-black">{{ $client->name ?: 'Sin alias' }}</h4>
                            </a>
                            <p class="fs-12 text-uppercase text-muted">{{ $client->service_started_at->format('d/m/Y') }}</p>
                            <p>{{ $client->description ?: 'Descripción sin especificar' }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection

@section('scripts')
    <script src="{{ asset('/panel/admin/index.js') }}"></script>
@endsection
