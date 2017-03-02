@extends('layouts.panel')

@section('dashboard_content')
<div class="page-content container-fluid">
    <div class="widget">
        <div class="widget-heading">
            <h1>{{ $service->name }}</h1>
        </div>
        <div class="widget-body">

            <div class="row">
                <div class="col-md-8">
                    <fieldset>
                        {!! $service->question_1 !!}

                        {!! $service->question_2 !!}

                        {!! $service->question_3 !!}

                        {!! $service->question_4 !!}

                        {!! $service->question_5 !!}
                    </fieldset>
                </div>
                <div class="col-md-4">
                    <h3>Evaluación</h3>

                </div>
            </div>


            <div class="text-right">
                <button type="button" class="btn btn-default" onclick="window.history.back();">
                    Volver al listado
                </button>
            </div>

        </div>
    </div>
</div>
@endsection
