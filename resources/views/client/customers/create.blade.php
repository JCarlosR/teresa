@extends('layouts.panel')

@section('styles')
    <link rel="stylesheet" href="{{ asset('/plugins/font-awesome/css/font-awesome.min.css') }}">
@endsection

@section('dashboard_content')
<div class="page-content container-fluid">
    <ol class="breadcrumb">
        <li><a href="{{ url(auth()->user()->root_route) }}"><i class="ion-home mr-5"></i> Inicio</a></li>
        <li><a href="/clientes">Clientes</a></li>
        <li class="active">Nuevo cliente</li>
    </ol>

    <div class="widget">
        <div class="widget-heading">
            <h3 class="widget-title">Nuevo cliente</h3>
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
                        <label for="customer-name">Nombre del cliente</label>
                        <input type="text" name="name" id="customer-name" class="form-control" placeholder="Ingresa aquí el nombre del cliente" value="{{ old('name') }}">
                    </div>
                    <div class="form-group">
                        <label for="customer-url">URL de la página del cliente</label>
                        <input type="text" name="url" id="customer-url" class="form-control" placeholder="Ingresa aquí la página del cliente" value="{{ old('url') }}">
                    </div>
                    <div class="form-group">
                        <label for="customer-image">Logo del cliente</label>
                        <input type="file" name="image" id="customer-image" class="form-control" required>
                    </div>
                </fieldset>

                <div class="text-right">
                    <button type="submit" class="btn btn-primary">
                        Registrar cliente
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
