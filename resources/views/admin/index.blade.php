@extends('layouts.panel_simple')

@section('dashboard_content')
<div class="widget">
    <div class="widget-body">
        <p><b>Bienvenido {{ auth()->user()->name }}!</b></p>
        <p>Seleccione un cliente a continuación para gestionar su información.</p>

        <div class="row">
            @foreach ($clients as $client)
                <div class="col-md-6">
                    <div class="widget">
                        <div class="widget-heading">
                            <a href="{{ url("admin/select/$client->id") }}">
                                <h3 class="widget-title">{{ $client->name }}</h3>
                            </a>
                        </div>
                        <div class="widget-body">
                            <div class="media">
                                <div class="media-left">
                                    <a href="#">
                                        <img alt="Logo {{ $client->name }}" src="{{ url($client->photo_route) }}" class="media-object mo-lg img-circle">
                                    </a>
                                </div>
                                <div class="media-body">
                                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
