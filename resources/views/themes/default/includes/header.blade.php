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
                <a class="navbar-brand" href="{{ $me->getLinkTo('/') }}">{{ $me->name }}</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="{{ $me->getLinkTo('/') }}">Inicio</a></li>
                    <li><a href="{{ $me->getLinkTo('/nosotros') }}">Nosotros</a></li>
                    <li><a href="{{ $me->getLinkTo('/servicios') }}">Servicios</a></li>
                    <li><a href="{{ $me->getLinkTo('/proyectos') }}">Proyectos</a></li>
                    <li><a href="{{ $me->getLinkTo('/contacto') }}">Contacto</a></li>
                </ul>
            </div>
        </div>
    </nav>
</div>
<!--HEADER END-->