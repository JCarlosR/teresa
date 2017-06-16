@extends('themes.archi.base')

@section('styles')
    <style>
        #myCarousel img {
            margin: 0 auto;
            height: auto;
        }
    </style>
@endsection

@section('content')
    <!--CTA1 START-->
    <div class="cta-1">
        <div class="container">
            <div class="row text-center white">
                <h1 class="cta-title">Nosotros</h1>
                <p class="cta-sub-title">Conoce más acerca de nosotros</p>
            </div>
        </div>
    </div>
    <!--CTA1 END-->

    <!--START-->
    <div class="section-padding">
        <div class="container">
            @if (isset($aboutUs))
            <div class="row">
                <div class="page-title">
                    <p class="lead">{{ $aboutUs->description }}</p>

                    <hr class="pg-titl-bdr-btm">
                </div>
                <div class="page-content">
                    {{--¿Qué tipo de empresa es?--}}
                    {!! $aboutUs->question_1 !!}

                    {{--¿Cuál es su especialización?--}}
                    {!! $aboutUs->question_2 !!}

                    {{--¿Cuándo, cómo y dónde se creó la empresa?--}}
                    {!! $aboutUs->question_3 !!}

                    {{--¿Qué servicios ofrecen?--}}
                    {!! $aboutUs->question_4 !!}

                    {{--¿Cuáles con los objetivos de la empresa?--}}
                    {!! $aboutUs->question_5 !!}

                    {{--¿Cómo ven el futuro de la empresa?--}}
                    {!! $aboutUs->question_6 !!}

                    @if (isset($aboutUs->images))
                        <div id="myCarousel" class="carousel slide" data-ride="carousel">
                            <!-- Indicators -->
                            <ol class="carousel-indicators">
                                @foreach ($aboutUs->images as $key => $image)
                                    <li data-target="#myCarousel" data-slide-to="{{ $key }}" @if($key==0) class="active" @endif></li>
                                @endforeach
                            </ol>

                            <!-- Wrapper for slides -->
                            <div class="carousel-inner">
                                @foreach ($aboutUs->images as $key => $image)
                                    <div class="item @if($key==0) active @endif">
                                        <img src="/images/about-us/{{ $image->file_name }}" alt="{{ $image->name }}">
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
            @endif
        </div>
    </div>
    <!--PORTFOLIO END-->
@endsection
