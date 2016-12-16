@extends('layouts.admin')

@section('dashboard_content')
<div class="page-content container-fluid">
    <div class="widget">
        <div class="widget-body">
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @if (session('notification'))
                <div class="alert alert-success">
                    <p>{{ session('notification') }}</p>
                </div>
            @endif

            <form class="form-horizontal" method="POST" action="{{ url('admin/datos/principales') }}">
                {{ csrf_field() }}
                <input type="hidden" name="client_id" value="{{ $client_id }}">
                <fieldset>
                    <legend>Datos de la empresa</legend>
                    <div class="form-group">
                        <label for="trade_name" class="col-lg-2 control-label">Nombre comercial</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" name="trade_name" placeholder="Nombre comercial" value="{{ old('trade_name', $client->trade_name) }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="fiscal_name" class="col-lg-2 control-label">Nombre fiscal</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" name="fiscal_name" placeholder="Nombre fiscal" value="{{ old('fiscal_name', $client->fiscal_name) }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="ruc" class="col-lg-2 control-label">Nro de identificación fiscal</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" name="ruc" placeholder="NIF" value="{{ old('ruc', $client->ruc) }}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="phones" class="col-lg-2 control-label">Teléfonos</label>
                        <div class="col-lg-10">
                            <textarea class="form-control" name="phones" placeholder="Listado de teléfonos">{{ old('phones', $client->phones) }}</textarea>
                            <span class="help-block">Escribir un teléfono por línea.</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-2 control-label">Horario de atención</label>
                        <div class="col-lg-10">
                            <div class="col-md-6">
                                <label for="start">Horario de inicio</label>
                                <input type="time" name="schedule_start" id="start" class="form-control" value="{{ old('schedule_start', $client->schedule_start_format) }}">
                            </div>
                            <div class="col-md-6">
                                <label for="end">Horario de fin</label>
                                <input type="time" name="schedule_end" id="end" class="form-control col-md-6" value="{{ old('schedule_end', $client->schedule_end_format) }}">
                            </div>
                            <span class="help-block">Usar un formato de 24 horas.</span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="works_from" class="col-lg-2 control-label">Funciona desde</label>
                        <div class="col-lg-10">
                            <input type="date" class="form-control" name="works_from" id="works_from" value="{{ old('works_from', $client->works_from) }}">
                            <span class="help-block">Fecha de inicio de la empresa.</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="start_of_service" class="col-lg-2 control-label">Inicio del servicio SEO</label>
                        <div class="col-lg-10">
                            <input type="date" class="form-control" value="{{ $client->start_of_service }}" name="start_of_service" id="start_of_service" readonly>
                            <span class="help-block">Este campo es calculado por el sistema al momento del registro.</span>
                        </div>
                    </div>
                </fieldset>

                <fieldset>
                    <legend>Datos importantes de administración</legend>
                    <div class="form-group">
                        <label for="domain" class="col-lg-2 control-label">Dominio principal</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" name="domain" placeholder="URL del sitio web principal" value="{{ old('domain', $client->domain) }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="google_analytics" class="col-lg-2 control-label">Google Analytics</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" name="google_analytics" placeholder="ID de Google Analytics" value="{{ old('google_analytics', $client->google_analytics) }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="webmaster_tools" class="col-lg-2 control-label">Webmaster Tools</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" name="webmaster_tools" placeholder="Webmaster Tools" value="{{ old('webmaster_tools', $client->webmaster_tools) }}">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-lg-10 col-lg-offset-2">
                            <a href="{{ url("/admin/$client_id/dashboard") }}" class="btn btn-default">Cancelar</a>
                            <button type="submit" class="btn btn-primary">Guardar cambios</button>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
</div>
@endsection
