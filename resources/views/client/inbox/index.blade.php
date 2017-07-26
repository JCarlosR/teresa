@extends('client.inbox.base')

@section('inbox_content')
    <div class="page-actions">
        <div class="row">
            <div class="col-sm-6">

                <div class="btn-group">
                    <button type="button" data-toggle="dropdown" class="btn btn-default dropdown-toggle">Todos <span class="caret"></span></button>
                    <ul role="menu" class="dropdown-menu animated fadeInUp">
                        <li><a href="#">Todos</a></li>
                        <li><a href="#">Leídos</a></li>
                        <li><a href="#">No leídos</a></li>
                        <li><a href="#">Destacados</a></li>
                        <li><a href="#">No destacados</a></li>
                    </ul>
                </div>
                <button type="button" class="btn btn-default"><i class="ion-refresh"></i></button>
                <div class="btn-group">
                    <button type="button" class="btn btn-default"><i class="ion-folder"></i></button>
                    <button type="button" class="btn btn-default"><i class="ion-trash-b"></i></button>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group has-feedback mb-0 inline-block">
                    <input type="text" aria-describedby="searchMailList" placeholder="Buscar mensaje ..." style="width: 180px" class="form-control rounded"><span aria-hidden="true" class="ion-search form-control-feedback"></span><span id="searchMailList" class="sr-only">(default)</span>
                </div>
            </div>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table table-hover">
            <tbody>
            @if (count($messages) == 0)
                <div class="clearfix">
                    <div class="pull-left">No se han encontrado mensajes.</div>
                </div>
            @endif
            @foreach ($messages as $message)
                <tr class="unread">
                    <td class="email-select">
                        <div class="checkbox checkbox-custom m-0">
                            <input id="chk{{ $message->id }}" type="checkbox">
                            <label for="chk{{ $message->id }}"></label>
                        </div>
                    </td>
                    <td class="email-select"><i class="ion-star text-warning"></i></td>
                    <td class="email-from">
                        <div class="media">
                            <div class="media-body">
                                <h5 class="media-heading">{{ $message->name }}</h5>
                                <p class="text-muted mb-0">
                                    <time datetime="{{ $message->created_at }}" class="fs-13 mr-5">
                                        {{ $message->created_at->format('d/m/Y') }}
                                    </time>
                                </p>
                            </div>
                        </div>
                    </td>
                    <td>
                        <a href="{{ url('/inbox/messages/'.$message->id) }}">
                            <span class="email-title">{{ $message->phone }}</span>
                            <span class="email-summary"> - {{ $message->short_content }}</span>
                        </a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <div class="clearfix">
        <div class="pull-left">
            Mostrando {{ $messages->firstItem() }} - {{ $messages->lastItem() }}
            de {{ $messages->count() }}
        </div>
        <div class="pull-right">
            {{ $messages->links() }}
        </div>
    </div>
@endsection
