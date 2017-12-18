@extends('themes.lindley.base')

@section('content')
    <section class="breadcrumb-section back-breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-sm-5">
                    <div>
                        <h1 class="size-title">{{ $service->name }}</h1>
                    </div>
                </div>
                <div class="col-md-7 col-sm-7">
                    <nav id="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ $me->getLinkTo('/') }}" title="Volver al inicio Lindely Arquitectos">Inicio </a></li>
                            <li class="breadcrumb-item"><a href="{{ $me->getLinkTo('/servicios') }}" title="Servicios de Arquitectura Lindley Arquitectos">Servicios</a></li>

                            <li class="breadcrumb-item active">{{ $service->name }}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <section class="pad60">
        <div class="container">
            <div class="row">
                @include('themes.lindley.includes.service-nav')
                <div class="col-md-9">
                    <div class="col-md-6 img-service-prin">
                        @foreach ($service->images()->where('featured', false)->get() as $image)
                            <a  class="img-hover" title="{{ $service->name }}"><img src="{{ $image->full_path }}" class="img-responsive" alt="{{ $image->name }}" title="{{ $service->name }}"></a>
                        @endforeach
                    </div>
                    <div class="col-md-6">
                        <div class="border-bt">
                            <h2>{{ $service->name }}</h2>
                        </div>

                       {!! $service->question_1 !!}

                       {!! $service->question_2 !!}

                       {!! $service->question_3 !!}

                       {!! $service->question_5 !!}

                        <div class="border-t ">
                            <h3>PROYECTO DE ARQUITECTURA</h3>
                        </div>
                       {!! $service->question_4 !!}
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="pad40 ">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="border-bt-3">
                        <p>ALGUNOS DE NUESTROS CLIENTES, <span class="color-span"> ÚNETE A ELLOS!</span></p>
                    </div>
                    @include('themes.lindley.includes.clients-carousel')
                </div>
            </div>
        </div>
    </div>
@endsection
