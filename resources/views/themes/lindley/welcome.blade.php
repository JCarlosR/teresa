@extends('themes.lindley.base')

@section('content')

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item slides active">
                <img src="/themes/lindley/imagenes/fotolia/sliders-lindley-arquitectos-01.jpg" alt="Los Angeles">
                <div class="hero">


                    <!-- Caption Content -->
                    <div class="caption-title">Diseño de Locales Comerciales</div>

                    <div class="caption-text">Diseño integral de Locales Comerciales, construcción, implementación, equipamiento y mantenimiento de todas las instalaciones en general.</div>

                    <a href="#small-dialog" class="button medium  popup-with-zoom-anim">Solicitar Servicio</a>


                </div>

            </div>

            <div class="item slides">
                <img src="/themes/lindley/imagenes/fotolia/sliders-lindley-arquitectos-02.jpg" alt="Chicago">
                <div class="hero">


                    <!-- Caption Content -->
                    <div class="caption-title">Diseño de Locales Comerciales</div>

                    <div class="caption-text">Diseño integral de Locales Comerciales, construcción, implementación, equipamiento y mantenimiento de todas las instalaciones en general.</div>

                    <a href="#small-dialog" class="button medium  popup-with-zoom-anim">Solicitar Servicio</a>


                </div>
            </div>

            <div class="item">
                <img src="/themes/lindley/imagenes/fotolia/sliders-lindley-arquitectos-03.jpg" alt="New York">
                <div class="hero">


                    <!-- Caption Content -->
                    <div class="caption-title">Diseño de Locales Comerciales</div>

                    <div class="caption-text">Diseño integral de Locales Comerciales, construcción, implementación, equipamiento y mantenimiento de todas las instalaciones en general.</div>

                    <a href="#small-dialog" class="button medium  popup-with-zoom-anim">Solicitar Servicio</a>


                </div>
            </div>
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
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="text-center ver-nuevo ">OFICINA DE ARQUITECTURA COMERCIAL RETAIL</h1>

                    @include('themes.lindley.includes.redes-sociales-link')


                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="text-center pa">
                        <h2>servicios destacados</h2>


                    </div>
                    <div class="col-md-4 col-sm-3 col-xs-12 back-services">
                        <i class="reneva icon-1"></i>
                        <div class="left-services">
                            <h4>diseño tiendas </h4>
                            <p>Diseño y remodelación de tiendas y locales para centros comerciales</p>
                        </div>


                    </div>
                    <div class="col-md-4 col-sm-3 col-xs-12 back-services">
                        <i class="reneva icon-35"></i>
                        <div class="left-services">
                            <h4>construcción</h4>
                            <p>Metrados, presupuestos y especialidades para locales comerciales</p>
                        </div>

                    </div>
                    <div class="col-md-4 col-sm-3 col-xs-12 back-services">
                        <i class="reneva icon-31"></i>
                        <div class="left-services">
                            <h4>supervisión</h4>
                            <p>Supervisión de proyectos de arquitectura comercial de terceros</p>
                        </div>

                    </div>


                </div>
                <div class="col-md-12">
                    <div class="col-md-4 col-sm-3 col-xs-12 back-services">
                        <i class="reneva icon-15"></i>
                        <div class="left-services">
                            <h4>implementación</h4>
                            <p>Mobiliario, tabiquería y acabados para locales comerciales</p>
                        </div>

                    </div>
                    <div class="col-md-4 col-sm-3 col-xs-12 back-services">
                        <i class="reneva icon-50"></i>
                        <div class="left-services">
                            <h4>mantenimiento</h4>
                            <p>Mantenimiento y remodelación de tiendas y locales comerciales</p>
                        </div>

                    </div>
                    <div class="col-md-4 col-sm-3 col-xs-12 back-services">
                        <i class="reneva icon-30"></i>
                        <div class="left-services">
                            <h4>indeci</h4>
                            <p>Planos de seguridad y evacuación de tiendas y locales comerciales</p>
                        </div>

                    </div>

                </div>

            </div>

        </div>
    </section>
    <div class="full-width projects-container">

        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <!-- Headline -->
                    <h2>ARQUITECTURA TIENDAS Y LOCALES COMERCIALES</h2>
                    <h3 class="headline centered">PROYECTOS RECIENTES</h3>

                    <!-- Filters -->
                    <div id="filters">
                        <ul class="option-set alt">
                            <li><a href="#filter" class="selected" data-filter="*">TODOS</a></li>
                            <li><a href="#filter" data-filter=".kitchens">TIENDAS</a></li>
                            <li><a href="#filter" data-filter=".bathrooms">OFICINAS</a></li>
                            <li><a href="#filter" data-filter=".bedrooms">SUPERVISIÓN</a></li>
                            <li><a href="#filter" data-filter=".living-rooms">OTROS</a></li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>

                </div>
            </div>
        </div>

        <!-- Projects -->
        <div class="full-width projects">

           @foreach ($me->projects()->take(4) as $projects)
            <a href="{{ $me->getLinkTo('/proyecto/'.$project->id) }}" class="kitchens clickable">
                    @if ($project->featuredImage)
                        <img src="{{ $project->featuredImage->fullPath }}" class="img-responsive" title="{{ $project->featuredImage->name }}">
                    {{--@else--}}
                        {{--<img src="//www.technodoze.com/wp-content/uploads/2016/03/default-placeholder.png" class="img-responsive" alt="">--}}
                    @endif

                <div class="overlay">
                    <div class="overlay-content">
                        <h4>{{ $project->name }}</h4>
                        <span>March 2016</span>
                    </div>
                </div>
                <div class="plus-icon"></div>
            </a>
        @endforeach

            {{--<!-- Item -->--}}
            {{--<a href="single-project-before-after.html" class="bathrooms clickable">--}}
                {{--<img src="/images/latest-project-02.jpg" alt="">--}}
                {{--<div class="overlay">--}}
                    {{--<div class="overlay-content">--}}
                        {{--<h4>Bathroom</h4>--}}
                        {{--<span>February 2016</span>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="plus-icon"></div>--}}
            {{--</a>--}}

            {{--<!-- Item -->--}}
            {{--<a href="single-project-content-right.html" class="kitchens clickable">--}}
                {{--<img src="/images/latest-project-03.jpg" alt="">--}}
                {{--<div class="overlay">--}}
                    {{--<div class="overlay-content">--}}
                        {{--<h4>Kitchen</h4>--}}
                        {{--<span>January 2016</span>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="plus-icon"></div>--}}
            {{--</a>--}}


            {{--<!-- Item -->--}}
            {{--<a href="single-project-before-after.html" class="bathrooms clickable">--}}
                {{--<img src="/images/latest-project-04.jpg" alt="">--}}
                {{--<div class="overlay">--}}
                    {{--<div class="overlay-content">--}}
                        {{--<h4>Bathroom</h4>--}}
                        {{--<span>December 2016</span>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="plus-icon"></div>--}}
            {{--</a>--}}

        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <a href="{{ $me->getLinkTo('/proyecto') }}" class="button medium border">VER TODOS LOS PROYECTOS</a>
                </div>
            </div>
        </div>

    </div>
    {{--<section class="sect-projects pad-t60 pa">--}}
    {{--<div class="container">--}}
    {{--<div class="row">--}}
    {{--<div class="col-md-12 pad-bt40 text-center">--}}

    {{--<h2>ARQUITECTURA TIENDAS Y LOCALES COMERCIALES</h2>--}}
    {{--</div>--}}
    {{--<h3 class=" pad40 text-center">PROYECTOS RECIENTES</h3>--}}
    {{--<ul class="dise-leter text-center">--}}
    {{--<li class="btn active filter-button" data-filter="todos">Todos</li>--}}
    {{--<li class="btn  filter-button" data-filter="tiendas">Tiendas</li>--}}
    {{--<li class="btn  filter-button" data-filter="oficinas">Oficinas</li>--}}
    {{--<li class="btn  filter-button" data-filter="supervision">Supervisión</li>--}}
    {{--<li class="btn  filter-button" data-filter="otros">Otros</li>--}}
    {{--</ul>--}}
    {{--<br>--}}
    {{--<div class="row img-padding pad-bt40">--}}

    {{--<div class="col-lg-4 col-md-4  col-sm-4 col-xs-6 img filter tiendas">--}}
    {{--<img src="/imagenes/prueba.jpg" class="img-responsive">--}}
    {{--</div>--}}

    {{--<div class="col-lg-4 col-md-4 col-sm-4 col-xs-6 img filter oficinas">--}}
    {{--<img src="/imagenes/prueba.jpg" class="img-responsive">--}}
    {{--</div>--}}

    {{--<div class="col-lg-4 col-md-4 col-sm-4 col-xs-6 img filter supervision">--}}
    {{--<img src="/imagenes/prueba.jpg" class="img-responsive">--}}
    {{--</div>--}}

    {{--<div class="col-lg-4 col-md-4 col-sm-4 col-xs-6 img filter tiendas">--}}
    {{--<img src="/imagenes/prueba.jpg" class="img-responsive">--}}
    {{--</div>--}}

    {{--</div>--}}


    {{--</div>--}}
    {{--<div class="pad-bt20">--}}
    {{--<ul>--}}
    {{--<li class="text-center">--}}
    {{--<a href="#small-dialog" class="button border medium ">--}}
    {{--<span>VER TODOS LOS PROYECTOS</span></a>--}}
    {{--</li>--}}
    {{--</ul>--}}
    {{--</div>--}}

    {{--</div>--}}

    {{--</div>--}}
    {{--</section>--}}
    <section class="container">
        <div class="row">
            <div class="col-md-12 border-bt">
                <h2>NUESTRO PROCESO DE TRABAJO</h2>


            </div>
            <div class="col-md-12 sect-proccess text-center pad-t40">
                <div class="col-md-3 col-proccess">
                    <i class="reneva icon-10"></i><br>
                    <span>ETAPA INICIAL</span>
                    <h4>IDEA CLIENTE</h4>
                    <p>Escuchamos, investigamos y documentamos necesidades del cliente y tienda para crear una relación
                        de las necesidades del proyecto. Para luego pasar a la etapa de investigación y diseño.</p>
                </div>
                <div class="col-md-3 col-proccess">
                    <i class="reneva icon-6"></i><br>
                    <span>SEGUNDA ETAPA</span>
                    <h4>PROPUESTA INICIAL</h4>
                    <p>Es aquí donde el cliente recibe el anteproyecto arquitectura de la tienda con diversas
                        aplicaciones informáticas especializadas en arquitectura retail. Es la presentación inicial y
                        estética de la tienda o local comercial.</p>
                </div>
                <div class="col-md-3 col-proccess">
                    <i class="reneva icon-42"></i><br>
                    <span>TERCERA ETAPA</span>
                    <h4>CONSTRUCCIÓN</h4>
                    <p>Organización y manejo de todos los participantes en la construcción de un local comercial o
                        tienda en centros comerciales, donde la función de Lindley Arquitectos es entregar el proyecto
                        con los altos estándares de calidad que ofrecemos.</p>
                </div>
                <div class="col-md-3 col-proccess">
                    <i class="reneva icon-16"></i><br>
                    <span>ETAPA FINAL</span>
                    <h4>ACABADOS</h4>
                    <p>Es la etapa donde se definen los acabados constructivos y la ubicación de los productos en
                        exhibición para la tienda o local comercial. Normalmente después de esta etapa se entrega la
                        tienda al cliente.</p>
                </div>

            </div>

        </div>

    </section>

    <section id="testimonials">
        <div class="container">
            <div class='row'>
                <div class=' text-center pad60  col-md-12'>
                    <div class="carousel slide" data-ride="carousel" id="quote-carousel">
                        <!-- Bottom Carousel Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#quote-carousel" data-slide-to="0" class="active"></li>
                            <li data-target="#quote-carousel" data-slide-to="1"></li>
                            <li data-target="#quote-carousel" data-slide-to="2"></li>
                        </ol>

                        <!-- Carousel Slides / Quotes -->
                        <div class="carousel-inner">

                            <!-- Quote 1 -->
                            <div class="item active">

                                <div class="row">
                                    <div class="col-md-12">
                                        <div  class="par-testimonial">
                                            <p>Somos una empresa especializada en brindar las mejores soluciones de Diseño y elaboración de proyectos, proponiendo materiales innovadores y de calidad.</p>
                                            <small>Diseño, Materiales y Calidad</small>
                                        </div>

                                    </div>
                                </div>

                            </div>
                            <!-- Quote 2 -->
                            <div class="item">

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="par-testimonial" >
                                            <p>Nuestra prioridad es lograr mantener los estándares de calidad e imagen corporativa de su empresa, en espacios personalizados, satisfaciendo sus necesidades y logrando confort, buen acabado, tecnología y perfección, para que su trabajo y día a día sean mucho más placenteros.</p>
                                            <small>Calidad e Imágen</small>
                                        </div>

                                    </div>
                                </div>

                            </div>
                            <!-- Quote 3 -->
                            <div class="item">

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="par-testimonial">
                                            <p>Hemos realizado más de 45 locales y tiendas para centros comerciales, ahora con un dominio pleno en la especialidad del retail en la ciudad de Lima y en todo el Perú.</p>
                                            <small>Lindley Arquitectos</small>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>

                        {{--<!-- Carousel Buttons Next/Prev -->--}}
                        {{--<a data-slide="prev" href="#quote-carousel" class="left carousel-control"><i class="fa fa-chevron-left"></i></a>--}}
                        {{--<a data-slide="next" href="#quote-carousel" class="right carousel-control"><i class="fa fa-chevron-right"></i></a>--}}
                    </div>
                </div>
            </div>

        </div>
    </section>
    <section >
        <div class="container">
            <div class="row">
                <div class="col-md-12 border-bt pad-t40">
                    <h2 class="text-center">NUESTROS CLIENTES</h2>

                </div>
                @include('themes.lindley.includes.clients-carousel')

            </div>

        </div>

    </section>

@endsection

