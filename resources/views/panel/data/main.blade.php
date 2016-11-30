@extends('layouts.home')

@section('dashboard_content')
    <div class="panel panel-default">
        <div class="panel-heading">
            Dashboard
        </div>

        <div class="panel-body">
            <form class="form-horizontal" method="POST">
                <fieldset>
                    <legend>Datos principales</legend>
                    <div class="form-group">
                        <label for="trade_name" class="col-lg-2 control-label">Nombre comercial</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" name="trade_name" placeholder="Nombre comercial">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="fiscal_name" class="col-lg-2 control-label">Nombre fiscal</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" name="fiscal_name" placeholder="Nombre fiscal">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="ruc" class="col-lg-2 control-label">RUC</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" name="ruc" placeholder="RUC">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="phones" class="col-lg-2 control-label">Teléfonos</label>
                        <div class="col-lg-10">
                            <textarea class="form-control" name="phones" placeholder="Listado de teléfonos"></textarea>
                            <span class="help-block">Escribir un teléfono por línea.</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-2 control-label">Horario de atención</label>
                        <div class="col-lg-10">
                            <div class="col-md-6">
                                <label for="schedule_start">Horario de inicio</label>
                                <input type="time" name="schedule_start" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label for="schedule_end">Horario de fin</label>
                                <input type="time" name="schedule_end" class="form-control col-md-6">
                            </div>
                            <span class="help-block">Usar un formato de 24 horas.</span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="works_from" class="col-lg-2 control-label">Funciona desde</label>
                        <div class="col-lg-10">
                            <input type="date" class="form-control" name="works_from">
                            <span class="help-block">Fecha de inicio de la empresa.</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="start_of_service" class="col-lg-2 control-label">Inicio del servicio SEO</label>
                        <div class="col-lg-10">
                            <input type="date" class="form-control" name="start_of_service" readonly>
                            <span class="help-block">Este campo es calculado por el sistema al momento del registro.</span>
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
@endsection
