@extends('themes.lindley.base')

@section('content')
    <section class="breadcrumb-section back-breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-sm-5">
                    <div>
                        <h1>Servicios</h1>
                    </div>
                </div>
                <div class="col-md-7 col-sm-7">
                    <nav id="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ $me->getLinkTo('/') }}">Inicio </a></li>

                            <li class="breadcrumb-item active">Servicios</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <section class="pad-bt100">
        <div class="container">
            <div class="row">
                @foreach ($services as $service)
                <div class="col-md-4 col-sm-6 col-xs-12  heig-serv ">

                @if($service->featuredImage)
                <img src="{{ $service->featuredImage->fullPath }}" alt="">
                @endif
                <h3>{{ $service->name }}</h3>
                <p>{{ $service->description }}</p>
                <a href="{{ $me->getLinkTo('/servicio/'.$service->id) }}" class="button back-btn">Ver más</a>

                </div>
                @endforeach
                {{--<div class="col-md-4 col-sm-6 col-xs-12 heig-serv">--}}
                    {{--<img src="/themes/lindley/imagenes/servicios/1.jpg" alt="">--}}
                    {{--<h3>TIENDA RETAIL</h3>--}}
                    {{--<p>El servicio principal de la oficina de Lindley Arquitectos es el Diseño y Remodelación de locales--}}
                        {{--comerciales y Tiendas Retail para Centros Comerciales.</p>--}}
                    {{--<a href="" class="button back-btn">Ver más</a>--}}

                {{--</div>--}}
                {{--<div class="col-md-4 col-sm-6 col-xs-12 heig-serv">--}}
                    {{--<img src="/themes/lindley/imagenes/servicios/1.jpg" alt="">--}}
                    {{--<h3>DESARROLLO INTEGRAL</h3>--}}

                    {{--<p>Desarrollamos el Proyecto de Arquitectura con detalles y todas las especialidades, diseños, mantenimiento, construcción, supervisión que sean necesarias.</p>--}}
                    {{--<a href="" class="button back-btn">Ver más</a>--}}

                {{--</div>--}}
                {{--<div class="col-md-4 col-sm-6 col-xs-12 heig-serv">--}}
                    {{--<img src="/themes/lindley/imagenes/servicios/1.jpg" alt="">--}}
                    {{--<h3>IMPLEMENTACÍON TIENDAS RETAIL</h3>--}}
                    {{--<p>Servicios de implementación, mantenimiento por Lindley Arquitectos, implementando más de 10 Tiendas Retail en centros comerciales y ciudades del Perú.</p>--}}
                    {{--<a href="" class="button back-btn">Ver más</a>--}}

                {{--</div>--}}
                {{--<div class="col-md-4 col-sm-6 col-xs-12 heig-serv">--}}
                    {{--<img src="/themes/lindley/imagenes/servicios/1.jpg" alt="">--}}
                    {{--<h3>MANTENIMIENTO TIENDAS--}}

                    {{--</h3>--}}
                    {{--<p>Mantenimiento general de Tiendas y Locales Comerciales, y de todo lo que sea Necesario para que todas las instalaciones del local estén siempre operativas.</p>--}}
                    {{--<a href="" class="button back-btn">Ver más</a>--}}

                {{--</div>--}}
                {{--<div class="col-md-4 col-sm-6 col-xs-12 heig-serv">--}}
                    {{--<img src="/themes/lindley/imagenes/servicios/1.jpg" alt="">--}}
                    {{--<h3>DISEÑO DE PLANOS DE SEGURIDAD--}}

                    {{--</h3>--}}
                    {{--<p>Servicio especializado de diseño del Proyecto de Seguridad para diferentes tiendas retail y locales comerciales por Lindley Arquitectos,Lima, Perú.</p>--}}
                    {{--<a href="" class="button back-btn">Ver más</a>--}}

                {{--</div>--}}
                {{--<div class="col-md-4 col-sm-6 col-xs-12 heig-serv">--}}
                    {{--<img src="/themes/lindley/imagenes/servicios/1.jpg" alt="">--}}
                    {{--<h3>SUPERVISIÓN PROYECTOS--}}

                    {{--</h3>--}}
                    {{--<p>Servicio de supervisión del proyectos comerciales en especialidades como construcción e implementación de Tiendas y locales Retail en centros comerciales.</p>--}}
                    {{--<a href="" class="button back-btn">Ver más</a>--}}

                {{--</div>--}}
                {{--<div class="col-md-4 col-sm-6 col-xs-12 col-md-offset-4 heig-serv ">--}}
                    {{--<img src="/themes/lindley/imagenes/servicios/1.jpg" alt="">--}}
                    {{--<h3>--}}
                        {{--MANTENIMIENTO SISTEMA SEGURIDAD--}}

                    {{--</h3>--}}
                    {{--<p>Mantenimiento general de Tiendas y Locales Comerciales, y de todo lo que sea Necesario para que todas las instalaciones del local estén siempre operativas.</p>--}}
                    {{--<a href="" class="button back-btn">Ver más</a>--}}

                {{--</div>--}}

            </div>
        </div>
    </section>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="border-bt-3">
                    <p>ALGUNOS DE NUESTROS CLIENTES, <span class="color-span"> ÚNETE A ELLOS!</span></p>
                </div>


            </div>
        </div>
        @include('themes.lindley.includes.clients-carousel')
    </div>
@endsection
