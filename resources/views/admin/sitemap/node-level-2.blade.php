<li>
    <a href="{{ $node->url }}" data-edit="{{ $node->id }}" data-type="{{ $node->type }}">
        @if (!$node->type)
        <form action="{{ url('/admin/sitemap') }}" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="add_to" value="{{ $node->id }}">
            <i class="glyphicon glyphicon-plus-sign" data-add></i>
        </form>
        @endif

        <span data-name>{{ $node->name }}</span>
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
