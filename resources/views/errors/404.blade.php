@extends('layouts.simple')

@section('content')
    <div class="page-content">
        <h1 style="font-size: 160px" class="m-0 lh-1 text-muted">404</h1>
        <h3>Página no encontrada!</h3>
        <p class="text-muted mb-15">Lo sentimos! la página que buscas no existe.</p>
        <a href="{{ url('/home') }}" role="button" class="btn btn-black btn-rounded">Por favor, ve a la página principal.</a>
    </div>
@endsection
