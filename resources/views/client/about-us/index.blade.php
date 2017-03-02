@extends('layouts.panel')

@section('styles')
    <link rel="stylesheet" href="{{ asset('/plugins/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/plugins/summernote/dist/summernote.css') }}">
    <style>
        textarea {
            display: none;
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

            <form action="{{ url('/nosotros') }}" method="POST">
                {{ csrf_field() }}

                <fieldset>
                    <h3>
                        ¿Qué tipo de empresa es?
                    </h3>
                    <span id="limit1"></span>
                    <span id="status1"></span>
                    <textarea id="note1" title="Pregunta 1" name="question_1">{{ old('question_1', $about_us->question_1) }}</textarea>

                    <h3>
                        ¿Cuál es su especialización?
                    </h3>
                    <span id="limit2"></span>
                    <span id="status2"></span>
                    <textarea id="note2" title="Pregunta 2" name="question_2">{{ old('question_2', $about_us->question_2) }}</textarea>

                    <h3>
                        ¿Cuándo, cómo y dónde se creó la empresa?
                    </h3>
                    <span id="limit3"></span>
                    <span id="status3"></span>
                    <textarea id="note3" title="Pregunta 3" name="question_3">{{ old('question_3', $about_us->question_3) }}</textarea>

                    <h3>
                        ¿Qué servicios ofrecen?
                    </h3>
                    <span id="limit4"></span>
                    <span id="status4"></span>
                    <textarea id="note4" title="Pregunta 4" name="question_4">{{ old('question_4', $about_us->question_4) }}</textarea>

                    <h3>
                        ¿Cuáles con los objetivos de la empresa?
                        <small>Misión</small>
                    </h3>
                    <span id="limit5"></span>
                    <span id="status5"></span>
                    <textarea id="note5" title="Pregunta 5" name="question_5">{{ old('question_5', $about_us->question_5) }}</textarea>

                    <h3>
                        ¿Cómo ven el futuro de la empresa?
                        <small>Visión, a corto y largo plazo</small>
                    </h3>
                    <span id="limit6"></span>
                    <span id="status6"></span>
                    <textarea id="note6" title="Pregunta 6" name="question_6">{{ old('question_6', $about_us->question_6) }}</textarea>
                </fieldset>

                <div class="text-right">
                    <button type="submit" class="btn btn-primary">
                        Guardar cambios
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@section('scripts')
    <!-- Summer note editor for text-areas -->
    <script src="{{ asset('/plugins/summernote/dist/summernote.min.js') }}"></script>

    <script src="{{ asset('/panel/about-us/index.js') }}"></script>
@endsection
