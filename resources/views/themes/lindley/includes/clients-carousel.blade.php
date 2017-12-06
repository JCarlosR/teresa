<div class='row'>
    <div class='col-md-12'>
        <div class="carousel slide media-carousel text-center" id="media">
            <div class="carousel-inner">

                @foreach ($me->customers->chunk(4) as $key => $customers_group)
                <div class="item @if ($key==0) active @endif">
                    <div class="row">
                        @foreach ($customers_group as $customer)
                            <div class="col-md-3 col-sm-6 col-xs-12 ">
                                <a href="{{ $customer->url ?: '#' }}" target="_blank" class="responsive" title="Enlace al cliente {{ $customer->name }}">
                                    <img src="/images/customers/{{ $customer->image }}" class="img-responsive" alt="Imagen del cliente {{ $customer->name }}" title="Cliente {{ $customer->name }} de {{ $me->trade_name }}">
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
                @endforeach

            <div class="left-control">
                <a data-slide="prev" href="#media" class="left carousel-control">‹</a>
            </div>
           <div class="right-control">
               <a data-slide="next" href="#media" class="right carousel-control">›</a>
           </div>
        </div>
    </div>
</div>

