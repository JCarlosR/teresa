@extends('themes.classify.base')

@section('content')
<!-- Start Breadcrumb -->
        <div class="page-heading">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <h1 style="color:white"><b>PORTAFOLIO DE PROYECTOS</b></h1>
                        <div class="breadcrumb">
                            <a href="index.html" title="Volver a la página principal">Inicio</a>
                            <span class="delimeter">/</span>
                            <span class="current">Proyectos</span>
                            <div>
                              <span class='st_facebook_large' displayText='Facebook' ></span>
                              <span class='st_googleplus_large' displayText='Google +' ></span>
                              <span class='st_linkedin_large' displayText='LinkedIn' ></span>
                              <span class='st_twitter_large' displayText='Tweet' ></span>
                              <span class='st_pinterest_large' displayText='Pinterest' ></span>
                              <span class='st_fblike_large' displayText='Facebook Like' ></span>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Breadcrumb -->
        <!--START SERVICE-->
        <section class="home-main-contant-style bg-white">
            <div class="cd-home-title">
                <h2>Proyectos de Arquitectura y Construcción</h2>
                <p>Diferentes proyectos desarrollados por la oficina 1.8.10 Consultores en los años de experiencia ....</p>
            </div>
          </div>
            </div>
        </section>
        <!--END SERVICE-->
        <!-- START MAIN CONTAIN -->
        <div class="main-contain">
            <div class="container">

<div id="js-filters-masonry" class="cbp-l-filters-button">
    <div data-filter="*" class="cbp-filter-item-active cbp-filter-item">
        TODOS <div class="cbp-filter-counter"></div>
    </div>
    <div data-filter=".identity" class="cbp-filter-item">
        Acondicionamiento de Oficinas
        <div class="cbp-filter-counter"></div>
    </div>
    <div data-filter=".web-design" class="cbp-filter-item">
      Licencias de Funcionamiento
      <div class="cbp-filter-counter"></div>
    </div>
    <div data-filter=".graphic" class="cbp-filter-item"><!--.graphic-->
      Tramites Municipales de Licencia de Construcción
     <div class="#"></div>
    </div>
    <div data-filter="-" class="cbp-filter-item"><!--.graphic, .identity-->
      Soporte Técnico para Oficinas de Arquitectura

     <div data-filter=".graphic" class="cbp-filter-counter"></div>
    </div>
    <div data-filter=".graphic" class="cbp-filter-item"><!--.graphic, .identity-->
        Desarrollo de Planos de Seguridad y Evacuación<div class="cbp-filter-counter">
        </div>
    </div>
    <div data-filter=".graphic" class="cbp-filter-item"><!--.graphic, .identity-->
        Capacitación en Atención al Público <div class="cbp-filter-counter">
        </div>
    </div>
</div>

<ol>
                    @foreach ($projects as $project)
                        <li>
                            <a href="{{ $me->getLinkTo('/proyecto/'.$project->id) }}">
                                {{ $project->name }}
                            </a>.
                            <p>{{ $project->description }}</p>
                            <hr class="pg-titl-bdr-btm">
                        </li>
                    @endforeach
                </ol>
</div>


            </div>
        </div>
    <!-- END MAIN CONTAIN -->
@endsection
