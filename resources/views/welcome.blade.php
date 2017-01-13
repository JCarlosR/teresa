@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Bienvenido a Teresa v1.0</div>

                <div class="panel-body text-center">
                    <img src="{{ asset('/images/teresa-placeholder.png') }}" alt="Teresa - Texto">
                    <p>
                        <em>Software de Gestión de contenido en Internet, para empresas digitales.</em>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
