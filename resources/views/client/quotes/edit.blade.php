@extends('layouts.panel')

@section('styles')
    <link rel="stylesheet" href="{{ asset('/plugins/font-awesome/css/font-awesome.min.css') }}">
@endsection

@section('dashboard_content')
<div class="page-content container-fluid">
    <ol class="breadcrumb">
        <li><a href="{{ url(auth()->user()->root_route) }}"><i class="ion-home mr-5"></i> Inicio</a></li>
        <li><a href="/citas">Citas</a></li>
        <li class="active">Editar cita</li>
    </ol>

    <div class="widget">
        <div class="widget-heading">
            <h3 class="widget-title">Editar cita</h3>
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

            <form action="" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}

                <fieldset>
                    <div class="form-group">
                        <label for="quote-content">Texto de la cita</label>
                        <input type="text" name="content" id="quote-content" class="form-control" placeholder="Ingresa aquí la cita" value="{{ old('content', $quote->content) }}" required>
                    </div>
                    <div class="form-group">
                        <label for="quote-image">Imagen para la cita (<em>Subir solo si se desea modificar la imagen actual</em>)</label>
                        <input type="file" name="image" id="quote-image" class="form-control" placeholder="Selecciona una imagen">
                    </div>
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
    <script src="{{ asset('/plugins/summernote/dist/summernote.min.js') }}"></script>
    <script src="{{ asset('/panel/services/create.js') }}"></script>
@endsection