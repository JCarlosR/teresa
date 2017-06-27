@extends('themes.seo.base')

@section('content')
<!--Top Section-->
<section id="main-banner" class="one">
    <!--Banner Content-->
    <section class="banner-content">
        <div class="container">
            <div class="row">
                <div class="col-sm-7 center screen-height">
                    <div class="banner-main fondo-slider">
                        <h1>Presencia en Internet
                        <br>para Oficinas AEC. <br>{{ $me->name }}</h1>
                        <p><strong>{{ $me->description }}</strong></p>

                        <br>
                        <p><span class="data"><script src="//platform.linkedin.com/in.js" type="text/javascript"> lang: es_ES</script>
                        <script type="IN/FollowCompany" data-id="5212625" data-counter="right"></script></span>
                        <span class="data"> </span></p>

                        <a href="{{$me->getlinkTo('/servicios')}}" title="Vér proyectos de marketing digital de SEO-arquitectos" class="btn icon radius-2x hvr-bounce-to-right">Ver Servicios  <i class="icofont icofont-caret-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</section>
<!--Services-->
<section id="services" class="space one">
    <h4 class="rotate-heading">Servicios digitales</h4>
    <div class="container">
        <div class="text-center">
            <h2>Servicios de Marketing Digital</h2>
            <br>
            <p>{{ $me->services_description }}</p>
        </div>
        <div class="row">

        @foreach ($services->take(4) as $service)
            <div class="col-sm-3 service-block">
                <a href="{{ $me->getLinkTo('/servicio/'.$service->id) }}">
                    <h3>{{ $service->name }}</h3>
                </a>
                <p >
                    @if (strlen($service->description) > 25)
                        {{ $service->description }}
                    @else
                        Sin descripción.
                    @endif
                </p>
            </div>
        @endforeach

    </div>
    <br>
    <p><a href="{{ $me->getLinkTo('/servicios') }}" class="btn green-btn radius-2x hvr-bounce-to-right" style="margin-left:480px;">Ver todos los servicios</a></p>
</section>

<!--About us-->
<section id="about-us" class="one">
    <div class="text-center">
        <h4 class="rotate-heading">Sobre Nosotros</h4>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-sm-7 about-block space ">
                <h3>{{ $me->about_us->description }}</h3>
                <ul class="social-list list-horizontal share">
                    <span class='st_facebook_large' displayText='Facebook'></span>
                    <span class='st_googleplus_large' displayText='Google +'></span>
                    <span class='st_linkedin_large' displayText='LinkedIn'></span>
                    <span class='st_twitter_large' displayText='Tweet'></span>
                    <span class='st_pinterest_large' displayText='Pinterest'></span>
                    <span class='st_fblike_large' displayText='Facebook Like'></span>
                  </ul>

                <p>{!! $me->about_us->question_1 !!}</p>
                <a href="{{ $me->getLinkTo('/nosotros') }}" class="btn orange-btn radius-2x hvr-bounce-to-right">Sobre SEO-arquitectos</a>
            </div>
            <div class="col-sm-5 about-block">
            <img src="/themes/seo/imagenes/logos/logo-SEO-arquitectos-home.jpg" alt="Marketing Digital para oficinas de arquitectura, ingeniería y construcción AEC" title="Marketing Digital para oficinas de arquitectura, ingeniería y construcción AEC">
            </div>
        </div>
    </div>
</section>
<!--work-->
<section id="work" class="space bg orange-overlay" data-stellar-background-ratio="0.6">
    <h4 class="rotate-heading animate-in  left-out">Como trabajamos</h4>
    <div class="container">
        <!--main heading-->
        <div class="col-sm-12 main-heading no-padding">
            <h3>Creamos una estrategia para nuestros clientes</h3>
            <p> Nuestros servicios están hechos a medida para nuestros clientes y dirigir la marca hacia su público objetivo,
              <br>donde el resultado será tener una presencia activa en Internet y diferenciarse de la competencia.</p>
        </div>
        <div class="row">
            <div class="col-sm-4 work-block ">
                <div class="numbering">1.</div>
                <div class="work-text">
                    <h4><a href="#">Evaluación</a> </h4>
                    <p>Después de conocer el perfil de la empresa realizamos evaluaciones técnicas del dominio para a partir de esa evaluación proponer nuestra estrategia.</p>
                </div>
            </div>
            <div class="col-sm-4 work-block ">
                <div class="numbering">2.</div>
                <div class="work-text">
                    <h4><a href="#">Propuesta</a> </h4>
                    <p>En base a nuestros diagnósticos y estrategias proponemos un plan de trabajo anual con objetivos claros e informes periodicos de resultados.</p>
                </div>
            </div>
            <div class="col-sm-4 work-block ">
                <div class="numbering">3.</div>
                <div class="work-text">
                    <h4><a href="#">Desarrollo</a> </h4>
                    <p>Se inicia el servicio con un representante operativo de parte del cliente para la gestión de proyecto mediante herramientas digitales.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Portfolio-->
<section id="portfolio" class="space one">
    <h4 class="rotate-heading animate-in left-out">Proyectos destacados</h4>
    <div class="container">
        <!--main heading-->
        <div class="main-heading col-sm-12 no-padding ">
            <h2>Proyectos Digitales Recientes</h2>
            <p>{{ $me->projects_description }}</p>
        </div>
        <div class="row">
            <div class="col-sm-12 no-padding grid">
                <div class="grid-sizer"></div>


                    @foreach ($me->projects->take(3) as $project)
                        @if ($project->featuredImage)
                        <div class="col-sm-4 portfolio-block no-padding">
                            <div class="inner">
                                <img src="{{ $project->featuredImage->fullPath }}" class="img-responsive" title="{{ $project->featuredImage->name }}">
                                <div class="hover center">
                                    <div class="inner">
                                        <h4><a href="{{ $me->getLinkTo('/proyecto/'.$project->id) }}" title="Ver Proyecto {{ $project->name }}">{{ $project->name }}</a> </h4>
                                        <div class="category">
                                            {{ $project->services()->first()->name }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif
                    @endforeach

                </div>
            </div>
            <br>
            <br>
            <div class="col-sm-12 button text-center">
                <a href="{{ $me->getLinkTo('/proyectos') }}" title="Ver proyectos digitales de SEO-arquitectos" class="btn radius-2x hvr-sweep-to-right">Ver todos los proyectos</a>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials-->
<section id="testimonial" class="space black-overlay bg" data-stellar-background-ratio="0.6">
    <h4 class="rotate-heading animate-in left-out">Testimonios</h4>
    <div class="container">
        <!--main heading-->
        <div class="main-heading col-sm-12 no-padding animate-in move-up">
            <h3>Lo que opinan nuestros clientes</h3>
            <p>Algunos comentarios de nuestros clientes sobre nuestro trabajo y estrategia
                <br>del la representación digital de nuestros clientes.</p>
        </div>
        <div class="row">
            <div class="col-sm-12 owl-carousel owl-theme no-padding" id="testi-slider">

                <div class="item">
                    <div class="col-sm-4 testimonial-block animate-in move-up">
                        <div class="testi-header">
                            <img src="/themes/seo/imagenes/testimonios/hernani-canessa.jpg" alt="Testimonio Hernani Canessa de Vértice Arquitectos" title="Hernani Canessa de Vértice Arquitectos">
                            <div class="title">
                                <h4><a href="https://www.linkedin.com/in/hernani-canessa-lohmann-23333056/" title="Hernani Canessa Lohmann en Linkedin" target="new" rel="nofollow">Hernani Canessa</a> </h4>
                                <div class="company">Vértice Arquitectos</div>
                            </div>
                        </div>
                        <p>SEO-arquitectos nos ha posicionado fuertemente en las redes sociales, desde que trabajamos con SEO podemos llegar a más clientes con mejor información sobre nuestros proyectos.</p>
                    </div>
                    <div class="col-sm-4 testimonial-block animate-in move-up">
                        <div class="testi-header">
                            <img src="/themes/seo/imagenes/testimonios/belen-rodriguez.jpg" alt="Belén rodriguez de HorasdLuz design Studio" title="Belén rodriguez de HorasdLuz design Studio">
                            <div class="title">
                                <h4><a href="https://www.linkedin.com/in/belenhorasdluz/" title="Belén Rodriguez Horasdluz en Linkedin" target="new" rel="nofollow">Belén Rodriguez</a> </h4>
                                <div class="company">Horasdluz Design Studio</div>
                            </div>
                        </div>
                        <p>SEO-arquitectos nos ofreció un servicio impecable. Fue increíble los resultados que obtuvimos al hacer campañas de anuncios digitales después de optimizar la web con ellos.</p>
                    </div>
                    <div class="col-sm-4 testimonial-block animate-in move-up">
                        <div class="testi-header">
                          <img src="/themes/seo/imagenes/testimonios/daniel-basurto-archicad.jpg" alt="Daniel Basurto Representante Archicad Perù" title="Daniel Basurto Representante Archicad Perù">
                            <div class="title">
                                <h4><a href="#">Daniel Basurto</a> </h4>
                                <div class="company">Graphisoft Perú</div>
                            </div>
                        </div>
                        <p>Gracias a SEO-arquitectos hemos conseguido un posicionamiento en Internet de nuestro producto ARCHICAD software BIM para la industria AEC. </p>
                    </div>
                </div>
                <div class="item">
                    <div class="col-sm-4 testimonial-block animate-in move-up">
                        <div class="testi-header">
                            <img src="themes/seo/imagenes/testimonios/hernani-canessa.jpg" alt="Testimonio Hernani Canessa de Vértice Arquitectos" title="Hernani Canessa de Vértice Arquitectos">
                            <div class="title">
                                <h4><a href="https://www.linkedin.com/in/hernani-canessa-lohmann-23333056/" title="Hernani Canessa Lohmann en Linkedin" target="new" rel="nofollow">Hernani Canessa</a> </h4>
                                <div class="company">Vértice Arquitectos</div>
                            </div>
                        </div>
                        <p>SEO-arquitectos nos ha posicionado fuertemente en las redes sociales, desde que trabajamos con SEO podemos llegar a más clientes con mejor información sobre nuestros proyectos.</p>
                    </div>
                    <div class="col-sm-4 testimonial-block animate-in move-up">
                        <div class="testi-header">
                            <img src="/themes/seo/imagenes/testimonios/belen-rodriguez.jpg" alt="Belén rodriguez de HorasdLuz design Studio" title="Belén rodriguez de HorasdLuz design Studio">
                            <div class="title">
                                <h4><a href="https://www.linkedin.com/in/belenhorasdluz/" title="Belén Rodriguez Horasdluz en Linkedin" target="new" rel="nofollow">Belén Rodriguez</a> </h4>
                                <div class="company">Horasdluz Design Studio</div>
                            </div>
                        </div>
                        <p>SEO-arquitectos nos ofreció un servicio impecable. Fue increíble los resultados que obtuvimos al hacer campañas de anuncios digitales después de optimizar la web con ellos.</p>
                    </div>
                    <div class="col-sm-4 testimonial-block animate-in move-up">
                        <div class="testi-header">
                          <img src="/themes/seo/imagenes/testimonios/daniel-basurto-archicad.jpg" alt="Daniel Basurto Representante Archicad Perù" title="Daniel Basurto Representante Archicad Perù">
                            <div class="title">
                                <h4><a href="#">Daniel Basurto</a> </h4>
                                <div class="company">Graphisoft Perú</div>
                            </div>
                        </div>
                        <p>Gracias a SEO-arquitectos hemos conseguido un posicionamiento en Internet de nuestro producto ARCHICAD software BIM para la industria AEC.</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>


@endsection
