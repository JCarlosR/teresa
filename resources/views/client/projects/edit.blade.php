@extends('layouts.panel')

@section('styles')
    <link rel="stylesheet" href="{{ asset('/plugins/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/plugins/summernote/dist/summernote.css') }}">
    <style>
        textarea {
            display: none;
        }
    </style>
@endsection

@section('dashboard_content')
<div class="page-content container-fluid">
    <div class="widget">
        <div class="widget-heading">
            <h3 class="widget-title">Editar proyecto</h3>
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

            <form action="{{ url('/proyecto/editar') }}" method="POST">
                {{ csrf_field() }}
                <input type="hidden" name="project_id" value="{{ $project->id }}">

                <fieldset>
                    <legend>Ficha del proyecto</legend>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="project-name">Nombre del proyecto</label>
                                <input type="text" name="name" id="project-name" class="form-control" placeholder="Ingresa aquí el nombre del proyecto" value="{{ old('name', $project->name) }}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="project-service">Tipo de servicio</label>
                                <select name="service_id" id="project-service" class="form-control">
                                    <option value="">Seleccione servicio</option>
                                    @foreach ($services as $service)
                                        <option value="{{ $service->id }}" @if(old('service_id', $project->service_id)==$service->id) selected @endif>{{ $service->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="project-client">Cliente</label>
                                <input type="text" name="client" id="project-client" class="form-control" placeholder="Cliente del proyecto" value="{{ old('client', $project->client) }}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="project-year">Año del proyecto</label>
                                <input type="number" name="year" id="project-year" min="1980" class="form-control" placeholder="Año de desarrollo del proyecto" value="{{ old('year', $project->year) }}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="project-type">Tipo de proyecto</label>
                                <input type="text" name="type" id="project-type" class="form-control" placeholder="Tipo de proyecto" value="{{ old('type', $project->type) }}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="project-duration">Duración</label>
                                <input type="text" name="duration" id="project-duration" class="form-control" placeholder="Especificar: días, semanas, meses" value="{{ old('duration', $project->duration) }}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="project-status">Estado</label>
                                <input type="text" name="status" id="project-status" class="form-control"
                                       placeholder="Estado del proyecto" value="{{ old('status', $project->status) }}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="project-acknowledgments">Reconocimientos</label>
                            <textarea name="acknowledgments" id="project-acknowledgments" placeholder="Reconocimientos recibidos por el proyecto" rows="2" class="form-control">{{ old('acknowledgments', $project->acknowledgments) }}</textarea>
                        </div>
                    </div>
                </fieldset>

                @if ($client->client_type_id)
                    <fieldset>
                        <legend>Datos específicos del proyecto</legend>
                        @if ($client->client_type_id == 1)
                            @include('layouts.projects.architects.edit', ['architect_project' => $project->architect_project])
                        @endif
                    </fieldset>
                @endif

                <fieldset>
                    <legend>Memoria descriptiva</legend>

                    <label for="note1">¿Cuál fue el encargo?</label>
                    <span id="limit1"></span>
                    <textarea id="note1" title="Pregunta 1" name="question_1">{{ old('question_1', $project->question_1) }}</textarea>

                    <label for="note2">¿Cuál fue el planteamiento del proyecto?</label>
                    <span id="limit2"></span>
                    <textarea id="note2" title="Pregunta 2" name="question_2">{{ old('question_2', $project->question_2) }}</textarea>

                    <label for="note3">¿Qué detalles técnicos especificarías?</label>
                    <span id="limit3"></span>
                    <textarea id="note3" title="Pregunta 3" name="question_3">{{ old('question_3', $project->question_3) }}</textarea>
                </fieldset>

                <div class="text-right">
                    <button type="button" class="btn btn-default" onclick="window.history.back();">
                        Volver sin guardar
                    </button>
                    <button type="submit" class="btn btn-primary">
                        Guardar proyecto
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@section('scripts')
    <script src="{{ asset('/plugins/summernote/dist/summernote.min.js') }}"></script>
    <script src="{{ asset('/panel/projects/create.js') }}"></script>
@endsection