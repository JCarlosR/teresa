<div class="table-responsive">
    <table class="table table-bordered">
        <thead>
        <tr>
            <td>ID</td>
            <td>Tipo</td>
            <td>Logo</td>
            <td>Información</td>

            <td>Opciones</td>
        </tr>
        </thead>
        <tbody>
        @foreach ($clients as $client)
            <tr data-status="{{ $client->client_type }}">
                <td>{{ $client->id }}</td>
                <td>{{ $client->client_type }}</td>
                <td>
                    <a href="{{ url("admin/cliente/seleccionar/$client->id") }}">
                        <img src="{{ url($client->photo_route) }}" width="60" alt="Logo {{ $client->name }}">
                    </a>
                </td>
                <td>
                    <h4 class="mt-10 mb-5 text-black">{{ $client->name ?: 'Sin alias' }}</h4>
                    <p class="fs-12 text-uppercase text-muted">{{ $client->service_started_at->format('d/m/Y') }}</p>
                    <p>{{ $client->description ?: 'Descripción sin especificar' }}</p>
                </td>

                <td>
                    <a href="/admin/cliente/{{ $client->id }}/destacar/{{ $client->inverse_star_state }}"
                       data-toggle="tooltip" data-placement="top" title="Clic para destacar o quitar destacado">
                        <i class="glyphicon glyphicon-{{ $client->star_state }} big-black-icon"></i>
                    </a>
                    <a href="/ver/{{ $client->id }}" target="_blank"
                       data-toggle="tooltip" data-placement="top" title="Previsualizar datos en el theme por defecto">
                        <i class="glyphicon glyphicon glyphicon-globe big-black-icon"></i>
                    </a>
                    <a href="/admin/cliente/{{ $client->id }}/impersonate"
                       data-toggle="tooltip" data-placement="top" title="Iniciar sesión como este usuario">
                        <i class="glyphicon glyphicon-log-in big-black-icon"></i>
                    </a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

