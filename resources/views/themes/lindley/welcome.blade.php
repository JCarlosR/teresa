@extends('themes.lindley.base')

@section('content')

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
                <div class="item slides @if($key==0) active @endif">
                    <img src="{{ asset($slide->imageUrl) }}" alt="{{ $slide->title }}" title="{{ $slide->title }}">
                    <div class="hero">


                        <!-- Caption Content -->
                        <div class="caption-title">{{ $slide->title }}</div>

                        <div class="caption-text">{{ $slide->description }}</div>

                        <a href="#small-dialog" class="button medium  popup-with-zoom-anim" title="Solicitar Servicio de Lindley Arquitectos">Solicitar Servicio</a>


                    </div>

                </div>
            @endforeach
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev" title="Ir a Slider Anterior">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next" title="Ir a Slider Siguiente">
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
                        <img src="/themes/lindley/imagenes/iconos/icono-tiendas.png" alt="Diseño de Tiendas" title="Diseño de Tiendas">
                        {{--<i class="reneva icon-1"></i>--}}
                        <div class="left-services">
                            <h4>diseño tiendas </h4>
                            <p>Diseño y remodelación de tiendas y locales para centros comerciales</p>
                        </div>


                    </div>
                    <div class="col-md-4 col-sm-3 col-xs-12 back-services">
                        <img src="/themes/lindley/imagenes/iconos/icono-construccion.png" alt="Construcción" title="Construcción">
                        {{--<i class="reneva icon-35"></i>--}}
                        <div class="left-services">
                            <h4>construcción</h4>
                            <p>Metrados, presupuestos y especialidades para locales comerciales</p>
                        </div>

                    </div>
                    <div class="col-md-4 col-sm-3 col-xs-12 back-services">
                        <img src="/themes/lindley/imagenes/iconos/icono-supervision.png" alt="Supervisión" title="Supervisión">
                        {{--<i class="reneva icon-31"></i>--}}
                        <div class="left-services">
                            <h4>supervisión</h4>
                            <p>Supervisión de proyectos de arquitectura comercial de terceros</p>
                        </div>

                    </div>


                </div>
                <div class="col-md-12">
                    <div class="col-md-4 col-sm-3 col-xs-12 back-services">
                        <img src="/themes/lindley/imagenes/iconos/icono-implementacion.png" alt="Implementación" title="Implmentación">
                        {{--<i class="reneva icon-15"></i>--}}
                        <div class="left-services">
                            <h4>implementación</h4>
                            <p>Mobiliario, tabiquería y acabados para locales comerciales</p>
                        </div>

                    </div>
                    <div class="col-md-4 col-sm-3 col-xs-12 back-services">
                        <img src="/themes/lindley/imagenes/iconos/icono-mantenimiento.png" alt="Mantenimiento" title="Mantenimiento">
                        {{--<i class="reneva icon-50"></i>--}}
                        <div class="left-services">
                            <h4>mantenimiento</h4>
                            <p>Mantenimiento y remodelación de tiendas y locales comerciales</p>
                        </div>

                    </div>
                    <div class="col-md-4 col-sm-3 col-xs-12 back-services">
                        <img src="/themes/lindley/imagenes/iconos/icono-indeci.png" alt="Indice" title="Indice">
                        {{--<i class="reneva icon-30"></i>--}}
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



                </div>
            </div>
        </div>

        <!-- Projects -->
        <div class="full-width projects">

           @foreach ($me->projects()->take(4)->get() as $project)
            <a href="{{ $me->getLinkTo('/proyecto/'.$project->id) }}" title="{{ $project->featuredImage->name }}" class="kitchens clickable">
                    @if ($project->featuredImage)
                        <img src="{{ $project->featuredImage->fullPath }}" class="img-responsive" title="{{ $project->featuredImage->name }}" alt="{{ $project->featuredImage->name }}">
                    {{--@else--}}
                        {{--<img src="//www.technodoze.com/wp-content/uploads/2016/03/default-placeholder.png" class="img-responsive" alt="">--}}
                    @endif

                <div class="overlay">
                    <div class="overlay-content">
                        <h4>{{ $project->name }}</h4>
                        <span></span>
                    </div>
                </div>
                <div class="plus-icon"></div>
            </a>
        @endforeach
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <a href="{{ $me->getLinkTo('/proyecto') }}" class="button medium border" title="Ir a página de Todos los Proyectos">VER TODOS LOS PROYECTOS</a>
                </div>
            </div>
        </div>

    </div>

    <section class="container">
        <div class="row">
            <div class="col-md-12 border-bt">
                <h2>NUESTRO PROCESO DE TRABAJO</h2>


            </div>
            <div class="col-md-12 sect-proccess text-center pad-t40">
                <div class="col-md-3 col-proccess">
                    <img src="/themes/lindley/imagenes/iconos/icono1.png" alt="Etapa Inicial" title="Etapa Inicial"><br>
                    {{--<i class="fa fa-pencil" aria-hidden="true"></i>--}}
                    {{--<i class="reneva icon-10"></i><br>--}}
                    <span>ETAPA INICIAL</span>
                    <h4>IDEA CLIENTE</h4>
                    <p>Escuchamos, investigamos y documentamos necesidades del cliente y tienda para crear una relación
                        de las necesidades del proyecto. Para luego pasar a la etapa de investigación y diseño.</p>
                </div>
                <div class="col-md-3 col-proccess">
                    <img src="/themes/lindley/imagenes/iconos/icono2.png" alt="Segunda Etapa" title="Segunda Etapa"><br>
                    {{--<i class="fa fa-handshake-o"></i>--}}
                    {{--<i class="reneva icon-6"></i><br>--}}
                    <span>SEGUNDA ETAPA</span>
                    <h4>PROPUESTA INICIAL</h4>
                    <p>Es aquí donde el cliente recibe el anteproyecto arquitectura de la tienda con diversas
                        aplicaciones informáticas especializadas en arquitectura retail. Es la presentación inicial y
                        estética de la tienda o local comercial.</p>
                </div>
                <div class="col-md-3 col-proccess">
                    <img src="/themes/lindley/imagenes/iconos/icono3.png" alt="Tercera Etapa" title="Tercera Etapa"><br>
                    {{--<i class="reneva icon-42"></i><br>--}}
                    <span>TERCERA ETAPA</span>
                    <h4>CONSTRUCCIÓN</h4>
                    <p>Organización y manejo de todos los participantes en la construcción de un local comercial o
                        tienda en centros comerciales, donde la función de Lindley Arquitectos es entregar el proyecto
                        con los altos estándares de calidad que ofrecemos.</p>
                </div>
                <div class="col-md-3 col-proccess">
                    <img src="/themes/lindley/imagenes/iconos/icono4.png" alt="Etapa Final" title="Etapa Final"><br>
                    {{--<i class="reneva icon-16"></i><br>--}}
                    <span>ETAPA FINAL</span>
                    <h4>ACABADOS</h4>
                    <p>Es la etapa donde se definen los acabados constructivos y la ubicación de los productos en
                        exhibición para la tienda o local comercial. Normalmente después de esta etapa se entrega la
                        tienda al cliente.</p>
                </div>

            </div>

        </div>

    </section>
    <div id="carousel">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="quote"><i class="fa fa-quote-left fa-4x"></i></div>
                    <div class="carousel slide" id="fade-quote-carousel" data-ride="carousel" data-interval="3000">
                        <!-- Carousel indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#fade-quote-carousel" data-slide-to="0" class="active"></li>
                            <li data-target="#fade-quote-carousel" data-slide-to="1"></li>
                            <li data-target="#fade-quote-carousel" data-slide-to="2"></li>
                        </ol>
                        <!-- Carousel items -->
                        <div class="carousel-inner pad21">
                            <div class="active item">
                                <blockquote>
                                    <p>Somos una empresa especializada en brindar las mejores soluciones de Diseño y elaboración de proyectos, proponiendo materiales innovadores y de calidad.</p>
                                    <small>Diseño, Materiales y Calidad</small>
                                </blockquote>
                                {{--<div class="profile-circle" style="background-color: rgba(0,0,0,.2);"></div>--}}
                            </div>
                            <div class="item">
                                <blockquote>
                                    <p>Nuestra prioridad es lograr mantener los estándares de <strong>calidad e imagen </strong> corporativa de su empresa, en espacios personalizados, satisfaciendo sus necesidades y logrando confort, buen acabado, tecnología y perfección, para que su trabajo y día a día sean mucho más placenteros.</p>
                                    <small>Calidad e Imágen</small>
                                </blockquote>
                                {{--<div class="profile-circle" style="background-color: rgba(77,5,51,.2);"></div>--}}
                            </div>
                            <div class="item">
                                <blockquote>
                                    <p><u>Hemos realizado más de 45 locales y tiendas para centros comerciales</u>, ahora con un dominio pleno en la especialidad del retail en la ciudad de Lima y en todo el Perú.</p>
                                    <small>Lindley Arquitectos</small>
                                </blockquote>
                                {{--<div class="profile-circle" style="background-color: rgba(145,169,216,.2);"></div>--}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="pad60">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="border-bt-3">
                        <p>ALGUNOS DE NUESTROS CLIENTES, <span class="color-span"> ÚNETE A ELLOS!</span></p>
                    </div>
                </div>
            </div>
            @include('themes.lindley.includes.clients-carousel')

        </div>

    </div>

@endsection

