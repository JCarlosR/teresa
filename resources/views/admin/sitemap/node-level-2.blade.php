<li>
    <a href="{{ $node->url }}" data-edit="{{ $node->id }}" data-type="{{ $node->type }}">
        @if (!$node->type)
        <form action="{{ url('/admin/sitemap') }}" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="add_to" value="{{ $node->id }}">
            <i class="glyphicon glyphicon-plus-sign" data-add></i>
        </form>
        @endif

        @if ($node->type === 'projects')
            <span data-name>Proyectos</span>
            <small data-description>Página de proyectos</small>
        @elseif ($node->type === 'services')
            <span data-name>Servicios</span>
            <small data-description>Página de servicios</small>
        @elseif ($node->type === 'about_us')
            <span data-name>Nosotros</span>
            <small data-description>Acerca de nosotros</small>
        @else
            <span data-name>{{ $node->name }}</span>
        @endif
    </a>
    <ul>
        @if ($node->type === 'projects')
            @foreach ($projects as $project)
                @include('admin.sitemap.node-project')
            @endforeach
        @elseif ($node->type === 'services')
            @foreach ($services as $service)
                @include('admin.sitemap.node-service')
            @endforeach
        @else
            @foreach ($node->children as $child)
                @include('admin.sitemap.node-level-3')
            @endforeach
        @endif
    </ul>
</li>
