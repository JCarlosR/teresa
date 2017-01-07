@extends('layouts.panel_simple')

@section('dashboard_content')
    <div class="widget">
        <div class="widget-heading">
            <h3 class="widget-title">Registrar nuevo cliente</h3>
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
            @else
                <p>Ingresa los datos del nuevo cliente.</p>
            @endif

            <form action="" method="POST" class="form-horizontal">
                {{ csrf_field() }}

                <fieldset>
                    <legend>Datos del nuevo usuario</legend>
                    <div class="form-group">
                        <label for="name" class="col-lg-2 control-label">Nombre</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" name="name" placeholder="Nombre corto de la empresa" value="{{ old('name') }}">
                            <p class="text-muted">Este nombre se usará como alias, cuando el nombre comercial sea muy extenso.</p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email" class="col-lg-2 control-label">E-mail</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" name="email" placeholder="Correo electrónico" value="{{ old('email') }}">
                            <p class="text-muted">Este correo será usado para iniciar sesión y recibir notificaciones importantes vía mail.</p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="password" class="col-lg-2 control-label">Contraseña</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" name="password" placeholder="Contraseña" value="{{ old('password', str_random(8)) }}">
                            <p class="text-muted">Esta contraseña generada debe ser entragada al cliente para su posterior cambio.</p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="client_type_id" class="col-lg-2 control-label">Tipo de cliente</label>
                        <div class="col-lg-10">
                            <select name="client_type_id" class="form-control" id="client_type_id">
                                <option value="">Seleccione tipo de cliente</option>
                                <option value="0">General (SPS)</option>
                                @foreach ($client_types as $client_type)
                                    <option value="{{ $client_type->id }}">{{ $client_type->name }}</option>
                                @endforeach
                            </select>
                            <p class="text-muted">Esta contraseña generada debe ser entragada al cliente para su posterior cambio.</p>
                        </div>
                    </div>
                </fieldset>
                <fieldset>
                    <legend>Datos principales de la empresa</legend>
                    <div class="form-group">
                        <label for="trade_name" class="col-lg-2 control-label">Nombre comercial</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" name="trade_name" placeholder="Nombre comercial" value="{{ old('trade_name') }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="fiscal_name" class="col-lg-2 control-label">Nombre fiscal</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" name="fiscal_name" placeholder="Nombre fiscal" value="{{ old('fiscal_name') }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="ruc" class="col-lg-2 control-label">Nro de identificación fiscal</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" name="ruc" placeholder="NIF" value="{{ old('ruc') }}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="phones" class="col-lg-2 control-label">Teléfonos</label>
                        <div class="col-lg-10">
                            <textarea class="form-control" name="phones" placeholder="Listado de teléfonos">{{ old('phones') }}</textarea>
                            <span class="help-block">Escribir un teléfono por línea.</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-2 control-label">Horario de atención</label>
                        <div class="col-lg-10">
                            <div class="col-md-6">
                                <label for="start">Horario de inicio</label>
                                <input type="time" name="schedule_start" id="start" class="form-control" value="{{ old('schedule_start') }}">
                            </div>
                            <div class="col-md-6">
                                <label for="end">Horario de fin</label>
                                <input type="time" name="schedule_end" id="end" class="form-control col-md-6" value="{{ old('schedule_end') }}">
                            </div>
                            <span class="help-block">Usar un formato de 24 horas.</span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="works_from" class="col-lg-2 control-label">Funciona desde</label>
                        <div class="col-lg-10">
                            <input type="date" class="form-control" name="works_from" id="works_from" value="{{ old('works_from') }}">
                            <span class="help-block">Fecha de inicio de la empresa.</span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="domain" class="col-lg-2 control-label">Dominio principal</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" name="domain" placeholder="URL del sitio web principal" value="{{ old('domain') }}">
                        </div>
                    </div>
                </fieldset>
                <div class="form-group text-center">
                    <button type="reset" class="btn btn-default">Limpiar campos</button>
                    <button type="submit" class="btn btn-success">
                        Registrar nuevo cliente
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
