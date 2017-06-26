@extends('themes.seo.base')

@section('content')


    <!--Bread Crumb-->
    <section id="breadcrumb" class="two green-color">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center breadcrumb-block">
                    <h1>Contacto SEO-arquitectos</h1>
                    <ul class="social-list list-horizontal share">
                        <span class='st_facebook_large' displayText='Facebook'></span>
                        <span class='st_googleplus_large' displayText='Google +'></span>
                        <span class='st_linkedin_large' displayText='LinkedIn'></span>
                        <span class='st_twitter_large' displayText='Tweet'></span>
                        <span class='st_pinterest_large' displayText='Pinterest'></span>
                        <span class='st_fblike_large' displayText='Facebook Like'></span>
                      </ul>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.html" title="Volver a página de inicio">Inicio</a>
                        </li>
                        <li class="active">Contacto</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <!--Contact us-->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="contact-us col-sm-12 space">
                  <p class="lead">Aquí en la página de contacto de SEO-arquitectos podrás encontrar nuestros datos y medios digitales para que puedas seguirnos, leernos, entendernos y por supuesto contactarnos. Esperamos que encuentres en nuestra web todo lo que buscabas.</p>


                    <div class="col-sm-3 contact-block text-center">
                        <i class="icofont icofont-telephone"></i>
                        <h3>Teléfonos</h3>
                        <a href="tel:+092-12343424">+51 946 870 900</a>
                        <a href="tel:+096-12343424">+51 940 087 450</a>
                    </div>
                    <div class="col-sm-3 contact-block text-center">
                        <i class="icofont icofont-home"></i>
                        <h3>Dirección</h3>
                        <p>Servicio digital con base en</p>
                        <p>Surco. Lima, Perú</p>
                    </div>
                    <div class="col-sm-3 contact-block text-center">
                        <i class="icofont icofont-envelope-open"></i>
                        <h3>Datos Fiscales</h3>
                        <p>R.U.C</p>
                        <p>10103063791</p>
                    </div>
                    <div class="col-sm-3 contact-block text-center">
                        <i class="icofont icofont-ui-clock"></i>
                        <h3>Horas de Trabajo</h3>
                        <p>Lunes a Viernes </p>
                        <p>9:00 AM to 7:00 PM</p>
                    </div>
                </div>
                <div class="col-sm-12 ">
                    <form id="Contac" action="https://teresa.seo-arquitectos.com/formulario/contacto">
                        <input type="hidden" name="user_id" value="20">
                        <div class="form-group col-sm-4">
                            <input type="text" class="form-control" name="name"  required placeholder="Nombre...">
                        </div>
                        <div class="form-group col-sm-4">
                            <input type="email" class="form-control" name="email"  required placeholder="e-mail...">
                        </div>
                        <div class="form-group col-sm-4">
                            <input type="text" class="form-control" name="phone"  required placeholder="telefono">
                        </div>
                        <div class="form-group col-sm-4 ">
                            <select name="topic" required>
                                <option value="">Seleccione motivo</option>
                                <option value="Proyectos">Presupuestos</option>
                                <option value="Proveedores">Proveedores</option>
                                <option value="Empleo">Empleo</option>
                                <option value="Contacto directo">Contacto directo</option>
                                <option value="Otros">Otros</option>
                                </select>
                        </div>
                        <div class="form-group col-sm-12 ">
                            <textarea class="form-control" name="content"  placeholder="Que nos quieres consultar? estamos para atenderte..."></textarea>
                        </div>
                        <div class="col-sm-12 button text-right">
                            <input type="submit"  class="btn green-btn" >
                            <div  class="message"></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
