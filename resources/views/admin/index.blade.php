@extends('layouts.panel_simple')

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
                                <a href="/admin/cliente/{{ $client->id }}/destacar/{{ $client->inverse_star_state }}">
                                    <img src="{{ asset('/images/stars/'.$client->star_state.'.png') }}" alt="Destacado">
                                </a>
                            </p>
                            <a href="{{ url("admin/cliente/seleccionar/$client->id") }}">
                                <img src="{{ url($client->photo_route) }}" width="100" alt="Logo {{ $client->name }}" class="img-circle">
                                <h4 class="mt-20 mb-5 text-black">{{ $client->name ?: 'Sin alias' }}</h4>
                            </a>
                            <p class="fs-12 text-uppercase text-muted">{{ $client->service_started_at }}</p>
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
