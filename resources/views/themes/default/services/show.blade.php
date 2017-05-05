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
                <div class="panel">
                    <div class="panel-heading">
                        <h1>
                            {{ $service->name }}
                        </h1>
                    </div>
                    <div class="panel-body">
                        {!! $service->question_1 !!}

                        {!! $service->question_2 !!}

                        {!! $service->question_3 !!}

                        {!! $service->question_4 !!}

                        {!! $service->question_5 !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--PORTFOLIO END-->
@endsection