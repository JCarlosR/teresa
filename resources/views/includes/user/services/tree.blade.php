@foreach ($services as $service)
    <li>
        <a href="#">{{ $service->name }}</a>
        @if ($service->services)
        <ul>
            @include('includes.user.services.tree', ['services' => $service->services])
        </ul>
        @endif
    </li>
@endforeach