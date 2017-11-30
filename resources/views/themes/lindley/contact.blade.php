@extends('themes.lindley.base')

@section('content')

    <section class="breadcrumb-section back-breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-sm-5">
                    <div>
                        <h1>Contáctenos</h1>
                    </div>
                </div>
                <div class="col-md-7 col-sm-7">
                    <nav id="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">Inicio </a></li>

                            <li class="breadcrumb-item active">Contacto</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-3 pad-t20">
                    <div class="back-about pad-t20">
                        <h4>LA OFICINA</h4>
                        <span>San Borja. Lima, Perú.</span>
                        <p>Tel. 1: <span>  <a href=""> (51) 226-4952</a></span></p>
                        <p>Tel. 2: <span><a href=""> (51) 987-936-976</a></span></p>

                    </div>
                </div>
                <div class="col-md-9 col-sm-12 col-xs-12 pad-bt40">
                    <section id="contact">

                        <div class="border-bt">
                            <h4 class="">Escríbenos</h4>
                        </div>

                        <div id="contact-message"></div>
                        <form id="formContacto" action="https://theressa.net/formulario/contacto">
                            <input type="hidden" name="user_id" value="6">
                            <input type="hidden" name="url" value="{{ request()->fullUrl() }}">
                            <div class="row">
                                <div class="col-md-6">
                                    <div>
                                        <input name="name" type="text" id="name" placeholder="Nombre Completo" required="required" />
                                    </div>
                                    <div>
                                        <input name="email" type="email" id="email" placeholder="Correo electrónico" pattern="^[A-Za-z0-9](([_\.\-]?[a-zA-Z0-9]+)*)@([A-Za-z0-9]+)(([\.\-]?[a-zA-Z0-9]+)*)\.([A-Za-z]{2,})$" required="required" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div>
                                        <input name="phone" type="tel" id="phone" size="30" placeholder="Teléfono de contacto" required="required" />
                                    </div>
                                    <div>
                                        <select name="topic" id="subject" required="required">
                                            <option value="">Seleciona el Asunto</option>
                                            <option value="Presupuestos">Presupuestos</option>
                                            <option value="Tiendas">Tiendas</option>
                                            <option value="Construcción">Construcción</option>
                                            <option value="Consultas">Consultas</option>
                                            <option value="Otros">Otros</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <textarea name="content" cols="80" rows="6" id="comments" placeholder="Mensaje" spellcheck="true" required="required"></textarea>
                            </div>
                            <input type="submit" class=" btn-message" id="submit" value="Enviar" />
                        </form>
                    </section>
                </div>

            </div>

        </div>

    </section>
@endsection
