@extends('layouts.panel')

@section('styles')
    <link rel="stylesheet" href="{{ asset('/panel/google-results/results.css') }}">
@endsection

@section('dashboard_content')
<div class="page-content container-fluid">
    <ol class="breadcrumb">
        <li><a href="{{ url(auth()->user()->root_route) }}"><i class="ion-home mr-5"></i> Inicio</a></li>
        <li><a href="/articulos">Artículos</a></li>
        <li class="active">Ver artículo</li>
    </ol>

    <div class="widget">
        <div class="widget-heading">
            <a href="/articulos/{{ $article->id }}/editar" title="Editar artículo"
               class="pull-right"
               style="color: #57caff; font-size: 2em;">
                <i class="glyphicon glyphicon-pencil"></i>
            </a>
            <h1 class="widget-title">{{ $article->title }}</h1>
        </div>
        <div class="widget-body">
            <div class="row">
                <div class="col-md-12">
                    <fieldset>
                        <p>{{ $article->idea }}</p>

                        <p>{{ $article->objective }}</p>

                        {{-- Contexto --}}
                        {!! $article->context !!}

                        {{-- Desarrollo de la idea central --}}
                        {!! $article->idea_development !!}
                    </fieldset>
                </div>
                {{--<div class="col-md-4">--}}
                    {{--<fieldset>--}}
                        {{--<legend>Evaluación</legend>--}}
                        {{--<p>Título: <i class="ion-record text-{{ $article->titleStatus() }}"></i></p>--}}
                        {{--<p>Idea: <i class="ion-record text-{{ $article->ideaStatus(1) }}"></i></p>--}}
                        {{--<p>Contexto: <i class="ion-record text-{{ $article->contextStatus(2) }}"></i></p>--}}
                        {{--<p>Desarrollo: <i class="ion-record text-{{ $article->developmentIdeaStatus(3) }}"></i></p>--}}
                    {{--</fieldset>--}}
                {{--</div>--}}
            </div>
            <div class="text-right">
                <a href="/articulos" type="button" class="btn btn-default">
                    Volver al listado
                </a>
            </div>
        </div>
    </div>

    <div class="widget">
        <div class="widget-heading">
            <h3 class="widget-title">Search Engine Results Page</h3>
        </div>
        <div class="widget-body">
            <div class="google-results">
                <a href="#" onclick="return false;">
                    <span class="title">{{ $article->meta_title ?: 'Sin título' }}</span>
                </a>
                <div>
                    <cite>{{ $client->domain }}/blog/<span>{{ str_slug($article->meta_title) }}</span></cite>
                </div>
                <span class="description">{{ $article->meta_description ?: 'Sin descripción' }}</span>
            </div>
        </div>
    </div>

</div>
@endsection
