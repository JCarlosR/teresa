@extends('layouts.dashboard')

@section('dashboard_content')
<div class="page-content container-fluid">
    <div class="widget">
        <div class="widget-heading">
            <h3 class="widget-title">Datos de acceso</h3>
        </div>
        <div class="widget-body">
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
                <tr>
                    <th scope="row">1</th>
                    <td>Panel de control</td>
                    <td>http://jmpoloarquitectos.com:2082</td>
                    <td>
                        Usuario: jmpoloar<br>
                        Contraseña: 701R5sFkhy
                    </td>
                    <td>
                        <a href="#" class="btn btn-primary btn-sm" title="Editar">
                            <span class="glyphicon glyphicon-edit"></span>
                        </a>

                        <a href="#" class="btn btn-danger btn-sm" title="Eliminar">
                            <span class="glyphicon glyphicon-trash"></span>
                        </a>
                    </td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>FTP</td>
                    <td>www.jmpoloarquitectos.com</td>
                    <td>
                        Usuario: jmpoloar <br>
                        Contraseña: 701R5sFkhy
                    </td>
                    <td>
                        <a href="#" class="btn btn-primary btn-sm" title="Editar">
                            <span class="glyphicon glyphicon-edit"></span>
                        </a>

                        <a href="#" class="btn btn-danger btn-sm" title="Eliminar">
                            <span class="glyphicon glyphicon-trash"></span>
                        </a>
                    </td>
                </tr>
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
            <form class="form-horizontal" method="POST">
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
                    {{-- Observaciones --}}

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
@endsection
