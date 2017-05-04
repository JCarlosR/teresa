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
                    <p>{{ $services }}</p>
                    <hr class="pg-titl-bdr-btm">
                </div>
                <div class="port-sec">
                    <div class="col-md-12 fil-btn text-center">
                        <div class="filter wrk-title active" data-filter="all">Ver todos</div>
                        <div class="filter wrk-title" data-filter=".category-1">Design</div>
                        <div class="filter wrk-title" data-filter=".category-2">Development</div>
                        <div class="filter wrk-title lst-cld" data-filter=".category-3">SEO</div>
                    </div>
                    <div id="Container">
                        <div class="filimg mix category-1 category-3 col-md-4 col-sm-4 col-xs-12" data-myorder="2">
                            <img src="{{ asset('/themes/default/img/fea1.jpg') }}" class="img-responsive">
                        </div>
                        <div class="filimg mix category-2 col-md-4 col-sm-4 col-xs-12" data-myorder="4">
                            <img src="{{ asset('/themes/default/img/fea2.jpg') }}" class="img-responsive">
                        </div>
                        <div class="filimg mix category-1 col-md-4 col-sm-4 col-xs-12" data-myorder="1">
                            <img src="{{ asset('/themes/default/img/fea3.jpg') }}" class="img-responsive">								</div>
                        <div class="filimg mix category-2 category-3 col-md-4 col-sm-4 col-xs-12" data-myorder="8">
                            <img src="{{ asset('/themes/default/img/fea4.jpg') }}" class="img-responsive">								</div>
                        <div class="filimg mix category-2 col-md-4 col-sm-4 col-xs-12" data-myorder="8">
                            <img src="{{ asset('/themes/default/img/fea5.jpg') }}" class="img-responsive">
                        </div>
                        <div class="filimg mix category-2 category-3 col-md-4 col-sm-4 col-xs-12" data-myorder="8">
                            <img src="{{ asset('/themes/default/img/fea6.jpg') }}" class="img-responsive">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--PORTFOLIO END-->

    <!--CTA2 START-->
    <div class="cta2">
        <div class="container">
            <div class="row white text-center">
                <h3 class="wd75 fnt-24">“Every Thing is designed. Few Things are Designed well.” - Brian Reed</h3>
                <p class="cta-sub-title"></p>
                <a href="#" class="btn btn-default">Request A Quote</a>
            </div>
        </div>
    </div>
    <!--CTA2 END-->
@endsection