<li>
    <a href="{{ $child->url }}" data-edit="{{ $child->id }}" data-type="{{ $child->type }}">
        {{--<span data-name>{{ $child->name }}</span>--}}
    </a>
    <ul>
        @foreach ($child->children as $item)
            <li>
                <a href="{{ $item->url }}" data-edit="{{ $item->id }}" data-type="{{ $item->type }}">
                    {{--<span data-name>{{ $item->name }}</span>--}}
                </a>
            </li>
        @endforeach
    </ul>
</li>