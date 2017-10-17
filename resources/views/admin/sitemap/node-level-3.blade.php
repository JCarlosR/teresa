<li>
    <a href="{{ $child->url }}" data-edit="{{ $child->id }}" data-type="{{ $child->type }}">
        <form action="{{ url('/admin/sitemap') }}" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="add_to" value="{{ $child->id }}">
            <i class="glyphicon glyphicon-plus-sign" data-add></i>
        </form>

        <span data-name>{{ $child->name }}</span>
        <small data-description style="display: none">{{ $child->description }}</small>
    </a>
    <ul>
        @foreach ($child->children as $item)
            <li>
                <a href="{{ $item->url }}" data-edit="{{ $item->id }}" data-type="{{ $item->type }}">
                    <span data-name>{{ $item->name }}</span>
                    <small data-description style="display: none">{{ $item->description }}</small>
                </a>
            </li>
        @endforeach
    </ul>
</li>