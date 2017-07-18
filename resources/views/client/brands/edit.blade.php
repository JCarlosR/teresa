@extends('layouts.panel')

@section('styles')
    <link rel="stylesheet" href="{{ asset('/plugins/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/plugins/summernote/dist/summernote.css') }}">
    <style>
        textarea { display: none; }
    </style>
    @if (auth()->user()->is_admin)
        <link rel="stylesheet" href="{{ asset('/panel/google-results/results.css') }}">
    @endif
@endsection

@section('dashboard_content')
<div class="page-content container-fluid">
    <ol class="breadcrumb">
        <li><a href="{{ url(auth()->user()->root_route) }}"><i class="ion-home mr-5"></i> Inicio</a></li>
        <li><a href="/marcas">Marcas</a></li>
        <li class="active">Editar marca</li>
    </ol>

    <div class="widget">
        <div class="widget-heading">
            <h3 class="widget-title">Modificar marca seleccionada</h3>
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

            <form action="" method="POST" class="form-horizontal">
                {{ csrf_field() }}

                <fieldset>
                    <legend>SERP</legend>
                    <div class="form-group">
                        <label for="brand-title" class="col-sm-2 control-label">Título</label>
                        <div class="col-sm-10">
                            <input type="text" name="title" id="brand-title" class="form-control" placeholder="Título de la página" value="{{ old('title', $brand->title) }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="brand-description" class="col-sm-2 control-label">Descripción</label>
                        <div class="col-sm-10">
                            <input type="text" name="description" id="brand-description" class="form-control" placeholder="Descripción de la marca" value="{{ old('description', $brand->description) }}">
                            <span class="help-block">Se recomienda ingresar entre 140 y 155 caracteres.</span>
                        </div>
                    </div>
                    <div class="google-results">
                        <a href="#" onclick="return false;">
                            <span class="title">{{ $brand->title }}</span>
                        </a>
                        <div>
                            <cite>{{ $client->domain }}/marcas/<span>{{ str_slug($brand->name) }}</span></cite>
                        </div>
                        <span class="description">{{ $brand->description }}</span>
                    </div>
                </fieldset>

                <fieldset>
                    <legend>Ficha de la marca</legend>

                    <div class="form-group">
                        <label for="brand-name" class="col-sm-2 control-label">Nombre</label>
                        <div class="col-sm-10">
                            <input type="text" name="name" id="brand-name" class="form-control" placeholder="Nombre de la marca" value="{{ old('name', $brand->name) }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="brand-type" class="col-sm-2 control-label">Tipo</label>
                        <div class="col-sm-10">
                            <input type="text" name="type" id="brand-type" class="form-control" placeholder="Pública o privada" value="{{ old('type', $brand->type) }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="brand-industry" class="col-sm-2 control-label">Industria</label>
                        <div class="col-sm-10">
                            <input type="text" name="industry" id="brand-industry" class="form-control" placeholder="Comercial, moda, medicina, inmobiliaria u otro" value="{{ old('industry', $brand->industry) }}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="brand-foundation" class="col-sm-2 control-label">Fundación</label>
                        <div class="col-sm-10">
                            <input type="text" name="foundation" id="brand-foundation" class="form-control" placeholder="Indica ciudad, país, año" value="{{ old('foundation', $brand->foundation) }}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="brand-founder" class="col-sm-2 control-label">Fundador</label>
                        <div class="col-sm-10">
                            <input type="text" name="founder" id="brand-founder" class="form-control" placeholder="Persona o empresa que fundó la marca" value="{{ old('founder', $brand->founder) }}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="brand-products" class="col-sm-2 control-label">Productos</label>
                        <div class="col-sm-10">
                            <input type="text" name="products" id="brand-products" class="form-control"
                                   placeholder="Nombres de los productos más destacados que vende o distribuye" value="{{ old('products', $brand->products) }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="brand-website" class="col-sm-2 control-label">Sitio web</label>
                        <div class="col-sm-10">
                            <input type="text" name="website" id="brand-status" class="form-control"
                                   placeholder="Dirección URL completa" value="{{ old('website', $brand->website) }}">
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
                    <textarea id="note1" title="Pregunta 1" name="question_1">{{ old('question_1', $brand->question_1) }}</textarea>

                    <h3>
                        Historia de la marca
                        <small>¿Dónde se fundó¿ ¿Quién fue el responsable?</small>
                    </h3>
                    <span id="limit2"></span>
                    <span id="status2" class="pull-right"></span>
                    <textarea id="note2" title="Pregunta 2" name="question_2">{{ old('question_2', $brand->question_2) }}</textarea>

                    <h3>
                        Líneas de productos
                        <small>¿Qué líneas de productos presenta? ¿Cómo se organizan?</small>
                    </h3>
                    <span id="limit3"></span>
                    <span id="status3" class="pull-right"></span>
                    <textarea id="note3" title="Pregunta 3" name="question_3">{{ old('question_3', $brand->question_3) }}</textarea>
                </fieldset>

                <div class="text-right">
                    <button type="button" class="btn btn-default" onclick="window.history.back();">
                        Volver sin guardar
                    </button>
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
    <!-- Summer note editor for text-areas -->
    <script src="{{ asset('/plugins/summernote/dist/summernote.min.js') }}"></script>

    <script src="{{ asset('/panel/brands/create.js') }}"></script>
    @if (auth()->user()->is_admin)
        <script>var inputName = 'title';</script>
        <script src="{{ asset('/panel/google-results/results.js') }}"></script>
    @endif
@endsection