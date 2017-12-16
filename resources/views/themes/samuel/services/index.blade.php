@extends('themes.samuel.base')

@section('content')

    <div class="carousel slide width">


        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <img src="images/photos/1800x1000.gif" alt="Los Angeles">
            </div>

            <div class="item">
                <img src="images/photos/1800x1000.gif" alt="Chicago">
            </div>

            <div class="item">
                <img src="images/photos/1800x1000.gif" alt="New York">
            </div>
            <div class="hero-abouts "><p>
                    SERVICE
                </p></div>
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">

        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">

        </a>
    </div>

    <section class="width">
        <div class="row page-block">
            @include('themes.samuel.includes.sub-menu')
            <div class="col-md-9">
                <div class="page-block-inner">

                    <div class="col-md-12">
                        <h3>Why Choose Us</h3>
                        <p>Anim admodum o possumus. Ea eu nisi senserit, eiusmod elit sunt cupidatat fugiat. Ad an tamen eiusmod, incurreret eram proident. Et noster quem e tempor. Non culpa exquisitaque. Aut enim graviterque. Ne cupidatat illustriora. Iudicem ea probant, quo malis quid aut nostrud.</p>

                    </div>

                    <div class="col-md-12">
                        <dl class="faq">
                            <dt>Over 10 years experience</dt>
                            <dd>Si quamquam est appellat a nulla est si tamen probant. Id ad dolor ingeniis, dolor quibusdam an fore culpa, quid se ubi tamen proident, malis probant concursionibus. A quorum familiaritatem, aliquip multos probant.O quid laboris ut nam eu illum mentitum. Legam aut pariatur sed iis nisi admodum instituendarum, varias mandaremus do offendit a an e arbitrantur quo ad ex fore mentitum.</dd>
                            <dt>Fast Delivery</dt>
                            <dd>Occaecat aliqua ipsum eu velit hic qui anim incurreret iudicem ut veniam cernantur transferrem, ex velit in veniam. Consequat cohaerescant se ullamco, appellat qui enim excepteur vidisse nisi ingeniis te excepteur ab minim enim adipisicing deserunt quorum excepteur a quorum possumus. O quid laboris ut nam eu illum mentitum. Legam aut pariatur sed iis nisi admodum instituendarum.</dd>
                            <dt>Reliable Customer Service</dt>
                            <dd>Incurreret nam arbitror graviterque a vidisse quo si varias voluptate, quorum firmissimum iudicem quorum incurreret, a cernantur ne vidisse, occaecat duis noster doctrina anim. O quid laboris ut nam eu illum mentitum. Legam aut pariatur sed iis nisi admodum instituendarum, varias mandaremus do offendit a an e arbitrantur quo ad ex fore mentitum varias mandaremus do offendit a an e arbitrantur quo ad ex fore mentitum</dd>
                        </dl>
                    </div>
                    <hr>
                    <h3>What Our Clients Say</h3>
                    <!-- TESTIMONIALS -->
                    <div class="col-md-12">

                        <div class="carousel slide" id="fade-quote-carousel" data-ride="carousel"
                             data-interval="3000">
                            <!-- Carousel indicators -->
                            <ol class="carousel-indicators owl-controls">
                                <li data-target="#fade-quote-carousel" data-slide-to="0" class="active"></li>
                                <li data-target="#fade-quote-carousel" data-slide-to="1"></li>
                                <li data-target="#fade-quote-carousel" data-slide-to="2"></li>
                            </ol>
                            <!-- Carousel items -->
                            <div class="carousel-inner">
                                <div class="active item">
                                    <blockquote class="back-testimonials testimonial">
                                        <p class="testimonial-text">Commodo aute singulis proident eu se laboris. Malis iudicem ne singulis, nisi ita aut summis laboris. Ex ut varias pariatur, laboris irure irure consequat magna, aliqua mandaremus qui varias labore ubi aut illum ipsum fore iudicem. Commodo aute singulis proident eu se laboris. Malis iudicem ne singulis, nisi ita aut summis laboris. Ex ut varias pariatur, laboris irure irure consequat magna, aliqua mandaremus qui varias labore ubi aut illum ipsum fore iudicem.</p>
                                        <div class="testimonial-image">
                                            <img src="images/photos/85x85.gif" alt="" />
                                            <h5 class="testimonial-name">John Doe</h5>
                                            <p>Themeforest</p>
                                        </div>

                                    </blockquote>
                                    <div class="profile-circle" style="background-color: rgba(0,0,0,.2);"></div>
                                </div>
                                <div class="item">
                                    <blockquote class="back-testimonials testimonial">
                                        <p class="testimonial-text">Commodo aute singulis proident eu se laboris. Malis iudicem ne singulis, nisi ita aut summis laboris. Ex ut varias pariatur, laboris irure irure consequat magna, aliqua mandaremus qui varias labore ubi aut illum ipsum fore iudicem. Commodo aute singulis proident eu se laboris. Malis iudicem ne singulis, nisi ita aut summis laboris. Ex ut varias pariatur, laboris irure irure consequat magna, aliqua mandaremus qui varias labore ubi aut illum ipsum fore iudicem.</p>
                                        <div class="testimonial-image">
                                            <img src="images/photos/85x85.gif" alt="" />
                                            <h5 class="testimonial-name">John Doe</h5>
                                            <p>Themeforest</p>
                                        </div>

                                    </blockquote>
                                    <div class="profile-circle" style="background-color: rgba(77,5,51,.2);"></div>
                                </div>
                                <div class="item">
                                    <blockquote class="back-testimonials testimonial">
                                        <p class="testimonial-text">Commodo aute singulis proident eu se laboris. Malis iudicem ne singulis, nisi ita aut summis laboris. Ex ut varias pariatur, laboris irure irure consequat magna, aliqua mandaremus qui varias labore ubi aut illum ipsum fore iudicem. Commodo aute singulis proident eu se laboris. Malis iudicem ne singulis, nisi ita aut summis laboris. Ex ut varias pariatur, laboris irure irure consequat magna, aliqua mandaremus qui varias labore ubi aut illum ipsum fore iudicem.</p>
                                        <div class="testimonial-image">
                                            <img src="images/photos/85x85.gif" alt="" />
                                            <h5 class="testimonial-name">John Doe</h5>
                                            <p>Themeforest</p>
                                        </div>

                                    </blockquote>
                                    <div class="profile-circle"
                                         style="background-color: rgba(145,169,216,.2);"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="col-md-12">
                        <h3>Services</h3>
                        <p>Non deserunt qui iudicem e proident tamen se deserunt eruditionem, nisi fabulas a amet cillum quo vidisse ita anim arbitror. Occaecat nisi ab quamquam reprehenderit iis tamen appellat in transferrem, iis quorum legam e arbitror ea expetendis si laborum. Expetendis se quem laborum an expetendis varias incididunt, fore de est tamen voluptate, quo quae eiusmod relinqueret.</p>
                    </div>
                    <hr>
                    <!-- VERTICAL TABS -->

                    <div class="col-md-12 verticalTab">
                        <div class="col-md-2">
                            <ul class="nav nav-tabs">
                                <li class="active"><a data-toggle="tab" href="#home">Home</a></li>
                                <li><a data-toggle="tab" href="#menu1">Menu 1</a></li>
                                <li><a data-toggle="tab" href="#menu2">Menu 2</a></li>
                                <li><a data-toggle="tab" href="#menu3">Menu 3</a></li>
                            </ul>
                        </div>

                        <div class="col-md-9">
                            <div class="tab-content">
                                <div id="home" class="tab-pane fade in active">
                                    <h3>HOME</h3>
                                    <p>Quorum litteris hic senserit, cillum incididunt expetendis. In te cohaerescant an in noster offendit instituendarum. Voluptate se deserunt aut ex ea enim singulis ubi voluptate ut nostrud te laborum nisi doctrina proident. Quo multos concursionibus, labore laboris graviterque ea voluptate an sint, summis ad et malis ingeniis, hic summis domesticarum, minim nescius ita graviterque et si quo amet fabulas.</p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                </div>
                                <div id="menu1" class="tab-pane fade">
                                    <h3>Menu 1</h3>
                                    <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                </div>
                                <div id="menu2" class="tab-pane fade">
                                    <h3>Menu 2</h3>
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
                                </div>
                                <div id="menu3" class="tab-pane fade">
                                    <h3>Menu 3</h3>
                                    <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

            </div>
        </div>
    </section>
@endsection
