@extends('themes.samuel.base')

@section('content')
    <div class="carousel slide width">


        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <img src="/images/photos/1800x1000.gif" alt="Los Angeles">
            </div>

            <div class="hero-abouts "><p>
                    Show service
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
                    <h2>Iudicem ea probant</h2>
                    <p>Anim admodum o possumus. Ea eu nisi senserit, eiusmod elit sunt cupidatat fugiat. Ad an tamen eiusmod, incurreret eram proident. Et noster quem e tempor. Non culpa exquisitaque. Aut enim graviterque. Ne cupidatat illustriora. Iudicem ea probant, quo malis quid aut nostrud.</p>
                    <figure class="caption-image">
                        <div>
                            <img src="/images/photos/1200x460.gif" class="img-responsive" alt="">
                        </div>
                        <figcaption>Ea eu nisi senserit</figcaption>
                    </figure>
                    <p>Iudicem ea probant, quo malis quid aut nostrud, summis ullamco qui laboris o ex culpa aliqua esse proident. Fore litteris qui quibusdam non do quorum excepteur probant. Anim incurreret do duis eram. Ipsum id ad fugiat laboris, ea id dolor eiusmod est hic irure qui quorum, voluptate multos anim pariatur nisi. Cupidatat legam quo deserunt fidelissimae, expetendis esse noster ab sint. E quid relinqueret, arbitror non excepteur in e labore officia. Qui lorem possumus graviterque.</p>
                    <!-- BLOCKQUOTE -->
                    <blockquote>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse lacinia ipsum quis diam aliquam vel mollis nisi tempu. Nam et ante urna, ea o lorem eram sint a de do coniunctione, senserit elit enim ab quem se cernantur qui illum incididunt consequat veniam singulis officia.<cite>John Doe</cite>
                        </p>
                    </blockquote>
                    <p>Ullamco nam eram de ut elit cillum non deserunt de iis varias ab multos est o multos exercitation. In legam aut varias iis probant anim voluptate nostrud, officia dolor quis singulis sunt, te aut fidelissimae, vidisse quorum aliquip, ingeniis enim fabulas, deserunt ea sint nostrud nam velit e de velit incurreret. Varias eiusmod est noster enim ab cupidatat cillum proident, ita veniam se aliqua ex anim litteris te eruditionem ad ingeniis an pariatur se multos o pariatur si elit se in multos senserit, appellat ipsum et ullamco efflorescere. Cupidatat instituendarum do vidisse.</p>
                    <hr>
                    <div class="col-md-12">
                        <div class="col-md-6">
                            <img src="/images/photos/480x480.gif" class="img-responsive" alt="">
                            <br>
                            <img src="/images/photos/480x480.gif" class="img-responsive" alt="">
                        </div>
                        <div class="col-md-6">
                            <img src="/images/photos/480x480.gif" class="img-responsive" alt="">
                            <br>
                            <img src="/images/photos/480x480.gif" class="img-responsive" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
