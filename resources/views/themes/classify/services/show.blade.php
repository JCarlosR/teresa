@extends('themes.classify.base')

@section('styles')
    <style>
        #myCarousel img {
            width: 100%;
            height: auto;
        }
    </style>
@endsection

@section('content')


    <!-- Start Breadcrumb -->
    <div class="page-heading">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h1 class="title"><span>{{ $service->name }}</span></h1>
                    <div class="breadcrumb">
                        <a href="../index.html" title="Volver a la página principal">Inicio</a>
                        <span class="delimeter">/</span>
                        <a href="../servicios.html" title="" class="current">Servicios</a>
                        <ul class="social-list list-horizontal share" align="center">
                            <span class='st_facebook_large' displayText='Facebook'></span>
                            <span class='st_googleplus_large' displayText='Google +'></span>
                            <span class='st_linkedin_large' displayText='LinkedIn'></span>
                            <span class='st_twitter_large' displayText='Tweet'></span>
                            <span class='st_pinterest_large' displayText='Pinterest'></span>
                            <span class='st_fblike_large' displayText='Facebook Like'></span>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start Home Portfolio-->
    <section class="main-contain bg-white">
        <div class="container">
            <div class="row">

                <aside>
                    <div class="col-md-4 col-sm-12 col-xs-12 sidebar">



                        <!-- RECENT POSTS WIDGET -->
                        <div class="widget mb30">
                            <h6 class="montserrat text-uppercase bottom-line"><strong>Servicios de Arquitectura <center>y Construcción</center></strong></h6>
                            <ul class="recent-posts">
                                <li class="bg-gray">
                                    <br>
                                    <div class="widget-posts-image">

                                    </div>
                                    <div class="widget-posts-body">
                                        <div class="single-contact-option">
                                            <h4 class="widget-posts-title "><a href="01-acondicionamiento-oficina.html" title="">ACONDICIONAMIENTO OFICINA  <span style="float:right; font-size:28px;margin-bottom:0px;">></span></a></h4>

                                        </div>

                                    </div>
                                </li>

                            </br>

                            <li class="bg-gray">
                                <div class="widget-posts-image">

                                </div>
                                <div class="widget-posts-body">
                                    <div class="single-contact-option">
                                        <h4 class="widget-posts-title "><a href="02-licencia-funcionamiento.html" title="">LICENCIA FUNCIONAMIENTO<span style="float:right; font-size:28px;margin-bottom:0px;">></span></a></h4></div>

                                    </div>
                                </li>
                            </br>
                            <li class="bg-gray">
                                <div class="widget-posts-image">

                                </div>
                                <div class="widget-posts-body">
                                    <div class="single-contact-option ">
                                        <h4 class="widget-posts-title"><a href="03-tramites-municipales.html" title="">TRAMITES MUNICIPALES<span style="float:right; font-size:28px;margin-bottom:0px;">></span></a></h4></div>

                                    </div>
                                </li>
                            </br>
                            <li class="bg-gray">
                                <div class="widget-posts-image">

                                </div>
                                <div class="widget-posts-body">
                                    <div class="single-contact-option">
                                        <h4 class="widget-posts-title"><a href="04-soporte-oficinas.html" title="">SOPORTE TECNICO<span style="float:right; font-size:28px;margin-bottom:0px;">></span></a></h4></div>

                                    </div>
                                </li>
                            </br>
                            <li class="bg-gray">
                                <div class="widget-posts-image">

                                </div>
                                <div class="widget-posts-body">
                                    <div class="single-contact-option ">
                                        <h4 class="widget-posts-title"><a href="05-planos-seguridad.html"title="">SEGURIDAD Y EVACUACIÓN<span style="float:right; font-size:28px;margin-bottom:0px;">></span></a></h4></div>

                                    </div>
                                </li>
                            </br>
                            <li class="bg-gray">
                                <div class="widget-posts-image">

                                </div>
                                <div class="widget-posts-body">
                                    <div class="single-contact-option">
                                        <h4 class="widget-posts-title "><a href="06-atencion-publico.html"title="">ATENCION AL PUBLICO<span>></span></a></h4></div>
                                    </div>
                                </br>

                            </li>
                            <br>
                            <div class="bottom-line"></div>

                            <ul class="cbp-l-project-details-list">

                                <h2><li><strong>NUESTROS CLIENTES EN : </strong></li></h2>
                                <li><strong>Lideratum Procesos SAC.</strong></li>
                                <li><strong>CEDEP.</strong></li>
                                <li><strong>Noahlumi SAC. </strong></li>
                                <li><strong>Consorcio Davalú SAC.</strong></li>
                            </strong></li>
                        </BR>
                        <ul class="social-list list-horizontal share" align="center">
                            <span class='st_facebook_large' displayText='Facebook'></span>
                            <span class='st_googleplus_large' displayText='Google +'></span>
                            <span class='st_linkedin_large' displayText='LinkedIn'></span>
                            <span class='st_twitter_large' displayText='Tweet'></span>
                            <span class='st_pinterest_large' displayText='Pinterest'></span>
                            <span class='st_fblike_large' displayText='Facebook Like'></span>
                        </ul>

                    </ul>

                </ul>
            </div>
            <!-- END RECENT POSTS WIDGET -->
        </div>
    </aside>


    <div class="col-md-8 col-sm-12 col-xs-12">
        <h2><strong>Servicio</strong> </h2>

        <p>{{ $service->description }}</p></br>

        @if (isset($service->images))
                            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                <!-- Indicators -->
                                <ol class="carousel-indicators">
                                    @foreach ($service->images as $key => $image)
                                        <li data-target="#myCarousel" data-slide-to="{{ $key }}" @if($key==0) class="active" @endif></li>
                                    @endforeach
                                </ol>

                                <!-- Wrapper for slides -->
                                <div class="carousel-inner">
                                    @foreach ($service->images as $key => $image)
                                        <div class="item @if($key==0) active @endif">
                                            <img src="/images/services/{{ $image->file_name }}" alt="{{ $image->name }}">
                                            <div class="carousel-caption">
                                                <h3>{{ $image->name }}</h3>
                                                <p>{{ $image->description }}</p>
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
                        @endif
    </br>


    <div class="panel-body">
                        {!! $service->question_1 !!}

                        {!! $service->question_2 !!}

                        {!! $service->question_3 !!}

                        {!! $service->question_4 !!}

                        {!! $service->question_5 !!}

                        @if (isset($service->images))
                            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                <!-- Indicators -->
                                <ol class="carousel-indicators">
                                    @foreach ($service->images as $key => $image)
                                        <li data-target="#myCarousel" data-slide-to="{{ $key }}" @if($key==0) class="active" @endif></li>
                                    @endforeach
                                </ol>

                                <!-- Wrapper for slides -->
                                <div class="carousel-inner">
                                    @foreach ($service->images as $key => $image)
                                        <div class="item @if($key==0) active @endif">
                                            <img src="/images/services/{{ $image->file_name }}" alt="{{ $image->name }}">
                                            <div class="carousel-caption">
                                                <h3>{{ $image->name }}</h3>
                                                <p>{{ $image->description }}</p>
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
                        @endif
                    </div>


</div>

</div>

<div class="cbp-l-project-container">
<div class="cbp-l-project-related">
<div class="cbp-l-project-desc-title"><strong><h3>DESARROLLO DE SERVICIO</h3></strong  ></div>

    <ul class="cbp-l-project-related-wrap">
        <li class="cbp-l-project-related-item">
            <a href="../img/portafolio/4.jpg" class="cbp-singlePage cbp-l-project-related-link" rel="nofollow">
                <img src="../img/portfolio/4.jpg" alt=" 1.8.10 consultores arquitectura y construcción" title="1.8.10 consultores arquitectura y construcción">
                <div class="cbp-l-project-related-title">Acondicionamiento de Oficinas</div>
            </a>
        </li>
        <li class="cbp-l-project-related-item">
            <a href="../img/portafolio/5.jpg" class="cbp-singlePage cbp-l-project-related-link" rel="nofollow">
                <img src="../img/portfolio/5.jpg" alt=" 1.8.10 consultores arquitectura y construcción" title="1.8.10 consultores arquitectura y construcción">
                <div class="cbp-l-project-related-title">Acondicionamiento de Oficinas</div>
            </a>
        </li>
        <li class="cbp-l-project-related-item">
            <a href="../img/portfolio/6.jpg" class="cbp-singlePage cbp-l-project-related-link" rel="nofollow">
                <img src="../img/portfolio/6.jpg" alt=" 1.8.10 consultores arquitectura y construcción" title="1.8.10 consultores arquitectura y construcción">
                <div class="cbp-l-project-related-title">Acondicionamiento de Oficinas</div>
            </a>
        </li>

    </ul>

</div>
</div>
</div>

</div>
</div>
</section>
<!-- End Home Portfolio-->
@endsection
