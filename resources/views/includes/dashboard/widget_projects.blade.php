<div class="widget">
    <div class="widget-heading clearfix">
        <h3 class="widget-title pull-left">Proyectos al {{ $client->projects_percent }} %</h3>
        <ul class="widget-tools pull-right list-inline">
            <li><a href="javascript:;" class="widget-collapse"><i class="ion-chevron-up"></i></a></li>
            <li><a href="javascript:;" class="widget-reload"><i class="ion-refresh"></i></a></li>
            <li><a href="javascript:;" class="widget-remove"><i class="ion-close-round"></i></a></li>
        </ul>
    </div>
    <div class="widget-body" style="">
        @if (count($projects) > 0)
            <table id="table-projects" class="table mb-0 dt-responsive">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Nombre del proyecto</th>
                    <th class="text-center">Estado</th>
                    <th class="text-center">Fotos</th>
                    <th class="text-center">Estado</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($projects as $key => $project)
                    <tr>
                        <td>{{ $key +1 }}</td>
                        <td>
                            <a href="/proyecto/{{ $project->id }}/ver">
                                {{ $project->name }}
                            </a>
                        </td>
                        <td class="text-center">
                            <img src="/images/semaphores/{{ $project->status_color }}.png"
                                 alt="Semáforo de estado" height="24"
                                 title="{{ $project->characters_percent }} %">
                        </td>
                        <td class="text-center text-{{ $project->hasPhotos ? 'success' : 'danger' }}"><i class="ion-{{ $project->hasPhotos ? 'checkmark' : 'close' }}-round"></i></td>
                        <td class="text-center"><span class="label label-outline label-success">Publicado</span></td>
                    </tr>
                @endforeach
                {{--<td class="text-center"><span class="label label-outline label-purple">En progreso</span></td>--}}
                </tbody>
            </table>
        @else
            <p>Aún no has registrado ningún proyecto.</p>
            <p>
                <a href="/proyectos" class="btn btn-primary">Empezar a registrar proyectos</a>
            </p>
        @endif
    </div>
</div>