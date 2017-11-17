<div class="widget">
    <div class="widget-heading clearfix">
        <h3 class="widget-title pull-left">Servicios al {{ $client->services_percent }} %</h3>
        <ul class="widget-tools pull-right list-inline">
            <li><a href="javascript:;" class="widget-collapse"><i class="ion-chevron-up"></i></a></li>
            <li><a href="javascript:;" class="widget-reload"><i class="ion-refresh"></i></a></li>
            <li><a href="javascript:;" class="widget-remove"><i class="ion-close-round"></i></a></li>
        </ul>
    </div>
    <div class="widget-body" @if (count($services) > 0) style="min-height: 25em;" @endif>
        @if (count($services) > 0)
            <table id="table-services" class="table mb-0 nowrap">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Nombre</th>
                    <th class="text-center">Estado</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($services as $key => $service)
                    <tr>
                        <td>{{ $key +1 }}</td>
                        <td>
                            <a href="/servicio/{{ $service->id }}/ver">
                                {{ $service->name }}
                            </a>
                        </td>
                        <td class="text-center">
                            <img src="/images/semaphores/{{ $service->status_color }}.png"
                                 alt="Semáforo de estado" height="24"
                                 title="{{ $service->characters_percent }} %">
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        @else
            <p>Aún no has registrado ningún servicio.</p>
            <p>
                <a href="/servicios" class="btn btn-primary">Empezar a registrar servicios</a>
            </p>
        @endif
    </div>
</div>