@extends('layouts.panel')

@section('styles')
    <link rel="stylesheet" href="{{ asset('/panel/google-results/results.css') }}">
    <link rel="stylesheet" href="{{ asset('/vendor/prism/prism.css') }}">
    <style>
        .google-results span.description { display: none; }
    </style>
@endsection

@section('dashboard_content')
<div class="page-content container-fluid">

    <div class="widget">
        <div class="widget-heading">
            <h3 class="widget-title">Resumen SERP General</h3>
        </div>
        <div class="widget-body">
            <p>Previsualización de cada enlace sobre la página de resultados en buscadores.</p>
            <div class="row">
                <div class="col-md-12">
                    <div class="btn-group pull-right">
                        <button class="btn btn-primary btn-sm waves-effect waves-light" title="Ver código" data-general="root">
                            <span class="glyphicon glyphicon-file"></span>
                        </button>
                    </div>
                    @include('client.serp.includes.google-results', [
                        'link' => $client->getLinkTo('/'),
                        'title' => $client->title,
                        'domain' => $client->domain,
                        'description' => $client->description
                    ])
                </div>
                <div class="col-md-6">
                    <div class="btn-group pull-right">
                        <button class="btn btn-primary btn-sm waves-effect waves-light" title="Ver código" data-general="services">
                            <span class="glyphicon glyphicon-file"></span>
                        </button>
                        <a href="/servicios" class="btn btn-info btn-sm pull-right" title="Editar servicios">
                            <span class="glyphicon glyphicon-pencil"></span>
                        </a>
                    </div>
                    @include('client.serp.includes.google-results', [
                        'link' => $client->getLinkTo('/servicios'),
                        'title' => $client->trade_name . ' - Servicios',
                        'domain' => $client->domain . '/servicios',
                        'description' => $client->services_description
                    ])
                </div>
                <div class="col-md-6">
                    <div class="btn-group pull-right">
                        <button class="btn btn-primary btn-sm waves-effect waves-light" title="Ver código" data-general="projects">
                            <span class="glyphicon glyphicon-file"></span>
                        </button>
                        <a href="/proyectos" class="btn btn-info btn-sm pull-right" title="Editar proyectos">
                            <span class="glyphicon glyphicon-pencil"></span>
                        </a>
                    </div>
                    @include('client.serp.includes.google-results', [
                        'link' => $client->getLinkTo('/proyectos'),
                        'title' => $client->trade_name . ' - Proyectos',
                        'domain' => $client->domain . '/proyectos',
                        'description' => $client->projects_description
                    ])
                </div>
                <div class="col-md-6">
                    <div class="btn-group pull-right">
                        <button class="btn btn-primary btn-sm waves-effect waves-light" title="Ver código" data-general="about_us">
                            <span class="glyphicon glyphicon-file"></span>
                        </button>
                        <a href="/nosotros" class="btn btn-info btn-sm pull-right" title="Editar sección nosotros">
                            <span class="glyphicon glyphicon-pencil"></span>
                        </a>
                    </div>
                    @include('client.serp.includes.google-results', [
                        'link' => $client->getLinkTo('/nosotros'),
                        'title' => $client->trade_name . ' - Nosotros',
                        'domain' => $client->domain . '/nosotros',
                        'description' => $client->about_us->description
                    ])
                </div>
            </div>
        </div>
    </div>

    <div class="widget">
        <div class="widget-heading">
            <h3 class="widget-title">Resumen SERP - URLs</h3>
        </div>
        <div class="widget-body">
            <div class="row">
                @foreach ($links as $link)
                <div class="col-md-6">
                    <div class="btn-group pull-right">
                        <button class="btn btn-primary btn-sm waves-effect waves-light" title="Ver código" data-modal="{{ $link->id }}">
                            <span class="glyphicon glyphicon-file"></span>
                        </button>
                        @if (auth()->user()->is_admin)
                            <a href="{{ url('serp/link/'.$link->id.'/edit') }}" class="btn btn-info btn-sm waves-effect waves-light" title="Editar SERP">
                                <span class="glyphicon glyphicon-pencil"></span>
                            </a>
                        @endif
                    </div>
                    @include('client.serp.includes.google-results', [
                        'link' => $link->url,
                        'title' => $link->name,
                        'domain' => $client->domain  .'/'. ltrim($link->url, '/'),
                        'description' => $link->description
                    ])
                </div>
                @endforeach
            </div>
        </div>
    </div>

    <div class="widget">
        <div class="widget-heading">
            <h3 class="widget-title">Resumen SERP - Servicios</h3>
        </div>
        <div class="widget-body">
            <div class="row">
                <div class="col-md-12">
                    @foreach ($services as $service)
                        <div class="btn-group pull-right">
                            <button class="btn btn-primary btn-sm waves-effect waves-light" title="Ver código" data-service="{{ $service->id }}">
                                <span class="glyphicon glyphicon-file"></span>
                            </button>
                            <a href="{{ url('/servicio/'.$service->id.'/editar') }}" class="btn btn-info btn-sm waves-effect waves-light" title="Editar servicio">
                                <span class="glyphicon glyphicon-pencil"></span>
                            </a>
                        </div>
                        @include('client.serp.includes.google-results', [
                            'link' => $client->getLinkTo('/servicio/'.$service->id),
                            'title' => $service->title,
                            'domain' => $client->domain .'/servicios/'. str_slug($service->name),
                            'description' => $service->description
                        ])
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <div class="widget">
        <div class="widget-heading">
            <h3 class="widget-title">Resumen SERP - Proyectos</h3>
        </div>
        <div class="widget-body">
            <div class="row">
                <div class="col-md-12">
                    @foreach ($projects as $project)
                        <div class="btn-group pull-right">
                            <button class="btn btn-primary btn-sm waves-effect waves-light" title="Ver código" data-project="{{ $project->id }}">
                                <span class="glyphicon glyphicon-file"></span>
                            </button>
                            <a href="{{ url('/proyecto/'.$project->id.'/editar') }}" class="btn btn-info btn-sm waves-effect waves-light" title="Editar proyecto">
                                <span class="glyphicon glyphicon-pencil"></span>
                            </a>
                        </div>
                        @include('client.serp.includes.google-results', [
                            'link' => $client->getLinkTo('/proyecto/'.$project->id),
                            'title' => $project->title,
                            'domain' => $client->domain .'/proyectos/'. str_slug($project->title),
                            'description' => $project->description
                        ])
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    @if ($client->hasSection('Artículos'))
        <div class="widget">
            <div class="widget-heading">
                <h3 class="widget-title">Resumen SERP - Artículos</h3>
            </div>
            <div class="widget-body">
                <div class="row">
                    <div class="col-md-12">
                        @foreach ($articles as $article)
                            <div class="btn-group pull-right">
                                <button class="btn btn-primary btn-sm waves-effect waves-light" title="Ver código" data-article="{{ $article->id }}">
                                    <span class="glyphicon glyphicon-file"></span>
                                </button>
                                <a href="{{ url('/articulo/'.$article->id.'/editar') }}" class="btn btn-info btn-sm waves-effect waves-light" title="Editar artículo">
                                    <span class="glyphicon glyphicon-pencil"></span>
                                </a>
                            </div>
                            @include('client.serp.includes.google-results', [
                                'link' => $client->getLinkTo('/blog/'.$article->id),
                                'title' => $project->title,
                                'domain' => $client->domain .'/blog/'. str_slug($article->meta_title),
                                'description' => $article->meta_description
                            ])
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    @endif
</div>

@include('client.serp.includes.general-serp-modals')
@include('client.serp.includes.links-serp-modals')
@include('client.serp.includes.services-serp-modals')
@include('client.serp.includes.projects-serp-modals')

@if ($client->hasSection('Artículos'))
    @include('client.serp.includes.articles-serp-modals')
@endif
@endsection

@section('scripts')
    <script src="{{ asset('vendor/prism/prism.js') }}"></script>
    <script>
        $(function () {
            // show head code
            $(document).on('click', '[data-modal]', onClickModalBtn);
            $(document).on('click', '[data-service]', onClickServiceModalBtn);
            $(document).on('click', '[data-project]', onClickProjectModalBtn);
            $(document).on('click', '[data-article]', onClickArticleModalBtn);
            $(document).on('click', '[data-general]', onClickGeneralModalBtn);

            $('.google-results span.description').each(applyLimitsToDescription);
        });

        function onClickModalBtn() {
            var id = $(this).data('modal');
            $('#modal-code-'+id).modal('show');
        }
        function onClickServiceModalBtn() {
            var id = $(this).data('service');
            $('#modal-service-'+id).modal('show');
        }
        function onClickProjectModalBtn() {
            var id = $(this).data('project');
            $('#modal-project-'+id).modal('show');
        }
        function onClickArticleModalBtn() {
            var id = $(this).data('article');
            $('#modal-article-'+id).modal('show');
        }
        function onClickGeneralModalBtn() {
            var id = $(this).data('general');
            $('#modal-general-'+id).modal('show');
        }

        function applyLimitsToDescription(i, e) {
            var description = $(e).text();
            if (description.length > 156) {
                description = description.substr(0, 152) + ' ...';
            }
            $(e).text(description);
            $(e).slideDown();
        }
    </script>
@endsection
