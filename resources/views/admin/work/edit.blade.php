@extends('layouts.panel')

@section('styles')
    <style>
        .big-icon, .medium-icon {
            margin: 0 0.7em;
        }
        .big-icon {
            font-size: 2.2em;
        }
        .medium-icon {
            font-size: 1.2em;
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

            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="" method="POST">
                {{ csrf_field() }}
                <h3 class="mb-20">Seleccione un tipo de actividad.</h3>

                <div class="row">
                    <div class="col-md-4">
                        <h4>Plataforma web</h4>
                        <div class="radio-custom">
                            <input type="radio" name="activity_type" id="option11" value="hosting_and_ssl" checked>
                            <label for="option11">Hosting + SSL</label>
                        </div>
                        <div class="radio-custom">
                            <input type="radio" name="activity_type" id="option12" value="web_content">
                            <label for="option12" title="Nosotros y Servicios">Contenido web</label>
                        </div>
                        <div class="radio-custom">
                            <input type="radio" name="activity_type" id="option13" value="web_template">
                            <label for="option13">Plantilla web</label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <h4>Proyectos y artículos</h4>
                        <div class="radio-custom">
                            <input type="radio" name="activity_type" id="option1" value="project_in_website" checked>
                            <label for="option1">Proyectos en sitio web</label>
                        </div>
                        <div class="radio-custom">
                            <input type="radio" name="activity_type" id="option2" value="articles">
                            <label for="option2">Artículos en sitio web</label>
                        </div>
                        <div class="radio-custom">
                            <input type="radio" name="activity_type" id="option3" value="project_in_professional_media">
                            <label for="option3">Proyectos en medios profesionales</label>
                        </div>
                        <div class="radio-custom">
                            <input type="radio" name="activity_type" id="option4" value="youtube_video">
                            <label for="option4">Proyectos en vídeos (Youtube)</label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <h4>Perfiles sociales</h4>
                        <div class="radio-custom">
                            <input type="radio" name="activity_type" id="option5" value="social_post">
                            <label for="option5">Publicaciones en Facebook, LinkedIn y Google+</label>
                        </div>
                        <div class="radio-custom">
                            <input type="radio" name="activity_type" id="option6" value="facebook_ads">
                            <label for="option6">Publicidad en Facebook</label>
                        </div>
                        <div class="radio-custom">
                            <input type="radio" name="activity_type" id="option7" value="linkedin_ads">
                            <label for="option7">Publicidad en LinkedIn</label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <h4>Opciones generales</h4>
                        <div class="radio-custom">
                            <input type="radio" name="activity_type" id="option8" value="register_in_google_maps">
                            <label for="option8">Registro en Google Maps</label>
                        </div>
                        <div class="radio-custom">
                            <input type="radio" name="activity_type" id="option9" value="button_call_me_back">
                            <label for="option9">Botón de llamada (call me back)</label>
                        </div>
                        <div class="radio-custom">
                            <input type="radio" name="activity_type" id="option10" value="results_report">
                            <label for="option10">Informes de resultado</label>
                        </div>
                    </div>
                </div>

                <h3 class="mb-20">Seleccione mes y año.</h3>

                <div class="form-group">
                    <label for="month_offset">Mes</label>
                    <select name="month_offset" id="month_offset" class="form-control">
                        @for ($i=0; $i<12; ++$i)
                            <option value="{{ $i }}">{{ $workSchedule->start_date->addMonth($i)->format('F Y') }}</option>
                        @endfor
                    </select>
                    <p class="text-muted">Inicialmente se iban a considerar como campos separados. Pero es necesario que estén así para evitar inconsistencias.</p>
                </div>

                <div class="form-group text-right">
                    <button type="submit" class="btn btn-success">
                        Registrar actividad
                    </button>
                </div>
            </form>
        </div>
    </div>

    <div class="widget">
        <div class="widget-heading">
            <h3 class="widget-title">Actualizar estado de las actividades</h3>
        </div>
        <div class="widget-body">
            <p>Marque como realizada o como pendiente las actividades registradas en el cronograma.</p>
            <p>Para alterar el estado de una actividad simplemente <strong>haga clic sobre el ícono</strong> de su estado. La imagen que se muestra <strong>representa el estado actual</strong>.</p>

            <table class="table table-bordered table-hover">
                <thead>
                <tr>
                    <th>Actividad</th>
                    <th>Mes y Año</th>
                    <th>Estado</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($details as $detail)
                    <tr>
                        <th class="row">{{ $detail->type_name }}</th>
                        <td>{{ $detail->work_schedule->start_date->addMonths($detail->month_offset)->format('F Y') }}</td>
                        <td class="text-center">
                            <a href="@if($detail->state==1) #! @else {{ url('/admin/cronograma/detalle/'.$detail->id.'?state=1') }} @endif">
                                <i class="ion-checkmark-round @if($detail->state==1) big-icon @else medium-icon @endif text-success"></i>
                            </a>

                            <a href="@if($detail->state==0) #! @else {{ url('/admin/cronograma/detalle/'.$detail->id.'?state=0') }} @endif">
                                <i class="ion-clock @if($detail->state==0) big-icon @else medium-icon @endif text-default"></i>
                            </a>

                            <a href="@if($detail->state==-1) #! @else {{ url('/admin/cronograma/detalle/'.$detail->id.'?state=-1') }} @endif">
                                <i class="ion-close-round @if($detail->state==-1) big-icon @else medium-icon @endif text-danger"></i>
                            </a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <div class="widget">
        <div class="widget-heading">
            <h3 class="widget-title">Cambiar mes de inicio de las actividades</h3>
        </div>
        <div class="widget-body">
            <div class="alert alert-warning">
                <p>Modificar la fecha de inicio del cronograma le permitirá cambiar el primer mes del cronograma:</p>
                <ul>
                    <li>Debe tener en cuenta que todas las actividades serán desplazadas de acuerdo a este cambio.</li>
                    <li>La fecha de inicio se puede cambiar tantas veces como sea necesario (a una fecha anterior o posterior).</li>
                    <li>Ejemplo: si la fecha de inicio deja de ser Febrero y ahora es Abril, todas las actividades serán pospuestas 2 meses.</li>
                </ul>
            </div>

            <form action="" method="POST">
                {{ csrf_field() }}
                {{ method_field('PUT') }}

                <div class="form-group">
                    <label for="start_date">Fecha de inicio:</label>
                    <input type="date" name="start_date" id="start_date" class="form-control" value="{{ $workSchedule->start_date->format('Y-m-d') }}" required>
                </div>
                <div class="text-right">
                    <button type="submit" class="btn btn-danger">
                        Modificar cronograma
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

