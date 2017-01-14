@extends('layouts.panel')

@section('dashboard_content')
<div class="page-content container-fluid">
    <div class="widget">
        <div class="widget-heading">
            <h3 class="widget-title">Datos principales</h3>
        </div>
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

            <form class="form-horizontal" method="POST">
                {{ csrf_field() }}
                <fieldset>
                    <div class="form-group">
                        <label for="trade_name" class="col-lg-2 control-label">Nombre comercial</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" name="trade_name" placeholder="Nombre comercial" value="{{ old('trade_name', auth()->user()->trade_name) }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="fiscal_name" class="col-lg-2 control-label">Nombre fiscal</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" name="fiscal_name" placeholder="Nombre fiscal" value="{{ old('fiscal_name', auth()->user()->fiscal_name) }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="ruc" class="col-lg-2 control-label">Nro de identificación fiscal</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" name="ruc" placeholder="NIF" value="{{ old('ruc', auth()->user()->ruc) }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="address" class="col-lg-2 control-label">Dirección</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" name="address" placeholder="Dirección principal" value="{{ old('address', auth()->user()->address) }}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="phones" class="col-lg-2 control-label">Teléfonos</label>
                        <div class="col-lg-10">
                            <textarea class="form-control" name="phones" placeholder="Listado de teléfonos">{{ old('phones', auth()->user()->phones) }}</textarea>
                            <span class="help-block">Escribir un teléfono por línea.</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-2 control-label">Horario de atención</label>
                        <div class="col-lg-10">
                            <div class="col-md-6">
                                <label for="start">Horario de inicio</label>
                                <input type="time" name="schedule_start" id="start" class="form-control" value="{{ old('schedule_start', auth()->user()->schedule_start_format) }}">
                            </div>
                            <div class="col-md-6">
                                <label for="end">Horario de fin</label>
                                <input type="time" name="schedule_end" id="end" class="form-control col-md-6" value="{{ old('schedule_end', auth()->user()->schedule_end_format) }}">
                            </div>
                            <span class="help-block">Usar un formato de 24 horas.</span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="works_from" class="col-lg-2 control-label">Funciona desde</label>
                        <div class="col-lg-10">
                            <input type="date" class="form-control" name="works_from" id="works_from" value="{{ old('works_from', auth()->user()->works_from) }}">
                            <span class="help-block">Fecha de inicio de la empresa.</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="service_started_at" class="col-lg-2 control-label">Inicio del servicio SEO</label>
                        <div class="col-lg-10">
                            <input type="date" class="form-control" value="{{ auth()->user()->service_started_at }}" name="service_started_at" id="service_started_at" disabled>
                            <span class="help-block">Esta fecha solo puede ser modificada por un administrador.</span>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-lg-10 col-lg-offset-2">
                            <a href="{{ url('/home') }}" class="btn btn-default">Cancelar</a>
                            <button type="submit" class="btn btn-primary">Guardar cambios</button>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
</div>
@endsection
