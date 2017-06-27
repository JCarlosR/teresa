<!--Footer-->
    <footer id="footer-3" class="space">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 footer-block about-text">
                    <a href="{{ $me->getLinkTo('/') }}7" title="SEO-arquitectos Presencia en Internet para OFicinas AEC" class="menu-logo black">SEO-arquitectos</a>
                    <p>{{ $me->about_us->description }}</p>
                    <p><strong>Teléfono:</strong> {{ $me->phones }}</p>
                    <p><strong>Dirección:</strong> {{ $me->address }}</p>

                    <ul class="social two">
                        <li><a href="{{ $me->getSocialProfile('facebook')->url }}" title="SEO-arquitectos en Facebook" target="new" rel="publisher" ><i class="fa fa-facebook"></i> </a> </li>
                        <li><a href="{{ $me->getSocialProfile('linkedin')->url }}" title="SEO-arquitectos en Linkedin" target="new" rel="publisher" ><i class="fa fa-linkedin"></i> </a> </li>
                        <li><a href="{{ $me->getSocialProfile('google_plus')->url }}" title="SEO-arquitectos en Google+" target="new" rel="publisher" ><i class="fa fa-google-plus"></i> </a> </li>
                        <li><a href="{{ $me->getSocialProfile('twitter')->url }}" title="SEO-arquitectos en Twitter" target="new" rel="publisher" ><i class="fa fa-twitter"></i> </a> </li>
                        <li><a href="{{ $me->getSocialProfile('foursquare')->url }}" title="SEO-arquitectos en Foursquare" target="new" rel="publisher" ><i class="fa fa-foursquare"></i> </a> </li>
                    </ul>
                </div>
                <div class="col-sm-3 footer-block">
                    <h4>Servicios Digitales</h4>
                    <ul class="important-link">
                        @foreach ($me->services as $service)
                            <li>
                                <a href="{{ $me->getLinkTo('/servicio/'.$service->id) }}" title="Ver servicio: {{ $service->name }}">
                                    {{ $service->name }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>


                <div class="col-sm-5 footer-block">
                    <h4>¿Quieres contactarnos?</h4>
                    <div class="col-sm-12 ">

                      <form id="formContacto" action="https://teresa.seo-arquitectos.com/formulario/contacto">
                      <input type="hidden" name="user_id" value="20">
                          <div class="form-group col-sm-6">
                              Nombre completo:
                              <input type="text" name="name" required>
                          </div>
                          <div class="form-group col-sm-6">
                              Email de contacto:
                              <input type="email" name="email" required>
                          </div>
                          <div class="form-group col-sm-6">
                              Teléfono:
                              <input type="text" name="phone">
                          </div>
                          <div class="form-group col-sm-6 ">
                              Asunto:
                              <select name="topic" required>
                                  <option value="">Seleccione motivo</option>
                                  <option value="Proyectos">Presupuestos</option>
                                  <option value="Proveedores">Proveedores</option>
                                  <option value="Empleo">Empleo</option>
                                  <option value="Contacto directo">Contacto directo</option>
                                  <option value="Otros">Otros</option>
                                  </select>
                          </div>
                          <div class="form-group col-sm-12 ">Mensaje:
                          <textarea name="content" required></textarea>
                          </div>
                          <div class="col-sm-12 button text-right">
                              <input type="submit"  class="btn green-btn" >
                              <div  class="message"></div>
                          </div>
                         </div>
                      </form>
                  </div>

              </div><!--enform-->
            </div>
        </div>
    </footer>
    <!--Copyright-->
    <section id="copyright" class="black">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 copyright-block text-center">
                    <p>© SEO-arquitectos 2017. Todos los derechos reservados.</p>
                </div>
            </div>
        </div>
    </section>
