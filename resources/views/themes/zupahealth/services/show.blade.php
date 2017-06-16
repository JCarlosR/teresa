@extends('themes.zupahealth.base')

@section('styles')
    <style>
        #myCarousel img {
            width: 100%;
            height: auto;
        }
    </style>
@endsection

@section('content')
    <!--CTA1 START-->
    <div class="cta-1">
        <div class="container">
            <div class="row text-center white">
                <h1 class="cta-title">{{ $service->name }}</h1>
                <p class="cta-sub-title">{{ $service->description }}</p>
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

                        @if (isset($service->images))
                            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                <!-- Indicators -->
                                <ol class="carousel-indicators">
                                    @foreach ($service->images as $key => $image)
                                        <li data-target="#myCarousel" data-slide-to="{{ $key }}" @if($key==0) class="active" @endif></li>
                                    @endforeach
                                </ol>

                                <!-- Wrapper for slides -->
                                <div class="carousel-inner">
                                    @foreach ($service->images as $key => $image)
                                        <div class="item @if($key==0) active @endif">
                                            <img src="/images/services/{{ $image->file_name }}" alt="{{ $image->name }}">
                                            <div class="carousel-caption">
                                                <h3>{{ $image->name }}</h3>
                                                <p>{{ $image->description }}</p>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>

                                <!-- Left and right controls -->
                                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                                    <span class="glyphicon glyphicon-chevron-right"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--PORTFOLIO END-->
@endsection
