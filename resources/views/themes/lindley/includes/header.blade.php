<div class="container">

    <div class="row">
        <div class="header">

            <div class="col-md-3 col-sm-12 col-xs-12">
                <div id="logo">
                    <a href="{{ $me->getLinkTo('/') }}" title="Lindley Arquitectos">
                        <img src="/themes/lindley/imagenes/logos/logo-lindley-arquitectos-web.jpg" alt="Lindley Arquitectos" title="Lindley Arquitectos"></a>
                </div>
            </div>

            <div class="col-md-9 col-sm-12 col-xs-12">
                <ul class="header-widget">

                    <li class="li-left">
                        {{--<i class="icon-location-pin"></i>--}}
                        <img src="/themes/lindley/imagenes/iconos/icono-location.png" alt="">
                        <div class="widget-content">
                            <span class="title">Síguenos</span>
                            <span class="data">
                <script src="//platform.linkedin.com/in.js" type="text/javascript" async>lang: es_ES</script>
                <script type="IN/FollowCompany" data-id="16157557" data-counter="right"></script>
              </span>
                            <span class="data"> </span>
                        </div>
                    </li>

                    <li class="li-right">
                        <a href="tel:+51987936976" title="Llamar a Lindley Arquitectos">
                            <img src="/themes/lindley/imagenes/iconos/icono-phone.png" alt=""></a>
                            {{--<i class="icon-call-in"></i></a>--}}
                        <div class="widget-content">
                            <span class="title">¿Consultas?</span>
                            <span class="data"> <a href="tel:+51987936976" title="Llamar a Lindley Arquitectos">(+51) 987-936-976 </a></span>
                        </div>
                    </li>



                        <li class="small-dialog-headline">
                            <a data-toggle="modal" data-target="#myModal"  class="button border medium ">
                                <span>Solicitar Servicio</span></a>
                        </li>

                </ul>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>

</div>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <nav class="navbar   navbar-personalized">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>

                    </div>
                    <div id="navbar" class="navbar-collapse collapse">
                        <ul class="nav navbar-nav menu">
                            <li class=""><a href="{{ $me->getLinkTo('/') }}" title="Volver al inicio Lindely Arquitectos">INICIO</a></li>
                            <li><a href="{{ $me->getLinkTo('/nosotros') }}" title="Sobre Lindley Arquitectos">NOSOTROS</a></li>
                            <li><a href="{{ $me->getLinkTo('/servicios') }}" title="Servicios de Arquitectura Lindley Arquitectos">SERVICIOS</a></li>
                            <li><a href="{{ $me->getLinkTo('/proyectos') }}" title="Proyectos de Lindley Arquitectos">PROYECTOS</a></li>
                            <li><a href="{{ $me->getLinkTo('/contacto') }}" title="Página de contacto Lindley Arquitectos">CONTACTO</a></li>

                        </ul>


                    </div><!--/.nav-collapse -->
                </div><!--/.container-fluid -->
            </nav>
        </div>

    </div>

</div>

