@extends('layouts.panel_simple')

@section('dashboard_content')
<div class="widget">
    <div class="widget-body">
        @if (session('notification'))
            <div class="alert alert-success">
                {{ session('notification') }}
            </div>
        @endif

        <div class="form-group text-right">
            <a href="{{ url('/admin') }}" class="btn btn-sm btn-primary">
                <i class="glyphicon glyphicon-hand-left"></i>
                Volver al panel simple
            </a>
        </div>

        <div class="text-center">
            <div class="form-group">
                <div class="btn-group">
                    <a href="/admin/super" class="btn btn-default">Todos</a>
                    <a href="/admin/super?mostrar=activos" class="btn btn-default">Activos</a>
                    <a href="/admin/super?mostrar=inactivos" class="btn btn-default">Inactivos</a>
                </div>
                <div class="btn-group">
                    <button type="button" class="btn btn-success btn-filter" data-target="architect">SEO Arquitectos</button>
                    <button type="button" class="btn btn-warning btn-filter" data-target="sps">SPS General</button>
                    <button type="button" class="btn btn-default btn-filter" data-target="all">Todos</button>
                </div>
            </div>
            <div class="row">
                <div class="col-md-offset-5 col-md-2">
                    <div class="has-success">
                        <div class="checkbox-custom">
                            <input id="checkboxSuccess" type="checkbox" value="option1">
                            <label for="checkboxSuccess" class="checkbox-success">Activar modo operativo</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @include('admin.super-panel.table')
    </div>
</div>
@endsection

@section('scripts')
    <script src="{{ asset('/panel/admin/index.js') }}"></script>
@endsection
