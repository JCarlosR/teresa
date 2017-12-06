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
            <a href="{{ url('/admin/super') }}" class="btn btn-sm btn-info">
                <i class="glyphicon glyphicon-hand-left"></i>
                Volver al super panel
            </a>
        </div>

        <h1>Editando estado del cliente {{ $client->name }}</h1>
        <form action="">
            <div class="form-group">
                <label for="sitemap">Sitemap</label>
                <select name="sitemap" id="sitemap" class="form-control">
                    <option value="0">no</option>
                    <option value="1">sí</option>
                </select>
            </div>
            <div class="form-group">
                <label for="theme_base">Plantilla seleccionada</label>
                <select name="theme_base" id="theme_base" class="form-control" disabled>
                    <option value="0">no</option>
                    <option value="1">sí</option>
                </select>
                <p class="help-block">Este valor se calcula automáticamente, según el campo "Plantilla seleccionada" en los "Datos principales" del usuario.</p>
            </div>
            <div class="form-group">
                <label for="website">Website</label>
                <select name="website" id="website" class="form-control">
                    <option value="0">no</option>
                    <option value="1">sí</option>
                </select>
            </div>
            <div class="form-group">
                <label for="google_analytics">Google Analytics</label>
                <select name="google_analytics" id="google_analytics" class="form-control">
                    <option value="0">no</option>
                    <option value="1">sí</option>
                </select>
            </div>
            <div class="form-group">
                <label for="social_media">Medios sociales</label>
                <select name="social_media" id="social_media" class="form-control">
                    <option value="0">no</option>
                    <option value="1">sí</option>
                </select>
            </div>
            <div class="form-group">
                <label for="professional_media">Medios profesionales</label>
                <select name="professional_media" id="professional_media" class="form-control">
                    <option value="0">no</option>
                    <option value="1">sí</option>
                </select>
            </div>
            <div class="form-group">
                <label for="broadcasting">Difusión</label>
                <select name="broadcasting" id="broadcasting" class="form-control">
                    <option value="0">no</option>
                    <option value="1">sí</option>
                </select>
            </div>
            <button type="submit" class="btn btn-success">
                Guardar cambios
            </button>
            <p class="help-block">Al presionar Guardar, se registrará una nueva revisión en el historial de revisiones.</p>
        </form>
    </div>
</div>
@endsection
