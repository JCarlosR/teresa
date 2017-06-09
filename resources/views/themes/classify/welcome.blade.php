@extends('themes.classify.base')

@section('content')

            <!-- START SLIDER -->
            <section class="clearfix">
                <div  id="mega-slider" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#mega-slider" data-slide-to="0" class="active"></li>
                        <li data-target="#mega-slider" data-slide-to="1"></li>
                        <li data-target="#mega-slider" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner" role="listbox">

                        <div class="item active beactive">
                        <img src="/themes/classify/imagenes/slider/slide-01.jpg" alt=" 1.8.10 consultores arquitectura y construcción" title="1.8.10 consultores arquitectura y construcción">
                            <div class="carousel-caption">
                                <h2>Arquitectura y Construcción</h2>
                                <p>Servicios profesionales de Construcción y Arquitectura</p>
                            </div>
                        </div>

                        <div class="item">
                            <img src="/themes/classify/imagenes/slider/slide-02.jpg" alt="1.8.10 consultores arquitectura y construcción" title="1.8.10 consultores arquitectura y construcción">
                            <div class="carousel-caption">
                                <h2>1.8.10 Consultores SAC</h2>
                                <p>Servicios profesionales de Construcción y Arquitectura</p>
                            </div>
                        </div>
                        <div class="item">
                            <img src="/themes/classify/imagenes/slider/slide-03.jpg" alt="1.8.10 consultores arquitectura y construcción" title="1.8.10 consultores arquitectura y construcción">
                            <div class="carousel-caption">
                                <h2>Servicios profesionales</h2>
                                <p>Servicios profesionales de Construcción y Arquitectura</p>
                            </div>
                        </div>

                    </div>
                    <!-- Controls -->
                    <a class="left carousel-control" href="#mega-slider" role="button" data-slide="prev">
                    </a>
                    <a class="right carousel-control" href="#mega-slider" role="button" data-slide="next">
                    </a>

                </div>

            </section>

            <section class="home-main-contant-style bg-white">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 welcome-img">
                            <img class="img-responsive" src="/themes/classify/imagenes/home/estructura-home.jpg" alt="1.8.10 Consultores" title="1.8.10 Consultores">
                        </div>

                        <div class="col-md-6">

                            <h5>Bienvenidos a nuestro website</h5>
                            <h1 class="mb15"><strong>Arquitectura y Construcción</strong></h1>
                            <div>
                              <span class='st_facebook_large' displayText='Facebook' ></span>
                              <span class='st_googleplus_large' displayText='Google +' ></span>
                              <span class='st_linkedin_large' displayText='LinkedIn' ></span>
                              <span class='st_twitter_large' displayText='Tweet' ></span>
                              <span class='st_pinterest_large' displayText='Pinterest' ></span>
                              <span class='st_fblike_large' displayText='Facebook Like' ></span>
                            </div>
                            <p>La arquitectura es el arte y la técnica de proyectar, diseñar, construir y modificar el hábitat</p><br>
                            <p class="mb15">Los arquitectos no sólo se encargan de desarrollar construcciones en función de su forma y utilidad, sino que también siguen preceptos estéticos</p>
                            <a class="btn btn-product" href="/servicios" title="Ver Servicios 1.8.10 Consultores" >ver página de Servicios</a>
                        </div>
                    </div>
                </div>
            </section>


            <!--START WHY CHOOSE US-->
            <section class="home-main-contant-style">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 why-choose-img">
                            <img class="img-responsive" src="/themes/classify/img/arquitectura.jpg" alt="1.8.10 consultores arquitectura y construcción" title="1.8.10 consultores arquitectura y construcción">
                        </div>
                        <div class="col-md-6">
                            <div class="headline-left mb30">
                                <h2 class="headline-brd">¿Por qué elegirnos?</h2>
                                <p>Especialistas en Arquitectura,ingenieria,construcción con diferentes servicios. </p>
                            </div>
                            <ul class="lists-item mb30">
                                <li><i class="fa fa-check"></i>Acondicionamiento a Oficinas</li>
                                <li><i class="fa fa-check"></i>Licencias de Funcionamiento</li>
                                <li><i class="fa fa-check"></i>Tramites Municipales de Licencia de Construcción</li>
                                <li><i class="fa fa-check"></i>Soporte Técnico para Oficinas de Arquitectura.</li>

                                <li><i class="fa fa-check"></i>Desarrollo de Planos de Seguridad y Evacuación</li>
                                <li><i class="fa fa-check"></i>Capacitación en Atención al Público</li>
                            </ul>
                            <a class="btn btn-product" href="/nosotros" title="Sobre 1.8.10 Consultores">Sobre nosotros</a>
                        </div>
                    </div>
                </div>
            </section>
            <!--END WHY CHOOSE US-->

            <!--START SERVICE-->
            <section class="home-main-contant-style bg-white">
                <div class="cd-home-title">
                    <h2>Algúnos de Nuestros Servicios</h2>
                    <p>{{ $me->services_description }}</p>

                </div>
                @foreach ($services as $service)
                    <div class="col-md-4" >
                        <div class="service-box">
                            <div class=" col-md-3">
                                <i ></i>
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

<br>
<br>
<br>

                <!--PORTFOLIO START-->
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


            <!--START PRE-BLCOK-->
            <section class="bg-block-style">
                <a href="/proyectos" title="Ver proyectos 1.8.10 consultores">
                    <div class="container-fluid">
                        <h5>Con más de 30 Proyectos desarrollados en estos años. <span> Ver mas <i class="fa fa-play"></i></span>
                        </h5>
                    </div>
                </a>
            </section>
            <!--START PRE-BLCOK-->


            <!-- Start Clients-->
            <section class="main-contain">
                <div class="container">
                    <ul class="row">
                        <li class="item col-md-3 col-sm-6 mb30 clients-block">
                            <img src="/themes/classify/img/logopiel.jpg" alt=" Clientes 1.8.10 Consultores" title="Clientes 1.8.10 Consultores" class="img-responsive" />
                        </li>
                        <li class="item col-md-3 col-sm-6 mb30 clients-block">
                            <img src="/themes/classify/img/logopiel1.jpg" alt=" Clientes 1.8.10 Consultores" title="Clientes 1.8.10 Consultores" class="img-responsive" />
                        </li>
                        <li class="item col-md-3 col-sm-6 mb30 clients-block">
                           <img src="/themes/classify/img/logopiel2.jpg" alt=" Clientes 1.8.10 Consultores" title="Clientes 1.8.10 Consultores" class="img-responsive" />
                        </li>
                        <li class="item col-md-3 col-sm-6 mb30 clients-block">
                           <img src="/themes/classify/img/logopiel3.jpg" alt=" Clientes 1.8.10 Consultores" title="Clientes 1.8.10 Consultores" class="img-responsive" />
                        </li>
                    </ul>

                </div>
            </section>
            <!-- End Clients-->


            <!-- slider-testimonials -->
            <div class="cbp-l-slider-testimonials-wrap">
                <div style="max-width: 980px; margin: 0 auto;">
                    <div id="js-grid-slider-testimonials" class="cbp cbp-slider-edge">
                        <div class="cbp-item graphic">
                            <div class="cbp-l-grid-slider-testimonials-body">
                                “Actualmente todos los proyectos de acondicionamiento de oficinas han sido desarrollados en diferentes distritos de la provincia de Lima en Perú, de manera presencial o a distancia.”
                            </div>
                            <div class="cbp-l-grid-slider-testimonials-footer">
                                1.8.10 Consultores
                            </div>
                        </div>
                        <div class="cbp-item web-design logos">
                            <div class="cbp-l-grid-slider-testimonials-body">
                                “Nuestra experiencia profesional, personal, dando éste servicio data desde 2013 hasta la fecha, en diferentes tipos de proyectos, como vivienda, oficinas administrativas y comercio (Clínica de la Piel sedes Los Olivos y San Isidro).”
                            </div>
                            <div class="cbp-l-grid-slider-testimonials-footer">
                                1.8.10 Consultores
                            </div>
                        </div>
                        <div class="cbp-item graphic logos">
                            <div class="cbp-l-grid-slider-testimonials-body">
                                “Éste servicio permite resolver todos los problemas o defectos de la edificación, proporcionando un mantenimiento completo al inmueble y a todas sus instalaciones en donde se brindarán los servicios de la empresa contratante. Una vez realizado el mantenimiento y arreglos necesarios se plantearan los planos requeridos para resolver el Expediente Municipal de la Licencia de Funcionamiento. ”
                            </div>
                            <div class="cbp-l-grid-slider-testimonials-footer">
                                1.8.10 Consultores
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- slider-testimonials -->


            <!-- Start Suvbscribe -->
            <div class="news-subscribe">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <h3>Escríbenos <strong>newsletter</strong></h3>
                        </div>
                        <div class="col-md-4 newsletter-form-block">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Email your email...">
                                <span class="input-group-btn">
                                    <button class="btn" type="button"><i class="fa fa-envelope-o"></i></button>
                                </span>
                            </div>
                        </div>
                        <div class="col-md-4 col-xs-12">
                            <div class="social-footer">
                              <ul class="social-icons social-icons-simple">
                                  <li><a href="https://www.facebook.com/1810-Consultores-SAC-1313218335433677/" target="new"><i class="fa fa-facebook"></i></a></li>
                                  <li><a href="https://twitter.com/consultores1810"><i class="fa fa-twitter"> </i></a></li>
                                  <li><a href="https://plus.google.com/u/0/b/107767508324625280773/107767508324625280773" target="new"><i class="fa fa-google-plus"></i></a></li>
                                  <li><a href="https://www.linkedin.com/company/16251588" target="new"><i class="fa fa-linkedin"></i></a></li>
                                  <li><a href="https://es.pinterest.com/1810consultores/"><i class="fa fa-pinterest"></i></a></li>

                                  <li><a href="https://www.youtube.com/channel/UCeVKSkZTRlNrUwpvB1j5rQw" target="new"><i class="fa fa-youtube"></i></a></li>
                              </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Suvbscribe -->


@endsection
