@extends('client.inbox.base')

@section('inbox_content')
    <div class="page-actions">
        <div class="row">
            <div class="col-sm-6">
                <div class="media">
                    <div class="media-left avatar"><img src="/build/images/users/12.jpg" alt="{{ $message->name }}" class="media-object img-circle"><span class="status bg-success"></span></div>
                    <div style="width:auto" class="media-body">
                        <h5 class="media-heading">{{ $message->name }}</h5>
                        <p class="text-muted mb-0"><a href="#">{{ $message->email }}</a> a mí</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div role="toolbar" aria-label="Toolbar with button groups" class="btn-toolbar inline-block">
                    <div class="btn-group">
                        <button type="button" class="btn btn-outline btn-default">Responder</button>
                        <button type="button" data-toggle="dropdown" aria-expanded="false" class="btn btn-outline btn-default dropdown-toggle"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>
                        <ul role="menu" class="dropdown-menu pull-right animated fadeInDown">
                            <li><a href="#">Reply</a></li>
                            <li><a href="#">Reply To All</a></li>
                            <li><a href="#">Forward</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Print</a></li>
                            <li><a href="#">Mark as spam</a></li>
                            <li><a href="#">Mark as unread</a></li>
                            <li><a href="#">Delete this message</a></li>
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
        <div class="text-right">
            <a href="{{ url('/inbox') }}" type="button" class="btn btn-success">
                <i class="ion-paper-airplane mr-5"></i> Volver a la bandeja
            </a>
            <a href="{{ url('/inbox/messages/'.$message->id.'/delete') }}" type="button" class="btn btn-danger" onclick="return confirm('¿Seguro que desea eliminar este mensaje?');">
                <i class="ion-trash-b mr-5"></i> Eliminar
            </a>
        </div>
    </div>
@endsection
