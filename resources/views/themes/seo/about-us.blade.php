@extends('themes.seo.base')

@section('styles')
    <style>
        #myCarousel img {
            margin: 0 auto;
            height: auto;
        }
    </style>
@endsection

@section('content')
<section id="breadcrumb" class="two green-color">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center breadcrumb-block">
                <h1>Sobre Nosotros SEO-arquitectos</h1>
                <ul class="social-list list-horizontal share">
                    <span class='st_facebook_large' displayText='Facebook'></span>
                    <span class='st_googleplus_large' displayText='Google +'></span>
                    <span class='st_linkedin_large' displayText='LinkedIn'></span>
                    <span class='st_twitter_large' displayText='Tweet'></span>
                    <span class='st_pinterest_large' displayText='Pinterest'></span>
                    <span class='st_fblike_large' displayText='Facebook Like'></span>
                  </ul>
                <ol class="breadcrumb">
                    <li>
                        <a href="index.html">Inicio</a>
                    </li>
                    <li class="active">Nosotros</li>
                </ol>
            </div>
        </div>
    </div>
</section>
    <!--Services-->
    <section id="services" class="space-top one">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 service-block text-center">
                  <p><span class="data"><script src="//platform.linkedin.com/in.js" type="text/javascript"> lang: es_ES</script>
                      <script type="IN/FollowCompany" data-id="5212625" data-counter="right"></script></span>
                      <span class="data"> </span></p>

                    <h2>Estamos en el rubro desde el 2011</h2>

                    <p>SEO-arquitectos es una empresa de servicios digitales y presencia en Internet para oficinas de Arquitectura, Ingeniería, construcción del rubro AEC que ofrece servicios de marketing digital con una propuesta disruptiva basada en el White Hat SEO.</p>
                    <br>
                    <img src="imagenes/logos/SEO-arquitectos-logo.jpg" alt="SEO-arquitectos Presencia en Internet para Oficinas AEC">
                    <br>
                    <p>Somos especialistas en en Internet, es decir, creamos y manejamos la información digital de nuestros representados,<br>
                    sabemos programación, edición, estrategias digitales, marketing de contenido, difusión digital del rubro AEC<br>
                    entre otros servicios.</p>

                    <h3>Nuestra Visión del Futuro</h3>
                    <p>Dentro de los proximos 5 años seremos capaces de atender a más de 100 oficinas de la AEC en idioma Español con idiomas secundarios inglés y francés. En los proóximos 20 años seremos la referencia de herramientas digitales para oficinas AEC en el mundo por nuestro proposito de investigar, probar y usar las diversas alternativas del mercado para ofrecerlas a nuestros clientes.</p>
                </div>
            </div>
        </div>
    </section>
    <!--action 1-->
    <section class="action-3">
        <div class="container-fluid">
            <div class="row">
                <!--main heading-->
                <div class="main-heading two col-sm-12 no-padding text-center owl-carousel owl-theme action_3-slider">
                    <div class="item blue space-top">
                        <h3 class="animate-in move-up">¿Como Nace SEO-arquitectos?</h3>
                        <p>La empresa nace en el año 2014 en Lima, despues de una investigación en el rubro AEC la carencia de contenidos relevantes y falta de asesoría al sector.<br>
                        Creamos primero la marca SEO-arquitectos que muy rapidamente se posicionó en los medios digitales<br>
                         por el nombre del domino y las estrategias que ofrecemos aplicadas a nuestra marca.</p>
                        <img src="imagenes/inicios-seo-arquitectos.jpg" class="animate-in move-up" alt="Foto recuerdo del inicio de SEO-arquitectos" title="Foto recuerdo del inicio de SEO-arquitectos">
                    </div>
                    <div class="item green space-top">
                        <h3 class="animate-in move-up">¿Cual es nuestra especialidad?</h3>
                        <p>Entre los diversos servicios el más destacado es "Presencia en Internet" que engloba todo el soporte digital y difusión de proyectos en medios digitales del rubro AEC. <br>
                          Contamos con herramientas de trabajo colaborativo para poder sistematizar procesos entre nosotros y los clientes.</p>
                        <img src="imagenes/inicios-seo-arquitectos.jpg" class="animate-in move-up" alt="Foto recuerdo del inicio de SEO-arquitectos" title="Foto recuerdo del inicio de SEO-arquitectos">
                    </div>
                    <div class="item orange space-top">
                        <h3 class="animate-in move-up">¿Cuales son los objetivos de la empresa?</h3>
                        <p>El objetivo principal de nuestros servicios dar soporte y consultorías de marekting digital y SEO avanzado a oficinas del rubro AEC<br>
                           en todos los paises e idiomas nos sea posible mediante el uso y creación de herramientas internas para lograr este fin.</p>
                        <img src="imagenes/inicios-seo-arquitectos.jpg" class="animate-in move-up" alt="Foto recuerdo del inicio de SEO-arquitectos" title="Foto recuerdo del inicio de SEO-arquitectos">
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
