@extends('themes.samuel.base')


@section('content')

    <div class="carousel slide width">
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            @foreach ($me->slides()->take(1)->get() as $key => $slide)
                <div class="item active">
                    <img src="{{ asset($slide->imageUrl) }}" alt="Los Angeles">
                </div>

                <div class="hero-abouts "><p>
                        SHOW Proyectos
                    </p>
                </div>
            @endforeach
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
                <div class="page-block-inner col-md-12">
                    <h3>Quem adipisicing</h3>
                    <p>Lorem voluptate doctrina est ullamco qui ullamco. In o lorem duis nulla, nulla
                        mentitum fabulas. Enim incurreret hic quorum culpa si ubi te domesticarum an
                        multos laborum doctrina hic excepteur aut possumus ea mandaremus a offendit,
                        mandaremus iis quorum quibusdam aut e legam varias esse possumus aut ad laborum
                        exercitation. Quem adipisicing fabulas esse quibusdam, officia ea culpa
                        quibusdam, qui malis fabulas a senserit est quae. De culpa appellat nostrud, ita
                        duis sunt aut mentitum ita excepteur culpa quid mandaremus multos, occaecat
                        nulla ea consequat coniunctione, quorum aliquip laborum, te illum legam sed
                        possumus ab aut quis esse lorem laboris, hic quid nescius cohaerescant. Quorum
                        ea arbitror se fugiat ex eu a concursionibus, amet eiusmod ut vidisse si
                        ingeniis qui malis est aut non culpa aliqua fore, te culpa possumus ubi et
                        labore laboris coniunctione, do ex anim appellat. Quid cernantur domesticarum de
                        ne ab eruditionem.</p>
                    <hr>
                    <h3>Project Gallery</h3>
                    <p>Ullamco nam eram de ut elit cillum non deserunt de iis varias ab multos est o multos
                        exercitation. In legam aut varias iis probant anim voluptate nostrud, officia dolor quis
                        singulis sunt, te aut fidelissimae, vidisse quorum aliquip, ingeniis enim fabulas, deserunt ea
                        sint nostrud nam velit e de velit incurreret.</p>
                    <div class="col-md-4">
                        <fieldset>
                            <h3>Ficha del proyecto</h3>

                            <p class="small">Nombre del proyecto</p>
                            <p>Edificio Multifamiliar Coronel Portillo II</p>

                            <p class="small">Servicios</p>
                            <ul>

                                <li>Diseño de Edificios Multifamiliares</li>
                            </ul>

                            <p class="small">Cliente</p>
                            <p>Inmobiliaria ROSLIANA S.A.C.</p>

                            <p class="small">Año del proyecto</p>
                            <p>2007</p>


                            <p class="small">Tipo de proyecto</p>
                            <p>Edificio Multifamiliar</p>

                            <p class="small">Duración</p>
                            <p>---</p>

                            <p class="small">Estado</p>
                            Construido

                            <p class="small">Reconocimientos</p>
                            <p>Este edificio fue caratula del Dossier de Arquitectura, dedicado a multifamiliares, que fuera publicado por el Grupo Constructivo en el 2010.</p>
                        </fieldset>
                    </div>
                    <div class="col-md-8 owl-stage">
                        <div class="owl-item col-md-6 active">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <a href="/images/photos/480x480.gif" title="Food Portfolio" class="zoom" data-title="Delicious Food" data-footer="Whatever your desire" data-type="image" data-toggle="lightbox">
                                        <img src="/images/photos/480x480.gif" alt="Food Portfolio" />
                                        <span class="overlay"><i>Proyecto</i></span>
                                    </a>
                                </div>

                            </div>

                        </div>
                        <div class="owl-item col-md-6 active">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <a href="/images/photos/480x480.gif" title="Food Portfolio" class="zoom" data-title="Delicious Food" data-footer="Whatever your desire" data-type="image" data-toggle="lightbox">
                                        <img src="/images/photos/480x480.gif" alt="Food Portfolio" />
                                        <span class="overlay"><i>Proyecto</i></span>
                                    </a>
                                </div>

                            </div>

                        </div>
                        <div class="owl-item col-md-6 active">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <a href="/images/photos/480x480.gif" title="Food Portfolio" class="zoom" data-title="Delicious Food" data-footer="Whatever your desire" data-type="image" data-toggle="lightbox">
                                        <img src="/images/photos/480x480.gif" alt="Food Portfolio" />
                                        <span class="overlay"><i>Proyecto</i></span>
                                    </a>
                                </div>

                            </div>

                        </div>
                        <div class="owl-item col-md-6 active">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <a href="/images/photos/480x480.gif" title="Food Portfolio" class="zoom" data-title="Delicious Food" data-footer="Whatever your desire" data-type="image" data-toggle="lightbox">
                                        <img src="/images/photos/480x480.gif" alt="Food Portfolio" />
                                        <span class="overlay"><i>Proyecto</i></span>
                                    </a>
                                </div>

                            </div>

                        </div>


                    </div>

                </div>

            </div>
        </div>
    </section>
   @endsection
