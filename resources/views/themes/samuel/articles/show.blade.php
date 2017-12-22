@extends('themes.default.base')

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
                <h1 class="cta-title">{{ $article->title }}</h1>
                {{--<p class="cta-sub-title">{{ $article->meta_description }}</p>--}}
            </div>
        </div>
    </div>
    <!--CTA1 END-->

    <!--PORTFOLIO START-->
    <div class="section-padding">
        <div class="container">
            <div class="row">
                <div class="panel">
                    {{--<div class="panel-heading">--}}
                        {{--<h1>{{ $article->title }}</h1>--}}
                    {{--</div>--}}
                    
                    <div class="panel-body">
                        <fieldset>
                            {!! $article->idea !!}
                            {!! $article->idea_development !!}
                            {!! $article->bottom_line !!}
                        </fieldset>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--PORTFOLIO END-->


@endsection
