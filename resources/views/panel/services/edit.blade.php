@extends('layouts.user')

@section('styles')
    <!-- Font Awesome-->
    <link rel="stylesheet" href="{{ asset('/plugins/font-awesome/css/font-awesome.min.css') }}">
    <!-- Summer note-->
    <link rel="stylesheet" href="{{ asset('/plugins/summernote/dist/summernote.css') }}">
@endsection

@section('dashboard_content')
<div class="page-content container-fluid">
    <div class="widget">
        <div class="widget-heading">
            <h3 class="widget-title">Editar servicio profesional</h3>
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

            <form action="{{ url('/servicio/editar') }}" method="POST">
                {{ csrf_field() }}
                <input type="hidden" name="service_id" value="{{ $service->id }}">
                <fieldset>
                    <legend>Datos generales</legend>
                    <div class="form-group">
                        <label for="service-name">Nombre del servicio</label>
                        <input type="text" name="name" id="service-name" class="form-control" placeholder="Ingresa aquí el nombre del servicio" value="{{ old('name', $service->name) }}">
                    </div>
                </fieldset>

                <fieldset>
                    <legend>Memoria descriptiva</legend>
                    <p class="mb-20">Por favor responde las siguientes preguntas.</p>

                    <label for="note1">¿Cuál es el servicio? <em>El mensaje</em></label>
                    <span id="limit1"></span>
                    <textarea id="note1" title="Pregunta 1" name="question_1">{{ old('question_1', $service->question_1) }}</textarea>

                    <label for="note2">¿Tienen experiencia? <em>Desde cuándo lo vienen haciendo, para quiénes</em></label>
                    <span id="limit2"></span>
                    <textarea id="note2" title="Pregunta 2" name="question_2">{{ old('question_2', $service->question_2) }}</textarea>

                    <label for="note3">¿En qué ciudades han desarrollado proyectos? <em>Hasta dónde ofrecen sus servicios</em></label>
                    <span id="limit3"></span>
                    <textarea id="note3" title="Pregunta 3" name="question_3">{{ old('question_3', $service->question_3) }}</textarea>

                    <label for="note4">¿Cuál es el proyecto símbolo del servicio? <em>Hasta dónde ofrecen sus servicios</em></label>
                    <span id="limit4"></span>
                    <textarea id="note4" title="Pregunta 4" name="question_4">{{ old('question_4', $service->question_4) }}</textarea>

                    <label for="note5">¿Como funciona el servicio? <em>Cómo el cliente contrata el servicio</em></label>
                    <span id="limit5"></span>
                    <textarea id="note5" title="Pregunta 5" name="question_5">{{ old('question_5', $service->question_5) }}</textarea>
                </fieldset>

                <div class="text-right">
                    <button type="submit" class="btn btn-primary">
                        Guardar cambios
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@section('scripts')
    <script src="{{ asset('/plugins/summernote/dist/summernote.min.js') }}"></script>
    <script src="{{ asset('/panel/services/create.js') }}"></script>
@endsection