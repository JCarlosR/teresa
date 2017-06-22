@extends('layouts.panel')

@section('styles')
    <link rel="stylesheet" href="{{ asset('/plugins/font-awesome/css/font-awesome.min.css') }}">
@endsection

@section('dashboard_content')
<div class="page-content container-fluid">
    <ol class="breadcrumb">
        <li><a href="{{ url(auth()->user()->root_route) }}"><i class="ion-home mr-5"></i> Inicio</a></li>
        <li><a href="/cursos">Cursos</a></li>
        <li class="active">Editar curso</li>
    </ol>

    <div class="widget">
        <div class="widget-heading">
            <h3 class="widget-title">Modificar curso seleccionado</h3>
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

            <form action="" method="POST" class="form-horizontal">
                {{ csrf_field() }}

                <fieldset>

                    <div class="form-group">
                        <label for="course-name" class="col-sm-2 control-label">Nombre</label>
                        <div class="col-sm-10">
                            <input type="text" name="name" id="course-name" class="form-control" placeholder="Nombre del curso" value="{{ old('name', $course->name) }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="course-description" class="col-sm-2 control-label">Descripción</label>
                        <div class="col-sm-10">
                            <input type="text" name="description" id="course-description" class="form-control" placeholder="Descripción del curso" value="{{ old('description', $course->description) }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="course-price" class="col-sm-2 control-label">Precio <em>(Sin incluir IGV)</em></label>
                        <div class="col-sm-10">
                            <input type="text" name="price" id="course-price" class="form-control" placeholder="Precio del curso (el precio total con IGV es calculado posteriormente)" value="{{ old('price', $course->price) }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="course-discount" class="col-sm-2 control-label">Descuento <em>(en %)</em></label>
                        <div class="col-sm-10">
                            <input type="text" name="discount" id="course-discount" class="form-control" placeholder="Descuento (ingresar un valor en porcentaje que será descontado del total)" value="{{ old('discount', $course->discount) }}">
                        </div>
                    </div>

                </fieldset>

                <div class="text-right">
                    <button type="button" class="btn btn-default" onclick="window.history.back();">
                        Volver sin guardar
                    </button>
                    <button type="submit" class="btn btn-primary">
                        Guardar cambios
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

{{--@section('scripts')--}}
    {{--<script src="{{ asset('/panel/courses/create.js') }}"></script>--}}
{{--@endsection--}}