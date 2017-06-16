@extends('themes.archi.base')

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

                @foreach ($services as $service)
                <div class="col-md-4">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <a href="{{ $me->getLinkTo('/servicio/'.$service->id) }}">
                                {{ $service->name }}
                            </a>
                            <img src="{{ $service->featuredImage->fullPath }}" class="img-responsive" alt="{{ $service->featuredImage->name }}">
                            <p>{{ $service->description }}</p>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>
    <!--PORTFOLIO END-->
@endsection
