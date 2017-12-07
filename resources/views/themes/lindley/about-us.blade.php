@extends('themes.lindley.base')
@section('content')

    <section class="breadcrumb-section back-breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-sm-5">
                    <div class="title-pes">
                        <h1>Nosotros</h1>
                        <span>Oficina de Arquitectura Comercial especializada</span>
                    </div>
                </div>
                <div class="col-md-7 col-sm-7">
                    <nav id="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ $me->getLinkTo('/') }}" title="Volver al inicio Lindely Arquitectos">Inicio </a></li>

                            <li class="breadcrumb-item active">Nosotros</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row">
                <div class="sidebar col-md-3">

                    <div class="pad-bt40 pad-t40">
                        <a data-toggle="modal" data-target="#myModal" class="btn-message">
                            <i class="fa fa-envelope-o" aria-hidden="true"></i>
                            <span>Escríbenos</span>
                        </a>
                    </div>

                    <div class="back-about pad-t20">
                        <h4>LA OFICINA</h4>
                        <span>San Borja. Lima, Perú.</span>
                        <p>Tel. 1: <span>  <a href=""> (51) 226-4952</a></span></p>
                        <p>Tel. 2: <span><a href=""> (51) 987-936-976</a></span></p>

                    </div>

                </div>
                <div class="col-md-9 ">
                    <div class="border-bt-2  pad-t40">
                        <h2 class="left">LINDLEY ARQUITECTOS</h2>


                    </div>
                    <div class="col-md-6">
                        <br>
                        <div class="media-left">
                            @include('themes.lindley.includes.redes-sociales-link')
                        </div>
                        <br>
                        @if(isset($aboutUs))
                            {!! $aboutUs->question_1 !!}
                            {!! $aboutUs->question_2 !!}
                            {!! $aboutUs->question_4 !!}
                            {!! $aboutUs->question_5 !!}
                            {!! $aboutUs->question_6 !!}

                        @endif
                    </div>
                    <div class="col-md-6">
                        @foreach ($aboutUs->images as $key => $image)
                            <a href="/images/about-us/{{ $image->file_name }}" class="img-hover" title="{{ $image->name }}">
                                <img src="/images/about-us/{{ $image->file_name }}" alt="{{ $image->name }}" title="{{ $image->name }}" class="img-responsive "></a>
                        @endforeach
                    </div>
                    <div class="col-md-12">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item active">
                                <a class="nav-link " data-toggle="tab" href="#home" role="tab">EXPERIENCIA</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#profile" role="tab">ÚLTIMO PROYECTO</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#messages" role="tab">ESTUDIOS Y
                                    CERTIFICACIONES</a>
                            </li>

                        </ul>


                        <div class="tab-content">
                            <div class="tab-pane active" id="home" role="tabpanel">La arquitecta a cargo Catherine
                                Lindley ha realizado más de 20 tiendas comerciales en las diferentes fases constructivas
                                de una tienda retail.
                                Las tiendas en centros comerciales tienen diferentes parámetros, plazos y horarios de
                                una obra convencional, es una especialidad.
                            </div>
                            <div class="tab-pane" id="profile" role="tabpanel">Nuestro último proyecto fue la tienda
                                Colloky en la 2da etapa del Centro Comercial Jockey Plaza en Lima, Perú.
                            </div>
                            <div class="tab-pane" id="messages" role="tabpanel">La arquitecta resposable del Lindley
                                Arquitectos es egresada de la Universidad Ricardo Palma y con estudios de diferentes
                                especialidades de arquitectura comercial y retail.
                            </div>

                        </div>
                    </div>
                    <div class="col-md-12 pad40 border-bt-2 link-projects">
                        <h2><a href="{{ $me->getLinkTo('/proyectos') }}">VER TODOS LOS PROYECTOS</a></h2>
                    </div>


                </div>

            </div>
        </div>
    </section>

@endsection