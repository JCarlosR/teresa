@extends('layouts.admin')

@section('dashboard_content')
<div class="page-content container-fluid">
    <div class="widget">
        <div class="widget-heading">
            <h3 class="widget-title">Perfiles profesionales</h3>
        </div>
        <div class="widget-body">
            @if (session('notification'))
                <div class="alert alert-success">
                    <p>{{ session('notification') }}</p>
                </div>
            @endif

            <p class="mb-20">
                Los siguientes perfiles permiten difundir información sobre la empresa y sus más destacados proyectos.
            </p>
            <table class="table table-condensed">
                <thead>
                <tr>
                    <th>#</th>
                    <th class="text-center">Red social</th>
                    <th class="text-center">URL</th>
                    <th class="text-center">Estado</th>
                    <th class="text-center">Notas</th>
                    <th class="text-center">Opciones</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($professionalProfiles as $key => $professionalProfile)
                <tr>
                    <th scope="row">{{ ++$key }}</th>
                    <form action="" method="POST" class="form-inline">
                        {{ csrf_field() }}
                        <td class="col-md-2 text-center">
                            <input type="text" name="name" readonly class="form-control" value="{{ $professionalProfile->name }}">
                        </td>
                        <td><input type="text" name="url" class="form-control" placeholder="Dirección URL del perfil profesional" value="{{ $professionalProfile->url }}"></td>
                        <td>
                            <div class="form-group">
                                <select name="state" class="form-control">
                                    <option value="0" @if($professionalProfile->state==0) selected @endif>No publicado</option>
                                    <option value="1" @if($professionalProfile->state==1) selected @endif>Publicado</option>
                                </select>
                            </div>
                        </td>
                        <td>
                            <textarea name="notes" rows="2" placeholder="Observación" class="form-control" style="resize: none">{{ $professionalProfile->notes }}</textarea>
                        </td>
                        <td class="text-center">
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
@endsection

@section('scripts')
    <script src="{{ asset('build/js/select-color-by-value.js') }}"></script>
@endsection

