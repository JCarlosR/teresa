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

            <a href="{{ auth()->user()->admin_prefix_route }}/nosotros/editar" class="btn btn-primary pull-right" title="Editar sección">
                <i class="glyphicon glyphicon-pencil"></i>
            </a>

            <fieldset>
                <span id="status1" class="pull-right"></span>
                <h3>
                    ¿Qué tipo de empresa es?
                </h3>
                <span id="limit1"></span>
                {!! $about_us->question_1 !!}

                <span id="status2" class="pull-right"></span>
                <h3>
                    ¿Cuál es su especialización?
                </h3>
                <span id="limit2"></span>
                {!! $about_us->question_2 !!}

                <span id="status3" class="pull-right"></span>
                <h3>
                    ¿Cuándo, cómo y dónde se creó la empresa?
                </h3>
                <span id="limit3"></span>
                {!! $about_us->question_3 !!}

                <span id="status4" class="pull-right"></span>
                <h3>
                    ¿Qué servicios ofrecen?
                </h3>
                <span id="limit4"></span>
                {!! $about_us->question_4 !!}

                <span id="status5" class="pull-right"></span>
                <h3>
                    ¿Cuáles con los objetivos de la empresa?
                    <small>Misión</small>
                </h3>
                <span id="limit5"></span>
                {!! $about_us->question_5 !!}

                <span id="status6" class="pull-right"></span>
                <h3>
                    ¿Cómo ven el futuro de la empresa?
                    <small>Visión, a corto y largo plazo</small>
                </h3>
                <span id="limit6"></span>
                {!! $about_us->question_6 !!}
            </fieldset>
        </div>
    </div>
</div>
@endsection

@section('scripts')
    <!-- Summer note editor for text-areas -->
    <script src="{{ asset('/plugins/summernote/dist/summernote.min.js') }}"></script>

    <script src="{{ asset('/panel/about-us/index.js') }}"></script>
@endsection
