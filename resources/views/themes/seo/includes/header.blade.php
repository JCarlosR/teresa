<!--HEADER START-->
            <header class="header-3">
                <nav class="navbar active" data-spy="affix" data-offset-top="1" id="slide-nav">
                    <div class="container">
                        <div class="navbar-header col-sm-3 col-md-3 col-xs-12">
                            <button type="button" class="navbar-toggle">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                                <a class="menu-logo black" href="{{ $me->getLinkTo('/') }}">{{ $me->name }}</a>
                        </div>
                        <!--Nav links-->

                        <div class=" navbar-collapse col-sm-9 col-md-9" id="menu_nav">
                            <a href="#" class="closs"><i class="icofont"></i></a>
                            <ul class="nav navbar-nav">
                      <li><a href="{{ $me->getLinkTo('/nosotros') }}" title="Sobre SEO-arquitectos">Nosotros</a></li>
                      <li><a href="{{ $me->getLinkTo('/servicios') }}" title="Servicios digitales que ofrecemos">Servicios</a></li>
                      <li><a href="{{ $me->getLinkTo('/proyectos') }}" title="Proyectos destacados">Proyectos</a></li>
                      <li><a href="publicaciones.html" title="Artículos de opinión sobre Presencia en Internet para oficinas AEC">Publicaciones</a></li>
                      <li><a href="{{ $me->getLinkTo('/contacto') }}" title="Datos de contacto">Contacto</a></li>
                            </ul>
                        </div>
                        <!--/.navbar-collapse-->
                    </div>
                </nav>
            </header>
<!--HEADER END-->
