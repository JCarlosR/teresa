<div class="widget">
    <div class="widget-heading">
        <h3 class="widget-title">Últimos mensajes recibidos</h3>
    </div>
    <div class="widget-body" style="height: 28em; overflow: auto;">
        @if (count($messages) > 0)
            <table class="table table-hover">
            <thead>
            <tr>
                <th>Categoría</th>
                <th>Emisor</th>
                <th>Mensaje</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($messages as $message)
                <tr class="unread">
                    <td class="email-select">
                        {{ $message->topic }}
                        <p class="text-muted mb-0">
                            <time datetime="{{ $message->created_at }}" class="fs-13 mr-5">
                                {{ $message->created_at->format('d/m/Y') }}
                            </time>
                        </p>
                    </td>
                    <td class="email-from">
                        <div class="media">
                            <div class="media-body">
                                <h5 class="media-heading">{{ $message->name }}</h5>
                                <span>{{ $message->phone }}</span>
                            </div>
                        </div>
                    </td>
                    <td class="text-center">
                        <a href="{{ url('/inbox/messages/'.$message->id) }}" class="btn btn-primary btn-sm" title="Ver mensaje">
                            <i class="glyphicon glyphicon-envelope"></i>
                        </a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        @else
            <p>Aún no has recibido ningún mensaje.</p>
            <p>Los mensajes recibidos aparecerán en este apartado.</p>
        @endif
    </div>
</div>