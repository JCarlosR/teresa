@extends('themes.lindley.base')
@section('content')
    <section class="breadcrumb-section back-breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-sm-5">
                    <div class="h1-projects">
                        <h1>{{ $project->name }}</h1>
                    </div>
                </div>
                <div class="col-md-7 col-sm-7">
                    <nav id="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ $me->getLinkTo('/') }}"
                                                           title="Volver al inicio Lindely Arquitectos">Inicio </a></li>
                            <li class="breadcrumb-item"><a href="{{ $me->getLinkTo('/proyectos') }}"
                                                           title="Proyectos de Arquitectura Lindley Arquitectos">Proyectos </a>
                            </li>
                            <li class="breadcrumb-item active">{{ $project->name }}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-8 pad-t80 img-spacio">
                        @foreach ($project->images()->where('featured', false)->get() as $image)
                            <a href="{{ $image->full_path }}" class=" img-hover" title="{{ $image->name }}"> <img
                                        src="{{ $image->full_path }}" class="img-responsive " alt="{{ $image->name }}"
                                        title="{{ $image->name }}"></a>
                        @endforeach
                        <div>
                            <ul>
                                <li class="small-dialog-headline">
                                    <a data-toggle="modal" data-target="#myModal" class="button border medium ">
                                        <span>Solicitar Nuestro servicio</span></a>
                                </li>
                            </ul>

                            <div class="border-bt">
                                <h3> CARACTERÍSTICAS TÉCNICAS</h3>
                            </div>
                            {{--<small>¿Qué detalles técnicos especificarías?</small>--}}
                            <p> {!! $project->question_3 !!}</p>
                            <br>

                        </div>
                    </div>
                    <div class="col-md-4 pad40">
                        <div class="border-bt">
                            <h4> {{ $project->question_0 }}</h4>
                        </div>
                        <br>
                        @include('themes.lindley.includes.redes-sociales-link')
                        <br>
                        <p>  {{--<small>¿Cuál fue el encargo?</small>--}}
                            {!! $project->question_1 !!}</p>
                        <ul class="borde-ul">
                            <li><b>NOMBRE DEL PROYECTO:</b>{{ $project->name }}</li>

                            @if (! isset($project->services) || $project->services->count() == 0)
                                <p>---</p>
                            @else

                                @foreach ($project->services as $service)
                                    <li><b>SERVICIOS:</b>{{ $service->name }}</li>
                                @endforeach

                            @endif
                            <li><b>AÑO: </b>{{ $project->year }}</li>
                            <li><b>LOCACIÓN: </b></li>
                            <li><b>UBICACIÓN: </b></li>
                            <li><b>CLIENTE: </b>{{ $project->client ?: '---' }}</li>
                            <li><b>TIPO DE PROYECTO: </b>{{ $project->type ?: '---' }}</li>
                            <li><b>ÁREA DE TIENDA: </b></li>
                            <li><b>DURACIÓN DE PROYECTO:</b>{{ $project->duration ?: '---' }}</li>

                        </ul>
                        <br>
                        <ul>

                            <li class="small-dialog-headline">
                                <a data-toggle="modal" data-target="#myModal" class="button border medium ">
                                    <span>Escríbenos</span></a>
                            </li>
                        </ul>
                        <br>
                        <h4>DESARROLLO DEL PROYECTO</h4>
                        <p>  {{--<small>¿Cuál fue el planteamiento del proyecto?</small>--}}
                            {!! $project->question_2 !!}</p>


                        <br>
                        <ul>
                            <li class="small-dialog-headline">
                                <a data-toggle="modal" data-target="#myModal" class="button border medium ">
                                    <span>Escríbenos</span></a>
                            </li>
                        </ul>
                        <br>
                        {{--<h4>CARACTERÍSTICAS TÉCNICAS</h4>--}}

                        {{--<small>¿Qué detalles técnicos especificarías?</small>--}}
                        {{--<p> {!! $project->question_3 !!}</p>--}}


                    </div>

                </div>

            </div>

        </div>
    </section>

@endsection
