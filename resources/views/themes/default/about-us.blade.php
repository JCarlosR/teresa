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
                    <p>{{ $aboutUs }}</p>
                    <hr class="pg-titl-bdr-btm">
                </div>
            </div>
        </div>
    </div>
    <!--PORTFOLIO END-->
@endsection