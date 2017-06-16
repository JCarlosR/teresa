<!--FOOTER START-->
<footer class="footer section-padding">
    <div class="container">
        <div class="row">
            <div style="visibility: visible; animation-name: zoomIn;" class="col-sm-12 text-center wow zoomIn">
                <h3>Síguenos en</h3>
                <div class="footer_social">
                    <ul>
                        <li><a target="_blank" class="f_facebook" href="{{ $me->getSocialProfile('facebook')->url }}"><i class="fa fa-facebook"></i></a></li>
                        <li><a target="_blank" class="f_twitter" href="{{ $me->getSocialProfile('twitter')->url }}"><i class="fa fa-twitter"></i></a></li>
                        <li><a target="_blank" class="f_google" href="{{ $me->getSocialProfile('google_plus')->url }}"><i class="fa fa-google-plus"></i></a></li>
                        <li><a target="_blank" class="f_linkedin" href="{{ $me->getSocialProfile('linkedin')->url }}"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div><!--- END COL -->
        </div><!--- END ROW -->
    </div><!--- END CONTAINER -->
</footer>
<!--FOOTER END-->
<div class="footer-bottom">
    <div class="container">
        <div style="visibility: visible; animation-name: zoomIn;" class="col-md-12 text-center wow zoomIn">
            <div class="footer_copyright">
                <p>© Copyright, Todos los derechos reservados.</p>
                <div class="credits">
                </div>
            </div>
        </div>
    </div>
</div>