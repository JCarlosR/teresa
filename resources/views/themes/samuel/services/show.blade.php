@extends('themes.samuel.base')

@section('content')

    <div class="carousel slide width">
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            @foreach ($me->slides()->take(1)->get() as $key => $slide)
                <div class="item active">
                    <img src="{{ asset($slide->imageUrl) }}" alt="Los Angeles">
                </div>

                <div class="hero-abouts "><p>
                        SHOW servicios
                    </p>
                </div>
            @endforeach
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">

        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">

        </a>
    </div>
    <section class="width">
        <div class="row page-block">
            @include('themes.samuel.includes.sub-menu')
            <div class="col-md-9">
                <div class="page-block-inner">
                    <h2>{{ $service->name }}</h2>
                    {!! $service->question_1 !!}
                    <figure class="caption-image">
                        <div>
                            <img src="/images/photos/1200x460.gif" class="img-responsive" alt="">
                        </div>
                        <figcaption>{{ $service->name }}</figcaption>
                    </figure>
                {!! $service->question_2 !!}
                    <!-- BLOCKQUOTE -->
                    <blockquote>
                        {!! $service->question_3 !!}
                    </blockquote>
                    {!! $service->question_5 !!}
                    <hr>
                    <div class="col-md-12">
                        <div class="col-md-6 ">
                            @foreach ($service->images()->where('featured', false)->get() as $image)
                                <a  class="img-hover" title="{{ $service->name }}"><img src="{{ $image->full_path }}" class="img-responsive" alt="{{ $image->name }}" title="{{ $service->name }}"></a>
                            @endforeach
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
