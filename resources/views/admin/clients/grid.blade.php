<div class="row">
    @foreach ($clients as $client)
        <div class="col-xs-12 col-sm-4 col-md-3" data-status="{{ $client->client_type }}">
            <div class="widget client-widget">
                <div class="widget-body text-center">
                    <p  class="text-right">
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
                    </p>
                    <a href="{{ url("admin/cliente/seleccionar/$client->id") }}">
                        <img src="{{ url($client->photo_route) }}" width="100" alt="Logo {{ $client->name }}" class="img-circle">
                        <h4 class="mt-20 mb-5 text-black">{{ $client->name ?: 'Sin alias' }}</h4>
                    </a>
                    <p class="fs-12 text-uppercase text-muted">{{ $client->service_started_at->format('d/m/Y') }}</p>
                    <p>{{ $client->description ?: 'Descripción sin especificar' }}</p>
                </div>
            </div>
        </div>
    @endforeach
</div>