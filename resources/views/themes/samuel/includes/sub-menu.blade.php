<div class="col-md-3 col-sm-6 col-xs-12 deskop wall">
    <aside class="page-block-left">
        <div class="page-block-inner">
            <div class="sidebar-box">
                <form id="searchform" class="searchbox">
                    <input type="text" id="search" class="searchtext" placeholder="Keyword...">
                    <input type="submit" class="button search-button" name="submit" value="">
                </form>
            </div>
            <div class="sidebar-box">
                {{--{{$me->phones}}--}}
                <div class="call-now"><span>{!! $me->phones_with_link  !!}</span></div>
            </div>
            <div class="sidebar-box">
                <h5>Sub Menu</h5>
                <!-- SUBMENU -->
                <nav class="submenu">
                    <ul>
                        <li><a href="{{ $me->getLinkTo('/nosotros') }}">Nosotros</a>
                        </li>
                        <li><a href="{{ $me->getLinkTo('/servicios') }}">Servicios</a>
                        </li>
                        <li><a href="{{ $me->getLinkTo('/proyectos') }}">Proyectos</a>
                        </li>
                        <li><a href="{{ $me->getLinkTo('/reconocimientos') }}" class="has-sub">Reconocimientos</a>
                        </li>
                        <li><a href="{{ $me->getLinkTo('/contacto') }}">Contacto</a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="sidebar-box">
                <h5>Popular Posts</h5>
                <ul class="sidebar-posts">
                    <li>
                        <div class="sidebar-posts-img">
                            <a href="single-post.html">
                                <img src="images/photos/85x85.gif" alt="">
                            </a>
                        </div>
                        <a href="single-post.html" class="sidebar-post-title">Malis imita offend irure
                            nostrud non deserunt</a>
                        <p class="sidebar-post-date">21 Oct 2015</p>
                    </li>
                    <li>
                        <div class="sidebar-posts-img">
                            <a href="single-post.html">
                                <img src="images/photos/85x85.gif" alt="">
                            </a>
                        </div>
                        <a href="single-post.html" class="sidebar-post-title">Nostrud aute mandaremus,
                            fabulas aute occaecat</a>
                        <p class="sidebar-post-date">19 Oct 2015</p>
                    </li>
                    <li>
                        <div class="sidebar-posts-img">
                            <a href="single-post.html">
                                <img src="images/photos/85x85.gif" alt="">
                            </a>
                        </div>
                        <a href="single-post.html" class="sidebar-post-title">Nulla aut occaecat.
                            Possumus lorem nostrud doctrina</a>
                        <p class="sidebar-post-date">17 Oct 2015</p>
                    </li>
                    <li>
                        <div class="sidebar-posts-img">
                            <a href="single-post.html">
                                <img src="images/photos/85x85.gif" alt="">
                            </a>
                        </div>
                        <a href="single-post.html" class="sidebar-post-title">Litteris ipsum mandaremus,
                            et labore esse quae</a>
                        <p class="sidebar-post-date">14 Oct 2015</p>
                    </li>
                </ul>
            </div>
            <div class="sidebar-box">
                <h5>Categorias</h5>
                <ul class="sidebar-list">
                    <li>
                        <a href="single-post.html">O irure nostrud non</a>
                    </li>
                    <li>
                        <a href="single-post.html">Eu multos eiusmod deserunt</a>
                    </li>
                    <li>
                        <a href="single-post.html">Ab cupidatat philosophari</a>
                    </li>
                    <li>
                        <a href="single-post.html">Commodo dolore te nostrud</a>
                    </li>
                </ul>
            </div>
            <div class="sidebar-box">
                <!-- FLICKR -->
                <h5>Galeria de Proyectos</h5>
                <ul class="flickr-box">
                    @foreach ($me->projects as $project)
                    <li><a class="flickr-photo cboxElement"
                           href="http://farm4.staticflickr.com/3940/15647274066_2ee48c3fe9_b.jpg"
                           data-title="Halloween 2014 at Envato in Melbourne">
                            @if ($project->featuredImage)
                            <img src="{{ $project->featuredImage->fullPath }}" alt="{{ $project->name }}" title="{{ $project->name }}">
                            @endif
                        </a>
                    </li>

                    {{--<li><a class="flickr-photo cboxElement"--}}
                           {{--href="http://farm4.staticflickr.com/3945/15485436268_846ccca178_b.jpg"--}}
                           {{--data-title="Halloween 2014 at Envato in Melbourne"><img--}}
                                    {{--src="http://farm4.staticflickr.com/3945/15485436268_846ccca178_s.jpg"--}}
                                    {{--alt="Halloween 2014 at Envato in Melbourne"></a></li>--}}
                    {{--<li><a class="flickr-photo cboxElement"--}}
                           {{--href="http://farm4.staticflickr.com/3956/15668911091_4ef20118b5_b.jpg"--}}
                           {{--data-title="Halloween 2014 at Envato in Melbourne"><img--}}
                                    {{--src="http://farm4.staticflickr.com/3956/15668911091_4ef20118b5_s.jpg"--}}
                                    {{--alt="Halloween 2014 at Envato in Melbourne"></a></li>--}}
                    {{--<li><a class="flickr-photo cboxElement"--}}
                           {{--href="http://farm6.staticflickr.com/5605/15484954949_a4e97a9dc5_b.jpg"--}}
                           {{--data-title="Halloween 2014 at Envato in Melbourne"><img--}}
                                    {{--src="http://farm6.staticflickr.com/5605/15484954949_a4e97a9dc5_s.jpg"--}}
                                    {{--alt="Halloween 2014 at Envato in Melbourne"></a></li>--}}
                    {{--<li><a class="flickr-photo cboxElement"--}}
                           {{--href="http://farm8.staticflickr.com/7490/15647103116_1e4b9033f0_b.jpg"--}}
                           {{--data-title="Halloween 2014 at Envato in Melbourne"><img--}}
                                    {{--src="http://farm8.staticflickr.com/7490/15647103116_1e4b9033f0_s.jpg"--}}
                                    {{--alt="Halloween 2014 at Envato in Melbourne"></a></li>--}}
                    {{--<li><a class="flickr-photo cboxElement"--}}
                           {{--href="http://farm6.staticflickr.com/5599/15668909741_eaf3db4054_b.jpg"--}}
                           {{--data-title="Halloween 2014 at Envato in Melbourne"><img--}}
                                    {{--src="http://farm6.staticflickr.com/5599/15668909741_eaf3db4054_s.jpg"--}}
                                    {{--alt="Halloween 2014 at Envato in Melbourne"></a></li>--}}
                    {{--<li><a class="flickr-photo cboxElement"--}}
                           {{--href="http://farm8.staticflickr.com/7544/15670834825_5f55bb7e4e_b.jpg"--}}
                           {{--data-title="Halloween 2014 at Envato in Melbourne"><img--}}
                                    {{--src="http://farm8.staticflickr.com/7544/15670834825_5f55bb7e4e_s.jpg"--}}
                                    {{--alt="Halloween 2014 at Envato in Melbourne"></a></li>--}}
                    {{--<li><a class="flickr-photo cboxElement"--}}
                           {{--href="http://farm4.staticflickr.com/3946/15485435298_7848e85e0a_b.jpg"--}}
                           {{--data-title="Halloween 2014 at Envato in Melbourne"><img--}}
                                    {{--src="http://farm4.staticflickr.com/3946/15485435298_7848e85e0a_s.jpg"--}}
                                    {{--alt="Halloween 2014 at Envato in Melbourne"></a></li>--}}

                    @endforeach
                </ul>
                <div class="clear"></div>
            </div>
            <div class="sidebar-box">
                <h5>Etiquetas</h5>
                <!-- TAGS -->
                <div class="tags-container sidebar-tags">
                    <a class="tags" href="#">Voluptate</a>
                    <a class="tags" href="#">Deserani</a>
                    <a class="tags" href="#">Quo eram</a>
                    <a class="tags" href="#">Mentitum amet sit</a>
                    <a class="tags" href="#">Cillum</a>
                    <a class="tags" href="#">Incurreret</a>
                    <a class="tags" href="#">Mauris</a>
                    <a class="tags" href="#">Admodum</a>
                    <a class="tags" href="#">Singulis</a>
                    <a class="tags" href="#">Quit</a>
                    <a class="tags" href="#">Eram amet aliqua</a>
                </div>
            </div>
        </div>
    </aside>
</div>