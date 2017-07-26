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
                        <div class="progress progress-xs mb-0">
                            <div role="progressbar" data-transitiongoal="{{ $client->projects_percent }}" class="progress-bar progress-bar-{{ $client->projects_status }}"></div>
                        </div>
                    </div>
                    <div class="col-xs-4">
                        <h6 class="text-uppercase">Servicios</h6>
                        <div class="fs-36 fw-300"><span class="counter">{{ $client->services_count }}</span></div>
                        <div class="progress progress-xs mb-0">
                            <div role="progressbar" data-transitiongoal="{{ $client->services_percent }}" class="progress-bar progress-bar-{{ $client->services_status }}"></div>
                        </div>
                    </div>
                    <div class="col-xs-4">
                        <h6 class="text-uppercase">Leads</h6>
                        <div class="fs-36 fw-300"><span class="counter">28</span><span>%</span></div>
                        <div class="progress progress-xs mb-0">
                            <div role="progressbar" data-transitiongoal="28" class="progress-bar progress-bar-purple"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="widget">
            <div class="widget-heading clearfix">
                <h3 class="widget-title pull-left">Servicios al {{ $client->services_percent }} %</h3>
                <ul class="widget-tools pull-right list-inline">
                    <li><a href="javascript:;" class="widget-collapse"><i class="ion-chevron-up"></i></a></li>
                    <li><a href="javascript:;" class="widget-reload"><i class="ion-refresh"></i></a></li>
                    <li><a href="javascript:;" class="widget-remove"><i class="ion-close-round"></i></a></li>
                </ul>
            </div>
            <div class="widget-body" @if (count($services) > 0) style="min-height: 25em;" @endif>
                @if (count($services) > 0)
                    <table id="table-services" class="table mb-0 dt-responsive nowrap">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Nombre</th>
                            <th class="text-center">Estado</th>
                            <th class="text-center">Fotos</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($services as $key => $service)
                            <tr>
                                <td>{{ $key +1 }}</td>
                                <td>
                                    <a href="/servicio/{{ $service->id }}/ver">
                                        {{ $service->name }}
                                    </a>
                                </td>
                                <td class="text-center">
                                    <img src="/images/semaphores/{{ $service->status_color }}.png"
                                         alt="Semáforo de estado" height="24"
                                        title="{{ $service->characters_percent }} %">
                                </td>
                                <td class="text-center text-{{ $service->hasPhotos ? 'success' : 'danger' }}">
                                    <i class="ion-{{ $service->hasPhotos ? 'checkmark' : 'close' }}-round"></i>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                @else
                    <p>Aún no has registrado ningún servicio.</p>
                    <p>
                        <a href="/servicios" class="btn btn-primary">Empezar a registrar servicios</a>
                    </p>
                @endif
            </div>
        </div>
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
                    <div class="col-social">
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
                    <div class="col-social">
                        <p class="fs-12 text-uppercase text-muted hidden-xs">FourSquare</p>
                        <a href="{{ $fourSquare->url }}" target="_blank" data-social="fourSquare" data-id="{{ $fourSquare->id }}">
                            <i class="block ion-social-foursquare fs-36 @if($fourSquare->state) social-color-foursquare @else social-color-black @endif"></i>
                            <div class="mt-10 fs-11 text-muted count"></div>
                        </a>
                    </div>
                    <div class="col-social">
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

        <div class="widget">
            <div class="widget-heading clearfix">
                <h3 class="widget-title pull-left">Proyectos al {{ $client->projects_percent }} %</h3>
                <ul class="widget-tools pull-right list-inline">
                    <li><a href="javascript:;" class="widget-collapse"><i class="ion-chevron-up"></i></a></li>
                    <li><a href="javascript:;" class="widget-reload"><i class="ion-refresh"></i></a></li>
                    <li><a href="javascript:;" class="widget-remove"><i class="ion-close-round"></i></a></li>
                </ul>
            </div>
            <div class="widget-body" style="">
                @if (count($projects) > 0)
                <table id="table-projects" class="table mb-0 dt-responsive nowrap">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Nombre del proyecto</th>
                        <th class="text-center">Estado</th>
                        <th class="text-center">Fotos</th>
                        <th class="text-center">Estado</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($projects as $key => $project)
                        <tr>
                            <td>{{ $key +1 }}</td>
                            <td>
                                <a href="/proyecto/{{ $project->id }}/ver">
                                {{ $project->name }}
                                </a>
                            </td>
                            <td class="text-center">
                                <img src="/images/semaphores/{{ $project->status_color }}.png"
                                     alt="Semáforo de estado" height="24"
                                     title="{{ $project->characters_percent }} %">
                            </td>
                            <td class="text-center text-{{ $project->hasPhotos ? 'success' : 'danger' }}"><i class="ion-{{ $project->hasPhotos ? 'checkmark' : 'close' }}-round"></i></td>
                            <td class="text-center"><span class="label label-outline label-success">Publicado</span></td>
                        </tr>
                    @endforeach
                    {{--<td class="text-center"><span class="label label-outline label-purple">En progreso</span></td>--}}
                    </tbody>
                </table>
                @else
                    <p>Aún no has registrado ningún proyecto.</p>
                    <p>
                        <a href="/proyectos" class="btn btn-primary">Empezar a registrar proyectos</a>
                    </p>
                @endif
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="widget">
            <div class="widget-heading clearfix">
                <h3 class="widget-title pull-left">Visitas del sitio web</h3>
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
                                <h6 class="m-0 fw-400 text-muted text-uppercase">Visitas totales</h6>
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
    <div class="col-md-6">
        <div class="widget">
            <div class="widget-heading">
                <h3 class="widget-title">Últimos mensajes recibidos</h3>
            </div>
            <div class="widget-body" style="height: 28em; overflow: auto;">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>Categoría</th>
                        <th>Emisor</th>
                        <th>Mensaje</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($messages as $message)
                    <tr class="unread">
                        <td class="email-select">
                            {{ $message->topic }}
                            <p class="text-muted mb-0">
                                <time datetime="{{ $message->created_at }}" class="fs-13 mr-5">
                                    {{ $message->created_at->format('d/m/Y') }}
                                </time>
                            </p>
                        </td>
                        <td class="email-from">
                            <div class="media">
                                <div class="media-body">
                                    <h5 class="media-heading">{{ $message->name }}</h5>
                                    <span>{{ $message->phone }}</span>
                                </div>
                            </div>
                        </td>
                        <td>
                            <a href="#">
                                Ver mensaje
                            </a>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="widget">
            <div class="widget-heading">
                <h3 class="widget-title">Últimos artículos</h3>
            </div>
            <div class="widget-body">
                <ul class="media-list media-lg mb-0">
                    <li class="media">
                        <div class="media-left"><img src="{{ asset('build/images/products/18.jpg') }}" alt="" class="media-object mo-lg img-circle"></div>
                        <div class="media-body media-middle"><a href="#" class="text-base">
                                <h5 class="media-heading">Easy Steps To Better Icon Design</h5></a><span class="fs-13 text-muted text-italic">By <a href="#">Mary Green</a></span></div>
                    </li>
                    <li class="media">
                        <div class="media-left"><img src="{{ asset('build/images/products/14.jpg') }}" alt="" class="media-object mo-lg img-circle"></div>
                        <div class="media-body media-middle"><a href="#" class="text-base">
                                <h5 class="media-heading">Dear Web Font Providers</h5></a><span class="fs-13 text-muted text-italic">By <a href="#">Samuel Schultz</a></span></div>
                    </li>
                    <li class="media">
                        <div class="media-left"><img src="{{ asset('build/images/products/20.jpg') }}" alt="" class="media-object mo-lg img-circle"></div>
                        <div class="media-body media-middle"><a href="#" class="text-base">
                                <h5 class="media-heading">Flat And Thin Are In</h5></a><span class="fs-13 text-muted text-italic">By <a href="#">Timothy Owens</a></span></div>
                    </li>
                    <li class="media">
                        <div class="media-left"><img src="{{ asset('build/images/products/15.jpg') }}" alt="" class="media-object mo-lg img-circle"></div>
                        <div class="media-body media-middle"><a href="#" class="text-base">
                                <h5 class="media-heading">Building With Gulp</h5></a><span class="fs-13 text-muted text-italic">By <a href="#">Aaron Holland</a></span></div>
                    </li>
                    <li class="media">
                        <div class="media-left"><img src="{{ asset('build/images/products/01.jpg') }}" alt="" class="media-object mo-lg img-circle"></div>
                        <div class="media-body media-middle"><a href="#" class="text-base">
                                <h5 class="media-heading">Designing For Digital Products</h5></a><span class="fs-13 text-muted text-italic">By <a href="#">Sara Price</a></span></div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
