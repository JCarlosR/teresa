@extends('layouts.panel')

@section('styles')
    <link rel="stylesheet" href="{{ asset('/vendor/dragula/dragula.min.css') }}">
@endsection

@section('dashboard_content')
<div class="page-content container-fluid">
    <div class="widget">
        <div class="widget-heading">
            <h3 class="widget-title">Formulario de contacto</h3>
        </div>
        <div class="widget-body">
            @if (session('notification'))
                <div class="alert alert-success">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>

                    <p>{{ session('notification') }}</p>
                </div>
            @endif

            <p class="mb-20">A continuación, es posible definir <strong>los asuntos</strong> disponibles en el formulario de contacto principal.</p>

            <div class="row">
                <div class="col-md-6">
                    <form action="{{ url('/admin/inbox/topics') }}" class="form" method="post">
                        {{ csrf_field() }}

                        <template id="template-topic">
                            <div class="form-group input-group">
                                <input type="text" class="form-control" name="topics[]">
                                <span class="input-group-btn">
                                    <button class="btn btn-info" type="button">
                                        <i class="glyphicon glyphicon-move"></i>
                                    </button>
                                    <button class="btn btn-danger" type="button">
                                        <i class="glyphicon glyphicon-remove"></i>
                                    </button>
                                </span>
                            </div>
                        </template>
                        <div id="topics">
                            @foreach ($topics as $topic)
                                <div class="form-group input-group">
                                    <input type="text" class="form-control" name="topics[]" value="{{ $topic }}">
                                    <span class="input-group-btn">
                                    <button class="btn btn-info" type="button">
                                        <i class="glyphicon glyphicon-move"></i>
                                    </button>
                                    <button class="btn btn-danger" type="button">
                                        <i class="glyphicon glyphicon-remove"></i>
                                    </button>
                                </span>
                                </div>
                            @endforeach
                        </div>

                        <div class="form-group">
                            <button class="btn btn-primary" data-add type="button">
                                <i class="glyphicon glyphicon-plus"></i>
                            </button>
                            <button type="submit" class="btn btn-success">
                                <i class="glyphicon glyphicon-floppy-save"></i>
                                Guardar cambios
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="widget">
        <div class="widget-heading">
            <h3 class="widget-title">Previsualización</h3>
        </div>
        <div class="widget-body">
            <div class="row">
                <div class="col-md-6">
                    <form action="" class="form">
                        <div class="form-group">
                            <label for="name">Nombre</label>
                            <input type="text" class="form-control" id="name">
                        </div>
                        <div class="form-group">
                            <label for="email">Correo</label>
                            <input type="text" class="form-control" id="email">
                        </div>
                        <div class="form-group">
                            <label for="phone">Teléfono</label>
                            <input type="text" class="form-control" id="phone">
                        </div>
                        <div class="form-group">
                            <label for="topic">Asunto</label>
                            <select id="topic" class="form-control" required>
                                <option value="">Seleccione motivo de contacto</option>
                                @foreach ($topics as $topic)
                                    <option value="{{ $topic }}">{{ $topic }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="message">Mensaje</label>
                            <textarea id="message" rows="3" class="form-control"></textarea>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
    <script src="{{ asset('/vendor/dragula/dragula.min.js') }}"></script>
    <script>
        var templateTopic;
        var $topics;
        $(function () {
            $(document).on('click', '[data-add]', addTopic);
            $(document).on('click', '#topics .btn-danger', removeTopic);

            templateTopic = $('#template-topic');
            $topics = $('#topics');
            addTopic(); // start with one empty input

            dragula([document.getElementById('topics')]);
        });

        function addTopic() {
            var $topic = templateTopic.html();
            $topics.append($topic);
        }
        function removeTopic() {
            $(this).parents('.form-group').fadeOut();
        }
    </script>
@endsection
