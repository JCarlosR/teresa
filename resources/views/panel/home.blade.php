@extends('layouts.user')

@section('dashboard_content')
    <div class="page-content container-fluid">
        {{-- Show only for clients --}}
        <div class="row">
            <div class="col-md-12">
                <div class="widget">
                    <div class="widget-body">
                        <p><b>Bienvenido {{ auth()->user()->name }}!</b></p>
                        <p>Seleccione una opción del menú de la izquierda para acceder a la sección de su interés.</p>
                    </div>
                </div>
            </div>
        </div>

        @include('includes.dashboard')
    </div>
@endsection

@section('scripts')
    <script type="text/javascript" src="{{ asset('build/js/page-content/dashboard/index.js') }}"></script>
@endsection