@extends('layouts.panel_simple')

@section('dashboard_content')
<div class="widget">
    <div class="widget-body">
        @if (session('notification'))
            <div class="alert alert-success">
                {{ session('notification') }}
            </div>
        @endif

        <div class="row">
            <div class="col-md-12 text-right">
                <a href="{{ url('/admin/cliente/registrar') }}" class="btn btn-primary">
                    <i class="glyphicon glyphicon-user"></i>
                    Registrar nuevo cliente
                </a>
            </div>
        </div>

        <p><b>Bienvenido {{ auth()->user()->name }}!</b></p>
        <p>Seleccione un cliente a continuación para gestionar su información.</p>

        <div class="row">
            @foreach ($clients as $client)
                <div class="col-md-6">
                    <div class="widget">
                        <div class="widget-heading">
                            <a href="{{ url("admin/cliente/seleccionar/$client->id") }}">
                                <h3 class="widget-title">{{ $client->name ?: 'Sin alias' }}</h3>
                            </a>
                        </div>
                        <div class="widget-body">
                            <div class="media">
                                <div class="media-left">
                                    <a href="{{ url("admin/cliente/seleccionar/$client->id") }}">
                                        <img alt="Logo {{ $client->name }}" src="{{ url($client->photo_route) }}" class="media-object mo-lg img-circle">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <p><b>Nombre fiscal:</b> {{ $client->fiscal_name ?: 'Sin especificar' }}</p>
                                    <p><b>Dominio:</b> {{ $client->domain ?: 'Sin especificar' }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
