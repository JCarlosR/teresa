<div class="widget">
    <div class="widget-heading clearfix">
        <h3 class="widget-title pull-left">Artículos</h3>
        <ul class="widget-tools pull-right list-inline">
            <li><a href="javascript:;" class="widget-collapse"><i class="ion-chevron-up"></i></a></li>
            <li><a href="javascript:;" class="widget-reload"><i class="ion-refresh"></i></a></li>
            <li><a href="javascript:;" class="widget-remove"><i class="ion-close-round"></i></a></li>
        </ul>
    </div>
    <div class="widget-body" style="">
        @if (count($articles) > 0)
            <table id="table-articles" class="table mb-0 dt-responsive nowrap">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Nombre del artículo</th>
                    <th class="text-center">Caracteres</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($articles as $key => $article)
                    <tr>
                        <td>{{ $key +1 }}</td>
                        <td>
                            <a href="/articulos/{{ $article->id }}/ver">{{ $article->title }}</a>
                        </td>
                        <td class="text-center">
                            {{ $article->characters_count }}
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        @else
            <p>Aún no has registrado ningún artículo.</p>
            <p>
                <a href="/articulos" class="btn btn-primary">Empezar a registrar artículos</a>
            </p>
        @endif
    </div>
</div>