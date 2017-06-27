@extends('themes.seo.base')

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
                        <a href="{{ $me->getLinkTo('/') }}">Inicio</a>
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
                  <p><span class="data">
                      <script src="//platform.linkedin.com/in.js" type="text/javascript"> lang: es_ES</script>
                      <script type="IN/FollowCompany" data-id="5212625" data-counter="right"></script></span>
                      <span class="data"> </span></p>

                    <h2>Estamos en el rubro desde el 2011</h2>

                    <p>{!! $me->about_us->question_1 !!}</p>
                    <br>
                    @foreach ($me->about_us->images as $image)
                        <img src="{{ asset('/images/about-us/'.$image->file_name) }}" alt="Acerca de {{ $me->name }}">
                    @endforeach
                    <br>
                    <p>{!! $me->about_us->question_2 !!}</p>

                    <h3>Nuestra Visión del Futuro</h3>
                    <p>{!! $me->about_us->question_6 !!}</p>
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
                        <p>{!! $me->about_us->question_3 !!}</p>
                        <img src="imagenes/inicios-seo-arquitectos.jpg" class="animate-in move-up" alt="Foto recuerdo del inicio de SEO-arquitectos" title="Foto recuerdo del inicio de SEO-arquitectos">
                    </div>
                    <div class="item green space-top">
                        <h3 class="animate-in move-up">¿Cual es nuestra especialidad?</h3>
                        <p>{!! $me->about_us->question_2 !!}</p>
                        <img src="imagenes/inicios-seo-arquitectos.jpg" class="animate-in move-up" alt="Foto recuerdo del inicio de SEO-arquitectos" title="Foto recuerdo del inicio de SEO-arquitectos">
                    </div>
                    <div class="item orange space-top">
                        <h3 class="animate-in move-up">¿Cuales son los objetivos de la empresa?</h3>
                        <p>{!! $me->about_us->question_5 !!}</p>
                        <img src="imagenes/inicios-seo-arquitectos.jpg" class="animate-in move-up" alt="Foto recuerdo del inicio de SEO-arquitectos" title="Foto recuerdo del inicio de SEO-arquitectos">
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
