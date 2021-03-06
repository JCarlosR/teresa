<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="carousel slide media-carousel text-center" id="media">
            <div class="carousel-inner">

                @foreach ($me->customers->chunk(4) as $key => $customers_group)
                <div class="item @if ($key==0) active @endif">
                    <div class="row">
                        @foreach ($customers_group as $customer)
                            <div class="col-md-3 col-sm-3 col-xs-12 ">
                                <a href="{{ $customer->url ?: '#' }}" target="_blank" rel="nofollow" class="responsive" title="Cliente {{ $customer->name }} de {{ $me->trade_name }}">
                                    <img src="/images/customers/{{ $customer->image }}" class="img-responsive" alt="Cliente {{ $customer->name }} de {{ $me->trade_name }}" title="Cliente {{ $customer->name }} de {{ $me->trade_name }}">
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
                @endforeach

            <div class="left-control">
                <a data-slide="prev" href="#media" class="left carousel-control" title="Siguiente">‹</a>
            </div>
           <div class="right-control">
               <a data-slide="next" href="#media" class="right carousel-control" title="Anterior">›</a>
           </div>
        </div>
    </div>
</div>
</div>