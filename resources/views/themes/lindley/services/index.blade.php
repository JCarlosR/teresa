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
                    {{--<img src="" alt="">--}}
                    {{--<h3>DESARROLLO INTEGRAL</h3>--}}
                    {{--<p>Basándonos en el layout y parámetros que nos da el cliente, desarrollamos el proyecto de--}}
                        {{--arquitectura con detalles y especialidades como instalaciones eléctricas, instalaciones--}}
                        {{--sanitarias, instalaciones de seguridad, instalaciones electromecánicas y estructurales según sea--}}
                        {{--el requerimiento, con todos estos planos y documentos, tramitar las diversas licencias del--}}
                        {{--proyecto con el centro comercial o al Municipio correspondiente.</p>--}}
                    {{--<a href="" class="button back-btn">Ver más</a>--}}

                {{--</div>--}}
                {{--<div class="col-md-4 col-sm-6 col-xs-12 heig-serv">--}}
                    {{--<img src="" alt="">--}}
                    {{--<h3>IMPLEMENTACÍON TIENDAS RETAIL</h3>--}}
                    {{--<p>Es el servicio de construcción e implementación total de la tienda. Se inicia con la elaboración--}}
                        {{--del presupuesto de obra según el proyecto de arquitectura, detalles, mobiliario, accesorios y--}}
                        {{--especialidades para la tienda. Entregamos la tienda totalmente implementada.</p>--}}
                    {{--<a href="" class="button back-btn">Ver más</a>--}}

                {{--</div>--}}
                {{--<div class="col-md-4 col-sm-6 col-xs-12 heig-serv">--}}
                    {{--<img src="" alt="">--}}
                    {{--<h3>MANTENIMIENTO TIENDAS--}}

                    {{--</h3>--}}
                    {{--<p>Mantenimiento en general de toda la tienda, mantenimiento de carpintería, mantenimiento de--}}
                        {{--muebles, pintura de interiores y fachadas, mantenimiento de Instalaciones eléctricas e--}}
                        {{--iluminación, mantenimiento de equipos de Aire Acondicionado, mantenimiento del sistema de--}}
                        {{--seguridad, mantenimiento del sistema de detección de humo, mantenimiento del sistema de agua--}}
                        {{--contra incendio y de todo lo que sea necesario.</p>--}}
                    {{--<a href="" class="button back-btn">Ver más</a>--}}

                {{--</div>--}}
                {{--<div class="col-md-4 col-sm-6 col-xs-12 heig-serv">--}}
                    {{--<img src="" alt="">--}}
                    {{--<h3>DISEÑO DE PLANOS DE SEGURIDAD--}}

                    {{--</h3>--}}
                    {{--<p>Somos especialistas en el diseño de Planos de Seguridad, señalización y evacuación para proyectos--}}
                        {{--de tiendas y locales comerciales.</p>--}}
                    {{--<a href="" class="button back-btn">Ver más</a>--}}

                {{--</div>--}}
                {{--<div class="col-md-4 col-sm-6 col-xs-12 heig-serv">--}}
                    {{--<img src="" alt="">--}}
                    {{--<h3>SUPERVISIÓN PROYECTOS--}}

                    {{--</h3>--}}
                    {{--<p>Ofrecemos el servicio de supervisión del proyecto de construcción, arquitectura e implementación--}}
                        {{--de Tiendas y locales Comerciales Retail de terceros, en centros comerciales o independientes.--}}
                        {{--Esta supervisión es para revisar y verificar la correcta implementación de la Tienda según el--}}
                        {{--proyecto.</p>--}}
                    {{--<a href="" class="button back-btn">Ver más</a>--}}

                {{--</div>--}}
                {{--<div class="col-md-4 col-sm-6 col-xs-12 col-md-offset-4 heig-serv ">--}}
                    {{--<img src="" alt="">--}}
                    {{--<h3>--}}
                        {{--MANTENIMIENTO SISTEMA SEGURIDAD--}}

                    {{--</h3>--}}
                    {{--<p>Servicio especializado de Mantenimiento de Sistemas de alarma contra incendio, Sistema de--}}
                        {{--detección de humo, Sistema de agua contra incendio, luces de emergencia, extintores, señalética,--}}
                        {{--etc. En tiendas de diferentes centros comerciales del Perú.</p>--}}
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
