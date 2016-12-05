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
            <h3 class="widget-title">Nuevo servicio profesional</h3>
        </div>
        <div class="widget-body">
            <form action="" method="POST">
                <fieldset>
                    <legend>Datos generales</legend>
                    <div class="form-group">
                        <label for="service-name">Nombre del servicio</label>
                        <input type="text" name="name" id="service-name" class="form-control" placeholder="Ingresa aquí el nombre del servicio">
                    </div>
                </fieldset>

                <fieldset>
                    <legend>Optimización para buscadores</legend>
                    <p class="mb-20">Por favor responde las siguientes preguntas.</p>

                    <label for="note1">¿Quiénes son los principales clientes?</label>
                    <textarea id="note1" title="Pregunta 1"></textarea>

                    <label for="note2">¿Qué recibo con este servicio?</label>
                    <textarea id="note2" title="Pregunta 2"></textarea>

                    <label for="note3">¿Qué proyectos has hecho con este servicio?</label>
                    <textarea id="note3" title="Pregunta 3"></textarea>
                </fieldset>

                <div class="text-right">
                    <button type="submit" class="btn btn-primary">
                        Registrar servicio
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