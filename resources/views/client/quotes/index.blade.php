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

            <a href="{{ url('/citas/registrar') }}" class="btn btn-success pull-right">
                <span class="glyphicon glyphicon-plus"></span>
                Registrar nueva cita
            </a>
            <p class="mb-20">A continuación, un listado de <strong>las citas que se presentarán casualmente</strong> en la página web.</p>

            <div class="row">
                @foreach ($quotes as $key => $quote)
                    <div class="col-md-3">
                        <div class="widget">
                            <div class="widget-body">
                                <div class="thumbnail">
                                    <img src="/images/quotes/{{ $quote->image }}">
                                </div>
                                <p>{{ $quote->content }}</p>
                                <div class="row btn-demo animation-demo">
                                    <div class="col-xs-6">
                                        <a href="{{ url('/citas/'.$quote->id.'/editar') }}" class="btn btn-sm btn-block btn-outline btn-rounded btn-primary">
                                            <span class="glyphicon glyphicon-edit"></span> Editar
                                        </a>
                                    </div>
                                    <div class="col-xs-6">
                                        <a href="{{ url('/citas/'.$quote->id.'/eliminar') }}" onclick="return confirm('Está seguro que desea eliminar esta cita?');" class="btn btn-sm btn-block btn-outline btn-rounded btn-danger">
                                            <span class="glyphicon glyphicon-remove"></span> Eliminar
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
