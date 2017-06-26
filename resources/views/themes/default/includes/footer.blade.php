<footer class="footer section-padding">
    <div class="container-fluid">
        <div class="row">

            <div class="col-md-6 text-center">
                <h3>Síguenos en</h3>
                <div class="footer_social">
                    <ul>
                        <li><a target="_blank" class="f_facebook" href="{{ $me->getSocialProfile('facebook')->url }}"><i class="fa fa-facebook"></i></a></li>
                        <li><a target="_blank" class="f_twitter" href="{{ $me->getSocialProfile('twitter')->url }}"><i class="fa fa-twitter"></i></a></li>
                        <li><a target="_blank" class="f_google" href="{{ $me->getSocialProfile('google_plus')->url }}"><i class="fa fa-google-plus"></i></a></li>
                        <li><a target="_blank" class="f_linkedin" href="{{ $me->getSocialProfile('linkedin')->url }}"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6">
                <h3>Datos de contacto</h3>
                <div class="footer_copyright">
                    <p><strong>Teléfono:</strong> {{ $me->phones }}</p>
                    <p><strong>Dirección:</strong> {{ $me->address }}</p>
                </div>
                <a href="{{ $me->getLinkTo('/contacto') }}" class="btn btn-primary">Contáctanos ya!</a>
            </div>

        </div><!--- END ROW -->
    </div><!--- END CONTAINER -->
</footer>


<div class="footer-bottom">
    <div class="container">
        <div class="col-md-12 text-center">
            <div class="footer_copyright">
                <p>© Copyright - Todos los derechos reservados.</p>
            </div>
        </div>
    </div>
</div>
