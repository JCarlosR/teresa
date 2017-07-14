@foreach ($services as $service)
    <li>
        <a href="#">{{ $service->name }}</a>

        <a href="{{ url("/servicio/$service->id/ver") }}" class="btn btn-default btn-xs" title="Ver datos">
            <span class="glyphicon glyphicon-eye-open"></span>
        </a>
        <a href="{{ url('/servicio/'.$service->id.'/editar') }}" class="btn btn-info btn-xs" title="Editar datos">
            <span class="glyphicon glyphicon-edit"></span>
        </a>
        <a href="{{ url("servicio/$service->id/imagenes") }}" class="btn btn-warning btn-xs" title="Editar imágenes">
            <span class="glyphicon glyphicon-picture"></span>
        </a>
        <a href="{{ url('/servicio/'.$service->id.'/eliminar') }}"
           class="btn btn-danger btn-xs" title="Eliminar servicio"
           onclick="return confirm('¿Estás seguro que deseas eliminar este servicio?');">
            <span class="glyphicon glyphicon-remove"></span>
        </a>

        @if ($service->services)
        <ul>
            @include('includes.user.services.tree', ['services' => $service->services])
        </ul>
        @endif
    </li>
@endforeach