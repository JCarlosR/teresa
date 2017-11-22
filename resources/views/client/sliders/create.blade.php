@extends('layouts.panel')

@section('styles')
    <link rel="stylesheet" href="{{ asset('/plugins/font-awesome/css/font-awesome.min.css') }}">
@endsection

@section('dashboard_content')
<div class="page-content container-fluid">
    <ol class="breadcrumb">
        <li><a href="{{ url(auth()->user()->root_route) }}"><i class="ion-home mr-5"></i> Inicio</a></li>
        <li><a href="/sliders">Sliders</a></li>
        <li class="active">Nuevo slider</li>
    </ol>

    <div class="widget">
        <div class="widget-heading">
            <h3 class="widget-title">Registrar nuevo slider</h3>
        </div>
        <div class="widget-body">
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="" method="POST">
                {{ csrf_field() }}

                <fieldset>
                    <div class="form-group">
                        <label for="slide-title">Nombre del slider</label>
                        <input type="text" name="name" id="slide-name" class="form-control" placeholder="Nombre del slider" value="{{ old('name') }}" required>
                    </div>
                </fieldset>

                <div class="text-right">
                    <button type="submit" class="btn btn-primary">
                        Registrar slider
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@section('scripts')
    <script src="{{ asset('/plugins/summernote/dist/summernote.min.js') }}"></script>
    <script src="{{ asset('/panel/services/create.js') }}"></script>
@endsection