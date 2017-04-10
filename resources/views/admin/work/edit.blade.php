@extends('layouts.panel')

@section('styles')
    <style>
        .big-icon {
            font-size: 2em;
        }
    </style>
@endsection

@section('dashboard_content')
<div class="page-content container-fluid">
    <ol class="breadcrumb">
        <li><a href="{{ url(auth()->user()->root_route) }}"><i class="ion-home mr-5"></i> Inicio</a></li>
        <li><a href="/admin/cronograma">Cronogramas</a></li>
        <li class="active">Editar cronograma</li>
    </ol>

    <div class="widget">
        <div class="widget-heading">
            <h3 class="widget-title">Registrar actividad</h3>
        </div>
        <div class="widget-body">
            @if (session('notification'))
                <div class="alert alert-success">
                    <p>{{ session('notification') }}</p>
                </div>
            @endif

            <h3 class="mb-20">Seleccione un tipo de actividad.</h3>

            <div class="row">
                <div class="col-md-4">
                    <h4>Optimización SEO</h4>
                    <div class="radio-custom">
                        <input type="radio" name="activity_type" id="option1">
                        <label for="option1">Proyectos en sitio web</label>
                    </div>
                    <div class="radio-custom">
                        <input type="radio" name="activity_type" id="option2">
                        <label for="option2">Artículos</label>
                    </div>
                    <div class="radio-custom">
                        <input type="radio" name="activity_type" id="option3">
                        <label for="option3">Proyecto para medios profesionales</label>
                    </div>
                    <div class="radio-custom">
                        <input type="radio" name="activity_type" id="option4">
                        <label for="option4">Vídeos en Youtube</label>
                    </div>
                </div>
                <div class="col-md-4">
                    <h4>Perfiles sociales</h4>
                    <div class="radio-custom">
                        <input type="radio" name="activity_type" id="option5">
                        <label for="option5">Publicaciones en Facebook, LinkedIn y Google+</label>
                    </div>
                    <div class="radio-custom">
                        <input type="radio" name="activity_type" id="option6">
                        <label for="option6">Publicidad en Facebook</label>
                    </div>
                    <div class="radio-custom">
                        <input type="radio" name="activity_type" id="option7">
                        <label for="option7">Publicidad en LinkedIn</label>
                    </div>
                </div>
                <div class="col-md-4">
                    <h4>Opciones generales</h4>
                    <div class="radio-custom">
                        <input type="radio" name="activity_type" id="option8">
                        <label for="option8">Registro en Google Maps</label>
                    </div>
                    <div class="radio-custom">
                        <input type="radio" name="activity_type" id="option9">
                        <label for="option9">Botón de llamada (call me back)</label>
                    </div>
                    <div class="radio-custom">
                        <input type="radio" name="activity_type" id="option10">
                        <label for="option10">Informes de resultado</label>
                    </div>
                </div>
            </div>

            <h3 class="mb-20">Seleccione mes y año en que se llevará a cabo.</h3>

            <div class="form-group">
                <label for="month">Mes</label>
                <select name="month" id="month" class="form-control">
                    <option value="1">Enero</option>
                    <option value="2">Febrero</option>
                    <option value="3">Marzo</option>
                    <option value="4">Abril</option>
                    <option value="5">Mayo</option>
                    <option value="6">Junio</option>
                    <option value="7">Julio</option>
                    <option value="8">Agosto</option>
                    <option value="9">Setiembre</option>
                    <option value="10">Octubre</option>
                    <option value="11">Noviembre</option>
                    <option value="12">Diciembre</option>
                </select>
            </div>
            <div class="form-group">
                <label for="year">Año</label>
                <select name="year" id="year" class="form-control">
                    <option value="2017">2017</option>
                    <option value="2018">2018</option>
                    <option value="2019">2019</option>
                </select>
            </div>

            <div class="form-group text-right">
                <button type="submit" class="btn btn-success">
                    Registrar actividad
                </button>
            </div>
        </div>
    </div>

    <div class="widget">
        <div class="widget-heading">
            <h3 class="widget-title">Actualizar estado de las actividades</h3>
        </div>
        <div class="widget-body">
            @if (session('notification'))
                <div class="alert alert-success">
                    <p>{{ session('notification') }}</p>
                </div>
            @endif

            <p>Marque como realizada o como pendiente las actividades registradas en el cronograma.</p>
            <p>Para alterar el estado de una actividad simplemente <strong>haga clic sobre el ícono</strong> de su estado. La imagen que se muestra <strong>representa el estado actual</strong>.</p>

            <table class="table table-bordered table-hover">
                <thead>
                <tr>
                    <th>Actividad</th>
                    <th>Año</th>
                    <th>Mes</th>
                    <th>Estado</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th class="row">Proyectos en sitio web</th>
                    <td>2017</td>
                    <td>Marzo</td>
                    <td class="text-center text-success">
                        <i class="ion-checkmark-round big-icon"></i>
                    </td>
                </tr>
                <tr>
                    <th class="row">Registro en Google Maps</th>
                    <td>2017</td>
                    <td>Julio</td>
                    <td class="text-center text-default">
                        <i class="ion-clock big-icon"></i>
                    </td>
                </tr>
                <tr>
                    <th class="row">Publicidad en Facebook</th>
                    <td>2018</td>
                    <td>Enero</td>
                    <td class="text-center text-default">
                        <i class="ion-clock big-icon"></i>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

@section('scripts')
    <script src="{{ asset('/panel/employees/create.js') }}"></script>
@endsection
