@extends('layouts.simple')

@section('content')
    <div class="page-content">
        <img src="/images/errors/404.png" alt="Error 404">
        <h3>Página no encontrada!</h3>
        <p class="text-muted mb-15">Lo sentimos! la página que buscas no existe.</p>
        <a href="{{ url('/home') }}" role="button" class="btn btn-black btn-rounded">Por favor, ve a la página principal.</a>
    </div>
@endsection
