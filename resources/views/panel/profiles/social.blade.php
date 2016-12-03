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
                        <button type="button" data-toggle="modal" data-target="#link-modal" class="btn btn-sm btn-info" title="Enlace">
                            <span class="glyphicon glyphicon-link"></span>
                        </button>
                        <button type="button" data-toggle="modal" data-target="#link-state" class="btn btn-sm btn-default" title="Estado">
                            <span class="glyphicon glyphicon-tag"></span>
                        </button>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<div tabindex="-1" role="dialog" class="modal fade" style="display: none;" id="link-modal">
    <div role="document" class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                <h4 id="myLargeModalLabel" class="modal-title">Asignar enlace</h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="social_link">Enlace hacia el perfil:</label>
                    <input type="text" name="social_link" class="form-control" placeholder="Ingresa aquí el enlace hacia el perfil social">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" data-dismiss="modal" class="btn btn-default">Cancelar</button>
                <button type="button" class="btn btn-black">Guardar enlace</button>
            </div>
        </div>
    </div>
</div>

<div tabindex="-1" role="dialog" class="modal fade" style="display: none;" id="link-state">
    <div role="document" class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                <h4 id="myLargeModalLabel" class="modal-title">Asignar estado</h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="state-select">Estado del perfil:</label>
                    <select name="state" id="state-select" class="form-control">
                        <option value="0">No publicado</option>
                        <option value="1">Publicado</option>
                    </select>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" data-dismiss="modal" class="btn btn-default">Cancelar</button>
                <button type="button" class="btn btn-black">Guardar estado</button>
            </div>
        </div>
    </div>
</div>
@endsection
