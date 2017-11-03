@extends('layouts.panel')

@section('dashboard_content')
<div class="page-content container-fluid">
    <div class="widget">
        <div class="widget-heading">
            <h3 class="widget-title">Formulario de contacto</h3>
        </div>
        <div class="widget-body">
            @if (session('notification'))
                <div class="alert alert-success">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>

                    <p>{{ session('notification') }}</p>
                </div>
            @endif

            <p class="mb-20">A continuación, se muestran <strong>los asuntos</strong> disponibles en el formulario de contacto principal.</p>

            <form action="">
                <select class="form-control">
                    @foreach ($topics as $topic)
                        <option value="{{ $topic }}">{{ $topic }}</option>
                    @endforeach
                </select>
            </form>

            <p class="mt-20">Por favor contactar con el equipo de Theressa a fin de aplicar cambios.</p>
        </div>
    </div>
</div>
@endsection
