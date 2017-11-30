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

        <div class="text-right">
            <a href="{{ url('/admin/cliente/registrar') }}" class="btn btn-sm btn-primary">
                <i class="glyphicon glyphicon-plus"></i>
                Nuevo cliente
            </a>
            <a href="{{ url('/admin/super') }}" class="btn btn-info btn-sm">
                <i class="glyphicon glyphicon-cloud"></i>
                Ir al super panel
            </a>
        </div>

        <p><b>Bienvenido {{ auth()->user()->name }}!</b></p>
        <p>Seleccione un cliente a continuación para gestionar su información.</p>

        <div class="row text-center">
            <div class="col-md-12 form-group">
                <div class="btn-group">
                    <a href="/admin" class="btn btn-default">Todos</a>
                    <a href="/admin?mostrar=activos" class="btn btn-default">Activos</a>
                    <a href="/admin?mostrar=inactivos" class="btn btn-default">Inactivos</a>
                </div>
                <div class="btn-group">
                    <button type="button" class="btn btn-success btn-filter" data-target="architect">SEO Arquitectos</button>
                    <button type="button" class="btn btn-warning btn-filter" data-target="sps">SPS General</button>
                    <button type="button" class="btn btn-default btn-filter" data-target="all">Todos</button>
                </div>
                <div class="btn-group">
                    <a href="{{ url('/admin/cliente/display?mode=grid') }}" class="btn btn-default btn-sm" data-mode="grid">
                        <i class="glyphicon glyphicon-th"></i>
                    </a>
                    <a href="{{ url('/admin/cliente/display?mode=table') }}" class="btn btn-default btn-sm" data-mode="table">
                        <i class="glyphicon glyphicon-list"></i>
                    </a>
                </div>
            </div>
        </div>

        @if (session('clients_display_mode') == 'table')
            @include('admin.clients.table')
        @else
            @include('admin.clients.grid')
        @endif
    </div>
</div>
@endsection

@section('scripts')
    <script src="{{ asset('/panel/admin/index.js') }}"></script>
@endsection
