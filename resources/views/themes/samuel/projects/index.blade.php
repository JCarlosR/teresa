@extends('themes.samuel.base')

@section('content')
    <div class="carousel slide width">


        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <img src="images/photos/1800x1000.gif" alt="Los Angeles">
            </div>

            <div class="hero-abouts "><p>
                    Projects
                </p></div>
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">

        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">

        </a>
    </div>

    <section class="width">
        <div class="row page-block">
            @include('themes.samuel.includes.sub-menu')
            <div class="col-md-9">
                <div class="page-block-inner col-md-12">


                    <div class="text-center cursor">
                        <div class="filter-home">Proyectos:</div>
                        <span class="filter-button" data-filter="all">TODOS</span>
                        @foreach ($me->services as $service)
                        <span class="filter-button" data-filter="{{ $service->id }}">{{ $service->short_name }}</span>
                        @endforeach
                        {{--<span class="filter-button" data-filter="oficinas">OFICINAS</span>--}}
                        {{--<span class="filter-button" data-filter="temporal">VIVIENDA TEMPORAL</span>--}}
                        {{--<span class="filter-button" data-filter="urbana">VIVIERNDA URBANA</span>--}}
                        {{--<span class="filter-button" data-filter="comercio">COMERCIO</span>--}}
                        {{--<span class="filter-button" data-filter="condominios">CONDOMINIOS</span>--}}
                        {{--<span class="filter-button" data-filter="construido">CONSTRUIDOS</span>--}}
                        {{--<span class="filter-button" data-filter="concurso">CONCURSOS</span>--}}

                    </div>
                    <br/>


                    @foreach ($me->projects as $project)
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 @foreach ($project->services as $service) filter {{ $service->id }} @endforeach">

                        <div class="panel panel-default">
                            <div class="panel-body">
                                <a href="{{ $me->getLinkTo('/proyecto/'.$project->id) }}" title="Food Portfolio" class="zoom" data-title="Delicious Food" data-footer="Whatever your desire" data-type="image" data-toggle="lightbox">
                                    @if ($project->featuredImage)
                                    <img src="{{ $project->featuredImage->fullPath }}" alt="{{ $project->name }}"  title="{{ $project->name }}"/>
                                    @endif
                                    <span class="overlay"><i>{{ $project->short_name }}</i></span>
                                </a>
                            </div>

                        </div>
                    </div>
                    @endforeach
                    {{--<div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-12 filter temporal urbana">--}}

                        {{--<div class="panel panel-default">--}}
                            {{--<div class="panel-body">--}}
                                {{--<a href="images/photos/800x400.gif" title="Food Portfolio" class="zoom" data-title="Delicious Food" data-footer="Whatever your desire" data-type="image" data-toggle="lightbox">--}}
                                    {{--<img src="images/photos/800x400.gif" alt="Food Portfolio" />--}}
                                    {{--<span class="overlay"><i>Proyecto</i></span>--}}
                                {{--</a>--}}
                            {{--</div>--}}

                        {{--</div>--}}
                    {{--</div>--}}

                    {{--<div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-12 filter multifamiliares">--}}
                        {{--<div class="panel panel-default">--}}
                            {{--<div class="panel-body">--}}
                                {{--<a href="images/photos/800x400.gif" title="Food Portfolio" class="zoom" data-title="Delicious Food" data-footer="Whatever your desire" data-type="image" data-toggle="lightbox">--}}
                                    {{--<img src="images/photos/800x400.gif" alt="Food Portfolio" />--}}
                                    {{--<span class="overlay"><i>Proyecto</i></span>--}}
                                {{--</a>--}}
                            {{--</div>--}}

                        {{--</div>--}}
                    {{--</div>--}}

                    {{--<div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-12 filter urbana">--}}
                        {{--<div class="panel panel-default">--}}
                            {{--<div class="panel-body">--}}
                                {{--<a href="images/photos/800x400.gif" title="Food Portfolio" class="zoom" data-title="Delicious Food" data-footer="Whatever your desire" data-type="image" data-toggle="lightbox">--}}
                                    {{--<img src="images/photos/800x400.gif" alt="Food Portfolio" />--}}
                                    {{--<span class="overlay"><i>Proyecto</i></span>--}}
                                {{--</a>--}}
                            {{--</div>--}}

                        {{--</div>--}}
                    {{--</div>--}}

                </div>

            </div>
        </div>
    </section>
@endsection
