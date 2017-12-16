
<div class="container width-full">
    <div class="row">
        <!--    Start Logo -->
        <div class="col-md-3 col-sm-3 col-xs-12">
            <div class="logo">
                <a href="/">
                    <img src="/themes/samuel/imagenes/logo-samuel-cardenas.png" alt="Samuel Cardenas"
                         title="Samuel Cardenas">  <!--  Change Logo here -->
                </a>
            </div>
        </div>
        <!--      End Logo -->

        <!--    Start Header Menu -->
        <div class="col-md-9 col-sm-9 col-xs-12 " id="#">
            <nav class="mainmenu">
                <div class="navbar">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse"
                                data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="navbar-collapse collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a class="section-scroll" href="{{ $me->getLinkTo('/nosotros') }}" title="Sobre Nosotros">Nosotros</a></li>
                            <li><a class="section-scroll" href="{{ $me->getLinkTo('/servicios') }}" title="Servicios Samuel Cardenas">Servicios</a>
                            </li>
                            <li><a class="section-scroll" href="{{ $me->getLinkTo('/proyectos') }}"
                                   title="Proyecto Samuel Cardenas">proyecto</a></li>
                            <!---#screenshot-->
                            <li><a class="section-scroll" href="{{ $me->getLinkTo('/reconcimientos') }}"
                                   title="Reconocimientos Samuel Cardenas">reconocimiento</a></li>
                            <li><a class="section-scroll" href="{{ $me->getLinkTo('/contacto') }}"
                                   title="Oficina Samuel Cardenas">Contacto</a></li><!---#feature*/-->

                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <!--      End Header Menu -->
    </div>
</div>

{{--<!--HEADER START-->--}}
{{--<div class="main-navigation navbar-fixed-top">--}}
    {{--<nav class="navbar navbar-default">--}}
        {{--<div class="container">--}}
            {{--<div class="navbar-header">--}}
                {{--<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">--}}
                    {{--<span class="icon-bar"></span>--}}
                    {{--<span class="icon-bar"></span>--}}
                    {{--<span class="icon-bar"></span>--}}
                {{--</button>--}}
                {{--<a class="navbar-brand" href="{{ $me->getLinkTo('/') }}">{{ $me->name }}</a>--}}
            {{--</div>--}}
            {{--<div class="collapse navbar-collapse" id="myNavbar">--}}
                {{--<ul class="nav navbar-nav navbar-right">--}}
                    {{--<li class="active">--}}
                        {{--<a href="{{ $me->getLinkTo('/') }}">Inicio</a></li>--}}
                    {{--<li><a href="{{ $me->getLinkTo('/nosotros') }}">Nosotros</a></li>--}}
                    {{--<li><a href="{{ $me->getLinkTo('/servicios') }}">Servicios</a></li>--}}
                    {{--<li><a href="{{ $me->getLinkTo('/proyectos') }}">Proyectos</a></li>--}}
                    {{--<li><a href="{{ $me->getLinkTo('/contacto') }}">Contacto</a></li>--}}
                {{--</ul>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</nav>--}}
{{--</div>--}}
{{--<!--HEADER END-->--}}
