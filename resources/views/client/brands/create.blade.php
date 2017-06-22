@extends('layouts.panel')

@section('styles')
    <link rel="stylesheet" href="{{ asset('/plugins/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/plugins/summernote/dist/summernote.css') }}">
    <style>
        textarea { display: none; }
    </style>
@endsection

@section('dashboard_content')
<div class="page-content container-fluid">
    <ol class="breadcrumb">
        <li><a href="{{ url(auth()->user()->root_route) }}"><i class="ion-home mr-5"></i> Inicio</a></li>
        <li><a href="/marcas">Marcas</a></li>
        <li class="active">Nueva marca</li>
    </ol>

    <div class="widget">
        <div class="widget-heading">
            <h3 class="widget-title">Registrar nueva marca</h3>
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

            <form action="{{ url('/marcas/registrar') }}" method="POST" class="form-horizontal">
                {{ csrf_field() }}

                <fieldset>
                    <legend>Ficha de la marca</legend>

                    {{--<div class="form-group">--}}
                        {{--<label for="project-name" class="col-sm-2 control-label">Título SERP</label>--}}
                        {{--<div class="col-sm-10">--}}
                            {{--<input type="text" name="name" id="project-name" class="form-control" placeholder="Ingresa aquí el nombre del proyecto" value="{{ old('name') }}">--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="form-group">--}}
                        {{--<label for="project-description" class="col-sm-2 control-label">Resumen SERP</label>--}}
                        {{--<div class="col-sm-10">--}}
                            {{--<input type="text" name="description" id="project-description" class="form-control" placeholder="Ingresa aquí una descripción breve del proyecto" value="{{ old('description') }}">--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="google-results">--}}
                        {{--<a href="#" onclick="return false;">--}}
                            {{--<span class="title">Este es un ejemplo de un título con 70 caracteres de longitud</span>--}}
                        {{--</a>--}}
                        {{--<div>--}}
                            {{--<cite>{{ $client->domain }}/proyectos/<span>example</span></cite>--}}
                        {{--</div>--}}
                        {{--<span class="description">Este es un ejemplo de cómo se muestran los resultados en Google. Este contenido lo obtiene Google (y los demás buscadores) en base a etiquetas meta que se encarga de configurar Teresa.</span>--}}
                    {{--</div>--}}

                    <div class="form-group">
                        <label for="brand-name" class="col-sm-2 control-label">Nombre</label>
                        <div class="col-sm-10">
                            <input type="text" name="name" id="brand-name" class="form-control" placeholder="Nombre de la marca" value="{{ old('name') }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="brand-type" class="col-sm-2 control-label">Tipo</label>
                        <div class="col-sm-10">
                            <input type="text" name="type" id="brand-type" class="form-control" placeholder="Pública o privada" value="{{ old('type') }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="brand-industry" class="col-sm-2 control-label">Industria</label>
                        <div class="col-sm-10">
                            <input type="number" name="industry" id="brand-industry" class="form-control" placeholder="Comercial, moda, medicina, inmobiliaria u otro" value="{{ old('industry') }}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="brand-foundation" class="col-sm-2 control-label">Fundación</label>
                        <div class="col-sm-10">
                            <input type="text" name="foundation" id="brand-foundation" class="form-control" placeholder="Indica ciudad, país, año" value="{{ old('foundation') }}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="brand-founder" class="col-sm-2 control-label">Fundador</label>
                        <div class="col-sm-10">
                            <input type="text" name="founder" id="brand-founder" class="form-control" placeholder="Persona o empresa que fundó la marca" value="{{ old('founder') }}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="brand-products" class="col-sm-2 control-label">Productos</label>
                        <div class="col-sm-10">
                            <input type="text" name="products" id="brand-products" class="form-control"
                                   placeholder="Nombres de los productos más destacados que vende o distribuye" value="{{ old('products') }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="brand-website" class="col-sm-2 control-label">Sitio web</label>
                        <div class="col-sm-10">
                            <input type="text" name="status" id="brand-status" class="form-control"
                                   placeholder="Dirección URL completa" value="{{ old('website') }}">
                        </div>
                    </div>

                </fieldset>

                <fieldset>
                    <legend>Memoria descriptiva</legend>

                    <h3>
                        Presentación de la marca.
                        <small>¿Qué puedes contarnos de la marca? ¿Qué productos comercializa? ¿En dónde y desde cuándo?</small>
                    </h3>
                    <span id="limit1"></span>
                    <span id="status1" class="pull-right"></span>
                    <textarea id="note1" title="Pregunta 1" name="question_1">{{ old('question_1') }}</textarea>

                    <h3>
                        Historia de la marca
                        <small>¿Dónde se fundó¿ ¿Quién fue el responsable?</small>
                    </h3>
                    <span id="limit2"></span>
                    <span id="status2" class="pull-right"></span>
                    <textarea id="note2" title="Pregunta 2" name="question_2">{{ old('question_2') }}</textarea>

                    <h3>
                        Lineas de productos
                        <small>¿Qué líneas de productos presenta? ¿Cómo se organizan?</small>
                    </h3>
                    <span id="limit3"></span>
                    <span id="status3" class="pull-right"></span>
                    <textarea id="note3" title="Pregunta 3" name="question_3">{{ old('question_3') }}</textarea>
                </fieldset>

                <div class="text-right">
                    <button type="button" class="btn btn-default" onclick="window.history.back();">
                        Cancelar registro
                    </button>
                    <button type="submit" class="btn btn-primary">
                        Registrar marca
                    </button>
                </div>
            </form>

        </div>
    </div>
</div>
@endsection

@section('scripts')
    <!-- Summer note editor for text-areas -->
    <script src="{{ asset('/plugins/summernote/dist/summernote.min.js') }}"></script>

    <script src="{{ asset('/panel/brands/create.js') }}"></script>
@endsection