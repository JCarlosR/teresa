@extends('layouts.panel')

@section('styles')
    <link rel="stylesheet" href="{{ asset('/plugins/font-awesome/css/font-awesome.min.css') }}">
@endsection

@section('dashboard_content')
<div class="page-content container-fluid">
    <ol class="breadcrumb">
        <li><a href="{{ url(auth()->user()->root_route) }}"><i class="ion-home mr-5"></i> Inicio</a></li>
        <li><a href="/clientes">Clientes</a></li>
        <li class="active">Editar cliente</li>
    </ol>

    <div class="widget">
        <div class="widget-heading">
            <h3 class="widget-title">Editar datos del cliente seleccionado</h3>
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

            <form action="{{ url('/clientes/editar') }}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <input type="hidden" name="customer_id" value="{{ $customer->id }}">
                <fieldset>
                    <legend>Datos generales</legend>
                    <div class="form-group">
                        <label for="customer-name">Nombre del cliente</label>
                        <input type="text" name="name" id="customer-name" class="form-control" placeholder="Ingresa aquí el nombre del cliente" value="{{ old('name', $customer->name) }}">
                    </div>
                    <div class="form-group">
                        <label for="customer-url">URL de la página del cliente</label>
                        <input type="text" name="url" id="customer-url" class="form-control" placeholder="Ingresa aquí la página del cliente" value="{{ old('url', $customer->url) }}">
                    </div>
                    <div class="form-group">
                        <label for="customer-image">Logo del cliente <em>Subir solo si se desea reemplazar</em></label>
                        <input type="file" name="image" id="customer-image" class="form-control">
                    </div>
                </fieldset>

                <div class="text-right">
                    <a href="/clientes" type="button" class="btn btn-default">
                        Volver sin guardar
                    </a>
                    <button type="submit" class="btn btn-primary">
                        Guardar cambios
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
