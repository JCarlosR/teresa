@extends('layouts.dashboard')

@section('dashboard_content')
<div class="page-content container-fluid">
    <div class="widget">
        <div class="widget-heading">
            <h3 class="widget-title">Perfiles sociales</h3>
        </div>
        <div class="widget-body">
            <p class="mb-20">
                Los siguientes perfiles permiten difundir información sobre la empresa y los servicios que ofrece,
                en redes sociales genéricas.
            </p>
            <table class="table table-condensed">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Red social</th>
                    <th>Usuario</th>
                    <th>Contraseña</th>
                    <th>Notas</th>
                    <th>Opciones</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($socialPages as $key => $socialPage)
                <tr>
                    <th scope="row">{{ ++$key }}</th>
                    <td>{{ $socialPage }}</td>
                    <td><input type="text" name="username" class="form-control" placeholder="Usuario"></td>
                    <td>
                        <input type="text" name="password" class="form-control" placeholder="Contraseña">
                    </td>
                    <td>
                        <textarea name="notes" rows="2" placeholder="Observación" class="form-control" style="resize: none"></textarea>
                    </td>
                    <td>
                        <a href="#" class="btn btn-primary btn-sm" title="Guardar">
                            <span class="glyphicon glyphicon-floppy-disk"></span>
                        </a>
                        <a href="#" class="btn btn-info btn-sm" title="Enlace">
                            <span class="glyphicon glyphicon-link"></span>
                        </a>
                        <a href="#" class="btn btn-default btn-sm" title="Estado">
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
