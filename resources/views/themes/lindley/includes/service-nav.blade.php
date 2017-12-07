
<div class="col-md-3 sidebar">
    <div>

        <ul class="nav-list">
            @foreach ($me->services as $item)
            <li><a href="{{ $me->getLinkTo('/servicio/'.$item->id) }}" title="{{ $item->name }}">{{ $item->short_name }}<i class="fa fa-chevron-right" aria-hidden="true"></i></a></li>
            @endforeach

                {{--<li><a href="">TIENDA RETAIL <i class="fa fa-chevron-right" aria-hidden="true"></i></a></li>--}}
                {{--<li><a href="">DESARROLLO INTEGRAL <i class="fa fa-chevron-right" aria-hidden="true"></i></a></li>--}}
                {{--<li><a href="">IMPLEMENTACION TIENDA <i class="fa fa-chevron-right" aria-hidden="true"></i></a></li>--}}
                {{--<li><a href="">MANTENIEMIENTO TIENDA <i class="fa fa-chevron-right" aria-hidden="true"></i></a></li>--}}
                {{--<li><a href="">PLANOS SEGURIDAD <i class="fa fa-chevron-right" aria-hidden="true"></i></a></li>--}}
                {{--<li><a href="">SUPERVISION PROYECTOS <i class="fa fa-chevron-right" aria-hidden="true"></i></a></li>--}}
                {{--<li><a href="">SISTEMA SEGURIDAD <i class="fa fa-chevron-right" aria-hidden="true"></i></a></li>--}}

        </ul>
    </div>


</div>
