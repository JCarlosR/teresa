@extends('layouts.panel')

@section('dashboard_content')
<div class="page-content container-fluid">
    <div class="widget">
        <div class="widget-heading">
            <h3 class="widget-title">Personal de contacto</h3>
        </div>
        <div class="widget-body">
            <p class="mb-20">Listado del personal registrado.</p>
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Cargo</th>
                    <th>Nombre</th>
                    <th>Correos de contacto</th>
                    <th>Teléfonos de contacto</th>
                    <th>Opciones</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Administración</td>
                    <td>Alejandra Polo</td>
                    <td>
                        apolo@jmpoloarquitectos.com <br>
                        alepolopelosi@gmail.com
                    </td>
                    <td></td>
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
                    <td>Arquitecto</td>
                    <td>Mónica López Alvarez</td>
                    <td>monica.jmpoloarquitectos@gmail.com</td>
                    <td></td>
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
            <h3 class="widget-title">Registrar personal</h3>
        </div>
        <div class="widget-body">
            <p class="mb-20">Por favor ingresa información resumida sobre el personal que puede representar a la empresa para motivos de contacto.</p>
            <form class="form-horizontal" method="POST">
                <fieldset>
                    <div class="form-group">
                        <label for="position" class="col-lg-2 control-label">Cargo</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" name="position" placeholder="Cargo del representante">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name" class="col-lg-2 control-label">Nombre</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" name="name" placeholder="Nombre del representante">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="emails" class="col-lg-2 control-label">Correo electrónico</label>
                        <div class="col-lg-10">
                            <textarea class="form-control" name="emails" placeholder="Correo electrónico"></textarea>
                            <span class="help-block">Escribir un correo por línea.</span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="phones" class="col-lg-2 control-label">Teléfonos</label>
                        <div class="col-lg-10">
                            <textarea class="form-control" name="phones" placeholder="Listado de teléfonos"></textarea>
                            <span class="help-block">Escribir un teléfono por línea.</span>
                        </div>
                    </div>
                    {{-- Observaciones --}}

                    <div class="form-group">
                        <div class="col-lg-10 col-lg-offset-2">
                            <button type="reset" class="btn btn-default">Limpiar campos</button>
                            <button type="submit" class="btn btn-primary">Registrar personal</button>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
</div>
@endsection
