@extends('client.inbox.base')

@section('inbox_content')
    <div class="page-actions">
        <div class="row">
            <div class="col-sm-6">
                <div class="media">
                    <div class="media-left avatar"><img src="/images/users/default.jpg" alt="{{ $message->name }}" class="media-object img-circle"><span class="status bg-success"></span></div>
                    <div style="width:auto" class="media-body">
                        <h5 class="media-heading">{{ $message->name }}</h5>
                        <p class="text-muted mb-0">de <a href="#">{{ $message->email }}</a> para mí</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div role="toolbar" aria-label="Toolbar with button groups" class="btn-toolbar inline-block">
                    <div class="btn-group">
                        <button type="button" class="btn btn-outline btn-default">Responder</button>
                        <button type="button" data-toggle="dropdown" aria-expanded="false" class="btn btn-outline btn-default dropdown-toggle"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>
                        <ul role="menu" class="dropdown-menu pull-right animated fadeInDown">
                            <li><a href="#">Responder</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Imprimir</a></li>
                            <li><a href="#">Marcar como spam</a></li>
                            <li><a href="#">Marcar como no leído</a></li>
                            <li><a href="#">Eliminar este mensaje</a></li>
                        </ul>
                    </div>
                    <div role="group" aria-label="Second group" class="btn-group">
                        <button type="button" class="btn btn-outline btn-default"><i class="ion-arrow-left-c"></i></button>
                        <button type="button" class="btn btn-outline btn-default"><i class="ion-arrow-right-c"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="email-single">
        <h3 class="fw-400">{{ $message->topic }}</h3>
        <p>{{ $message->content }}</p>
        <hr>
        <p><strong>Teléfono de contacto:</strong> {{ $message->phone }}</p>
        <hr>
        <div class="text-right">
            <a href="{{ url('/inbox') }}" type="button" class="btn btn-default">
                <i class="ion-filing mr-5"></i> Volver a la bandeja
            </a>
            <a href="{{ url('/inbox/messages/'.$message->id.'/delete') }}" type="button" class="btn btn-danger" onclick="return confirm('¿Seguro que desea eliminar este mensaje?');">
                <i class="ion-trash-b mr-5"></i> Eliminar
            </a>
        </div>
    </div>
@endsection
