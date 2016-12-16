@extends('layouts.admin')

@section('dashboard_content')
<div class="page-content container-fluid">
    <div class="widget">
        <div class="widget-heading">
            <h3 class="widget-title">Perfiles profesionales</h3>
        </div>
        <div class="widget-body">
            <p class="mb-20">
                Los siguientes perfiles permiten difundir información sobre la empresa y sus más destacados proyectos.
            </p>
            <table class="table table-condensed">
                <thead>
                <tr>
                    <th>#</th>
                    <th class="text-center">Red social</th>
                    <th class="text-center">URL</th>
                    <th class="text-center">Notas</th>
                    <th class="text-center">Opciones</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($professionalPages as $key => $professionalPage)
                <tr>
                    <th scope="row">{{ ++$key }}</th>
                    <td class="text-center">{{ $professionalPage }}</td>
                    <td><input type="text" name="url" class="form-control" placeholder="Dirección URL del perfil profesional"></td>
                    <td>
                        <textarea name="notes" rows="2" placeholder="Observación" class="form-control" style="resize: none"></textarea>
                    </td>
                    <td class="text-center">
                        <a href="#" class="btn btn-primary btn-sm" title="Guardar">
                            <span class="glyphicon glyphicon-floppy-disk"></span>
                        </a>
                        <a href="#" class="btn btn-info btn-sm" title="Estado">
                            <span class="glyphicon glyphicon-tag"></span>
                        </a>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
