<div class="row">
    <div class="col-md-4">
        <div class="widget">
            <div class="widget-body">
                <div class="text-center">
                    <img src="{{ url($client->photo_route) }}" width="100" alt="Logo {{ $client->trade_name }}" class="img-circle">
                    <p class="fs-12 text-uppercase text-muted">{{ $client->service_started_at->format('d/m/Y') }}</p>
                </div>
                <a href="{{ $client->domain ?: '#' }}" target="_blank" style="color: #1e0fbe;">
                    <h4 class="mt-20 mb-5">{{ $client->name ?: 'Sin nombre comercial' }}</h4>
                </a>
                <p style="color: #006621;">{{ $client->domain ?: url('/') }}</p>
                <p style="color: #545454;">{{ $client->description ?: 'Descripción sin especificar' }}</p>
            </div>
        </div>
        <div class="widget">
            <div class="widget-body text-center p-0">
                <div class="row row-0 divider">
                    <div class="col-xs-4">
                        <h6 class="text-uppercase">Proyectos</h6>
                        <div class="fs-36 fw-300"><span class="counter">{{ $client->projects_count }}</span></div>
                        <div class="progress progress-striped progress-sm mb-0">
                            <div role="progressbar" data-transitiongoal="{{ $client->projects_percent }}" class="progress-bar progress-bar-{{ $client->projects_status }}"></div>
                        </div>
                    </div>
                    <div class="col-xs-4">
                        <h6 class="text-uppercase">Servicios</h6>
                        <div class="fs-36 fw-300"><span class="counter">{{ $client->services_count }}</span></div>
                        <div class="progress progress-striped progress-sm mb-0">
                            <div role="progressbar" data-transitiongoal="{{ $client->services_percent }}" class="progress-bar progress-bar-{{ $client->services_status }}"></div>
                        </div>
                    </div>
                    <div class="col-xs-4">
                        <h6 class="text-uppercase">Leads</h6>
                        <div class="fs-36 fw-300"><span class="counter">{{ $client->inbox_messages->count() }}</span></div>
                        <div class="progress progress-striped progress-sm mb-0">
                            <div role="progressbar" data-transitiongoal="100" class="progress-bar progress-bar-purple"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @if ($client->hasSection('Servicios'))
            @include('includes.dashboard.widget_services')
        @endif

        @if ($client->hasSection('Artículos'))
            @include('includes.dashboard.widget_articles')
        @endif
    </div>
    <div class="col-md-8">
        <div class="widget text-center">
            <div class="widget-heading">
                <h3 class="widget-title">Perfiles sociales</h3>
            </div>
            <div class="widget-body" id="wrapper">
                <div class="row row-0 expand">
                    <div class="col-social">
                        <p class="fs-12 text-uppercase text-muted hidden-xs">Facebook</p>
                        <a href="{{ $facebook->url }}" target="_blank" data-social="facebook" data-id="{{ $facebook->id }}">
                            <i class="ion-social-facebook fs-36 @if($facebook->state) social-color-facebook @else social-color-black @endif"></i>
                            <div class="mt-10 fs-11 text-muted count"></div>
                        </a>
                    </div>
                    <div class="col-social" data-linkedin-token="{{ env('LINKEDIN_OAUTH_TOKEN') }}">
                        <p class="fs-12 text-uppercase text-muted hidden-xs">Linkedin</p>
                        <a href="{{ $linkedIn->url }}" target="_blank" data-social="linkedIn" data-id="{{ $linkedIn->id }}">
                            <i class="ion-social-linkedin fs-36 @if($linkedIn->state) social-color-linkedin @else social-color-black @endif"></i>
                            <div class="mt-10 fs-11 text-muted count"></div>
                        </a>
                    </div>
                    <div class="col-social">
                        <p class="fs-12 text-uppercase text-muted hidden-xs">Google+</p>
                        <a href="{{ $googlePlus->url }}" target="_blank" data-social="googlePlus" data-id="{{ $googlePlus->id }}">
                            <i class="block ion-social-google fs-36 @if($googlePlus->state) social-color-google @else social-color-black @endif"></i>
                            <div class="mt-10 fs-11 text-muted count"></div>
                        </a>
                    </div>
                    <div class="col-social">
                        <p class="fs-12 text-uppercase text-muted hidden-xs">Twitter</p>
                        <a href="{{ $twitter->url }}" target="_blank" data-social="twitter" data-id="{{ $twitter->id }}">
                            <i class="block ion-social-twitter fs-36 @if($twitter->state) social-color-twitter @else social-color-black @endif"></i>
                            <div class="mt-10 fs-11 text-muted count"></div>
                        </a>
                    </div>
                    <div class="col-social">
                        <p class="fs-12 text-uppercase text-muted hidden-xs">Pinterest</p>
                        <a href="{{ $pinterest->url }}" target="_blank" data-social="pinterest" data-id="{{ $pinterest->id }}">
                            <i class="block ion-social-pinterest fs-36 @if($pinterest->state) social-color-pinterest @else social-color-black @endif"></i>
                            <div class="mt-10 fs-11 text-muted count"></div>
                        </a>
                    </div>
                    <div class="col-social" data-foursquare-token="{{ env('FOURSQUARE_OAUTH_TOKEN') }}">
                        <p class="fs-12 text-uppercase text-muted hidden-xs">FourSquare</p>
                        <a href="{{ $fourSquare->url }}" target="_blank" data-social="fourSquare" data-id="{{ $fourSquare->id }}">
                            <i class="block ion-social-foursquare fs-36 @if($fourSquare->state) social-color-foursquare @else social-color-black @endif"></i>
                            <div class="mt-10 fs-11 text-muted count"></div>
                        </a>
                    </div>
                    <div class="col-social" data-instagram-token="{{ $client->instagram_token }}">
                        <p class="fs-12 text-uppercase text-muted hidden-xs">Instagram</p>
                        <a href="{{ $instagram->url }}" target="_blank" data-social="instagram" data-id="{{ $instagram->id }}">
                            <i class="block ion-social-instagram fs-36 @if($instagram->state) social-color-instagram @else social-color-black @endif"></i>
                            <div class="mt-10 fs-11 text-muted count"></div>
                        </a>
                    </div>
                    <div class="col-social">
                        <p class="fs-12 text-uppercase text-muted hidden-xs">Youtube</p>
                        <a href="{{ $youtube->url }}" target="_blank" data-social="youtube" data-id="{{ $youtube->id }}">
                            <i class="block ion-social-youtube fs-36 @if($youtube->state) social-color-youtube @else social-color-black @endif"></i>
                            <div class="mt-10 fs-11 text-muted count"></div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="widget">
            <div class="widget-heading text-center">
                <h3 class="widget-title">Perfiles profesionales</h3>
            </div>
            <div class="widget-body text-center">
                <div class="row expand">
                @if ($client->client_type == 'architect')
                    <div class="col-professional">
                        <p class="fs-12 text-uppercase text-muted hidden-xs">
                            Architizer
                        </p>
                        <a href="{{ $architizer }}" target="_blank">
                            @if ($architizer == '#')
                                <img src="{{ asset('/images/professional/architizer-off.png') }}" alt="Architizer" width="36">
                            @else
                                <img src="{{ asset('/images/professional/architizer.png') }}" alt="Architizer" width="36">
                            @endif
                        </a>
                    </div>

                    <div class="col-professional">
                        <p class="fs-12 text-uppercase text-muted hidden-xs">
                            Archello
                        </p>
                        <a href="{{ $archello }}" target="_blank">
                            @if ($archello == '#')
                                <img src="{{ asset('/images/professional/archello-off.png') }}" alt="Archello" width="36">
                            @else
                                <img src="{{ asset('/images/professional/archello.png') }}" alt="Archello" width="36">
                            @endif
                        </a>
                    </div>

                    <div class="col-professional">
                        <p class="fs-12 text-uppercase text-muted hidden-xs">
                            Archilovers
                        </p>
                        <a href="{{ $archilovers }}" target="_blank">
                            @if ($archilovers == '#')
                                <img src="{{ asset('/images/professional/archilovers-off.png') }}" alt="Archilovers" width="36">
                            @else
                                <img src="{{ asset('/images/professional/archilovers.png') }}" alt="Archilovers" width="36">
                            @endif
                        </a>
                    </div>

                    <div class="col-professional">
                        <p class="fs-12 text-uppercase text-muted hidden-xs">
                            Open Buildings
                        </p>
                        <a href="{{ $buildings }}" target="_blank">
                            @if ($buildings == '#')
                                <img src="{{ asset('/images/professional/openbuildings-off.png') }}" alt="Open Buildings" width="36">
                            @else
                                <img src="{{ asset('/images/professional/openbuildings.png') }}" alt="Open Buildings" width="36">
                            @endif
                        </a>
                    </div>

                    <div class="col-professional">
                        <p class="fs-12 text-uppercase text-muted hidden-xs">
                            Behance
                        </p>
                        <a href="{{ $behance }}" target="_blank">
                            @if ($behance == '#')
                                <img src="{{ asset('/images/professional/behance-off.png') }}" alt="Behance" width="36">
                            @else
                                <img src="{{ asset('/images/professional/behance.png') }}" alt="Behance" width="36">
                            @endif
                        </a>
                    </div>
                @else
                    @foreach ($professionalLinks as $professionalLink)
                    <div class="col-professional">
                        <p class="fs-12 text-uppercase text-muted hidden-xs">
                            {{ $professionalLink->name }}
                        </p>
                        <a href="{{ $professionalLink->url }}" target="_blank">
                            <img src="https://www.google.com/s2/favicons?domain_url={{ $professionalLink->url }}"
                                 alt="{{ $professionalLink->name }}" width="16">
                        </a>
                    </div>
                    @endforeach
                @endif
                </div>
            </div>
        </div>
        <div class="widget">
            <div class="widget-heading text-center">
                <h3 class="widget-title">Medios profesionales</h3>
            </div>
            <div class="widget-body text-center">
                <div class="row expand">
                    @foreach ($professionalMedia as $item)
                        <div class="col-professional">
                            <p class="fs-12 text-uppercase text-muted hidden-xs">
                                {{ $item->name }}
                            </p>
                            <a href="{{ $item->url }}" target="_blank">
                                <img src="https://www.google.com/s2/favicons?domain_url={{ $item->url }}"
                                     alt="{{ $item->name }}" width="16">
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        @if ($client->hasSection('Proyectos'))
            @include('includes.dashboard.widget_projects')
        @endif

        @if ($client->hasSection('Marcas'))
            @include('includes.dashboard.widget_brands')
        @endif
    </div>
</div>


<div class="row">
    <div class="col-md-12">
        <div class="widget">
            <div class="widget-heading clearfix">
                <h3 class="widget-title pull-left">Cronograma de trabajo</h3>
                <ul class="widget-tools pull-right list-inline">
                    <li><a href="javascript:;" class="widget-collapse"><i class="ion-chevron-up"></i></a></li>
                    <li><a href="{{ url(auth()->user()->work_schedule_route) }}"><i class="ion-calendar"></i></a></li>
                    <li><a href="javascript:;" class="widget-remove"><i class="ion-close-round"></i></a></li>
                </ul>
            </div>
            <div class="widget-body" @if (isset($workSchedule)) style="height: 32em; overflow: auto;" @endif>
                @if (isset($workSchedule))
                    @if ($workSchedule->time_toast_code)
                        <iframe src="https://www.timetoast.com/embed/{{ $workSchedule->time_toast_code }}" width="100%" height="400" frameborder="0" allowfullscreen></iframe>
                    @else
                        <ul class="activity-list activity-sm list-unstyled mb-0">
                            @foreach ($workSchedule->details as $detail)
                                <li title="{{ $detail->state_name }}" class="activity-{{ $detail->state_color }}">
                                    <time datetime="" class="fs-13 text-muted">{{ $detail->work_schedule->start_date->addMonths($detail->month_offset)->format('F Y') }}</time>
                                    <p class="mt-10 mb-0">{{ $detail->type_name }}</p>
                                </li>
                            @endforeach
                        </ul>
                    @endif
                @else
                    <p>Aun no se ha establecido un cronograma de trabajo.</p>
                @endif
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="widget">
            <div class="widget-heading clearfix">
                <h3 class="widget-title pull-left">Audiencia - Adquisición</h3>
                <ul class="widget-tools pull-right list-inline">
                    <li><a href="javascript:;" class="widget-collapse"><i class="ion-chevron-up"></i></a></li>
                    <li><a href="javascript:;" class="widget-reload"><i class="ion-refresh"></i></a></li>
                    <li><a href="javascript:;" class="widget-remove"><i class="ion-close-round"></i></a></li>
                </ul>
            </div>
            <div class="widget-body">
                <div class="row">
                    <div class="col-md-8">
                        <div class="clearfix">
                            <div id="flot-visitor-legend" class="pull-left"></div>
                            <div class="pull-right">
                                <div class="btn-toolbar">
                                    <div class="btn-group" id="gaTimeDimensions">
                                        <button type="button" data-toggle="dropdown" class="btn btn btn btn-outline btn-rounded btn-black dropdown-toggle">
                                            <span data-selected>Día</span> <span class="caret"></span>
                                        </button>
                                        <ul role="menu" class="dropdown-menu fadeInUp animated">
                                            <li><a href="#" data-dimension="date">Día</a></li>
                                            <li><a href="#" data-dimension="month">Mes</a></li>
                                        </ul>
                                    </div>

                                    <button id="dateRangePicker" type="button" class="btn btn-rounded btn-outline btn-black"><i class="ion-calendar mr-5"></i><span></span></button>
                                </div>
                            </div>
                        </div>
                        {{-- GA View ID (required to query the Analytics API) --}}
                        <div id="flot-visitor" style="height: 300px" data-view-id="{{ $client->google_analytics_view_id }}">
                            {{-- Load using Ajax --}}
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="media">
                            <div class="media-body">
                                <div class="fs-36 fw-300" id="total-visits-count">0</div>
                                <h6 class="m-0 fw-400 text-muted text-uppercase">Usuarios totales</h6>
                            </div>
                            <div class="media-right" title="Ir a la sección de Google Analytics">
                                <i class="ion-arrow-graph-up-right fs-36"></i>
                            </div>
                        </div>
                        <div id="donut-chart" style="height: 300px"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        @include('includes.dashboard.widget_inbox_messages')
    </div>
    <div class="col-md-6">
        <div class="widget">
            <div class="widget-heading">
                <h3 class="widget-title">Leads</h3>
            </div>
            <div class="widget-body" style="height: 28em; overflow: auto;">
                <div id="chart-leads" style="height: 340px"></div>
            </div>
        </div>
    </div>
</div>
