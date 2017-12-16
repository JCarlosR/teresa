<li>
    <a href="{{ $node->url }}" data-edit="{{ $node->id }}" data-type="{{ $node->type }}">
        {{--<span data-name>{{ $node->name }}</span>--}}
    </a>
    <ul>
        @if ($node->type === 'projects')
            @foreach ($projects as $project)
                @include('client.sitemap.node-project')
            @endforeach
        @elseif ($node->type === 'services')
            @foreach ($services as $service)
                @include('client.sitemap.node-service')
            @endforeach
        @elseif ($node->type === 'articles')
            @foreach ($articles as $article)
                @include('client.sitemap.node-article')
            @endforeach
        @else
            @foreach ($node->children as $child)
                @include('client.sitemap.node-level-3')
            @endforeach
        @endif
    </ul>
</li>
