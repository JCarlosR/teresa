@extends('layouts.home')

@section('dashboard_content')
    <div class="panel panel-default">
        <div class="panel-heading">Dashboard</div>

        <div class="panel-body">
            <p><b>Bienvenido {{ auth()->user()->name }}!</b></p>
            <p>Seleccione una opción del menú de la izquierda para acceder a la sección de su interés.</p>
            <img src="http://www.rozpalsac.com/images/dataweb/soluciones-y-servicios/servicios-digitales/disenio-grafico-rozpalsac.png" alt="Gráfico Google" class="img-responsive">
        </div>
    </div>
@endsection
