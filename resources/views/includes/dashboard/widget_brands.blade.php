<div class="widget">
    <div class="widget-heading clearfix">
        <h3 class="widget-title pull-left">Marcas</h3>
        <ul class="widget-tools pull-right list-inline">
            <li><a href="javascript:;" class="widget-collapse"><i class="ion-chevron-up"></i></a></li>
            <li><a href="javascript:;" class="widget-reload"><i class="ion-refresh"></i></a></li>
            <li><a href="javascript:;" class="widget-remove"><i class="ion-close-round"></i></a></li>
        </ul>
    </div>
    <div class="widget-body" style="">
        @if (count($brands) > 0)
            <table id="table-brands" class="table mb-0 dt-responsive nowrap">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Nombre del proyecto</th>
                    <th class="text-center">Estado</th>
                    {{--<th class="text-center">Fotos</th>--}}
                    {{--<th class="text-center">Estado</th>--}}
                </tr>
                </thead>
                <tbody>
                @foreach ($brands as $key => $brand)
                    <tr>
                        <td>{{ $key +1 }}</td>
                        <td>
                            <a href="/marcas/{{ $brand->id }}/ver">{{ $brand->name }}</a>
                        </td>
                        <td class="text-center">
                            <img src="/images/semaphores/{{ $brand->status_color }}.png"
                                 alt="Semáforo de estado" height="24"
                                 title="{{ $brand->characters_percent }} %">
                        </td>
                        {{--<td class="text-center text-{{ $brand->hasPhotos ? 'success' : 'danger' }}"><i class="ion-{{ $brand->hasPhotos ? 'checkmark' : 'close' }}-round"></i></td>--}}
                        {{--<td class="text-center"><span class="label label-outline label-success">Publicado</span></td>--}}
                    </tr>
                @endforeach
                {{--<td class="text-center"><span class="label label-outline label-purple">En progreso</span></td>--}}
                </tbody>
            </table>
        @else
            <p>Aún no has registrado ninguna marca.</p>
            <p>
                <a href="/marcas" class="btn btn-primary">Empezar a registrar marcas</a>
            </p>
        @endif
    </div>
</div>