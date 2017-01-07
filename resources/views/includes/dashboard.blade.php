@section('styles')
    <style>
        .col-social {
            width: 11.11%;
            // border: 1px solid grey;
            float:left;
            position: relative;
            min-height: 1px;
            padding-right: 1em;
            padding-left: 1em;
        }
    </style>
@endsection

<div class="row">
    <div class="col-md-12">
        <div class="widget text-center">
            <div class="widget-heading">
                <h3 class="widget-title">Perfiles sociales</h3>
            </div>
            <div class="widget-body">
                <div class="row row-0 expand">
                    <div class="col-social">
                        <p class="fs-12 text-uppercase text-muted">Facebook</p>
                        <a href="{{ $facebook->url }}" target="_blank">
                            <i class="ion-social-facebook fs-18 social-color-facebook"></i>
                        </a>
                        <div class="mt-10 fs-11 text-muted">{{ $facebook->followers }}</div>
                    </div>
                    <div class="col-social">
                        <p class="fs-12 text-uppercase text-muted">Linkedin</p>
                        <a href="{{ $linkedIn->url }}" target="_blank">
                            <i class="ion-social-linkedin fs-18 social-color-linkedin"></i>
                        </a>
                        <div class="mt-10 fs-11 text-muted">{{ $linkedIn->followers }}</div>
                    </div>
                    <div class="col-social">
                        <p class="fs-12 text-uppercase text-muted">Google+</p>
                        <a href="{{ $googlePlus->url }}" target="_blank">
                            <i class="block ion-social-google fs-18 social-color-google"></i>
                        </a>
                        <div class="mt-10 fs-11 text-muted">{{ $googlePlus->followers }}</div>
                    </div>
                    <div class="col-social">
                        <p class="fs-12 text-uppercase text-muted">Twitter</p>
                        <a href="{{ $twitter->url }}" target="_blank">
                            <i class="block ion-social-twitter fs-18 social-color-twitter"></i>
                        </a>
                        <div class="mt-10 fs-11 text-muted">{{ $twitter->followers }}</div>
                    </div>
                    <div class="col-social">
                        <p class="fs-12 text-uppercase text-muted">Pinterest</p>
                        <a href="{{ $pinterest->url }}" target="_blank">
                            <i class="block ion-social-pinterest fs-18 social-color-pinterest"></i>
                        </a>
                        <div class="mt-10 fs-11 text-muted">{{ $pinterest->followers }}</div>
                    </div>
                    <div class="col-social">
                        <p class="fs-12 text-uppercase text-muted">FourSquare</p>
                        <a href="{{ $fourSquare->url }}" target="_blank">
                            <i class="block ion-social-foursquare fs-18 social-color-foursquare"></i>
                        </a>
                        <div class="mt-10 fs-11 text-muted">{{ $fourSquare->followers }}</div>
                    </div>
                    <div class="col-social">
                        <p class="fs-12 text-uppercase text-muted">Flickr</p>
                        <a href="{{ $flickr->url }}" target="_blank">
                            <i class="block ion-ios-circle-filled fs-18 social-color-flickr"></i>
                        </a>
                        <div class="mt-10 fs-11 text-muted">{{ $flickr->followers }}</div>
                    </div>
                    <div class="col-social">
                        <p class="fs-12 text-uppercase text-muted">Instagram</p>
                        <a href="{{ $instagram->url }}" target="_blank">
                            <i class="block ion-social-instagram fs-18 social-color-instagram"></i>
                        </a>
                        <div class="mt-10 fs-11 text-muted">{{ $instagram->followers }}</div>
                    </div>
                    <div class="col-social">
                        <p class="fs-12 text-uppercase text-muted">Youtube</p>
                        <a href="{{ $youtube->url }}" target="_blank">
                            <i class="block ion-social-youtube fs-18 social-color-youtube"></i>
                        </a>
                        <div class="mt-10 fs-11 text-muted">{{ $youtube->followers }}</div>
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
                <h3 class="widget-title">Perfiles profesionales</h3>
            </div>
            <div class="widget-body text-center">
                <div class="row row-0 expand">
                    <br><br>
                    <p class="fs-12 text-uppercase text-muted">
                        <a href="{{ $architizer }}" target="_blank">
                            <i class="glyphicon glyphicon-link"></i> Architizer
                        </a>
                    </p>
                    <br>
                    <p class="fs-12 text-uppercase text-muted">
                        <a href="{{ $archello }}" target="_blank">
                            <i class="glyphicon glyphicon-link"></i> Archello
                        </a>
                    </p>
                    <br>
                    <p class="fs-12 text-uppercase text-muted">
                        <a href="{{ $archilovers }}" target="_blank">
                            <i class="glyphicon glyphicon-link"></i> Archilovers
                        </a>
                    </p>
                    <br>
                    <p class="fs-12 text-uppercase text-muted">
                        <a href="{{ $buildings }}" target="_blank">
                            <i class="glyphicon glyphicon-link"></i> Open Buildings
                        </a>
                    </p>
                    <br>
                    <p class="fs-12 text-uppercase text-muted">
                        <a href="{{ $behance }}" target="_blank">
                            <i class="glyphicon glyphicon-link"></i> Behance
                        </a>
                    </p>
                    <br><br>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-8">
        <div class="widget">
            <div class="widget-heading clearfix">
                <h3 class="widget-title pull-left">Proyectos en desarrollo</h3>
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
                            <th class="text-center">Fecha de inicio</th>
                            <th class="text-center">Fotos</th>
                            <th class="text-center">Estado</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1</td>
                            <td>Sigma App v1.0</td>
                            <td class="text-center">20 Aug 2016</td>
                            <td class="text-center text-success"><i class="ion-checkmark-round"></i></td>
                            <td class="text-center"><span class="label label-outline label-success">Publicado</span></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Foundation App v1.0</td>
                            <td class="text-center">15 Oct 2016</td>
                            <td class="text-center text-danger"><i class="ion-close-round"></i></td>
                            <td class="text-center"><span class="label label-outline label-purple">En progreso</span></td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Delta App v1.0</td>
                            <td class="text-center">15 Oct 2016</td>
                            <td class="text-center text-danger"><i class="ion-close-round"></i></td>
                            <td class="text-center"><span class="label label-outline label-purple">En progreso</span></td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Umega App v1.6</td>
                            <td class="text-center">06 Apr 2016</td>
                            <td class="text-center text-success"><i class="ion-checkmark-round"></i></td>
                            <td class="text-center"><span class="label label-outline label-success">Publicado</span></td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Umega App v1.7</td>
                            <td class="text-center">06 Sep 2016</td>
                            <td class="text-center text-danger"><i class="ion-close-round"></i></td>
                            <td class="text-center"><span class="label label-outline label-primary">Pausado</span></td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>Sigma App v1.1</td>
                            <td class="text-center">20 Oct 2016</td>
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
            <div class="widget-body text-center"><img src="{{ asset('build/images/users/12.jpg') }}" width="100" alt="" class="img-circle">
                <h4 class="mt-20 mb-5 text-black">Emma Lawrence</h4>
                <p class="fs-12 text-uppercase text-muted">Developer</p>
                <p>I am a freelance graphic designer with 5 years experience working in the Graphic Design industry.</p>
                <ul class="list-inline mb-0">
                    <li><a href="#"><i class="ion-social-skype text-info fs-18"></i></a></li>
                    <li><a href="#"><i class="ion-social-pinterest text-danger fs-18"></i></a></li>
                    <li><a href="#"><i class="ion-social-whatsapp text-success fs-18"></i></a></li>
                    <li><a href="#"><i class="ion-social-instagram text-black fs-18"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="widget">
            <div class="widget-body text-center p-0">
                <div class="row row-0 divider">
                    <div class="col-xs-4">
                        <h6 class="text-uppercase">Facebook</h6>
                        <p class="mb-0">43,654</p>
                        <div class="fs-36 fw-300"><span class="counter">32</span><span>%</span></div>
                        <div class="progress progress-xs mb-0">
                            <div role="progressbar" data-transitiongoal="100" class="progress-bar"></div>
                        </div>
                    </div>
                    <div class="col-xs-4">
                        <h6 class="text-uppercase">Dribbble</h6>
                        <p class="mb-0">12,325</p>
                        <div class="fs-36 fw-300"><span class="counter">15</span><span>%</span></div>
                        <div class="progress progress-xs mb-0">
                            <div role="progressbar" data-transitiongoal="100" class="progress-bar progress-bar-success"></div>
                        </div>
                    </div>
                    <div class="col-xs-4">
                        <h6 class="text-uppercase">Pinterest</h6>
                        <p class="mb-0">32,790</p>
                        <div class="fs-36 fw-300"><span class="counter">28</span><span>%</span></div>
                        <div class="progress progress-xs mb-0">
                            <div role="progressbar" data-transitiongoal="100" class="progress-bar progress-bar-purple"></div>
                        </div>
                    </div>
                </div>
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