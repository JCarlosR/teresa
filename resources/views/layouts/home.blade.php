@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-2">
            <div class="list-group">
                <a class="list-group-item" href="{{ url('/datos/principales') }}">Datos principales</a>
                <a class="list-group-item" href="{{ url('/datos/contacto') }}">Datos de contacto</a>
                <a class="list-group-item" href="{{ url('/datos/acceso') }}">Accesos al servidor</a>
                <a class="list-group-item" href="{{ url('/datos/sociales') }}">Perfiles sociales</a>
                <a class="list-group-item" href="{{ url('/datos/perfiles') }}">Perfiles profesionales</a>
                <a class="list-group-item" href="{{ url('/datos/personal') }}">Personal</a>
                <a class="list-group-item" href="{{ url('/proyectos') }}">Proyectos</a>
                <a class="list-group-item" href="{{ url('/pagos') }}">Pagos</a>
                <a class="list-group-item" href="{{ url('/resumen') }}">Resumen</a>
            </div>
        </div>

        <div class="col-md-10">
            @yield('dashboard_content')
        </div>
    </div>
</div>
@endsection
