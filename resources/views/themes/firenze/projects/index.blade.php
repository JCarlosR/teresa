@extends('themes.default.base')

@section('content')
    <!--CTA1 START-->
    <div class="cta-1">
        <div class="container">
            <div class="row text-center white">
                <h1 class="cta-title">Proyectos</h1>
                <p class="cta-sub-title">Conoce más sobre nuestros proyectos realizados</p>
            </div>
        </div>
    </div>
    <!--CTA1 END-->

    <div id="portfolio" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="page-title text-center">
                    <h2>Nuestros proyectos</h2>
                    <p>{{ $me->projects_description }}</p>
                    <p><a href="{{ $me->getLinkTo('/proyectos') }}" class="btn btn-default">Ver más</a></p>
                    <hr class="pg-titl-bdr-btm">
                </div>
                <div class="port-sec">
                    <div class="col-md-12 fil-btn text-center">
                        <div class="filter wrk-title active" data-filter="all">Ver todos</div>
                        @foreach ($me->services as $service)
                            <div class="filter wrk-title" data-filter=".category-{{ $service->id }}">
                                {{ $service->name }}
                            </div>
                        @endforeach
                    </div>
                    <div id="Container">
                        @foreach ($me->projects as $project)
                            @if ($project->featuredImage)
                                <div class="filimg mix @foreach ($project->services as $service) category-{{ $service->id }}  @endforeach col-md-4 col-sm-4 col-xs-12" data-myorder="{{ $project->id }}">
                                    <h4 class="text-center">{{ $project->name }}</h4>
                                    <a href="{{ $me->getLinkTo('/proyecto/'.$project->id) }}">
                                        <img src="{{ $project->featuredImage->fullPath }}" class="img-responsive" title="{{ $project->featuredImage->name }}">
                                    </a>
                                    <p class="text-center">{{ $project->description }}</p>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
