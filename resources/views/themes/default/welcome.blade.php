@extends('themes.default.base')

@section('content')
    <!--BANNER START-->
    <div id="banner" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="jumbotron">
                    <h1 class="small">Bienvenido a <span class="bold">{{ $me->name }}</span></h1>
                    <p class="big">{{ $me->description }}</p>
                    <a href="#" class="btn btn-banner">Learn More<i class="fa fa-send"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!--BANNER END-->

    <!--CTA1 START-->
    <div class="cta-1">
        <div class="container">
            <div class="row text-center white">
                <h1 class="cta-title">Say Hey to Tempo!!</h1>
                <p class="cta-sub-title">Full Responsive HTML5 Bootstrap Template.</p>
            </div>
        </div>
    </div>
    <!--CTA1 END-->

    <!--SERVICE START-->
    <div id="service" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="page-title text-center">
                    <h1>Nuestros servicios</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor <br>incididunt ut labore et dolore magna aliqua. </p>
                    <p><a href="{{ $me->getLinkTo('/servicios') }}" class="btn btn-primary">Ver más</a></p>
                    <hr class="pg-titl-bdr-btm">
                </div>
                @foreach ($services as $service)
                    <div class="col-md-4">
                        <div class="service-box">
                            <div class="service-icon col-md-3">
                                <i class="fa fa-diamond"></i>
                            </div>

                            <div class="service-text col-md-9">
                                <h3>{{ $service->name }}</h3>
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
                    <h1>Nuestros proyectos</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor <br>incididunt ut labore et dolore magna aliqua. </p>
                    <p><a href="{{ $me->getLinkTo('/proyectos') }}" class="btn btn-primary">Ver más</a></p>
                    <hr class="pg-titl-bdr-btm">
                </div>
                <div class="port-sec">
                    <div class="col-md-12 fil-btn text-center">
                        <div class="filter wrk-title active" data-filter="all">Ver todos</div>
                        <div class="filter wrk-title" data-filter=".category-1">Design</div>
                        <div class="filter wrk-title" data-filter=".category-2">Development</div>
                        <div class="filter wrk-title lst-cld" data-filter=".category-3">SEO</div>
                    </div>
                    <div id="Container">
                        <div class="filimg mix category-1 category-3 col-md-4 col-sm-4 col-xs-12" data-myorder="2">
                            <img src="{{ asset('/themes/default/img/fea1.jpg') }}" class="img-responsive">
                        </div>
                        <div class="filimg mix category-2 col-md-4 col-sm-4 col-xs-12" data-myorder="4">
                            <img src="{{ asset('/themes/default/img/fea2.jpg') }}" class="img-responsive">
                        </div>
                        <div class="filimg mix category-1 col-md-4 col-sm-4 col-xs-12" data-myorder="1">
                            <img src="{{ asset('/themes/default/img/fea3.jpg') }}" class="img-responsive">								</div>
                        <div class="filimg mix category-2 category-3 col-md-4 col-sm-4 col-xs-12" data-myorder="8">
                            <img src="{{ asset('/themes/default/img/fea4.jpg') }}" class="img-responsive">								</div>
                        <div class="filimg mix category-2 col-md-4 col-sm-4 col-xs-12" data-myorder="8">
                            <img src="{{ asset('/themes/default/img/fea5.jpg') }}" class="img-responsive">
                        </div>
                        <div class="filimg mix category-2 category-3 col-md-4 col-sm-4 col-xs-12" data-myorder="8">
                            <img src="{{ asset('/themes/default/img/fea6.jpg') }}" class="img-responsive">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--PORTFOLIO END-->

    <!--TEAM START-->
    <div id="about" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="page-title text-center">
                    <h1>Nosotros</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor <br>incididunt ut labore et dolore magna aliqua. </p>
                    <hr class="pg-titl-bdr-btm">
                </div>
                <div class="autoplay">
                    <div class="col-md-6">
                        <div class="team-info">
                            <div class="img-sec">
                                <img src="{{ asset('/themes/default/img/agent1.jpg') }}" class="img-responsive">
                            </div>
                            <div class="fig-caption">
                                <h3>Haris Brown</h3>
                                <p class="marb-20">Sr. UI Designer</p>
                                <p>Follow me:</p>
                                <ul class="team-social">
                                    <li class="bgblue-dark"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li class="bgred"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    <li class="bgblue-light"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li class="bgblue-dark"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="team-info">
                            <div class="img-sec">
                                <img src="{{ asset('/themes/default/img/agent2.jpg') }}" class="img-responsive">
                            </div>
                            <div class="fig-caption">
                                <h3>Emmy Brown</h3>
                                <p class="marb-20">Jr. UI Designer</p>
                                <p>Follow me:</p>
                                <ul class="team-social">
                                    <li class="blue-dark"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li class="red"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    <li class="blue-light"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li class="blue-dark"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="team-info">
                            <div class="img-sec">
                                <img src="{{ asset('/themes/default/img/agent3.jpg') }}" class="img-responsive">
                            </div>
                            <div class="fig-caption">
                                <h3>Iain Dante</h3>
                                <p class="marb-20">Jr. UI Designer</p>
                                <p>Follow me:</p>
                                <ul class="team-social">
                                    <li class="blue-dark"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li class="red"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    <li class="blue-light"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li class="blue-dark"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="team-info">
                            <div class="img-sec">
                                <img src="{{ asset('/themes/default/img/agent4.jpg') }}" class="img-responsive">
                            </div>
                            <div class="fig-caption">
                                <h3>Kate Haris</h3>
                                <p class="marb-20">Jr. UI Designer</p>
                                <p>Follow me:</p>
                                <ul class="team-social">
                                    <li class="blue-dark"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li class="red"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    <li class="blue-light"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li class="blue-dark"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--TEAM END-->

    <!--CTA2 START-->
    <div class="cta2">
        <div class="container">
            <div class="row white text-center">
                <h3 class="wd75 fnt-24">“Every Thing is designed. Few Things are Designed well.” - Brian Reed</h3>
                <p class="cta-sub-title"></p>
                <a href="#" class="btn btn-default">Request A Quote</a>
            </div>
        </div>
    </div>
    <!--CTA2 END-->
@endsection