@extends('themes.samuel.base')

@section('content')


    <div id="myCarousel" class="carousel slide " data-ride="carousel">
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
                    <img src="{{ asset($slide->imageUrl) }}" alt="{{ $slide->title }}" title="{{ $slide->title }}">
                </div>
                <div class="hero">
                    <p>HTML VERSION
                    </p>
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
    <section class="width">
        <div class="">
            <div class="row page-block">
                <div class="width-full">
                    @include('themes.samuel.includes.sub-menu')
                    <div class="col-md-9 col-sm-12 col-xs-12">
                        <div class="main-2">
                            <div class="col-md-12">
                                <h2 class="text-center">Nuestros Servicios</h2>
                                <hr class="border text-center">
                                <div class="main-icon-container">
                                    <!-- ICON BLOCK -->
                                    @foreach ($me->services()->take(3)->get() as $service)
                                        <div class=" col-md-4 col-sm-4 col-xs-12 icon-block">
                                            <div class="icon-container">
                                                <a href="{{ $me->getLinkTo('/servicio/'.$service->id) }}" title="">
                                                    <i class="fa fa-cogs" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                            <div class="icon-text h3-home">
                                                <h3>{{ $service->name }}</h3>
                                                <p>{{ $service->description }}</p>
                                            </div>

                                        </div>
                                    @endforeach

                                    {{--<!-- ICON BLOCK -->--}}
                                    {{--<div class="col-md-4 col-sm-4 col-xs-12 icon-block">--}}
                                    {{--<div class="icon-container">--}}
                                    {{--<a href="#"><i class="flaticon-armchair4"></i></a>--}}
                                    {{--</div>--}}
                                    {{--<div class="icon-text">--}}
                                    {{--<h3>Diseño de Edificios Multifamiliares</h3>--}}
                                    {{--<p>Voluptate illum dolore ita ipsum, quid deserunt singulis, labore admodum--}}
                                    {{--ita--}}
                                    {{--multos malis ea nam nam tamen fore amet. Vidisse quid incurreret ut ut--}}
                                    {{--possumus.</p>--}}
                                    {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<!-- ICON BLOCK -->--}}
                                    {{--<div class="col-md-4 col-sm-4 col-xs-12 icon-block">--}}
                                    {{--<div class="icon-container">--}}
                                    {{--<a href="#"><i class="flaticon-click5"></i></a>--}}
                                    {{--</div>--}}
                                    {{--<div class="icon-text">--}}
                                    {{--<h3>Diseño de Edificios Corporativos</h3>--}}
                                    {{--<p>Voluptate illum dolore ita ipsum, quid deserunt singulis, labore admodum--}}
                                    {{--ita--}}
                                    {{--multos malis ea nam nam tamen fore amet. Vidisse quid incurreret ut ut--}}
                                    {{--possumus.</p>--}}
                                    {{--</div>--}}
                                    {{--</div>--}}
                                </div>
                                <div class="col-md-12 text-center">
                                    <div >
                                        <a href=""
                                           class="readmore-button">Leer más</a>
                                    </div>

                                </div>
                            </div>

                            <hr>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div>
                                    <h2>Nuestros Proyectos</h2>
                                    <p>{{ $me->projects_description }}</p>
                                </div>
                                <div id="carousel-example-generic" class="carousel slide " data-ride="carousel">
                                    <!-- Wrapper for slides -->
                                    <div class="carousel-inner">
                                        @foreach ($me->projects->chunk(2) as $key => $group)
                                            <div class="item  @if ($key==0) active @endif">
                                                <div class="row">
                                                    @foreach ($group as $project)
                                                        <div class="col-md-6 col-sm-6 col-xs-12 width-mediun">
                                                            <div class="owl-item active ">
                                                                <figure class="oriel-carousel">
                                                                    <!-- POST IMAGE -->
                                                                    <a href="single-project.html" class="ext-link">
                                                                        @if ($project->featuredImage)
                                                                            <img src="{{ $project->featuredImage->fullPath }}"
                                                                                 class="img-responsive"
                                                                                 alt="{{ $project->name }}">
                                                                        @else
                                                                            <img src="//www.technodoze.com/wp-content/uploads/2016/03/default-placeholder.png"
                                                                                 class="img-responsive"
                                                                                 title="{{ $project->name }}">
                                                                        @endif
                                                                    </a>
                                                                    <!-- POST CONTENT -->
                                                                    <figcaption>
                                                                        <div class="h3-home">
                                                                            <h3>
                                                                                <a href="{{ $me->getLinkTo('/proyecto/'.$project->id) }}">{{ $project->name }}</a>
                                                                            </h3>
                                                                            <hr>
                                                                            <p>{{ $project->description }}</p>
                                                                            <a href="{{ $me->getLinkTo('/proyecto/'.$project->id) }}"
                                                                               class="readmore-button">Leer más</a>
                                                                        </div>
                                                                    </figcaption>
                                                                </figure>

                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        @endforeach

                                    </div>
                                    <div class="col-lg-offset-9 col-md-3 media-right">
                                        <!-- Controls -->
                                        <div class="controls pull-right ">
                                            <a class="left  btn "
                                               href="#carousel-example-generic"
                                               data-slide="prev"><i class="fa fa-chevron-left"></i></a>
                                            <a class="right  btn" href="#carousel-example-generic"
                                               data-slide="next"><i class="fa fa-chevron-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>

                            <div class="row">
                                <div class="col-md-12">
                                    @if ($me->about_us)


                                        <p>{!! $me->about_us->question_1 !!}</p>
                                        <a href="{{ $me->getLinkTo('/nosotros') }}"
                                           class="readmore-button">Leer más</a>
                                    @else
                                        <p><em>Aún no se ha definido contenido para esta sección.</em></p>
                                    @endif
                                </div>
                            </div>

                            {{--<h3>Lo que Dicen Nuetsros Clientes de Nosotros</h3>--}}
                            {{--<!-- TESTIMONIALS -->--}}
                            {{--<div class="col-md-12">--}}

                            {{--<div class="carousel slide" id="fade-quote-carousel" data-ride="carousel"--}}
                            {{--data-interval="3000">--}}
                            {{--<!-- Carousel indicators -->--}}
                            {{--<ol class="carousel-indicators  owl-controls">--}}
                            {{--<li data-target="#fade-quote-carousel color " data-slide-to="0"--}}
                            {{--class="active"></li>--}}
                            {{--<li data-target="#fade-quote-carousel color " data-slide-to="1"></li>--}}
                            {{--<li data-target="#fade-quote-carousel color " data-slide-to="2"></li>--}}
                            {{--</ol>--}}
                            {{--<!-- Carousel items -->--}}
                            {{--<div class="carousel-inner">--}}
                            {{--<div class="active item">--}}
                            {{--<div class="back-testimonials testimonial">--}}
                            {{--<p class="testimonial-text">Commodo aute singulis proident eu se--}}
                            {{--laboris. Malis iudicem ne singulis, nisi ita aut summis laboris. Ex--}}
                            {{--ut varias pariatur, laboris irure irure consequat magna, aliqua--}}
                            {{--mandaremus qui varias labore ubi aut illum ipsum fore iudicem.--}}
                            {{--Commodo aute singulis proident eu se laboris. Malis iudicem ne--}}
                            {{--singulis, nisi ita aut summis laboris. Ex ut varias pariatur,--}}
                            {{--laboris irure irure consequat magna, aliqua mandaremus qui varias--}}
                            {{--labore ubi aut illum ipsum fore iudicem.</p>--}}
                            {{--<div class="testimonial-image">--}}
                            {{--<img src="images/photos/85x85.gif" alt=""/>--}}
                            {{--<h5 class="testimonial-name">John Doe</h5>--}}
                            {{--<p>Themeforest</p>--}}
                            {{--</div>--}}

                            {{--</div>--}}
                            {{--<div class="profile-circle" style="background-color: rgba(0,0,0,.2);"></div>--}}
                            {{--</div>--}}
                            {{--<div class="item">--}}
                            {{--<div class="back-testimonials testimonial">--}}
                            {{--<p class="testimonial-text">Commodo aute singulis proident eu se--}}
                            {{--laboris. Malis iudicem ne singulis, nisi ita aut summis laboris. Ex--}}
                            {{--ut varias pariatur, laboris irure irure consequat magna, aliqua--}}
                            {{--mandaremus qui varias labore ubi aut illum ipsum fore iudicem.--}}
                            {{--Commodo aute singulis proident eu se laboris. Malis iudicem ne--}}
                            {{--singulis, nisi ita aut summis laboris. Ex ut varias pariatur,--}}
                            {{--laboris irure irure consequat magna, aliqua mandaremus qui varias--}}
                            {{--labore ubi aut illum ipsum fore iudicem.</p>--}}
                            {{--<div class="testimonial-image">--}}
                            {{--<img src="images/photos/85x85.gif" alt=""/>--}}
                            {{--<h5 class="testimonial-name">John Doe</h5>--}}
                            {{--<p>Themeforest</p>--}}
                            {{--</div>--}}

                            {{--</div>--}}
                            {{--<div class="profile-circle"--}}
                            {{--style="background-color: rgba(77,5,51,.2);"></div>--}}
                            {{--</div>--}}
                            {{--<div class="item">--}}
                            {{--<div class="back-testimonials testimonial">--}}
                            {{--<p class="testimonial-text">Commodo aute singulis proident eu se--}}
                            {{--laboris. Malis iudicem ne singulis, nisi ita aut summis laboris. Ex--}}
                            {{--ut varias pariatur, laboris irure irure consequat magna, aliqua--}}
                            {{--mandaremus qui varias labore ubi aut illum ipsum fore iudicem.--}}
                            {{--Commodo aute singulis proident eu se laboris. Malis iudicem ne--}}
                            {{--singulis, nisi ita aut summis laboris. Ex ut varias pariatur,--}}
                            {{--laboris irure irure consequat magna, aliqua mandaremus qui varias--}}
                            {{--labore ubi aut illum ipsum fore iudicem.</p>--}}
                            {{--<div class="testimonial-image">--}}
                            {{--<img src="images/photos/85x85.gif" alt=""/>--}}
                            {{--<h5 class="testimonial-name">John Doe</h5>--}}
                            {{--<p>Themeforest</p>--}}
                            {{--</div>--}}

                            {{--</div>--}}
                            {{--<div class="profile-circle"--}}
                            {{--style="background-color: rgba(145,169,216,.2);"></div>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--</div>--}}

                            <hr>
                            <div class="col-md-12">

                                <div>
                                    <h3>
                                        Carousel Product Cart Slider</h3>
                                </div>


                                <div id="carousel-example" class="carousel slide " data-ride="carousel">
                                    <!-- Wrapper for slides -->
                                    <div class="carousel-inner left-carousel">
                                        <div class="item active">
                                            <div class="row">
                                                <div class="col-md-4 col-sm-4 col-xs-12 width-mediun">
                                                    <div class="col-item">
                                                        <figure class="oriel-carousel">
                                                            <!-- POST IMAGE -->
                                                            <a href="single-project.html" class="ext-link">
                                                                <img src="images/photos/600x400.gif"
                                                                     class="img-responsive" alt="">
                                                            </a>
                                                            <!-- POST CONTENT -->
                                                            <figcaption>
                                                                <div>
                                                                    <h5><a href="single-project.html">Project 2</a></h5>
                                                                    <hr>
                                                                    <p>Lorem ipsum dolor sit amet, consectetuer
                                                                        adipiscing elit, sed diam nonummy nibh euismod
                                                                        tincidunt ut laoreet dolore magna aliquam
                                                                        erat…</p>
                                                                    <a href="single-project.html"
                                                                       class="readmore-button">View Project</a>
                                                                </div>
                                                            </figcaption>
                                                        </figure>

                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-sm-4 col-xs-12 width-mediun">
                                                    <div class="col-item">
                                                        <figure class="oriel-carousel">
                                                            <!-- POST IMAGE -->
                                                            <a href="single-project.html" class="ext-link">
                                                                <img src="images/photos/600x400.gif"
                                                                     class="img-responsive" alt="">
                                                            </a>
                                                            <!-- POST CONTENT -->
                                                            <figcaption>
                                                                <div>
                                                                    <h5><a href="single-project.html">Project 2</a></h5>
                                                                    <hr>
                                                                    <p>Lorem ipsum dolor sit amet, consectetuer
                                                                        adipiscing elit, sed diam nonummy nibh euismod
                                                                        tincidunt ut laoreet dolore magna aliquam
                                                                        erat…</p>
                                                                    <a href="single-project.html"
                                                                       class="readmore-button">View Project</a>
                                                                </div>
                                                            </figcaption>
                                                        </figure>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-sm-4 col-xs-12 width-mediun">
                                                    <div class="col-item">
                                                        <figure class="oriel-carousel">
                                                            <!-- POST IMAGE -->
                                                            <a href="single-project.html" class="ext-link">
                                                                <img src="images/photos/600x400.gif"
                                                                     class="img-responsive" alt="">
                                                            </a>
                                                            <!-- POST CONTENT -->
                                                            <figcaption>
                                                                <div>
                                                                    <h5><a href="single-project.html">Project 2</a></h5>
                                                                    <hr>
                                                                    <p>Lorem ipsum dolor sit amet, consectetuer
                                                                        adipiscing elit, sed diam nonummy nibh euismod
                                                                        tincidunt ut laoreet dolore magna aliquam
                                                                        erat…</p>
                                                                    <a href="single-project.html"
                                                                       class="readmore-button">View Project</a>
                                                                </div>
                                                            </figcaption>
                                                        </figure>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="row">
                                                <div class="col-md-4 col-sm-4 col-xs-12 width-mediun">
                                                    <div class="col-item">
                                                        <figure class="oriel-carousel">
                                                            <!-- POST IMAGE -->
                                                            <a href="single-project.html" class="ext-link">
                                                                <img src="images/photos/600x400.gif"
                                                                     class="img-responsive" alt="">
                                                            </a>
                                                            <!-- POST CONTENT -->
                                                            <figcaption>
                                                                <div>
                                                                    <h5><a href="single-project.html">Project 2</a></h5>
                                                                    <hr>
                                                                    <p>Lorem ipsum dolor sit amet, consectetuer
                                                                        adipiscing elit, sed diam nonummy nibh euismod
                                                                        tincidunt ut laoreet dolore magna aliquam
                                                                        erat…</p>
                                                                    <a href="single-project.html"
                                                                       class="readmore-button">View Project</a>
                                                                </div>
                                                            </figcaption>
                                                        </figure>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-sm-4 col-xs-12 width-mediun">
                                                    <div class="col-item">
                                                        <figure class="oriel-carousel">
                                                            <!-- POST IMAGE -->
                                                            <a href="single-project.html" class="ext-link">
                                                                <img src="images/photos/600x400.gif"
                                                                     class="img-responsive" alt="">
                                                            </a>
                                                            <!-- POST CONTENT -->
                                                            <figcaption>
                                                                <div>
                                                                    <h5><a href="single-project.html">Project 2</a></h5>
                                                                    <hr>
                                                                    <p>Lorem ipsum dolor sit amet, consectetuer
                                                                        adipiscing elit, sed diam nonummy nibh euismod
                                                                        tincidunt ut laoreet dolore magna aliquam
                                                                        erat…</p>
                                                                    <a href="single-project.html"
                                                                       class="readmore-button">View Project</a>
                                                                </div>
                                                            </figcaption>
                                                        </figure>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-sm-4 col-xs-12 width-mediun">
                                                    <div class="col-item">
                                                        <figure class="oriel-carousel">
                                                            <!-- POST IMAGE -->
                                                            <a href="single-project.html" class="ext-link">
                                                                <img src="images/photos/600x400.gif"
                                                                     class="img-responsive" alt="">
                                                            </a>
                                                            <!-- POST CONTENT -->
                                                            <figcaption>
                                                                <div>
                                                                    <h5><a href="single-project.html">Project 2</a></h5>
                                                                    <hr>
                                                                    <p>Lorem ipsum dolor sit amet, consectetuer
                                                                        adipiscing elit, sed diam nonummy nibh euismod
                                                                        tincidunt ut laoreet dolore magna aliquam
                                                                        erat…</p>
                                                                    <a href="single-project.html"
                                                                       class="readmore-button">View Project</a>
                                                                </div>
                                                            </figcaption>
                                                        </figure>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-md-offset-9">
                                    <!-- Controls -->
                                    <div class="controls pull-right ">
                                        <a class="left fa fa-chevron-left btn " href="#carousel-example"
                                           data-slide="prev"></a><a class="right fa fa-chevron-right btn "
                                                                    href="#carousel-example"
                                                                    data-slide="next"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @include('themes.samuel.includes.sub-menu-movil')
                </div>

            </div>
        </div>
    </section>

@endsection
