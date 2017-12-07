<div class="table-responsive">
    <table class="table table-bordered">
        <thead>
        <tr>
            <td>ID</td>
            <td>Tipo</td>
            <td>Cliente</td>
            <td>Contrato</td>
            <td>Sitemap</td>
            <td>Selección plantilla</td>
            <td>Website</td>
            <td title="Google Analytics">GA</td>
            <td>Contenido</td>
            <td title="Social media">SM</td>
            <td title="Medios profesionales">PM</td>
            <td>Difusión</td>

            <td>Opciones</td>
        </tr>
        </thead>
        <tbody>
        @foreach ($clients as $client)
            <tr data-status="{{ $client->client_type }}">
                <td>{{ $client->id }}</td>
                <td><small>{{ $client->client_type }}</small></td>
                <td>
                    <a href="{{ url("admin/cliente/seleccionar/$client->id") }}">
                        <img src="{{ url($client->photo_route) }}" width="60" alt="Logo {{ $client->name }}" title="{{ $client->name ?: 'Sin nombre' }}">
                    </a>
                </td>
                <td>
                    <p class="fs-12 text-muted">{{ $client->service_started_at->format('d/m/Y') }}</p>
                </td>
                <td>
                    @if ($client->state)
                        {{ $client->state->sitemap ? 'sí' : 'no' }}
                    @else
                        -
                    @endif
                </td>
                <td>
                    no
                </td>
                <td>
                    @if ($client->state)
                        {{ $client->state->website ? 'sí' : 'no' }}
                    @else
                        -
                    @endif
                </td>
                <td>
                    @if ($client->state)
                        {{ $client->state->google_analytics ? 'sí' : 'no' }}
                    @else
                        -
                    @endif
                </td>
                <td>
                    <p class="small">P: {{ $client->projects_percent }} %</p>
                    <p class="small">S: {{ $client->services_percent }} %</p>
                </td>
                <td>
                    @if ($client->state)
                        {{ $client->state->social_media ? 'sí' : 'no' }}
                    @else
                        -
                    @endif
                </td>
                <td>
                    @if ($client->state)
                        {{ $client->state->professional_media ? 'sí' : 'no' }}
                    @else
                        -
                    @endif
                </td>
                <td>
                    @if ($client->state)
                        {{ $client->state->broadcasting ? 'sí' : 'no' }}
                    @else
                        -
                    @endif
                </td>

                <td>
                    <a href="/admin/super/cliente/{{ $client->id }}/editar"
                       class="btn btn-primary btn-xs"
                       data-toggle="tooltip" data-placement="top" title="Editar el estado del cliente">
                        <i class="glyphicon glyphicon-edit"></i>
                    </a>
                    <a href="/admin/cliente/{{ $client->id }}/destacar/{{ $client->inverse_star_state }}"
                       class="btn btn-secondary btn-xs"
                       data-toggle="tooltip" data-placement="top" title="Clic para {{ $client->starred ? 'quitar destacado' : 'destacar' }}">
                        <i class="glyphicon glyphicon-{{ $client->star_state }}"></i>
                    </a>
                    <a href="/ver/{{ $client->id }}" target="_blank"
                       class="btn btn-info btn-xs"
                       data-toggle="tooltip" data-placement="top" title="Previsualizar datos en el theme por defecto">
                        <i class="glyphicon glyphicon glyphicon-globe"></i>
                    </a>
                    <a href="/admin/cliente/{{ $client->id }}/impersonate"
                       class="btn btn-default btn-xs"
                       data-toggle="tooltip" data-placement="top" title="Iniciar sesión como este usuario">
                        <i class="glyphicon glyphicon-log-in"></i>
                    </a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
