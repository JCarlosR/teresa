@extends('themes.default.base')

@section('content')
    <!--CTA1 START-->
    <div class="cta-1">
        <div class="container">
            <div class="row text-center white">
                <h1 class="cta-title">Servicios</h1>
                <p class="cta-sub-title">Conoce más sobre los servicios que ofrecemos</p>
            </div>
        </div>
    </div>
    <!--CTA1 END-->

    <!--PORTFOLIO START-->
    <div id="portfolio" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="page-title text-center">
                    <ol>
                        @foreach ($services as $service)
                        <li>
                            <a href="{{ $me->getLinkTo('/servicio/'.$service->id) }}">
                                {{ $service->name }}
                            </a>: {{ $service->description }}
                            <hr class="pg-titl-bdr-btm">
                        </li>
                        @endforeach
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!--PORTFOLIO END-->
@endsection