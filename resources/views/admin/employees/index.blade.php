@extends('layouts.panel')

@section('dashboard_content')
<div class="page-content container-fluid">
    <div class="widget">
        <div class="widget-heading">
            <h3 class="widget-title">Personal de contacto</h3>
        </div>
        <div class="widget-body">
            @if (session('notification'))
                <div class="alert alert-success">
                    <p>{{ session('notification') }}</p>
                </div>
            @endif

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
                @foreach ($employees as $key => $employee)
                <tr>
                    <th scope="row">{{ $key+1 }}</th>
                    <td>{{ $employee->job }}</td>
                    <td>{{ $employee->name }}</td>
                    <td>
                        <textarea readonly class="form-control" style="resize: none;">{{ $employee->emails }}</textarea>
                    </td>
                    <td>
                        {{ $employee->phones }}
                    </td>
                    <td>
                        <button class="btn btn-primary btn-sm" title="Editar" data-target="#modal-edit-{{ $employee->id }}" data-toggle="modal">
                            <span class="glyphicon glyphicon-edit"></span>
                        </button>

                        <button class="btn btn-danger btn-sm" title="Eliminar" data-target="#modal-delete-{{ $employee->id }}" data-toggle="modal">
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
            <h3 class="widget-title">Registrar personal</h3>
        </div>
        <div class="widget-body">
            <p class="mb-20">Por favor ingresa información resumida sobre el personal que puede representar a la empresa para motivos de contacto.</p>
            <form class="form-horizontal" method="POST">
                {{ csrf_field() }}

                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <fieldset>
                    <div class="form-group">
                        <label for="job" class="col-lg-2 control-label">Cargo</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" name="job" placeholder="Cargo del representante" value="{{ old('job') }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name" class="col-lg-2 control-label">Nombre</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" name="name" placeholder="Nombre del representante" value="{{ old('name') }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="emails" class="col-lg-2 control-label">Correo electrónico</label>
                        <div class="col-lg-10">
                            <textarea class="form-control" name="emails" placeholder="Correo electrónico">{{ old('emails') }}</textarea>
                            <span class="help-block">Escribir un correo por línea.</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="phones" class="col-lg-2 control-label">Teléfonos</label>
                        <div class="col-lg-10">
                            <textarea class="form-control" name="phones" placeholder="Listado de teléfonos">{{ old('phones') }}</textarea>
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

    {{-- Modals to edit --}}
    @foreach ($employees as $employee)
        <div tabindex="-1" role="dialog" class="modal fade" id="modal-edit-{{ $employee->id }}">
            <div role="document" class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                        <h4 class="modal-title">Editar datos de contacto</h4>
                    </div>
                    <form action="{{ url('/admin/personal/editar') }}" class="form-horizontal" method="POST">
                        {{ csrf_field() }}
                        <input type="hidden" name="employee_id" value="{{ $employee->id }}">

                        <div class="modal-body">
                            <fieldset>
                                <div class="form-group">
                                    <label for="job" class="col-lg-2 control-label">Cargo</label>
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control" name="job" placeholder="Cargo del representante" value="{{ $employee->job }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="name" class="col-lg-2 control-label">Nombre</label>
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control" name="name" placeholder="Nombre del representante" value="{{ $employee->name }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="emails" class="col-lg-2 control-label">Correo electrónico</label>
                                    <div class="col-lg-10">
                                        <textarea class="form-control" name="emails" placeholder="Correo electrónico">{{ $employee->emails }}</textarea>
                                        <span class="help-block">Escribir un correo por línea.</span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="phones" class="col-lg-2 control-label">Teléfonos</label>
                                    <div class="col-lg-10">
                                        <textarea class="form-control" name="phones" placeholder="Listado de teléfonos">{{ $employee->phones }}</textarea>
                                        <span class="help-block">Escribir un teléfono por línea.</span>
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
    @foreach ($employees as $employee)
        <div tabindex="-1" role="dialog" class="modal fade" id="modal-delete-{{ $employee->id }}">
            <div role="document" class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                        <h4 class="modal-title">Eliminar datos de contacto</h4>
                    </div>
                    <form action="{{ url('/admin/personal/eliminar') }}" class="form-horizontal" method="POST">
                        {{ csrf_field() }}
                        <input type="hidden" name="employee_id" value="{{ $employee->id }}">

                        <div class="modal-body">
                            <fieldset>
                                <div class="form-group">
                                    <label for="job" class="col-lg-2 control-label">Cargo</label>
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control" name="job" placeholder="Cargo del representante" value="{{ $employee->job }}" readonly>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="name" class="col-lg-2 control-label">Nombre</label>
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control" name="name" placeholder="Nombre del representante" value="{{ $employee->name }}" readonly>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="emails" class="col-lg-2 control-label">Correo electrónico</label>
                                    <div class="col-lg-10">
                                        <textarea class="form-control" name="emails" placeholder="Correo electrónico" readonly>{{ $employee->emails }}</textarea>
                                        <span class="help-block">Escribir un correo por línea.</span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="phones" class="col-lg-2 control-label">Teléfonos</label>
                                    <div class="col-lg-10">
                                        <textarea class="form-control" name="phones" placeholder="Listado de teléfonos" readonly>{{ $employee->phones }}</textarea>
                                        <span class="help-block">Escribir un teléfono por línea.</span>
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

@section('scripts')
    <script src="{{ asset('/panel/employees/create.js') }}"></script>
@endsection
