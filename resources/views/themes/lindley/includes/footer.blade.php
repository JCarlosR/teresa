<footer class="background">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-5">
                    <h3>Lindley Arquitectos</h3>
                    <p>{{ $me->about_us->description }}</p>
                    <a href="https://www.facebook.com/lindleyarq" class="button social-btn" target="new"><i
                                class="fa fa-facebook-official"></i> Síguenos en Facebook</a>

                </div>
                <div class="col-md-4">
                    <h3>LINKS DE INTERÉS</h3>
                    <div class="col-md-6 col-sm-6 col-xs-6">
                        <ul class="list-footer">
                            <li><a href="" class="footer-link">Nosotros</a></li>
                            <li><a href="" class="footer-link">Servicios</a></li>
                            <li><a href="" class="footer-link">Proyectos</a></li>
                            <li><a href="" class="footer-link">Contacto</a></li>
                        </ul>

                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-6">
                        <ul class="list-footer">

                            <li><a href="" class="footer-link">Facebook</a></li>
                            <li><a href="" class="footer-link">Google+</a></li>
                            <li><a href="" class="footer-link">Linkedin</a></li>
                            <li><a href="" class="footer-link">Twitter</a></li>
                            <li><a href="" class="footer-link">Pinterest</a></li>
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

