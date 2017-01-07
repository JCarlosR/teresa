@extends('layouts.panel')

@section('dashboard_content')
<div class="page-content container-fluid">
    <div class="widget">
        <div class="widget-heading">
            <h3 class="widget-title">Datos de acceso</h3>
        </div>
        <div class="widget-body">
            @if (session('notification'))
                <div class="alert alert-success">
                    <p>{{ session('notification') }}</p>
                </div>
            @endif

            <p class="mb-20">Listado de datos de acceso.</p>
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Nombre de acceso</th>
                    <th>URL</th>
                    <th>Credenciales</th>
                    <th>Opciones</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($accesses as $key => $access)
                    <tr>
                        <th scope="row">{{ ++$key }}</th>
                        <td>{{ $access->name }}</td>
                        <td>{{ $access->url }}</td>
                        <td>
                            <textarea readonly class="form-control" style="resize: none;">{{ $access->credentials }}</textarea>
                        </td>
                        <td>
                            <button type="button" data-toggle="modal" data-target="#modal-edit-{{ $access->id }}" class="btn btn-primary btn-sm" title="Editar">
                                <span class="glyphicon glyphicon-edit"></span>
                            </button>

                            <button type="button" data-toggle="modal" data-target="#modal-delete-{{ $access->id }}" class="btn btn-danger btn-sm" title="Eliminar">
                                <span class="glyphicon glyphicon-trash"></span>
                            </button>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <div class="widget">
        <div class="widget-heading">
            <h3 class="widget-title">Registrar nuevos datos de acceso</h3>
        </div>
        <div class="widget-body">
            <p class="mb-20">Ingresa la información correspondiente al nuevo acceso.</p>
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form class="form-horizontal" method="POST" action="{{ url('/admin/datos/acceso') }}">
                {{ csrf_field() }}

                <fieldset>
                    <div class="form-group">
                        <label for="name" class="col-lg-2 control-label">Nombre de acceso</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" name="name" placeholder="Ejemplo: FTP, Panel de control, PhpMyAdmin.">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="url" class="col-lg-2 control-label">URL</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" name="url" placeholder="URL desde la que se accede">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="credentials" class="col-lg-2 control-label">Credenciales</label>
                        <div class="col-lg-10">
                            <textarea class="form-control" name="credentials" id="credentials">Usuario: &#10;Contraseña: </textarea>
                            <span class="help-block">De ser necesario puede ingresar más datos.</span>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-lg-10 col-lg-offset-2">
                            <button type="reset" class="btn btn-default">Limpiar campos</button>
                            <button type="submit" class="btn btn-primary">Registrar datos de acceso</button>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
</div>

    {{-- Modals to edit --}}
    @foreach ($accesses as $access)
        <div tabindex="-1" role="dialog" class="modal fade" id="modal-edit-{{ $access->id }}">
            <div role="document" class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                        <h4 class="modal-title">Editar datos de acceso</h4>
                    </div>
                    <form action="{{ url('/admin/datos/acceso/editar') }}" method="POST" class="form-horizontal">
                        {{ csrf_field() }}
                        <input type="hidden" name="access_id" value="{{ $access->id }}">

                        <div class="modal-body">
                            <fieldset>
                                <div class="form-group">
                                    <label for="name" class="col-lg-2 control-label">Nombre de acceso</label>
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control" name="name" placeholder="Ejemplo: FTP, Panel de control, PhpMyAdmin" value="{{ $access->name }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="url" class="col-lg-2 control-label">URL</label>
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control" name="url" placeholder="URL desde la que se accede" value="{{ $access->url }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="credentials" class="col-lg-2 control-label">Credenciales</label>
                                    <div class="col-lg-10">
                                        <textarea class="form-control" name="credentials" id="credentials">{{ $access->credentials }}</textarea>
                                        <span class="help-block">De ser necesario puede ingresar más datos.</span>
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                        <div class="modal-footer">
                            <button type="button" data-dismiss="modal" class="btn btn-default">Cancelar</button>
                            <button type="submit" class="btn btn-black">Guardar cambios</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endforeach

    {{-- Modals to delete --}}
    @foreach ($accesses as $access)
        <div tabindex="-1" role="dialog" class="modal fade" id="modal-delete-{{ $access->id }}">
            <div role="document" class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                        <h4 class="modal-title">Eliminar datos de acceso</h4>
                    </div>
                    <form action="{{ url('/admin/datos/acceso/eliminar') }}" class="form-horizontal" method="POST">
                        {{ csrf_field() }}
                        <input type="hidden" name="access_id" value="{{ $access->id }}">

                        <div class="modal-body">
                            <fieldset>
                                <p>¿Estás seguro que deseas eliminar los siguientes datos?</p>
                                <div class="form-group">
                                    <label for="name" class="col-lg-2 control-label">Nombre de acceso</label>
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control" name="name" readonly value="{{ $access->name }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="url" class="col-lg-2 control-label">URL</label>
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control" name="url" readonly value="{{ $access->url }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="credentials" class="col-lg-2 control-label">Credenciales</label>
                                    <div class="col-lg-10">
                                        <textarea class="form-control" name="credentials" id="credentials" readonly>{{ $access->credentials }}</textarea>
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                        <div class="modal-footer">
                            <button type="button" data-dismiss="modal" class="btn btn-default">Cancelar</button>
                            <button type="submit" class="btn btn-black">Eliminar datos</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endforeach
@endsection
