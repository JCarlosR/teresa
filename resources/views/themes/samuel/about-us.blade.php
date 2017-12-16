@extends('themes.samuel.base')


@section('content')
    <div class="carousel slide width">


        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <img src="images/photos/1800x1000.gif" alt="Los Angeles">
            </div>
            <div class="hero-abouts "><p>
                    ABOUT US
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
                <div class="page-block-inner">

                    <div class="col-md-12">

                        @if(isset($aboutUs))
                            {!! $aboutUs->question_1 !!}
                            {!! $aboutUs->question_2 !!}
                            {!! $aboutUs->question_3 !!}
                            {!! $aboutUs->question_5 !!}

                            {{--<div class="accordion-container">--}}

                                {{--<a href="#" class="accordion-titulo">Messi<span class="toggle-icon"></span></a>--}}
                                {{--<div class="accordion-content">--}}
                                    {{--<img src="http://e0.365dm.com/15/05/660x350/champions-league-barcelona-bayern-munich-soccer-messi_3299830.jpg?20150506214236"--}}
                                         {{--alt=""/>--}}
                                    {{--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod--}}
                                        {{--tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,--}}
                                        {{--quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo--}}
                                        {{--consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse--}}
                                        {{--cillum dolore eu fugiat nulla pariatur.--}}

                                        {{--Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium--}}
                                        {{--doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore--}}
                                        {{--veritatis et quasi architecto beatae vitae dicta sunt explicabo. Excepteur--}}
                                        {{--sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt--}}
                                        {{--mollit anim id est laborum.</p>--}}
                                {{--</div>--}}

                            {{--</div>--}}

                            {{--<div class="accordion-container">--}}

                                {{--<a href="#" class="accordion-titulo">Messi<span class="toggle-icon"></span></a>--}}
                                {{--<div class="accordion-content">--}}
                                    {{--<img src="http://e0.365dm.com/15/05/660x350/champions-league-barcelona-bayern-munich-soccer-messi_3299830.jpg?20150506214236"--}}
                                         {{--alt=""/>--}}
                                    {{--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod--}}
                                        {{--tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,--}}
                                        {{--quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo--}}
                                        {{--consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse--}}
                                        {{--cillum dolore eu fugiat nulla pariatur.--}}

                                        {{--Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium--}}
                                        {{--doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore--}}
                                        {{--veritatis et quasi architecto beatae vitae dicta sunt explicabo. Excepteur--}}
                                        {{--sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt--}}
                                        {{--mollit anim id est laborum.</p>--}}
                                {{--</div>--}}

                            {{--</div>--}}

                            {{--<div class="accordion-container">--}}

                                {{--<a href="#" class="accordion-titulo">Messi<span class="toggle-icon"></span></a>--}}
                                {{--<div class="accordion-content">--}}
                                    {{--<img src="http://e0.365dm.com/15/05/660x350/champions-league-barcelona-bayern-munich-soccer-messi_3299830.jpg?20150506214236"--}}
                                         {{--alt=""/>--}}
                                    {{--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod--}}
                                        {{--tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,--}}
                                        {{--quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo--}}
                                        {{--consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse--}}
                                        {{--cillum dolore eu fugiat nulla pariatur.--}}

                                        {{--Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium--}}
                                        {{--doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore--}}
                                        {{--veritatis et quasi architecto beatae vitae dicta sunt explicabo. Excepteur--}}
                                        {{--sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt--}}
                                        {{--mollit anim id est laborum.</p>--}}
                                {{--</div>--}}

                            {{--</div>--}}

                            {{--<div class="accordion-container">--}}

                                {{--<a href="#" class="accordion-titulo">Messi<span class="toggle-icon"></span></a>--}}
                                {{--<div class="accordion-content">--}}
                                    {{--<img src="http://e0.365dm.com/15/05/660x350/champions-league-barcelona-bayern-munich-soccer-messi_3299830.jpg?20150506214236"--}}
                                         {{--alt=""/>--}}
                                    {{--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod--}}
                                        {{--tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,--}}
                                        {{--quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo--}}
                                        {{--consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse--}}
                                        {{--cillum dolore eu fugiat nulla pariatur.--}}

                                        {{--Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium--}}
                                        {{--doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore--}}
                                        {{--veritatis et quasi architecto beatae vitae dicta sunt explicabo. Excepteur--}}
                                        {{--sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt--}}
                                        {{--mollit anim id est laborum.</p>--}}
                                {{--</div>--}}

                            {{--</div>--}}

                            {{--<div class="accordion-container">--}}
                                {{--<a href="#" class="accordion-titulo">Cristiano<span class="toggle-icon"></span></a>--}}
                                {{--<div class="accordion-content">--}}
                                    {{--<img src="http://www.abc.es/Media/201301/10/cristiano-ronaldo--644x362.jpg"--}}
                                         {{--alt=""/>--}}
                                    {{--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod--}}
                                        {{--tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,--}}
                                        {{--quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo--}}
                                        {{--consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse--}}
                                        {{--cillum dolore eu fugiat nulla pariatur.--}}

                                        {{--Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium--}}
                                        {{--doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore--}}
                                        {{--veritatis et quasi architecto beatae vitae dicta sunt explicabo. Excepteur--}}
                                        {{--sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt--}}
                                        {{--mollit anim id est laborum.</p>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                    </div>
                    <hr>


                    <div class="col-md-12">
                        <div>
                            {!! $aboutUs->question_4 !!}
                            @endif


                        </div>

                    </div>
                    <hr>

                    <div class="col-md-12">


                        <div id="carousel-example" class="carousel slide hidden-xs" data-ride="carousel">
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner left-carousel">
                                <div class="item active">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="col-item">
                                                <figure class="oriel-carousel">
                                                    <!-- POST IMAGE -->
                                                    <a href="single-project.html" class="ext-link">
                                                        <img src="images/photos/590x885.gif" class="img-responsive"
                                                             alt="">
                                                    </a>
                                                    <!-- POST CONTENT -->
                                                    <figcaption>
                                                        <div>
                                                            <h5>Residenciales</h5>
                                                            <hr>
                                                            <p>This text represents a brief introduction of team
                                                                member</p>
                                                            <!-- SOCIAL ICONS -->
                                                            <ul class="member-icons">
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="fa fa-facebook"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="fa fa-twitter"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="fa fa-linkedin"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="fa fa-pinterest"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </figcaption>
                                                </figure>

                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="col-item">
                                                <figure class="oriel-carousel">
                                                    <!-- POST IMAGE -->
                                                    <a href="single-project.html" class="ext-link">
                                                        <img src="images/photos/590x885.gif" class="img-responsive"
                                                             alt="">
                                                    </a>
                                                    <!-- POST CONTENT -->
                                                    <figcaption>
                                                        <div>
                                                            <h5>Corporativas</h5>
                                                            <hr>
                                                            <p>This text represents a brief introduction of team
                                                                member</p>
                                                            <!-- SOCIAL ICONS -->
                                                            <ul class="member-icons">
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="fa fa-facebook"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="fa fa-twitter"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="fa fa-linkedin"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="fa fa-pinterest"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </figcaption>
                                                </figure>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="col-item">
                                                <figure class="oriel-carousel">
                                                    <!-- POST IMAGE -->
                                                    <a href="single-project.html" class="ext-link">
                                                        <img src="images/photos/590x885.gif" class="img-responsive"
                                                             alt="">
                                                    </a>
                                                    <!-- POST CONTENT -->
                                                    <figcaption>
                                                        <div>
                                                            <h5>Industria </h5>
                                                            <hr>
                                                            <p>This text represents a brief introduction of team
                                                                member</p>
                                                            <!-- SOCIAL ICONS -->
                                                            <ul class="member-icons">
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="fa fa-facebook"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="fa fa-twitter"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="fa fa-linkedin"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="fa fa-pinterest"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </figcaption>
                                                </figure>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="item">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="col-item">
                                                <figure class="oriel-carousel">
                                                    <!-- POST IMAGE -->
                                                    <a href="single-project.html" class="ext-link">
                                                        <img src="images/photos/590x885.gif" class="img-responsive"
                                                             alt="">
                                                    </a>
                                                    <!-- POST CONTENT -->
                                                    <figcaption>
                                                        <div>
                                                            <h5>Hoteles</h5>
                                                            <hr>
                                                            <p>This text represents a brief introduction of team
                                                                member</p>
                                                            <!-- SOCIAL ICONS -->
                                                            <ul class="member-icons">
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="fa fa-facebook"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="fa fa-twitter"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="fa fa-linkedin"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="fa fa-pinterest"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </figcaption>
                                                </figure>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="col-item">
                                                <figure class="oriel-carousel">
                                                    <!-- POST IMAGE -->
                                                    <a href="single-project.html" class="ext-link">
                                                        <img src="images/photos/590x885.gif" class="img-responsive"
                                                             alt="">
                                                    </a>
                                                    <!-- POST CONTENT -->
                                                    <figcaption>
                                                        <div>
                                                            <h5>Casas Playa</h5>
                                                            <hr>
                                                            <p>This text represents a brief introduction of team
                                                                member</p>
                                                            <!-- SOCIAL ICONS -->
                                                            <ul class="member-icons">
                                                                <li>
                                                                    <a href="#">
                                                                      <i class="fa fa-facebook"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                       <i class="fa fa-twitter"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                       <i class="fa fa-linkedin"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                       <i class="fa fa-pinterest"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </figcaption>
                                                </figure>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="col-item">
                                                <figure class="oriel-carousel">
                                                    <!-- POST IMAGE -->
                                                    <a href="single-project.html" class="ext-link">
                                                        <img src="images/photos/590x885.gif" class="img-responsive"
                                                             alt="">
                                                    </a>
                                                    <!-- POST CONTENT -->
                                                    <figcaption>
                                                        <div>
                                                            <h5>Brad Doe</h5>
                                                            <hr>
                                                            <p>This text represents a brief introduction of team
                                                                member</p>
                                                            <!-- SOCIAL ICONS -->
                                                            <ul class="member-icons">
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="fa fa-facebook"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="fa fa-twitter"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="fa fa-linkedin"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="fa fa-pinterest"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
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
                            <div class="controls pull-right hidden-xs">
                                <a class="left fa fa-chevron-left btn " href="#carousel-example"
                                   data-slide="prev"></a><a class="right fa fa-chevron-right btn "
                                                            href="#carousel-example"
                                                            data-slide="next"></a>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="col-md-12">
                        <div>
                            <h2>Clientes</h2>
                        </div>
                        <div id="carousel-example-generic" class="carousel slide hidden-xs" data-ride="carousel">
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner">
                                <div class="item active">
                                    <div class="row">
                                        <div class="col-md-3 width-mediun">
                                            <div class="owl-item active" >
                                                <figure class="oriel-carousel">
                                                    <!-- POST IMAGE -->
                                                    <a href="single-project.html" class="ext-link">
                                                        <img src="images/photos/600x400.gif" class="img-responsive" alt="imagen">
                                                    </a>

                                                </figure></div>
                                        </div>
                                        <div class="col-md-3 width-mediun">
                                            <div class="owl-item active">
                                                <figure class="oriel-carousel">
                                                    <!-- POST IMAGE -->
                                                    <a href="single-project.html" class="ext-link">
                                                        <img src="images/photos/600x400.gif" class="img-responsive" alt="imagen">
                                                    </a>

                                                </figure></div>
                                        </div>
                                        <div class="col-md-3 width-mediun">
                                            <div class="owl-item active">
                                                <figure class="oriel-carousel">
                                                    <!-- POST IMAGE -->
                                                    <a href="single-project.html" class="ext-link">
                                                        <img src="images/photos/600x400.gif" class="img-responsive" alt="imagen">
                                                    </a>

                                                </figure></div>
                                        </div>
                                        <div class="col-md-3 width-mediun">
                                            <div class="owl-item active">
                                                <figure class="oriel-carousel">
                                                    <!-- POST IMAGE -->
                                                    <a href="single-project.html" class="ext-link">
                                                        <img src="images/photos/600x400.gif" class="img-responsive" alt="imagen">
                                                    </a>
                                                    <!-- POST CONTENT -->

                                                </figure></div>
                                        </div>

                                    </div>
                                </div>
                                <div class="item">
                                    <div class="row">
                                        <div class="col-md-3 width-mediun">
                                            <div class="owl-item active" >
                                                <figure class="oriel-carousel">
                                                    <!-- POST IMAGE -->
                                                    <a href="single-project.html" class="ext-link">
                                                        <img src="images/photos/600x400.gif" class="img-responsive" alt="imagen">
                                                    </a>

                                                </figure></div>
                                        </div>
                                        <div class="col-md-3 width-mediun">
                                            <div class="owl-item active" >
                                                <figure class="oriel-carousel">
                                                    <!-- POST IMAGE -->
                                                    <a href="single-project.html" class="ext-link">
                                                        <img src="images/photos/600x400.gif" class="img-responsive" alt="imagen">
                                                    </a>
                                                    <!-- POST CONTENT -->

                                                </figure>
                                            </div>
                                        </div>
                                        <div class="col-md-3 width-mediun">
                                            <div class="owl-item active" >
                                                <figure class="oriel-carousel">
                                                    <!-- POST IMAGE -->
                                                    <a href="single-project.html" class="ext-link">
                                                        <img src="images/photos/600x400.gif" class="img-responsive" alt="imagen">
                                                    </a>
                                                    <!-- POST CONTENT -->

                                                </figure>
                                            </div>
                                        </div>
                                        <div class="col-md-3 width-mediun">
                                            <div class="owl-item active" >
                                                <figure class="oriel-carousel">
                                                    <!-- POST IMAGE -->
                                                    <a href="single-project.html" class="ext-link">
                                                        <img src="images/photos/600x400.gif" class="img-responsive" alt="imagen">
                                                    </a>
                                                    <!-- POST CONTENT -->

                                                </figure>
                                            </div>
                                        </div>

                                    </div>
                                </div>
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