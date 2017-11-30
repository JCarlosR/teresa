@extends('themes.lindley.base')

@section('content')
    <section class="breadcrumb-section back-breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-sm-5">
                    <div>
                        <h1>Proyectos</h1>
                    </div>
                </div>
                <div class="col-md-7 col-sm-7">
                    <nav id="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ $me->getLinkTo('/') }}" title="Ir a página de Inicio">Inicio </a></li>

                            <li class="breadcrumb-item active">Proyectos</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <div class="full-width projects-container all-projects pad80">

        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <!-- Filters -->
                    <div id="filters">
                        <ul class="option-set alt">
                            <li><a href="#filter" class="selected" data-filter="*">TODOS</a></li>
                            @foreach ($me->services as $service)
                                <li><a href="#filter" data-filter=".category-{{ $service->id }}">
                                        {{ $service->name }}
                                    </a></li>
                            {{--<li><a href="#filter" data-filter=".kitchens">TIENDAS</a></li>--}}
                            {{--<li><a href="#filter" data-filter=".bathrooms">OFICINAS</a></li>--}}
                            {{--<li><a href="#filter" data-filter=".bedrooms">SUPERVISIÓN</a></li>--}}
                            {{--<li><a href="#filter" data-filter=".living-rooms">OTROS</a></li>--}}
                            @endforeach
                        </ul>
                        <div class="clearfix"></div>
                    </div>

                </div>
            </div>
        </div>

        <!-- Projects -->
        <div class="full-width projects">
        @foreach ($me->projects as $project)
            <!-- Item -->
            <a href="{{ $me->getLinkTo('/proyecto/'.$project->id) }}" class=".category-{{ $service->id }}">
                @if ($project->featuredImage)
                <img src="{{ $project->featuredImage->fullPath }}" alt="">
                @endif
                <div class="overlay">
                    <div class="overlay-content">
                        <h4>{{ $project->name }}</h4>
                        <span>March 2016</span>
                    </div>
                </div>
                <div class="plus-icon"></div>
            </a>


            <!-- Item -->
            {{--<a href="single-project-content-bottom.html" class="living-rooms kitchens clickable">--}}
                {{--<img src="images/latest-project-08.jpg" alt="">--}}
                {{--<div class="overlay">--}}
                    {{--<div class="overlay-content">--}}
                        {{--<h4>Kitchenette</h4>--}}
                        {{--<span>September 2015</span>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="plus-icon"></div>--}}
            {{--</a>--}}

            @endforeach

        </div>

    </div>
    <div class="transp">

    </div>
    <br>

@endsection
