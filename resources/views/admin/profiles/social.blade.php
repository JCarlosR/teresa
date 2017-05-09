@extends('layouts.panel')

@section('dashboard_content')
<div class="page-content container-fluid">
    <div class="widget">
        <div class="widget-heading">
            <h3 class="widget-title">Perfiles sociales</h3>
        </div>
        <div class="widget-body">
            @if (session('notification'))
                <div class="alert alert-success">
                    <p>{{ session('notification') }}</p>
                </div>
            @endif

            <p class="mb-20">
                Los siguientes perfiles permiten difundir información sobre la empresa y los servicios que ofrece,
                en redes sociales genéricas.
            </p>
            <table class="table table-condensed">
                <thead>
                <tr>
                    <th class="text-center">Red social</th>
                    <th class="text-center">ID</th>
                    <th class="text-center">Estado</th>
                    <th class="text-center">Notas</th>
                    <th class="text-center">Opciones</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($socialProfiles as $key => $socialProfile)
                <tr>
                    <form action="" method="POST" class="form-inline">
                        {{ csrf_field() }}
                        <td class="text-center col-md-2">
                            <input type="text" readonly class="form-control" value="{{ $socialProfile->display }}">
                            <input type="hidden" name="name" readonly class="form-control" value="{{ $socialProfile->name }}">
                        </td>
                        <td>
                            <input type="text" name="url" class="form-control" placeholder="{{ $socialProfile->placeholder }}" value="{{ $socialProfile->url }}">
                        </td>
                        <td class="col-md-2">
                            <div class="form-group">
                                <select name="state" class="form-control">
                                    <option value="0" @if($socialProfile->state==0) selected @endif>No publicado</option>
                                    <option value="1" @if($socialProfile->state==1) selected @endif>Publicado</option>
                                </select>
                            </div>
                        </td>
                        <td>
                            <textarea name="notes" rows="2" placeholder="Observación" class="form-control" style="resize: none">{{ $socialProfile->notes }}</textarea>
                        </td>
                        <td class="text-center col-md-1">
                            <button type="submit" class="btn btn-primary btn-sm" title="Guardar">
                                <span class="glyphicon glyphicon-floppy-disk"></span>
                            </button>
                        </td>
                    </form>
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

@section('scripts')
    <script src="{{ asset('build/js/select-color-by-value.js') }}"></script>
@endsection
