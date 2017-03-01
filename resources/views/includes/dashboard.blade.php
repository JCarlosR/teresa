@section('styles')
    <style>
        .col-social {
            width: 11.11%;
            /*border: 1px solid grey;*/
            float:left;
            position: relative;
            min-height: 1px;
            padding-right: 1em;
            padding-left: 1em;
        }
        .col-professional {
            width: 20%;
            float:left;
            position: relative;
            min-height: 1px;
            padding: 1em;
        }
        @media(max-width:576px) {
            .col-social {
                width: 33.33%;
            }
            .col-professional {
                width: 33.33%;
            }
        }
    </style>
@endsection

<div class="row">
    <div class="col-md-4">
        <div class="widget">
            <div class="widget-body text-center">
                <a href="{{ url("admin/cliente/seleccionar/$client->id") }}">
                    <img src="{{ url($client->photo_route) }}" width="100" alt="Logo {{ $client->name }}" class="img-circle">
                    <h4 class="mt-20 mb-5 text-black">{{ $client->name ?: 'Sin alias' }}</h4>
                </a>
                <p class="fs-12 text-uppercase text-muted">{{ $client->service_started_at }}</p>
                <p>{{ $client->description ?: 'Descripción sin especificar' }}</p>
            </div>
        </div>
        <div class="widget">
            <div class="widget-body text-center p-0">
                <div class="row row-0 divider">
                    <div class="col-xs-4">
                        <h6 class="text-uppercase">Proyectos</h6>
                        <div class="fs-36 fw-300"><span class="counter">{{ $client->projects_percent }}</span><span>%</span></div>
                        <div class="progress progress-xs mb-0">
                            <div role="progressbar" data-transitiongoal="{{ $client->projects_percent }}" class="progress-bar"></div>
                        </div>
                    </div>
                    <div class="col-xs-4">
                        <h6 class="text-uppercase">Servicios</h6>
                        <div class="fs-36 fw-300"><span class="counter">{{ $client->services_percent }}</span><span>%</span></div>
                        <div class="progress progress-xs mb-0">
                            <div role="progressbar" data-transitiongoal="{{ $client->services_percent }}" class="progress-bar progress-bar-success"></div>
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
                <h3 class="widget-title pull-left">Servicios profesionales</h3>
                <ul class="widget-tools pull-right list-inline">
                    <li><a href="javascript:;" class="widget-collapse"><i class="ion-chevron-up"></i></a></li>
                    <li><a href="javascript:;" class="widget-reload"><i class="ion-refresh"></i></a></li>
                    <li><a href="javascript:;" class="widget-remove"><i class="ion-close-round"></i></a></li>
                </ul>
            </div>
            <div class="widget-body">
                <div class="table-responsive">
                    <table class="table mb-0">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Nombre</th>
                            <th class="text-center">Porcentaje</th>
                            {{--<th class="text-center">Fotos</th>--}}
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($services as $key => $service)
                            <tr>
                                <td>{{ $key +1 }}</td>
                                <td>{{ $service->name }}</td>
                                <td class="text-center">{{ $service->characters_percent }}</td>
                                {{--<td class="text-center text-{{ $key%2==0 ? 'danger' : 'success' }}"><i class="ion-{{ $key%2==0 ? 'close' : 'checkmark' }}-round"></i></td>--}}
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-8">
        <div class="widget text-center">
            <div class="widget-heading">
                <h3 class="widget-title">Perfiles sociales</h3>
            </div>
            <div class="widget-body">
                <div class="row row-0 expand">
                    <div class="col-social">
                        <p class="fs-12 text-uppercase text-muted hidden-xs">Facebook</p>
                        <a href="{{ $facebook->url }}" target="_blank">
                            <i class="ion-social-facebook fs-36 social-color-facebook"></i>
                        </a>
                        <div class="mt-10 fs-11 text-muted">{{ $facebook->followers }}</div>
                    </div>
                    <div class="col-social">
                        <p class="fs-12 text-uppercase text-muted hidden-xs">Linkedin</p>
                        <a href="{{ $linkedIn->url }}" target="_blank">
                            <i class="ion-social-linkedin fs-36 social-color-linkedin"></i>
                        </a>
                        <div class="mt-10 fs-11 text-muted">{{ $linkedIn->followers }}</div>
                    </div>
                    <div class="col-social">
                        <p class="fs-12 text-uppercase text-muted hidden-xs">Google+</p>
                        <a href="{{ $googlePlus->url }}" target="_blank">
                            <i class="block ion-social-google fs-36 social-color-google"></i>
                        </a>
                        <div class="mt-10 fs-11 text-muted">{{ $googlePlus->followers }}</div>
                    </div>
                    <div class="col-social">
                        <p class="fs-12 text-uppercase text-muted hidden-xs">Twitter</p>
                        <a href="{{ $twitter->url }}" target="_blank">
                            <i class="block ion-social-twitter fs-36 social-color-twitter"></i>
                        </a>
                        <div class="mt-10 fs-11 text-muted">{{ $twitter->followers }}</div>
                    </div>
                    <div class="col-social">
                        <p class="fs-12 text-uppercase text-muted hidden-xs">Pinterest</p>
                        <a href="{{ $pinterest->url }}" target="_blank">
                            <i class="block ion-social-pinterest fs-36 social-color-pinterest"></i>
                        </a>
                        <div class="mt-10 fs-11 text-muted">{{ $pinterest->followers }}</div>
                    </div>
                    <div class="col-social">
                        <p class="fs-12 text-uppercase text-muted hidden-xs">FourSquare</p>
                        <a href="{{ $fourSquare->url }}" target="_blank">
                            <i class="block ion-social-foursquare fs-36 social-color-foursquare"></i>
                        </a>
                        <div class="mt-10 fs-11 text-muted">{{ $fourSquare->followers }}</div>
                    </div>
                    <div class="col-social">
                        <p class="fs-12 text-uppercase text-muted hidden-xs">Flickr</p>
                        <a href="{{ $flickr->url }}" target="_blank">
                            <i class="block ion-ios-circle-filled fs-36 social-color-flickr"></i>
                        </a>
                        <div class="mt-10 fs-11 text-muted">{{ $flickr->followers }}</div>
                    </div>
                    <div class="col-social">
                        <p class="fs-12 text-uppercase text-muted hidden-xs">Instagram</p>
                        <a href="{{ $instagram->url }}" target="_blank">
                            <i class="block ion-social-instagram fs-36 social-color-instagram"></i>
                        </a>
                        <div class="mt-10 fs-11 text-muted">{{ $instagram->followers }}</div>
                    </div>
                    <div class="col-social">
                        <p class="fs-12 text-uppercase text-muted hidden-xs">Youtube</p>
                        <a href="{{ $youtube->url }}" target="_blank">
                            <i class="block ion-social-youtube fs-36 social-color-youtube"></i>
                        </a>
                        <div class="mt-10 fs-11 text-muted">{{ $youtube->followers }}</div>
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

                    <div class="col-professional">
                        <p class="fs-12 text-uppercase text-muted hidden-xs">
                            Architizer
                        </p>
                        <a href="{{ $architizer }}" target="_blank">
                            <img src="{{ asset('/images/professional/architizer.png') }}" alt="Architizer" width="36">
                        </a>
                    </div>

                    <div class="col-professional">
                        <p class="fs-12 text-uppercase text-muted hidden-xs">
                            Archello
                        </p>
                        <a href="{{ $archello }}" target="_blank">
                            <img src="{{ asset('/images/professional/archello.png') }}" alt="Archello" width="36">
                        </a>
                    </div>

                    <div class="col-professional">
                        <p class="fs-12 text-uppercase text-muted hidden-xs">
                            Archilovers
                        </p>
                        <a href="{{ $archilovers }}" target="_blank">
                            <img src="{{ asset('/images/professional/archilovers.png') }}" alt="Archilovers" width="36">
                        </a>
                    </div>

                    <div class="col-professional">
                        <p class="fs-12 text-uppercase text-muted hidden-xs">
                            Open Buildings
                        </p>
                        <a href="{{ $buildings }}" target="_blank">
                            <img src="{{ asset('/images/professional/openbuildings.png') }}" alt="Open Buildings" width="36">
                        </a>
                    </div>

                    <div class="col-professional">
                        <p class="fs-12 text-uppercase text-muted hidden-xs">
                            Behance
                        </p>
                        <a href="{{ $behance }}" target="_blank">
                            <img src="{{ asset('/images/professional/behance.png') }}" alt="Behance" width="36">
                        </a>
                    </div>

                </div>
            </div>
        </div>
        <div class="widget">
            <div class="widget-heading clearfix">
                <h3 class="widget-title pull-left">Proyectos profesionales</h3>
                <ul class="widget-tools pull-right list-inline">
                    <li><a href="javascript:;" class="widget-collapse"><i class="ion-chevron-up"></i></a></li>
                    <li><a href="javascript:;" class="widget-reload"><i class="ion-refresh"></i></a></li>
                    <li><a href="javascript:;" class="widget-remove"><i class="ion-close-round"></i></a></li>
                </ul>
            </div>
            <div class="widget-body">
                <div class="table-responsive">
                    <table class="table mb-0">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Nombre del proyecto</th>
                            <th class="text-center">Año</th>
                            <th class="text-center">Fotos</th>
                            <th class="text-center">Estado</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($projects as $key => $project)
                            <tr>
                                <td>{{ $key +1 }}</td>
                                <td>{{ $project->name }}</td>
                                <td class="text-center">{{ $project->year }}</td>
                                <td class="text-center text-{{ $key%2==0 ? 'danger' : 'success' }}"><i class="ion-{{ $key%2==0 ? 'close' : 'checkmark' }}-round"></i></td>
                                <td class="text-center"><span class="label label-outline label-success">Publicado</span></td>
                            </tr>
                        @endforeach
                        <tr>
                            <td>3</td>
                            <td>Delta App v1.0</td>
                            <td class="text-center">2017</td>
                            <td class="text-center text-danger"><i class="ion-close-round"></i></td>
                            <td class="text-center"><span class="label label-outline label-purple">En progreso</span></td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>Sigma App v1.1</td>
                            <td class="text-center">2017</td>
                            <td class="text-center text-danger"><i class="ion-close-round"></i></td>
                            <td class="text-center"><span class="label label-outline label-primary">Pausado</span></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="widget">
            <div class="widget-heading clearfix">
                <h3 class="widget-title pull-left">Visitors Analytics</h3>
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
                                    <button id="daterangepicker" type="button" class="btn btn-rounded btn-outline btn-black"><i class="ion-calendar mr-5"></i><span></span></button>
                                </div>
                            </div>
                        </div>
                        <div id="flot-visitor" style="height: 300px"></div>
                    </div>
                    <div class="col-md-4">
                        <div class="media">
                            <div class="media-body">
                                <div class="fs-36 fw-300 counter">12,389</div>
                                <h6 class="m-0 fw-400 text-muted text-uppercase">Your Profile Views</h6>
                            </div>
                            <div class="media-right"><i class="ion-ios-bookmarks-outline fs-36"></i></div>
                        </div>
                        <div id="flot-profile" style="height: 87px"></div>
                        <div class="table-responsive mt-10">
                            <table class="table mb-0 no-border">
                                <thead>
                                <tr>
                                    <th style="width:10%">#</th>
                                    <th style="width:40%">Browser</th>
                                    <th style="width:25%">Sessions</th>
                                    <th style="width:25%">Up/Down</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Chrome</td>
                                    <td>4325</td>
                                    <td class="text-success">+3.26%</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Firefox</td>
                                    <td>3257</td>
                                    <td class="text-danger">-2.14%</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Edge</td>
                                    <td>2314</td>
                                    <td class="text-success">+2.92%</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-4">
        <div class="widget">
            <div class="widget-heading">
                <h3 class="widget-title">Recent Activities</h3>
            </div>
            <div class="widget-body">
                <ul class="activity-list activity-sm list-unstyled mb-0">
                    <li class="activity-purple">
                        <time datetime="2016-12-10T20:50:48+07:00" class="fs-13 text-muted">9 minutes ago</time>
                        <p class="mt-10 mb-0">You <span class="label label-success">recommended</span> Karen Ortega</p>
                    </li>
                    <li class="activity-danger">
                        <time datetime="2016-12-10T20:42:40+07:00" class="fs-13 text-muted">15 minutes ago</time>
                        <p class="mt-10 mb-0">You followed Olivia Williamson</p>
                    </li>
                    <li class="activity-warning">
                        <time datetime="2016-12-10T20:35:35+07:00" class="fs-13 text-muted">22 minutes ago</time>
                        <p class="mt-10 mb-0">You <span class="text-danger">subscribed</span> to Harold Fuller</p>
                    </li>
                    <li class="activity-success">
                        <time datetime="2016-12-10T20:27:48+07:00" class="fs-13 text-muted">30 minutes ago</time>
                        <p class="mt-10 mb-0">You updated your profile picture</p>
                    </li>
                    <li class="activity-primary">
                        <time datetime="2016-12-10T20:22:48+07:00" class="fs-13 text-muted">35 minutes ago</time>
                        <p class="mt-10 mb-0">You deleted homepage.psd</p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="widget">
            <div class="widget-heading">
                <h3 class="widget-title">Trending Articles</h3>
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