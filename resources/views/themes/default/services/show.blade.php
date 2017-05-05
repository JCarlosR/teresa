@extends('themes.default.base')

@section('content')
    <!--CTA1 START-->
    <div class="cta-1">
        <div class="container">
            <div class="row text-center white">
                <h1 class="cta-title">{{ $service->name }}</h1>
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
                    <p>{{ $service->description }}</p>
                    <hr class="pg-titl-bdr-btm">
                    <p>{!! $service->question_1 !!}</p>
                    <p>{!! $service->question_2 !!}</p>
                    <p>{!! $service->question_3 !!}</p>
                    <p>{!! $service->question_4 !!}</p>
                    <p>{!! $service->question_5 !!}</p>
                </div>
            </div>
        </div>
    </div>
    <!--PORTFOLIO END-->
@endsection