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
                <p>{{ $me->projects_description }}</p>
            </div>
        </div>
    </div>
</section>
<!--END SERVICE-->
<!-- START MAIN CONTAIN -->
<div class="main-contain">
    <div class="container">



        <div class="port-sec">
                    <div class="col-md-12 fil-btn text-center">
                        <div class="filter wrk-title active" data-filter="all" style="">Ver todos</div>
                        @foreach ($me->services as $service)
                            <div class="filter wrk-title" data-filter=".category-{{ $service->id }}">
                                {{ $service->name }}
                            </div>
                        @endforeach
                    </div>
                    <div id="Container">
                        @foreach ($me->projects as $project)
                            @if ($project->featuredImage)
                                <div class="filimg mix @foreach ($project->services as $service) category-{{ $service->id }}  @endforeach col-md-4 col-sm-4 col-xs-12" data-myorder="{{ $project->id }}">

                                    <a href="{{ $me->getLinkTo('/proyecto/'.$project->id) }}">
                                        <img src="{{ $project->featuredImage->fullPath }}" class="img-responsive" title="{{ $project->featuredImage->name }}">
                                    </a>
                                    
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
    </div>


</div>
</div>
    <!-- END MAIN CONTAIN -->
@endsection
