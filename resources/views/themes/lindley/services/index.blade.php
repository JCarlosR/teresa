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

    <section class="pad80">
        <div class="container">
            <div class="row">
                @foreach ($services as $service)
                <div class="col-md-4 col-sm-4 col-xs-12  service-alt  ">

                @if($service->featuredImage)
                <a href="{{ $me->getLinkTo('/servicio/'.$service->id) }}" class="img-hover"><img src="{{ $service->featuredImage->fullPath }}"  class="img-responsive" alt=""></a>
                @endif
                <div class="heig-serv">
                <h3 class="service-h3">{{ $service->name }}</h3>
                <p>{{ $service->description }}</p>
                <a href="{{ $me->getLinkTo('/servicio/'.$service->id) }}" class="back-btn">Ver más</a>
                </div>


                </div>
                @endforeach

                {{--<div class="col-md-4 col-sm-4 col-xs-12 service-alt">--}}
                    {{--<a href="" class="img-hover "><img src="/themes/lindley/imagenes/servicios/1.jpg" alt=""--}}
                                                       {{--class="img-responsive"></a>--}}
                    {{--<div class="heig-serv">--}}
                        {{--<a href=""><h3 class="service-h3">TIENDA comerciales retaiñ</h3></a>--}}
                        {{--<br>--}}
                        {{--<p>El servicio principal de la oficina de Lindley Arquitectos es el Diseño y Remodelación de--}}
                            {{--locales--}}
                            {{--comerciales y Tiendas Retail para Centros Comerciales.</p>--}}
                       {{--<div>--}}
                           {{--<a href="" class=" back-btn">Ver más</a>--}}
                       {{--</div>--}}
                    {{--</div>--}}


                {{--</div>--}}
                {{--<div class="col-md-4 col-sm-4 col-xs-12 service-alt">--}}
                    {{--<a href="" class="img-hover "><img src="/themes/lindley/imagenes/servicios/1.jpg" alt=""--}}
                                                       {{--class="img-responsive"></a>--}}
                    {{--<div class="heig-serv">--}}
                        {{--<a href=""><h3 class="service-h3">TIENDA comerciales retaiñ</h3></a>--}}
                        {{--<p>El servicio principal de la oficina de Lindley Arquitectos es el Diseño y Remodelación de--}}
                            {{--locales--}}
                            {{--comerciales y Tiendas Retail para Centros Comerciales.</p>--}}
                        {{--<div>--}}
                            {{--<a href="" class=" back-btn">Ver más</a>--}}
                        {{--</div>--}}
                    {{--</div>--}}


                {{--</div>--}}
                {{--<div class="col-md-4 col-sm-4 col-xs-12 service-alt">--}}
                    {{--<a href="" class="img-hover "><img src="/themes/lindley/imagenes/servicios/1.jpg" alt=""--}}
                                                       {{--class="img-responsive"></a>--}}
                    {{--<div class="heig-serv">--}}
                        {{--<a href=""><h3 class="service-h3">TIENDA comerciales retaiñ</h3></a>--}}
                        {{--<p>El servicio principal de la oficina de Lindley Arquitectos es el Diseño y Remodelación de--}}
                            {{--locales--}}
                            {{--comerciales y Tiendas Retail para Centros Comerciales.</p>--}}
                        {{--<div>--}}
                            {{--<a href="" class=" back-btn">Ver más</a>--}}
                        {{--</div>--}}
                    {{--</div>--}}


                {{--</div>--}}
                {{--<div class="col-md-4 col-sm-6 col-xs-12 service-alt ">--}}
                    {{--<a href="" class="img-hover "><img src="/themes/lindley/imagenes/servicios/1.jpg" alt=""--}}
                                                       {{--class="img-responsive"></a>--}}
                    {{--<div class="heig-serv">--}}
                        {{--<a href=""><h3 class="service-h3">TIENDA comerciales retaiñ</h3></a>--}}
                        {{--<p>El servicio principal de la oficina de Lindley Arquitectos es el Diseño y Remodelación de--}}
                            {{--locales--}}
                            {{--comerciales y Tiendas Retail para Centros Comerciales.</p>--}}
                        {{--<div>--}}
                            {{--<a href="" class=" back-btn">Ver más</a>--}}
                        {{--</div>--}}
                    {{--</div>--}}


                {{--</div>--}}
                {{--<div class="col-md-4 col-sm-4 col-xs-12 service-alt ">--}}
                    {{--<a href="" class="img-hover "><img src="/themes/lindley/imagenes/servicios/1.jpg" alt=""--}}
                                                       {{--class="img-responsive"></a>--}}
                    {{--<div class="heig-serv">--}}
                        {{--<a href=""><h3 class="service-h3">TIENDA comerciales retaiñ</h3></a>--}}
                        {{--<p>El servicio principal de la oficina de Lindley Arquitectos es el Diseño y Remodelación de--}}
                            {{--locales--}}
                            {{--comerciales y Tiendas Retail para Centros Comerciales.</p>--}}
                        {{--<div>--}}
                            {{--<a href="" class=" back-btn">Ver más</a>--}}
                        {{--</div>--}}
                    {{--</div>--}}


                {{--</div>--}}
                {{--<div class="col-md-4 col-sm-4 col-xs-12  service-alt">--}}
                    {{--<a href="" class="img-hover "><img src="/themes/lindley/imagenes/servicios/1.jpg" alt=""--}}
                                                       {{--class="img-responsive"></a>--}}
                    {{--<div class="heig-serv">--}}
                        {{--<a href=""><h3 class="service-h3">TIENDA comerciales retaiñ</h3></a>--}}
                        {{--<br>--}}
                        {{--<p>El servicio principal de la oficina de Lindley Arquitectos es el Diseño y Remodelación de--}}
                            {{--locales--}}
                            {{--comerciales y Tiendas Retail para Centros Comerciales.</p>--}}
                        {{--<div>--}}
                            {{--<a href="" class=" back-btn">Ver más</a>--}}
                        {{--</div>--}}
                    {{--</div>--}}


                {{--</div>--}}
                {{--<div class="col-md-4 col-sm-4 col-xs-12 ">--}}
                    {{--<div class="service-alt">--}}
                        {{--<a href="" class="img-hover "><img src="/themes/lindley/imagenes/servicios/1.jpg" alt=""--}}
                                                           {{--class="img-responsive"></a>--}}
                        {{--<div class="heig-serv">--}}
                            {{--<a href=""><h3 class="service-h3">TIENDA comerciales retaiñ</h3></a>--}}
                            {{--<p>El servicio principal de la oficina de Lindley Arquitectos es el Diseño y Remodelación de--}}
                                {{--locales--}}
                                {{--comerciales y Tiendas Retail para Centros Comerciales.</p>--}}
                            {{--<a href="" class=" back-btn">Ver más</a>--}}
                        {{--</div>--}}
                    {{--</div>--}}



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
