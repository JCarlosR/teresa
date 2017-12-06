


<!-- START NAVBAR -->
<nav class="navbar navbar-default navbar-fixed-top menu-top">
    <div class="container bottom-bor ">

        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar top-bar"></span>
                <span class="icon-bar middle-bar"></span>
                <span class="icon-bar bottom-bar"></span>
            </button>
            <!-- LOGO -->
            <a class="navbar-brand" href="{{ $me->getLinkTo('/') }}"><img src="/themes/flat/imagenes/logo-flat.jpg" alt=""></a>
            <!-- END LOGO -->
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse mediun navbar-collapse  " id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav  ">
                {{--<li><a href="/">Home</a></li>--}}
                <li><a href="{{ $me->getLinkTo('/nosotros') }}">Nosotros</a></li>
                <li><a href="{{ $me->getLinkTo('/proyectos') }}">Portafolio</a></li>
                {{--<li><a href="/contacto">contacto</a></li>--}}
                <li><a href="{{ $me->getLinkTo('/citas') }}">Ensayos</a></li>
                <li><a href="{{ $me->getLinkTo('/articulos') }}">Historicos</a></li>
                <li><a href="/fotos-telefono">Fotos Telefonos</a></li>

            </ul>
            <ul class="nav navbar-nav navbar-right none">
                <li><a class="fa fa-facebook"></a></li>
                <li><a class="fa fa-linkedin"></a></li>
                <li><a class="fa fa-pinterest"></a></li>
            </ul>


        </div><!-- /.navbar-collapse -->

    </div><!-- /.container -->
</nav>
<!-- END START NAVBAR -->
