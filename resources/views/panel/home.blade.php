@extends('layouts.dashboard')

@section('dashboard_content')
    <div class="page-content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="widget">
                    <div class="widget-body">
                        <p><b>Bienvenido {{ auth()->user()->name }}!</b></p>
                        <p>Seleccione una opción del menú de la izquierda para acceder a la sección de su interés.</p>
                        <img src="http://www.rozpalsac.com/images/dataweb/soluciones-y-servicios/servicios-digitales/disenio-grafico-rozpalsac.png" alt="Gráfico Google" class="img-responsive">
                    </div>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-md-3">
                <div class="widget">
                    <div class="widget-body">
                        <div class="media">
                            <div class="media-body"><span class="fs-12 text-muted text-uppercase">New Orders </span><span class="text-danger"><i class="ion-arrow-down-c"></i> 2.43%</span>
                                <div class="fs-36 fw-300 counter">1,650</div>
                            </div>
                            <div class="media-right"><i class="ion-ios-list-outline fs-36"></i></div>
                        </div>
                    </div>
                    <div id="flot-order" style="height: 50px; margin-top: -30px"></div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="widget">
                    <div class="widget-body">
                        <div class="media">
                            <div class="media-body"><span class="fs-12 text-muted text-uppercase">Total Revenue </span><span class="text-success"><i class="ion-arrow-up-c"></i> 6.54%</span>
                                <div class="fs-36 fw-300">$<span class="counter">20,320</span></div>
                            </div>
                            <div class="media-right"><i class="ion-ios-pulse fs-36"></i></div>
                        </div>
                    </div>
                    <div id="flot-revenue" style="height: 50px; margin-top: -30px"></div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="widget">
                    <div class="widget-body">
                        <div class="media">
                            <div class="media-body"><span class="fs-12 text-muted text-uppercase">New Users </span><span class="text-danger"><i class="ion-arrow-down-c"></i> 5.62%</span>
                                <div class="fs-36 fw-300 counter">1,860</div>
                            </div>
                            <div class="media-right"><i class="ion-ios-person-outline fs-36"></i></div>
                        </div>
                    </div>
                    <div id="flot-user" style="height: 50px; margin-top: -30px"></div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="widget">
                    <div class="widget-body">
                        <div class="media">
                            <div class="media-body"><span class="fs-12 text-muted text-uppercase">New Feedbacks </span><span class="text-success"><i class="ion-arrow-up-c"></i> 3.98%</span>
                                <div class="fs-36 fw-300 counter">1,350</div>
                            </div>
                            <div class="media-right"><i class="ion-ios-compose-outline fs-36"></i></div>
                        </div>
                    </div>
                    <div id="flot-feedback" style="height: 50px; margin-top: -30px"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="widget text-center">
                    <div class="widget-heading">
                        <h3 class="widget-title">New York</h3>
                    </div>
                    <div class="widget-body">
                        <p>Sunday, 28 August</p>
                        <div class="fs-36 fw-300">76<sup>o</sup></div>
                        <hr>
                        <div class="row row-0 expand">
                            <div class="col-xs-3">
                                <p class="fs-12 text-uppercase text-muted">Tue</p><i class="block fs-18 wi wi-day-fog"></i>
                                <div class="mt-10 fs-11 text-muted">87<sup>o</sup></div>
                            </div>
                            <div class="col-xs-3">
                                <p class="fs-12 text-uppercase text-muted">Wed</p><i class="block fs-18 wi wi-day-snow-wind"></i>
                                <div class="mt-10 fs-11 text-muted">85<sup>o</sup></div>
                            </div>
                            <div class="col-xs-3">
                                <p class="fs-12 text-uppercase text-muted">Thu</p><i class="block fs-18 wi wi-day-sprinkle"></i>
                                <div class="mt-10 fs-11 text-muted">90<sup>o</sup></div>
                            </div>
                            <div class="col-xs-3">
                                <p class="fs-12 text-uppercase text-muted">Fri</p><i class="block fs-18 wi wi-day-lightning"></i>
                                <div class="mt-10 fs-11 text-muted">86<sup>o</sup></div>
                            </div>
                        </div>
                        <div id="flot-weather" style="height: 105px;"></div>
                        <div class="row row-0 expand">
                            <div class="col-xs-3">
                                <div class="fs-11 text-muted">69<sup>o</sup></div>
                            </div>
                            <div class="col-xs-3">
                                <div class="fs-11 text-muted">71<sup>o</sup></div>
                            </div>
                            <div class="col-xs-3">
                                <div class="fs-11 text-muted">75<sup>o</sup></div>
                            </div>
                            <div class="col-xs-3">
                                <div class="fs-11 text-muted">70<sup>o</sup></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="widget">
                    <div class="widget-heading clearfix">
                        <h3 class="widget-title pull-left">Latest Projects</h3>
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
                                    <th>Project Name</th>
                                    <th class="text-center">Start Date</th>
                                    <th class="text-center">Inspected</th>
                                    <th class="text-center">Status</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Sigma App v1.0</td>
                                    <td class="text-center">20 Aug 2016</td>
                                    <td class="text-center text-success"><i class="ion-checkmark-round"></i></td>
                                    <td class="text-center"><span class="label label-outline label-success">Released</span></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Foundation App v1.0</td>
                                    <td class="text-center">15 Oct 2016</td>
                                    <td class="text-center text-danger"><i class="ion-close-round"></i></td>
                                    <td class="text-center"><span class="label label-outline label-purple">Work in Progress</span></td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Delta App v1.0</td>
                                    <td class="text-center">15 Oct 2016</td>
                                    <td class="text-center text-danger"><i class="ion-close-round"></i></td>
                                    <td class="text-center"><span class="label label-outline label-purple">Work in Progress</span></td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Umega App v1.6</td>
                                    <td class="text-center">06 Apr 2016</td>
                                    <td class="text-center text-success"><i class="ion-checkmark-round"></i></td>
                                    <td class="text-center"><span class="label label-outline label-success">Released</span></td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Umega App v1.7</td>
                                    <td class="text-center">06 Sep 2016</td>
                                    <td class="text-center text-danger"><i class="ion-close-round"></i></td>
                                    <td class="text-center"><span class="label label-outline label-primary">Coming soon</span></td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>Sigma App v1.1</td>
                                    <td class="text-center">20 Oct 2016</td>
                                    <td class="text-center text-danger"><i class="ion-close-round"></i></td>
                                    <td class="text-center"><span class="label label-outline label-primary">Coming soon</span></td>
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
    </div>
@endsection
