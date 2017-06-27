@extends('themes.seo.base')

@section('content')
<!--Bread Crumb-->
    <section id="breadcrumb" class="two green-color">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center breadcrumb-block">
                    <h1>Servicios de marketing digital para Oficinas AEC</h1>
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
                            <a href="{{ $me->getLinkTo('/') }}">Inicio</a>
                        </li>
                        <li class="active">Servicios</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <!--Services-->
    <section id="services" class="space one border-bottom-full">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-md-9 services-base no-padding">
                  <p class="lead">Todos los servicios digitales que ofrecemos tienen el fin de externalizar, asesorar y gestionar la tarea digital para lograr así conversiones digitales y la globlaización de su oficina de arquitectura, ingeniería y construcción.</p>
                  <br>
                  <p>
                      <span class="data">
                          <script src="//platform.linkedin.com/in.js" type="text/javascript"> lang: es_ES</script>
                          <script type="IN/FollowCompany" data-id="5212625" data-counter="right"></script>
                      </span>
                      <span class="data"></span>
                  </p>
                  <br>

                    @foreach ($services as $service)
                    <div class="col-sm-4 service-block">
                        <a href="{{ $me->getLinkTo('/servicio/'.$service->id) }}">
                            <h3>{{ $service->name }}</h3>
                        </a>
                        <p>
                            @if (strlen($service->description) > 25)
                            {{ $service->description }}
                            @else
                            Sin descripción.
                            @endif
                        </p>
                        <a href="{{ $me->getLinkTo('/servicio/'.$service->id) }}" title="Presencia en Internet para Oficinas AEC" class="btn green-btn">Ver más</a>
                    </div>
                    @endforeach

                </div>

                <aside class="col-sm-4 col-md-3">

                    <div class="widget testimonial green-bg">
                        <h4>Testimonios</h4>
                        <div class="owl-theme owl-carousel" id="testi-slider">
                            <div class="item">
                                <div class="testimonial-block">
                                    <p>“SEO-arquitectos nos ofreció un servicio impecable. Fue increíble los resultados que obtuvimos al hacer campañas de anuncios digitales después de optimizar la web con ellos.</p>
                                    <div class="name">Belén Rodriguez</div>
                                    <div class="profession">Horasdluz Design Studio</div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimonial-block">
                                    <p>“SEO-arquitectos nos ha posicionado fuertemente en las redes sociales, desde que trabajamos con SEO podemos llegar a más clientes con mejor información sobre nuestros proyectos.</p>
                                    <div class="name"> Hernani Canessa Lohmann</div>
                                    <div class="profession">Vértice Arquitectos</div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimonial-block">
                                    <p>“Lorem ipsum dolor sit amet, consec adipiscing elit, sed diam nonummy euismod tincidunt ut laoreet dolore aliquam erat volutpat. Ut wisi enim ad veniam, quis nostrud exerci tation.</p>
                                    <div class="name">David Ramon</div>
                                    <div class="profession">Businessman</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </section>
@endsection
