@extends('layouts.panel')

@section('styles')
    <link rel="stylesheet" href="{{ asset('/plugins/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/plugins/summernote/dist/summernote.css') }}">
    <style>
        textarea {
            display: none;
        }
        [id^="status"] {
            font-size: 1.8em;
        }
    </style>

    {{-- Tag-it styles --}}
    <link href="{{ asset('vendor/tag-it/jquery.tagit.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('vendor/tag-it/tagit.ui-zendesk.css') }}" rel="stylesheet" type="text/css">
@endsection

@section('dashboard_content')
<div class="page-content container-fluid">

    <div class="widget">
        <div class="widget-heading">
            <a href="/nosotros/editar" class="pull-right" title="Editar sección"
               style="color: #57caff; font-size: 2em;">
                <i class="glyphicon glyphicon-pencil"></i>
            </a>
            <h3 class="widget-title">Sobre nosotros</h3>
        </div>
        <div class="widget-body">
            @if (session('notification'))
                <div class="alert alert-success">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>

                    {{ session('notification') }}
                </div>
            @endif

            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <fieldset>
                <span id="status1" class="pull-right"></span>
                {{--¿Qué tipo de empresa es?--}}
                {!! $about_us->question_1 !!}

                <span id="status2" class="pull-right"></span>
                {{--¿Cuál es su especialización?--}}
                {!! $about_us->question_2 !!}

                <span id="status3" class="pull-right"></span>
                {{--¿Cuándo, cómo y dónde se creó la empresa?--}}
                {!! $about_us->question_3 !!}

                <span id="status4" class="pull-right"></span>
                {{--¿Qué servicios ofrecen?--}}
                {!! $about_us->question_4 !!}

                <span id="status5" class="pull-right"></span>
                {{--¿Cuáles con los objetivos de la empresa?--}}
                {!! $about_us->question_5 !!}

                <span id="status6" class="pull-right"></span>
                {{--¿Cómo ven el futuro de la empresa?--}}
                {!! $about_us->question_6 !!}
            </fieldset>
        </div>
    </div>

    <div class="widget">
        <div class="widget-heading">
            <a href="/nosotros/imagenes" class="pull-right" title="Editar imágenes"
               style="color: #57caff; font-size: 2em;">
                <i class="glyphicon glyphicon-picture"></i>
            </a>
            <h3 class="widget-title">Imágenes de la sección nosotros</h3>
        </div>
        <div class="widget-body">

            <div class="row">
                @foreach ($about_us->images as $image)
                    <div class="col-md-3">
                        <div class="widget">
                            <div class="widget-heading">
                                <h3 class="widget-title">{{ $image->name ?: 'Sin nombre' }}</h3>
                            </div>
                            <div class="widget-body">
                                <div class="thumbnail">
                                    <img src="/images/about-us/{{ $image->file_name }}"
                                         alt="{{ $image->name ?: 'Imagen sin nombre' }}"
                                         title="{{ $image->description ?: 'Sin descripción' }}">
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </div>

</div>
@endsection

@section('scripts')
    <!-- Summer note editor for text-areas -->
    <script src="{{ asset('/plugins/summernote/dist/summernote.min.js') }}"></script>

    <script src="{{ asset('/panel/about-us/index.js') }}"></script>
@endsection
