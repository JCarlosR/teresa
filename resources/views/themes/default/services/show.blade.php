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
                        <div class="row">
                            <div class="col-md-8">
                                <fieldset>
                                    {!! $service->question_1 !!}

                                    {!! $service->question_2 !!}

                                    {!! $service->question_3 !!}

                                    {!! $service->question_4 !!}

                                    {!! $service->question_5 !!}
                                </fieldset>
                            </div>
                            <div class="col-md-4">
                                <fieldset>
                                    <legend>Evaluación</legend>
                                    <p>Pregunta 1: <i class="ion-record text-{{ $service->questionStatus(1) }}"></i></p>
                                    <p>Pregunta 2: <i class="ion-record text-{{ $service->questionStatus(2) }}"></i></p>
                                    <p>Pregunta 3: <i class="ion-record text-{{ $service->questionStatus(3) }}"></i></p>
                                    <p>Pregunta 4: <i class="ion-record text-{{ $service->questionStatus(4) }}"></i></p>
                                    <p>Pregunta 5: <i class="ion-record text-{{ $service->questionStatus(5) }}"></i></p>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--PORTFOLIO END-->
@endsection