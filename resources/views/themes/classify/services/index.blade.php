@extends('themes.classify.base')

@section('content')
<!-- Start Breadcrumb -->
        <div class="page-heading">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <h1 style="color:white"><b>SERVICIOS PROFESIONALES</b></h1>
                        <div class="breadcrumb">
                            <a href="/" title="Volver a la página principal">Inicio</a>
                            <span class="delimeter">/</span>
                            <span class="current">Servicios</span>
                            <div>
                              <span class='st_facebook_large' displayText='Facebook' ></span>
                              <span class='st_googleplus_large' displayText='Google +' ></span>
                              <span class='st_linkedin_large' displayText='LinkedIn' ></span>
                              <span class='st_twitter_large' displayText='Tweet' ></span>
                              <span class='st_pinterest_large' displayText='Pinterest' ></span>
                              <span class='st_fblike_large' displayText='Facebook Like' ></span>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Breadcrumb -->

        <!--START SERVICE-->
        <section class="home-main-contant-style bg-white">
            <div class="cd-home-title">
                <h2>Servicios de Arquitectura y Construcción</h2>
                <p>Un breve resúmen de los servicios que ofrecemos dentro del rubro de la arquitectura y construcción.</p>
            </div>
            <div id="portfolio" class="section-padding">
            <div class="container">
                <div class="row col-md-12">
                    <div class="page-title" style="text-align:center">
                    
                            @foreach ($services as $service)
                            <ul class="col-md-4">
                                <li  style="padding:4px 4px 4px 4px ;text-align:justify">
                                    <a href="{{ $me->getLinkTo('/servicio/'.$service->id) }}">
                                        {{ $service->name }}
                                    </a>.

                                    @if ($service->featuredImage)
                                        <img src="{{ $service->featuredImage->fullPath }}" class="imagenes" title="{{ $service->featuredImage->name }}">
                                    @endif

                                    <p>{{ $service->description }}</p>
                                    <hr class="pg-titl-bdr-btm">
                                </li>
                            </ul>
                            @endforeach


                    </div>
                </div>
            </div>
        </div>
    </section>
        <!--PORTFOLIO END-->


        <!-- START ANIMATION -->
        <section class="main-contain bg-grey">
            <div class="container">
                <div class="animation-body">
                    <img class="pull-left wow fadeIn img-responsive animated-img" src="/themes/classify/img/test.jpg" data-wow-delay="0.4s" alt=" 1.8.10 consultores arquitectura y construcción" title="1.8.10 consultores arquitectura y construcción" />
                    <p class="animated-title">1.8.10 Consultores</p>
                    <p>Oficina de Arquitectura, Construcción y Consultoría especializada en proyectos de Salud, acondicionamiento comercial, licencias de funcionamiento y soporte externo.</p>
                </div>
            </div>
        </section>
        <!-- END ANIMATION -->

        <!--START PRE-BLCOK-->
        <section class="bg-block-style">
            <a href="proyectos.html">
                <div class="container-fluid">
                    <h5>Con más de 30 Proyectos desarrollados en estos años. <span> Ver mas <i class="fa fa-play"></i></span>
                    </h5>
                </div>
            </a>
        </section>
        <!--START PRE-BLCOK-->
@endsection
