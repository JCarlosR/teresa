@extends('themes.default.base')

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
            <div class="row">
                <div class="page-title text-center">
                    <p class="lead">{{ $aboutUs->description }}</p>

                    <hr class="pg-titl-bdr-btm">

                    {{--¿Qué tipo de empresa es?--}}
                    {!! $about_us->question_1 !!}

                    {{--¿Cuál es su especialización?--}}
                    {!! $about_us->question_2 !!}

                    {{--¿Cuándo, cómo y dónde se creó la empresa?--}}
                    {!! $about_us->question_3 !!}

                    {{--¿Qué servicios ofrecen?--}}
                    {!! $about_us->question_4 !!}

                    {{--¿Cuáles con los objetivos de la empresa?--}}
                    {!! $about_us->question_5 !!}

                    {{--¿Cómo ven el futuro de la empresa?--}}
                    {!! $about_us->question_6 !!}
                </div>
            </div>
        </div>
    </div>
    <!--PORTFOLIO END-->
@endsection