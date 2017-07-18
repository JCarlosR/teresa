@extends('layouts.panel')

@section('dashboard_content')
<div class="page-content container-fluid">
    <ol class="breadcrumb">
        <li><a href="{{ url(auth()->user()->root_route) }}"><i class="ion-home mr-5"></i> Inicio</a></li>
        <li><a href="/marcas">Marcas</a></li>
        <li class="active">Ver marca</li>
    </ol>

    <div class="widget">
        <div class="widget-heading">
            <a href="/marcas/{{ $brand->id }}/editar" title="Editar marca"
               class="pull-right"
               style="color: #57caff; font-size: 2em;">
                <i class="glyphicon glyphicon-pencil"></i>
            </a>
            <h1>{{ $brand->name }}</h1>
        </div>
        <div class="widget-body">

            <div class="row">
                <div class="col-md-8">
                    <fieldset>
                        {{-- Presentación de la marca --}}
                        {!! $brand->question_1 !!}

                        {{-- Historia de la marca --}}
                        {!! $brand->question_2 !!}

                        {{-- Líneas de productos --}}
                        {!! $brand->question_3 !!}
                    </fieldset>
                </div>
                <div class="col-md-4">
                    <fieldset>
                        <legend>Evaluación</legend>
                        <p>Pregunta 1: <i class="ion-record text-{{ $brand->questionStatus(1) }}"></i></p>
                        <p>Pregunta 2: <i class="ion-record text-{{ $brand->questionStatus(2) }}"></i></p>
                        <p>Pregunta 3: <i class="ion-record text-{{ $brand->questionStatus(3) }}"></i></p>
                    </fieldset>

                    <fieldset>
                        <legend>Ficha del marca</legend>

                        <p class="small">Nombre del marca</p>
                        <p>{{ $brand->name }}</p>

                        <p class="small">Tipo de marca</p>
                        <p>{{ $brand->type }}</p>

                        <p class="small">Industria</p>
                        <p>{{ $brand->industry }}</p>

                        <p class="small">Fundación</p>
                        <p>{{ $brand->foundation }}</p>

                        <p class="small">Fundador</p>
                        <p>{{ $brand->founder }}</p>

                        <p class="small">Productos destacados</p>
                        <p>{{ $brand->productos }}</p>

                        <p class="small">Sitio web</p>
                        <p>{{ $brand->website }}</p>
                    </fieldset>
                </div>
            </div>


            <div class="text-right">
                <a href="/marcas" type="button" class="btn btn-default">
                    Volver al listado
                </a>
            </div>

        </div>
    </div>
</div>
@endsection
