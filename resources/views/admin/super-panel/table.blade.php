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
                    <select name="" id="">
                        <option value="">sí</option>
                        <option value="">no</option>
                        <option value="">cola</option>
                    </select>
                </td>
                <td>
                    <select name="" id="">
                        <option value="">sí</option>
                        <option value="">no</option>
                        <option value="">cola</option>
                    </select>
                </td>
                <td>
                    <select name="" id="">
                        <option value="">sí</option>
                        <option value="">no</option>
                        <option value="">cola</option>
                    </select>
                </td>
                <td>
                    <select name="" id="">
                        <option value="">sí</option>
                        <option value="">no</option>
                        <option value="">cola</option>
                    </select>
                </td>
                <td>
                    <small>P: {{ $client->projects_percent }} % | S: {{ $client->services_percent }} %</small>
                </td>
                <td>
                    <select name="" id="">
                        <option value="">sí</option>
                        <option value="">no</option>
                        <option value="">cola</option>
                    </select>
                </td>
                <td>
                    <select name="" id="">
                        <option value="">sí</option>
                        <option value="">no</option>
                        <option value="">cola</option>
                    </select>
                </td>
                <td>
                    <select name="" id="">
                        <option value="">sí</option>
                        <option value="">no</option>
                        <option value="">cola</option>
                    </select>
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
