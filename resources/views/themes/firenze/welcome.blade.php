@extends('themes.default.base')

@section('content')
    <!--BANNER START-->
    <div id="banner" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="jumbotron">
                    <h1 class="small">Bienvenido a <span class="bold">{{ $me->name }}</span></h1>
                    <p class="big">{{ $me->description }}</p>
                    <a href="{{ $me->getLinkTo('/proyectos') }}" class="btn btn-banner">Ver proyectos realizados<i class="fa fa-send"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!--BANNER END-->

    <div id="about" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="page-title text-center">
                    <h2>Nosotros</h2>
                    <p>{{ $me->about_us }}</p>
                    <p><a href="{{ $me->getLinkTo('/nosotros') }}" class="btn btn-default">Ver más</a></p>
                </div>
            </div>
        </div>
    </div>

    <!--SERVICE START-->
    <div id="service" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="page-title text-center">
                    <h2>Nuestros servicios</h2>
                    <p>{{ $me->services_description }}</p>
                    <p><a href="{{ $me->getLinkTo('/servicios') }}" class="btn btn-default">Ver más</a></p>
                    <hr class="pg-titl-bdr-btm">
                </div>
                @foreach ($services as $service)
                    <div class="col-md-4">
                        <div class="service-box">
                            <div class="service-icon col-md-3">

                            </div>

                            <div class="service-text col-md-9">
                                <a href="{{ $me->getLinkTo('/servicio/'.$service->id) }}">
                                    <h3>{{ $service->name }}</h3>
                                </a>
                                <p>
                                    @if (strlen($service->description) > 25)
                                        {{ $service->description }}
                                    @else
                                        Sin descripción: doloremque laudantium, rem aperiam, eaque ipsa quae ab veritatis.
                                    @endif
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!--SERVICE END-->

    <!--PORTFOLIO START-->
    <div id="portfolio" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="page-title text-center">
                    <h2>Proyectos recientes</h2>
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
                                <a href="{{ $me->getLinkTo('/proyecto/'.$project->id) }}">
                                    <img src="{{ $project->featuredImage->fullPath }}" class="img-responsive" title="{{ $project->featuredImage->name }}">
                                </a>
                            </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--PORTFOLIO END-->

    <div class="cta2">
        <div class="container">
            <div class="row white text-center">
                <p class="fnt-24">Confían en nosotros</p>
                @foreach ($me->customers as $customer)
                    <a href="{{ $customer->url ?: '#' }}" target="_blank" title="Enlace al cliente {{ $customer->name }}">
                        <img src="/images/customers/{{ $customer->image }}" alt="Imagen del cliente {{ $customer->name }}" title="Cliente {{ $customer->name }} de {{ $me->trade_name }}">
                    </a>
                @endforeach
            </div>
        </div>
    </div>
    <!--CTA2 END-->
@endsection
