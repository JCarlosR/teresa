<div class="container">

    <div class="row">
        <div class="header">

            <div class="col-md-3 col-sm-12 col-xs-12">
                <div id="logo">
                    <a href="{{ $me->getLinkTo('/') }}}" title="">
                        <img src="/themes/lindley/imagenes/logos/logo-lindley-arquitectos-web.jpg" alt="Lindley Arquitectos" title="Lindley Arquitectos"></a>
                </div>
            </div>

            <div class="col-md-9 col-sm-12 col-xs-12">
                <ul class="header-widget">

                    <li class="li-left">
                        <i class="icon-location-pin"></i>
                        <div class="widget-content">
                            <span class="title">Síguenos</span>
                            <span class="data">
                <script src="//platform.linkedin.com/in.js" type="text/javascript">lang: es_ES</script>
                <script type="IN/FollowCompany" data-id="16157557" data-counter="right"></script>
              </span>
                            <span class="data"> </span>
                        </div>
                    </li>

                    <li class="li-right">
                        <i class="icon-call-in"></i>
                        <div class="widget-content">
                            <span class="title">¿Consultas?</span>
                            <span class="data"> <a href="#">(+51) 987-936-976 </a></span>
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
                            {{--poner active el class vacio estudiar ese tema--}}
                            <li class=""><a href="{{ $me->getLinkTo('/') }}">INICIO</a></li>
                            <li><a href="{{ $me->getLinkTo('/nosotros') }}">NOSOTROS</a></li>
                            <li><a href="{{ $me->getLinkTo('/servicios') }}">SERVICIOS</a></li>
                            <li><a href="{{ $me->getLinkTo('/proyectos') }}">PROYECTOS</a></li>
                            <li><a href="{{ $me->getLinkTo('/contacto') }}">CONTACTO</a></li>

                        </ul>


                    </div><!--/.nav-collapse -->
                </div><!--/.container-fluid -->
            </nav>
        </div>

    </div>

</div>

