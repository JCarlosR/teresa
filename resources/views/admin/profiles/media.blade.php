@extends('layouts.panel')

@section('dashboard_content')
<div class="page-content container-fluid">
    <div class="widget">
        <div class="widget-heading">
            <h3 class="widget-title">Medios profesionales</h3>
        </div>
        <div class="widget-body">
            @if (session('notification'))
                <div class="alert alert-success">
                    <p>{{ session('notification') }}</p>
                </div>
            @endif

            <p class="mb-20">
                Los siguientes medios profesionales permiten difundir información sobre la empresa y sus más destacados proyectos.
            </p>
            <table class="table table-condensed">
                <thead>
                <tr>
                    <th>#</th>
                    <th class="text-center">Medio profesional</th>
                    <th class="text-center">URL</th>
                    <th class="text-center">Estado</th>
                    <th class="text-center">Notas</th>
                    <th class="text-center">Opciones</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($professionalMedia as $key => $item)
                    <tr>
                        <th scope="row">{{ ++$key }}</th>
                        <form action="" method="POST" class="form-inline">
                            {{ csrf_field() }}
                            <input type="hidden" name="id" value="{{ $item->id }}">
                            <td class="text-center">
                                <input type="text" name="name" class="form-control" value="{{ $item->name }}">
                            </td>
                            <td class="col-md-5">
                                <input type="text" name="url" class="form-control" placeholder="Dirección URL del perfil profesional" value="{{ $item->url }}">
                            </td>
                            <td class="col-md-2">
                                <div class="form-group">
                                    <select name="state" class="form-control">
                                        <option value="0" @if($item->state==0) selected @endif>No publicado</option>
                                        <option value="1" @if($item->state==1) selected @endif>Publicado</option>
                                    </select>
                                </div>
                            </td>
                            <td>
                                <textarea name="notes" rows="2" placeholder="Observación" class="form-control" style="resize: none">{{ $item->notes }}</textarea>
                            </td>
                            <td class="text-center">
                                <button type="submit" class="btn btn-primary btn-sm" title="Guardar">
                                    <span class="glyphicon glyphicon-floppy-disk"></span>
                                </button>
                            </td>
                        </form>
                    </tr>
                @endforeach
                <tr>
                    <th scope="row">#</th>
                    <form action="" method="POST" class="form-inline">
                        {{ csrf_field() }}
                        <td class="text-center">
                            <input type="text" name="name" class="form-control" placeholder="Nuevo medio profesional" required>
                        </td>
                        <td class="col-md-5">
                            <input type="text" name="url" class="form-control" placeholder="URL del medio profesional">
                        </td>
                        <td class="col-md-2">
                            <div class="form-group">
                                <select name="state" class="form-control">
                                    <option value="0" selected>No publicado</option>
                                    <option value="1">Publicado</option>
                                </select>
                            </div>
                        </td>
                        <td>
                            <textarea name="notes" rows="2" placeholder="Observación" class="form-control" style="resize: none"></textarea>
                        </td>
                        <td class="text-center">
                            <button type="submit" class="btn btn-primary btn-sm" title="Nuevo">
                                <span class="glyphicon glyphicon-floppy-disk"></span>
                            </button>
                        </td>
                    </form>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

@section('scripts')
    <script src="{{ asset('build/js/select-color-by-value.js') }}"></script>
@endsection
