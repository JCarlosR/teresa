<!DOCTYPE html>
<html lang="en" class=" js no-touch">
<head>
    <title>{{ $me->title }}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('/themes/default/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/themes/default/css/font-awesome.min.css') }}">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300,600|Raleway:600,300|Josefin+Slab:400,700,600italic,600,400italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="{{ asset('/themes/default/css/slick-team-slider.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('/themes/default/css/style.css') }}">
</head>
<body>
<!--HEADER START-->
<div class="main-navigation navbar-fixed-top">
    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ url('/') }}">{{ $me->name }}</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="#banner">Inicio</a></li>
                    <li><a href="#service">Servicios</a></li>
                    <li><a href="#portfolio">Proyectos</a></li>
                    <li><a href="#about">Nosotros</a></li>
                    <li><a href="#contact">Contacto</a></li>
                </ul>
            </div>
        </div>
    </nav>
</div>
<!--HEADER END-->

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
                <hr class="pg-titl-bdr-btm">
            </div>
            @foreach ($services as $service)
            <div class="col-md-4">
                <div class="service-box">
                    <div class="service-icon col-md-3">
                        @if ($service->id == 1)
                            <i class="fa fa-picture-o"></i>
                        @elseif ($service->id == 2)
                            <i class="fa fa fa-code"></i>
                        @else
                            <i class="fa fa-diamond"></i>
                        @endif
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

<!--CONTACT START-->
<div id="contact" class="section-padding">
    <div class="container">
        <div class="row">
            <div class="page-title text-center">
                <h1>Quick Contact</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor <br>incididunt ut labore et dolore magna aliqua. </p>
                <hr class="pg-titl-bdr-btm"></hr>
            </div>
            <div id="sendmessage">Your message has been sent. Thank you!</div>
            <div id="errormessage"></div>

            <div class="form-sec">
                <form action="" method="post" role="form" class="contactForm">
                    <div class="col-md-4 form-group">
                        <input type="text" name="name" class="form-control text-field-box" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                        <div class="validation"></div>
                    </div>
                    <div class="col-md-4 form-group">
                        <input type="email" class="form-control text-field-box" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                        <div class="validation"></div>
                    </div>
                    <div class="col-md-4 form-group">
                        <input type="text" class="form-control text-field-box" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                        <div class="validation"></div>
                    </div>
                    <div class="col-md-12 form-group">
                        <textarea class="form-control text-field-box" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                        <div class="validation"></div>

                        <button class="button-medium" id="contact-submit" type="submit" name="contact">Submit Now</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!--CONTACT END-->

<!--FOOTER START-->
<footer class="footer section-padding">
    <div class="container">
        <div class="row">
            <div style="visibility: visible; animation-name: zoomIn;" class="col-sm-12 text-center wow zoomIn">
                <h3>Follow us on</h3>
                <div class="footer_social">
                    <ul>
                        <li><a class="f_facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a class="f_twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a class="f_google" href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a class="f_linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div><!--- END COL -->
        </div><!--- END ROW -->
    </div><!--- END CONTAINER -->
</footer>
<!--FOOTER END-->
<div class="footer-bottom">
    <div class="container">
        <div style="visibility: visible; animation-name: zoomIn;" class="col-md-12 text-center wow zoomIn">
            <div class="footer_copyright">
                <p> © Copyright, All Rights Reserved.</p>
                <div class="credits">
                </div>
            </div>
        </div>
    </div>
</div>
<script src="{{ asset('/themes/default/js/jquery.min.js') }}"></script>
<script src="{{ asset('/themes/default/js/jquery.easing.min.js') }}"></script>
<script src="{{ asset('/themes/default/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('/themes/default/js/jquery.mixitup.js') }}" type="text/javascript"></script>
<script type="text/javascript" src="{{ asset('/themes/default/js/slick.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('/themes/default/js/custom.js') }}"></script>

</body>
</html>