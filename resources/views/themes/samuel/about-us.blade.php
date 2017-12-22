@extends('themes.samuel.base')
@section('content')
    <div class="carousel slide width">


        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            @foreach ($me->slides()->take(1)->get() as $key => $slide)
            <div class="item active">
                <img src="{{ asset($slide->imageUrl) }}" alt="{{ $slide->title }}" title="{{ $slide->title }}">
            </div>
            <div class="hero-abouts "><p>
                   Nosotros
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
        <div class="row page-block">
            @include('themes.samuel.includes.sub-menu')
            <div class="col-md-9">

                <div class="page-block-inner">
                    @if (isset($aboutUs))
                    <div class="col-md-12">
                        {!! $aboutUs->question_1 !!}
                        {!! $aboutUs->question_2 !!}
                        {!! $aboutUs->question_3 !!}
                        <div class="accordion-container">
                            <a href="#" class="accordion-titulo">
                                ¿Cuáles con los objetivos de la empresa?<span class="toggle-icon"></span>
                            </a>
                            <div class="accordion-content">
                                {!! $aboutUs->question_5 !!}
                            </div>
                        </div>
                        <div class="accordion-container">
                            <a href="#" class="accordion-titulo">
                                ¿Cómo ven el futuro de la empresa? <span class="toggle-icon"></span>
                            </a>
                            <div class="accordion-content">
                                {!! $aboutUs->question_6 !!}
                            </div>
                        </div>

                    </div>
                    <hr>
                    <div class="col-md-12">
                        <div>
                            {!! $aboutUs->question_4 !!}
                        </div>
                    </div>
                    @endif

                    <hr>

                    {{--<div class="col-md-12">--}}
                        {{--<div id="carousel-example" class="carousel slide hidden-xs" data-ride="carousel">--}}
                            {{--<!-- Wrapper for slides -->--}}
                            {{--<div class="carousel-inner left-carousel">--}}
                                {{--<div class="item active">--}}
                                    {{--<div class="row">--}}
                                        {{--<div class="col-sm-4">--}}
                                            {{--<div class="col-item">--}}
                                                {{--<figure class="oriel-carousel">--}}
                                                    {{--<!-- POST IMAGE -->--}}
                                                    {{--<a href="single-project.html" class="ext-link">--}}
                                                        {{--<img src="images/photos/590x885.gif" class="img-responsive"--}}
                                                             {{--alt="">--}}
                                                    {{--</a>--}}
                                                    {{--<!-- POST CONTENT -->--}}
                                                    {{--<figcaption>--}}
                                                        {{--<div>--}}
                                                            {{--<h5>Residenciales</h5>--}}
                                                            {{--<hr>--}}
                                                            {{--<p>This text represents a brief introduction of team--}}
                                                                {{--member</p>--}}
                                                            {{--<!-- SOCIAL ICONS -->--}}
                                                            {{--<ul class="member-icons">--}}
                                                                {{--<li>--}}
                                                                    {{--<a href="#">--}}
                                                                        {{--<i class="fa fa-facebook"></i>--}}
                                                                    {{--</a>--}}
                                                                {{--</li>--}}
                                                                {{--<li>--}}
                                                                    {{--<a href="#">--}}
                                                                        {{--<i class="fa fa-twitter"></i>--}}
                                                                    {{--</a>--}}
                                                                {{--</li>--}}
                                                                {{--<li>--}}
                                                                    {{--<a href="#">--}}
                                                                        {{--<i class="fa fa-linkedin"></i>--}}
                                                                    {{--</a>--}}
                                                                {{--</li>--}}
                                                                {{--<li>--}}
                                                                    {{--<a href="#">--}}
                                                                        {{--<i class="fa fa-pinterest"></i>--}}
                                                                    {{--</a>--}}
                                                                {{--</li>--}}
                                                            {{--</ul>--}}
                                                        {{--</div>--}}
                                                    {{--</figcaption>--}}
                                                {{--</figure>--}}

                                            {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<div class="col-sm-4">--}}
                                            {{--<div class="col-item">--}}
                                                {{--<figure class="oriel-carousel">--}}
                                                    {{--<!-- POST IMAGE -->--}}
                                                    {{--<a href="single-project.html" class="ext-link">--}}
                                                        {{--<img src="images/photos/590x885.gif" class="img-responsive"--}}
                                                             {{--alt="">--}}
                                                    {{--</a>--}}
                                                    {{--<!-- POST CONTENT -->--}}
                                                    {{--<figcaption>--}}
                                                        {{--<div>--}}
                                                            {{--<h5>Corporativas</h5>--}}
                                                            {{--<hr>--}}
                                                            {{--<p>This text represents a brief introduction of team--}}
                                                                {{--member</p>--}}
                                                            {{--<!-- SOCIAL ICONS -->--}}
                                                            {{--<ul class="member-icons">--}}
                                                                {{--<li>--}}
                                                                    {{--<a href="#">--}}
                                                                        {{--<i class="fa fa-facebook"></i>--}}
                                                                    {{--</a>--}}
                                                                {{--</li>--}}
                                                                {{--<li>--}}
                                                                    {{--<a href="#">--}}
                                                                        {{--<i class="fa fa-twitter"></i>--}}
                                                                    {{--</a>--}}
                                                                {{--</li>--}}
                                                                {{--<li>--}}
                                                                    {{--<a href="#">--}}
                                                                        {{--<i class="fa fa-linkedin"></i>--}}
                                                                    {{--</a>--}}
                                                                {{--</li>--}}
                                                                {{--<li>--}}
                                                                    {{--<a href="#">--}}
                                                                        {{--<i class="fa fa-pinterest"></i>--}}
                                                                    {{--</a>--}}
                                                                {{--</li>--}}
                                                            {{--</ul>--}}
                                                        {{--</div>--}}
                                                    {{--</figcaption>--}}
                                                {{--</figure>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<div class="col-sm-4">--}}
                                            {{--<div class="col-item">--}}
                                                {{--<figure class="oriel-carousel">--}}
                                                    {{--<!-- POST IMAGE -->--}}
                                                    {{--<a href="single-project.html" class="ext-link">--}}
                                                        {{--<img src="images/photos/590x885.gif" class="img-responsive"--}}
                                                             {{--alt="">--}}
                                                    {{--</a>--}}
                                                    {{--<!-- POST CONTENT -->--}}
                                                    {{--<figcaption>--}}
                                                        {{--<div>--}}
                                                            {{--<h5>Industria </h5>--}}
                                                            {{--<hr>--}}
                                                            {{--<p>This text represents a brief introduction of team--}}
                                                                {{--member</p>--}}
                                                            {{--<!-- SOCIAL ICONS -->--}}
                                                            {{--<ul class="member-icons">--}}
                                                                {{--<li>--}}
                                                                    {{--<a href="#">--}}
                                                                        {{--<i class="fa fa-facebook"></i>--}}
                                                                    {{--</a>--}}
                                                                {{--</li>--}}
                                                                {{--<li>--}}
                                                                    {{--<a href="#">--}}
                                                                        {{--<i class="fa fa-twitter"></i>--}}
                                                                    {{--</a>--}}
                                                                {{--</li>--}}
                                                                {{--<li>--}}
                                                                    {{--<a href="#">--}}
                                                                        {{--<i class="fa fa-linkedin"></i>--}}
                                                                    {{--</a>--}}
                                                                {{--</li>--}}
                                                                {{--<li>--}}
                                                                    {{--<a href="#">--}}
                                                                        {{--<i class="fa fa-pinterest"></i>--}}
                                                                    {{--</a>--}}
                                                                {{--</li>--}}
                                                            {{--</ul>--}}
                                                        {{--</div>--}}
                                                    {{--</figcaption>--}}
                                                {{--</figure>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}

                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="item">--}}
                                    {{--<div class="row">--}}
                                        {{--<div class="col-sm-4">--}}
                                            {{--<div class="col-item">--}}
                                                {{--<figure class="oriel-carousel">--}}
                                                    {{--<!-- POST IMAGE -->--}}
                                                    {{--<a href="single-project.html" class="ext-link">--}}
                                                        {{--<img src="images/photos/590x885.gif" class="img-responsive"--}}
                                                             {{--alt="">--}}
                                                    {{--</a>--}}
                                                    {{--<!-- POST CONTENT -->--}}
                                                    {{--<figcaption>--}}
                                                        {{--<div>--}}
                                                            {{--<h5>Hoteles</h5>--}}
                                                            {{--<hr>--}}
                                                            {{--<p>This text represents a brief introduction of team--}}
                                                                {{--member</p>--}}
                                                            {{--<!-- SOCIAL ICONS -->--}}
                                                            {{--<ul class="member-icons">--}}
                                                                {{--<li>--}}
                                                                    {{--<a href="#">--}}
                                                                        {{--<i class="fa fa-facebook"></i>--}}
                                                                    {{--</a>--}}
                                                                {{--</li>--}}
                                                                {{--<li>--}}
                                                                    {{--<a href="#">--}}
                                                                        {{--<i class="fa fa-twitter"></i>--}}
                                                                    {{--</a>--}}
                                                                {{--</li>--}}
                                                                {{--<li>--}}
                                                                    {{--<a href="#">--}}
                                                                        {{--<i class="fa fa-linkedin"></i>--}}
                                                                    {{--</a>--}}
                                                                {{--</li>--}}
                                                                {{--<li>--}}
                                                                    {{--<a href="#">--}}
                                                                        {{--<i class="fa fa-pinterest"></i>--}}
                                                                    {{--</a>--}}
                                                                {{--</li>--}}
                                                            {{--</ul>--}}
                                                        {{--</div>--}}
                                                    {{--</figcaption>--}}
                                                {{--</figure>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<div class="col-sm-4">--}}
                                            {{--<div class="col-item">--}}
                                                {{--<figure class="oriel-carousel">--}}
                                                    {{--<!-- POST IMAGE -->--}}
                                                    {{--<a href="single-project.html" class="ext-link">--}}
                                                        {{--<img src="images/photos/590x885.gif" class="img-responsive"--}}
                                                             {{--alt="">--}}
                                                    {{--</a>--}}
                                                    {{--<!-- POST CONTENT -->--}}
                                                    {{--<figcaption>--}}
                                                        {{--<div>--}}
                                                            {{--<h5>Casas Playa</h5>--}}
                                                            {{--<hr>--}}
                                                            {{--<p>This text represents a brief introduction of team--}}
                                                                {{--member</p>--}}
                                                            {{--<!-- SOCIAL ICONS -->--}}
                                                            {{--<ul class="member-icons">--}}
                                                                {{--<li>--}}
                                                                    {{--<a href="#">--}}
                                                                      {{--<i class="fa fa-facebook"></i>--}}
                                                                    {{--</a>--}}
                                                                {{--</li>--}}
                                                                {{--<li>--}}
                                                                    {{--<a href="#">--}}
                                                                       {{--<i class="fa fa-twitter"></i>--}}
                                                                    {{--</a>--}}
                                                                {{--</li>--}}
                                                                {{--<li>--}}
                                                                    {{--<a href="#">--}}
                                                                       {{--<i class="fa fa-linkedin"></i>--}}
                                                                    {{--</a>--}}
                                                                {{--</li>--}}
                                                                {{--<li>--}}
                                                                    {{--<a href="#">--}}
                                                                       {{--<i class="fa fa-pinterest"></i>--}}
                                                                    {{--</a>--}}
                                                                {{--</li>--}}
                                                            {{--</ul>--}}
                                                        {{--</div>--}}
                                                    {{--</figcaption>--}}
                                                {{--</figure>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<div class="col-sm-4">--}}
                                            {{--<div class="col-item">--}}
                                                {{--<figure class="oriel-carousel">--}}
                                                    {{--<!-- POST IMAGE -->--}}
                                                    {{--<a href="single-project.html" class="ext-link">--}}
                                                        {{--<img src="images/photos/590x885.gif" class="img-responsive"--}}
                                                             {{--alt="">--}}
                                                    {{--</a>--}}
                                                    {{--<!-- POST CONTENT -->--}}
                                                    {{--<figcaption>--}}
                                                        {{--<div>--}}
                                                            {{--<h5>Brad Doe</h5>--}}
                                                            {{--<hr>--}}
                                                            {{--<p>This text represents a brief introduction of team--}}
                                                                {{--member</p>--}}
                                                            {{--<!-- SOCIAL ICONS -->--}}
                                                            {{--<ul class="member-icons">--}}
                                                                {{--<li>--}}
                                                                    {{--<a href="#">--}}
                                                                        {{--<i class="fa fa-facebook"></i>--}}
                                                                    {{--</a>--}}
                                                                {{--</li>--}}
                                                                {{--<li>--}}
                                                                    {{--<a href="#">--}}
                                                                        {{--<i class="fa fa-twitter"></i>--}}
                                                                    {{--</a>--}}
                                                                {{--</li>--}}
                                                                {{--<li>--}}
                                                                    {{--<a href="#">--}}
                                                                        {{--<i class="fa fa-linkedin"></i>--}}
                                                                    {{--</a>--}}
                                                                {{--</li>--}}
                                                                {{--<li>--}}
                                                                    {{--<a href="#">--}}
                                                                        {{--<i class="fa fa-pinterest"></i>--}}
                                                                    {{--</a>--}}
                                                                {{--</li>--}}
                                                            {{--</ul>--}}
                                                        {{--</div>--}}
                                                    {{--</figcaption>--}}
                                                {{--</figure>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="col-md-3 col-md-offset-9">--}}
                            {{--<!-- Controls -->--}}
                            {{--<div class="controls pull-right hidden-xs">--}}
                                {{--<a class="left fa fa-chevron-left btn " href="#carousel-example"--}}
                                   {{--data-slide="prev"></a><a class="right fa fa-chevron-right btn "--}}
                                                            {{--href="#carousel-example"--}}
                                                            {{--data-slide="next"></a>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<hr>--}}
                    <div class="col-md-12">
                        <div>
                            <h2>Clientes</h2>
                        </div>
                        <div id="carousel-example-generic" class="carousel slide hidden-xs" data-ride="carousel">
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner">
                                @foreach ($me->customers->chunk(4) as $key => $customers_group)
                                    <div class="item @if ($key==0) active @endif">
                                        <div class="row">
                                            @foreach ($customers_group as $customer)
                                            <div class="col-md-3 width-mediun">
                                                <div class="owl-item active" >
                                                    <figure class="oriel-carousel">
                                                        <!-- POST IMAGE -->
                                                        <a href="{{ $customer->url ?: '#' }}" class="ext-link">
                                                            <img src="/images/customers/{{ $customer->image }}" class="img-responsive" alt="imagen">
                                                        </a>

                                                    </figure></div>
                                            </div>
                                            @endforeach
                                        </div>
                                     </div>
                                @endforeach

                                {{--<div class="item">--}}
                                    {{--<div class="row">--}}
                                        {{--<div class="col-md-3 width-mediun">--}}
                                            {{--<div class="owl-item active" >--}}
                                                {{--<figure class="oriel-carousel">--}}
                                                    {{--<!-- POST IMAGE -->--}}
                                                    {{--<a href="single-project.html" class="ext-link">--}}
                                                        {{--<img src="images/photos/600x400.gif" class="img-responsive" alt="imagen">--}}
                                                    {{--</a>--}}

                                                {{--</figure></div>--}}
                                        {{--</div>--}}
                                        {{--<div class="col-md-3 width-mediun">--}}
                                            {{--<div class="owl-item active" >--}}
                                                {{--<figure class="oriel-carousel">--}}
                                                    {{--<!-- POST IMAGE -->--}}
                                                    {{--<a href="single-project.html" class="ext-link">--}}
                                                        {{--<img src="images/photos/600x400.gif" class="img-responsive" alt="imagen">--}}
                                                    {{--</a>--}}
                                                    {{--<!-- POST CONTENT -->--}}

                                                {{--</figure>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<div class="col-md-3 width-mediun">--}}
                                            {{--<div class="owl-item active" >--}}
                                                {{--<figure class="oriel-carousel">--}}
                                                    {{--<!-- POST IMAGE -->--}}
                                                    {{--<a href="single-project.html" class="ext-link">--}}
                                                        {{--<img src="images/photos/600x400.gif" class="img-responsive" alt="imagen">--}}
                                                    {{--</a>--}}
                                                    {{--<!-- POST CONTENT -->--}}

                                                {{--</figure>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<div class="col-md-3 width-mediun">--}}
                                            {{--<div class="owl-item active" >--}}
                                                {{--<figure class="oriel-carousel">--}}
                                                    {{--<!-- POST IMAGE -->--}}
                                                    {{--<a href="single-project.html" class="ext-link">--}}
                                                        {{--<img src="images/photos/600x400.gif" class="img-responsive" alt="imagen">--}}
                                                    {{--</a>--}}
                                                    {{--<!-- POST CONTENT -->--}}

                                                {{--</figure>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}

                                    {{--</div>--}}
                                {{--</div>--}}
                            </div>
                            <div class="col-lg-offset-9 col-md-3 media-right">
                                <!-- Controls -->
                                <div class="controls pull-right hidden-xs">
                                    <a class="left fa fa-chevron-left btn "
                                       href="#carousel-example-generic"
                                       data-slide="prev"></a>
                                    <a class="right fa fa-chevron-right btn "
                                       href="#carousel-example-generic"
                                       data-slide="next"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection