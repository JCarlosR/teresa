@extends('layouts.panel')

@section('dashboard_content')
<div class="page-content container-fluid">
    <div class="widget">
        <div class="widget-heading">
            <h3 class="widget-title">Citas</h3>
        </div>
        <div class="widget-body">
            @if (session('notification'))
                <div class="alert alert-success">
                    <p>{{ session('notification') }}</p>
                </div>
            @endif


            <a href="{{ url('/proyectos/registrar') }}" class="btn btn-success pull-right">
                <span class="glyphicon glyphicon-plus"></span>
                Registrar nuevo proyecto
            </a>
            <p class="mb-20">A continuación, un listado de <strong>las citas</strong> que se presentarán casualmente en la página web.</p>


        </div>
    </div>
</div>
@endsection
