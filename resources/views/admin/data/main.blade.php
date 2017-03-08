@extends('layouts.panel')

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
                <fieldset>
                    <legend>Datos de la empresa</legend>
                    <div class="form-group">
                        <label for="user_email" class="col-lg-2 control-label">E-mail de usuario</label>
                        <div class="col-lg-10">
                            <input type="text" id="user_email" class="form-control" value="{{ $client->email }}" disabled>
                        </div>
                    </div>
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
                        <label for="address" class="col-lg-2 control-label">Dirección</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" name="address" placeholder="Dirección principal" value="{{ old('address', $client->address) }}">
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
                        <label for="service_started_at" class="col-lg-2 control-label">Inicio del servicio SEO</label>
                        <div class="col-lg-10">
                            <input type="date" class="form-control" value="{{ $client->service_started_at }}" name="service_started_at" id="service_started_at">
                            <span class="help-block">Ingrese la fecha desde la que se brinda el servicio SEO a este cliente.</span>
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
                        <label for="title" class="col-lg-2 control-label">Título</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" name="title" placeholder="Título del sitio web principal" value="{{ old('title', $client->title) }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="description" class="col-lg-2 control-label">Descripción</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" name="description" placeholder="Descripción del sitio web principal" value="{{ old('description', $client->description) }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="google_analytics" class="col-lg-2 control-label">Google Analytics</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" name="google_analytics" placeholder="ID de Google Analytics" value="{{ old('google_analytics', $client->google_analytics) }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="google_analytics_view_id" class="col-lg-2 control-label">GA View ID</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" name="google_analytics_view_id" placeholder="Google Analytics View ID" value="{{ old('google_analytics_view_id', $client->google_analytics_view_id) }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="webmaster_tools_google" class="col-lg-2 control-label">WT Google</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" name="webmaster_tools_google" placeholder="Webmaster Tools Google" value="{{ old('webmaster_tools_google', $client->webmaster_tools_google) }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="webmaster_tools_bing" class="col-lg-2 control-label">WT Bing</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" name="webmaster_tools_bing" placeholder="Webmaster Tools Bing" value="{{ old('webmaster_tools_bing', $client->webmaster_tools_bing) }}">
                        </div>
                    </div>
                </fieldset>

                <fieldset>
                    <legend>Formulario de contacto</legend>
                        <div class="form-group">
                            <label for="google_account" class="col-lg-2 control-label">Google Account</label>
                            <div class="col-lg-10">
                                <input type="email" class="form-control" name="google_account" placeholder="Correo de gmail para gestión" value="{{ old('google_account', $client->google_account) }}">
                                <p class="text-muted">Correo creado por nosotros para gestionar cuentas del cliente</p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="contact_email" class="col-lg-2 control-label">E-mail de contacto</label>
                            <div class="col-lg-10">
                                <input type="email" class="form-control" name="contact_email" placeholder="E-mail destinatario" value="{{ old('contact_email', $client->contact_email) }}">
                                <p class="text-muted">Correo de la empresa que recibirá los mensajes</p>
                            </div>
                        </div>
                </fieldset>

                <div class="form-group">
                    <div class="col-lg-10 col-lg-offset-2">
                        <a href="{{ url("/admin/dashboard") }}" class="btn btn-default">Cancelar</a>
                        <button type="submit" class="btn btn-primary">Guardar cambios</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
