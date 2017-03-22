@extends('layouts.panel_simple')

@section('styles')
    <style>
        .big-black-icon {
            color: #1f364f;
            font-size: 1.2em;
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

        <div class="row text-right">
            <div class="col-md-12">
                <a href="{{ url('/admin/cliente/registrar') }}" class="btn btn-primary">
                    <i class="glyphicon glyphicon-user"></i>
                    Registrar nuevo cliente
                </a>
            </div>
        </div>

        <p><b>Bienvenido {{ auth()->user()->name }}!</b></p>
        <p>Seleccione un cliente a continuación para gestionar su información.</p>

        <div class="row text-center">
            <div class="col-md-12 form-group">
                <div class="btn-group">
                    <button type="button" class="btn btn-success btn-filter" data-target="architect">SEO Arquitectos</button>
                    <button type="button" class="btn btn-warning btn-filter" data-target="sps">SPS General</button>
                    <button type="button" class="btn btn-default btn-filter" data-target="all">Todos</button>
                </div>
            </div>
        </div>

        <div class="row">
            @foreach ($clients as $client)
                <div class="col-md-3" data-status="{{ $client->client_type }}">
                    <div class="widget">
                        <div class="widget-body text-center">
                            <p  class="text-right">
                                <a href="/admin/cliente/{{ $client->id }}/destacar/{{ $client->inverse_star_state }}"
                                   data-toggle="tooltip" data-placement="top" title="Clic para destacar o quitar destacado">
                                    <i class="glyphicon glyphicon-{{ $client->star_state }} big-black-icon"></i>
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
