<footer class="background">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-5">
                    <h3>Lindley Arquitectos</h3>
                    <p>{{ $me->about_us->description }}</p>

                </div>
                <div class="col-md-4">
                    <h3>LINKS DE INTERÉS</h3>
                    <div class="col-md-6 col-sm-6 col-xs-6">
                        <ul class="list-footer">
                            <li>Nosotros</li>
                            <li>Servicios</li>
                            <li>Proyectos</li>
                            <li>Contacto</li>
                        </ul>

                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-6">
                        <ul class="list-footer">

                            <li>Facebook</li>
                            <li>Google+</li>
                            <li>Linkedin</li>
                            <li>Twitter</li>
                            <li>Pinterest</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <h3>CONTACTO</h3>

                </div>
                <div class="tex-call">
                    <span> {{ $me->address }}</span>
                    <p>Tel. 1: <span>  <a href=""> {{$me->phones}}</a></span></p>
                    {{--<p>Tel. 2: <span><a href=""> (51) 987-936-976</a></span></p>--}}
                </div>
                <br>
                <div class="tex-call">
                    <a data-toggle="modal" data-target="#myModal" class="btn-message">
                        <i class="fa fa-envelope-o" aria-hidden="true"></i>
                        <span>Escríbenos</span>
                    </a>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="copyrights">
                    <div>

                        <p>Optimizado por <a href="" target="new"> SEO-arquitectos </a>- Outsourcing Digital</p>
                    </div>
                </div>

            </div>

        </div>
    </div>
</footer>

{{--<footer class="footer section-padding">--}}
    {{--<div class="container-fluid">--}}
        {{--<div class="row">--}}

            {{--<div class="col-md-6 text-center">--}}
                {{--<h3>Síguenos en</h3>--}}
                {{--<div class="footer_social">--}}
                    {{--<ul>--}}
                        {{--<li><a target="_blank" class="f_facebook" href="{{ $me->getSocialProfile('facebook')->url }}"><i class="fa fa-facebook"></i></a></li>--}}
                        {{--<li><a target="_blank" class="f_twitter" href="{{ $me->getSocialProfile('twitter')->url }}"><i class="fa fa-twitter"></i></a></li>--}}
                        {{--<li><a target="_blank" class="f_google" href="{{ $me->getSocialProfile('google_plus')->url }}"><i class="fa fa-google-plus"></i></a></li>--}}
                        {{--<li><a target="_blank" class="f_linkedin" href="{{ $me->getSocialProfile('linkedin')->url }}"><i class="fa fa-linkedin"></i></a></li>--}}
                    {{--</ul>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="col-md-6">--}}
                {{--<h3>Datos de contacto</h3>--}}
                {{--<div class="footer_copyright">--}}
                    {{--<p><strong>Teléfono:</strong> {{ $me->phones }}</p>--}}
                    {{--<p><strong>Dirección:</strong> {{ $me->address }}</p>--}}
                {{--</div>--}}
                {{--<a href="{{ $me->getLinkTo('/contacto') }}" class="btn btn-primary">Contáctanos ya!</a>--}}
            {{--</div>--}}

        {{--</div><!--- END ROW -->--}}
    {{--</div><!--- END CONTAINER -->--}}
{{--</footer>--}}


{{--<div class="footer-bottom">--}}
    {{--<div class="container">--}}
        {{--<div class="col-md-12 text-center">--}}
            {{--<div class="footer_copyright">--}}
                {{--<p>© Copyright - Todos los derechos reservados.</p>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}
