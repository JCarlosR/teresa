@extends('themes.default.base')

@section('content')

    @if ($me->slides()->exists())
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                @foreach ($me->slides as $key => $slide)
                    <li data-target="#myCarousel" data-slide-to="{{ $key }}" @if($key==0) class="active" @endif></li>
                @endforeach
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                @foreach ($me->slides as $key => $slide)
                <div class="item @if($key==0) active @endif">
                    <img src="{{ asset($slide->imageUrl) }}" alt="{{ $slide->title }}">
                    <div class="carousel-caption">
                        <h3>{{ $slide->title }}</h3>
                        <p>{{ $slide->description }}</p>
                    </div>
                </div>
                @endforeach
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    @else
    <div id="banner" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="jumbotron">
                    <h1>Bienvenido a <span class="bold">{{ $me->name }}</span></h1>
                    <p class="big">{{ $me->description }}</p>
                    <a href="{{ $me->getLinkTo('/proyectos') }}" class="btn btn-banner">Ver proyectos realizados<i class="fa fa-send"></i></a>
                </div>
            </div>
        </div>
    </div>
    @endif

    <div id="about" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="page-title text-center">
                    <h2>Nosotros</h2>
                    @if ($me->about_us)
                        <p>{{ $me->about_us->description }}</p>
                        <p><a href="{{ $me->getLinkTo('/nosotros') }}" class="btn btn-default">Ver más</a></p>
                        <hr class="pg-titl-bdr-btm">
                        <p>{!! $me->about_us->question_1 !!}</p>
                    @else
                        <p><em>Aún no se ha definido contenido para esta sección.</em></p>
                    @endif
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
                                <span class="glyphicon glyphicon-check"></span>
                            </div>

                            <div class="service-text col-md-9">
                                <a href="{{ $me->getLinkTo('/servicio/'.$service->id) }}">
                                    <h3>{{ $service->name }}</h3>
                                </a>
                                <p>
                                    @if (strlen($service->description) > 25)
                                        {{ $service->description }}
                                    @else
                                        Este servicio no cuenta con una descripción.
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
                    <div id="Container">
                        @foreach ($me->projects()->latest()->take(3)->get() as $project)
                            @if ($project->featuredImage)
                            <div class="filimg mix @foreach ($project->services as $service) category-{{ $service->id }}  @endforeach col-md-4 col-sm-4 col-xs-12" data-myorder="{{ $project->id }}">
                                <a href="{{ $me->getLinkTo('/proyecto/'.$project->id) }}">
                                    <img src="{{ $project->featuredImage->fullPath }}" class="img-responsive" title="{{ $project->featuredImage->name }}">
                                    <p class="small">{{ $project->description }}</p>
                                </a>
                            </div>
                            @else
                                <div class="filimg mix @foreach ($project->services as $service) category-{{ $service->id }}  @endforeach col-md-4 col-sm-4 col-xs-12" data-myorder="{{ $project->id }}">
                                    <a href="{{ $me->getLinkTo('/proyecto/'.$project->id) }}">
                                        <img src="//www.technodoze.com/wp-content/uploads/2016/03/default-placeholder.png"
                                             class="img-responsive" title="{{ $project->name }}">
                                        <p class="small">{{ $project->description }}</p>
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
