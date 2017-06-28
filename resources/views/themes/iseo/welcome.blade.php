@extends('themes.iseo.base')

@section('content')
<!-- Slider -->
<div class="tp-banner-container" id="home">
<div class="tp-banner" >
    <ul>
        <li data-transition="random-static" data-slotamount="7" data-masterspeed="1000" data-saveperformance="on">
            <img src="/themes/iseo/imagenes/slides/fotolia_99588132.jpg" alt="slider-image" />
            <div class="tp-caption sfl title-slide color-white center" data-x="15" data-y="110" data-speed="1000" data-start="1000" data-easing="Power3.easeInOut">
                Marketing Digital <br> profesional</div>
            <div class="tp-caption sfr desc-slide color-white center" data-x="15" data-y="250" data-speed="1000" data-start="1500" data-easing="Power3.easeInOut">
                Optimización del website y presencia en los medios social y en el profesional.
            </div>
            <div class="tp-caption sfl flat-button-slider bg-button-slider-32bfc0" data-x="15" data-y="360" data-speed="1000" data-start="2500" data-easing="Power3.easeInOut"><a href="servicios.html">Ver Servicios</a> &nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-chevron-right"></i></div>
        </li>

        <li data-transition="random-static" data-slotamount="7" data-masterspeed="1000" data-saveperformance="on">
            <img src="/themes/iseo/imagenes/slides/fotolia_134240213.jpg" alt="slider-image" />
            <div class="tp-caption sfl title-slide color-white center" data-x="15" data-y="110" data-speed="1000" data-start="1000" data-easing="Power3.easeInOut">
                Presencia en Internet <br> eficiente</div>
            <div class="tp-caption sfr desc-slide color-white center" data-x="15" data-y="250" data-speed="1000" data-start="1500" data-easing="Power3.easeInOut">
              La presencia de internet es un servicio basado en el contenido relevante a gran escala basado en estadísticas.
            </div>
            <div class="tp-caption sfl flat-button-slider bg-button-slider-32bfc0" data-x="15" data-y="360" data-speed="1000" data-start="2500" data-easing="Power3.easeInOut"><a href="#">Ver proyectos</a> &nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-chevron-right"></i></div>
        </li>

        <li data-transition="slidedown" data-slotamount="7" data-masterspeed="1000" data-saveperformance="on">
            <img src="/themes/iseo/imagenes/slides/fotolia_121832460.jpg" alt="slider-image" />
            <div class="tp-caption sfl title-slide color-white center" data-x="15" data-y="110" data-speed="1000" data-start="1000" data-easing="Power3.easeInOut">
                White Hat <br> Seo</div>
            <div class="tp-caption sfr desc-slide color-white center" data-x="15" data-y="250" data-speed="1000" data-start="1500" data-easing="Power3.easeInOut">


              Técnicas eticamente correctas.
            </div>
            <div class="tp-caption sfl flat-button-slider bg-button-slider-32bfc0" data-x="15" data-y="360" data-speed="1000" data-start="2500" data-easing="Power3.easeInOut"><a href="servicios.html">Ver Servicios</a> &nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-chevron-right"></i></div>
        </li>
    </ul>
</div>
</div>

<!-- Iconbox -->
<section class="flat-row" >
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="title-section">
                <i class="fa fa-line-chart" aria-hidden="true"></i>
                <h1 class="title">SERVICIOS <span>PROFESIONALES </span>SEO</h1>
                <div class="sub-title">Lo que obtienes usando nuestros servicios SEO</div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <div class="iconbox center circle lagre">
                <div class="box-header">
                    <img src="themes/iseo/images/icon/icon4.svg" alt="icon">
                    <div class="box-title"><a href="#">Presencia en Internet</a></div>
                </div>
                <div class="box-content">Presencia en Internet para empresas desde una página web , medios sociales y medios profesionales.</div>

            </div><!-- /.iconbox -->
        </div><!-- /.col-md-4 -->


        <div class="col-md-4">
            <div class="iconbox center circle lagre">
                <div class="box-header">
                    <img src="/themes/iseo/images/icon/icon7.svg" alt="icon">
                    <div class="box-title"><a href="#">Páginas Web</a></div>
                </div>
                <div class="box-content">Construcción y optimización de pagina web para empresas con visión digital y necesidad de participación dle mercado digital.</div>
            </div><!-- /.iconbox -->
        </div><!-- /.col-md-4 -->

        <div class="col-md-4">
            <div class="iconbox center circle lagre">
                <div class="box-header">
                    <img src="/themes/iseo/images/icon/icon8.svg" alt="icon">
                    <div class="box-title"><a href="#">Optimización SEO</a></div>
                </div>
                <div class="box-content">Diagnóstico y ajustes técnicos de partes concretas de un website para lograr grandes resultados en los buscadores y posicionamieto web.</div>
            </div><!-- /.iconbox -->
        </div><!-- /.col-md-4 -->
    </div>
</div><!-- /.container -->
</section>

<!-- Get audit -->
<section class="flat-row background-black row-getaudit">
<div class="row-overlay"></div>
<div class="container">
    <div class="row">
        <div class="col-md-5">
            <div class="title-section style2 color-white">
                <h1 class="title">Revisamos tu website</h1>
                <div class="sub-title">Revisamos los problemas SEO de tu página gratis! Por favor<br>
                ingresa tu E-mail y Website, revisaremos tu website y<br>
                te enviaremos un reporte a tu email.
                </div>
            </div>

        </div>
        <div class="col-md-7">
            <div class="flat-padl30">
                <form action="./contact/contact-process.php" method="post" id="getaudit" class="getautdit" novalidate="novalidate">
                    <p class="email">
                        <label>Nombre completo</label>
                        <input id="email" name="email" type="email" value="" aria-required="true" required="required">
                    </p>

                    <p class="website">
                        <label for="website">Dirección Website *</label>
                        <input id="website" name="website" type="text" aria-required="true" required="required">
                    </p>
                    <p class="form-submit">
                        <input name="submit" type="submit" value="Enviar consulta">
                    </p>
                </form>
            </div>
        </div>
    </div>
</div>
</section>

<!-- Accordion Style6 -->
<section class="flat-row row-accordion  background-color">
<div class="overlay"></div>
<div class="containerfluid">
    <div class="flat-one-half">
        <div class="imgaes-single-accordion">
        </div>
    </div>

    <div class="flat-one-half">
        <div class="empty-space height80"></div>
        <div class="flat-accordion style5">
            <div class="title-accordion">
            Nuestra diferenciación del mercado
            </div>
            <div class="flat-toggle">
                <h6 class="toggle-title apa active">Optimización SEO profesional<span></span></h6>
                <div class="toggle-content">
                    <p>Tenemos presencia en el sector de Internet , obteniendo basta experiencia en marketing digital y negocios online. Gracias a estos conocimientos, actualmente colaboramos con nuestros clientes mejorando su presencia digital haciendo uso de la analítica web y de estrategias SEO.    </p>

                </div>
            </div><!-- /toggle -->

            <div class="flat-toggle">
                <h6 class="toggle-title imp">¿Es la experiencia del usuario un factor de posicionamiento?<span></span></h6>
                <div class="toggle-content">
                    <p>El público objetivo que estás buscando para tu producto o servicio. Además brindamos el servicio de Diseño de páginas web a medida, completamente optimizados para SEO.</p>
                </div>
            </div><!-- /toggle -->

            <div class="flat-toggle">
                <h6 class="toggle-title dep ">Generamos contenido con Relevancia, Autoría y Eficiencia<span></span></h6>
                <div class="toggle-content">
                    <p>Generar valor en los negocios de nuestros clientes con estrategias adecuadas para sus necesidades, proporcionando los medios digitales  más innovadoras a medida de las necesidades empresariales, con el objetivo de incrementar su competitividad y productividad.</p>
                </div>
            </div><!-- /toggle -->

            <div class="flat-toggle">
                <h6 class="toggle-title apa ">Contamos con herramientas para centralización de informes y resultados<span></span></h6>
                <div class="toggle-content">
                    <p> Tu sitio web es tu principal activo en Internet, haz que lo encuentren. Te ofrecemos tráfico segmentado, es decir, el público objetivo que estás buscando para tu producto o servicio. Además brindamos el servicio de Diseño de páginas web a medida, completamente optimizados para SEO, diseño y código propio con estrategias de posicionamiento Web como las que ponemos a su dispocision.</p>
                </div>
            </div><!-- /toggle -->

        </div>
    </div>

</div><!-- /.container -->
</section>

<!-- Portfolio -->
<section class="flat-row portfolio-style2" id="work">
<div class="row">
    <div class="col-md-12">
        <div class="title-section">
            <i class="fa fa-line-chart" aria-hidden="true"></i>
            <h1 class="title">PROYECTOS <span> SPS</span> REALIZADOS</h1>
            <div class="sub-title">Estrategias de posicionamiento web, SEO</div>
        </div>
    </div>
</div>

<div class="flat-portfolio v4">
    <div class="portfolio-wrap clearfix">
        <div class="item builder painting">
            <div class="featured-images">
                <img src="/themes/iseo/images/internet.jpg" alt="images">
                <h3 class="project-title"><a href="servicios.html">Representacion Digital</a></h3>
                <div class="overlay">
                </div>
            </div><!-- /.featured-images -->
        </div><!-- /.portfolio-item -->

        <div class="item builder hammer">
            <div class="featured-images">
                <img src="/themes/iseo/images/diagnostico1.jpg" alt="images">
                <h3 class="project-title"><a href="servicios.html">Diagnostico Digital</a></h3>
                <div class="overlay">
                </div>
            </div><!-- /.featured-images -->
        </div><!-- /.portfolio-item -->

        <div class="item electric painting">
            <div class="featured-images">
                <img src="/themes/iseo/images/paginas.jpg" alt="images">
                <h3 class="project-title"><a href="servicios.html">Web Site</a></h3>
                <div class="overlay">
                </div>
            </div><!-- /.featured-images -->
        </div><!-- /.portfolio-item -->


        <div class="item electric hammer">
            <div class="featured-images">
                <img src="/themes/iseo/images/google1.jpg" alt="images">
                <h3 class="project-title"><a href="servicios.html">White Hat Seo</a></h3>
                <div class="overlay">
                </div>
            </div><!-- /.featured-images -->
        </div><!-- /.portfolio-item -->
    </div><!-- /.portfolio-wrap -->
</div><!-- /.flat-portfolio -->
</section>

<!-- Blog -->
<section class="flat-row latest-blog" id="blog">
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="title-section">
                <i class="fa fa-line-chart" aria-hidden="true"></i>
                <h1 class="title">ARTÍCULOS RECIENTES <span>SPS</span></h1>
                <div class="sub-title">Lo que obtienes usando nuestros servicios</div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="blog-shortcode blog-carosuel-wrap">
                <div class="blog-carosuel">
                    <article class="post clearfix">
                        <div class="featured-post">
                            <div class="overlay"></div>
                            <img src="/themes/iseo/imagenes/slides/fotolia_134240213.jpg" alt="image">

                        </div><!-- /.feature-post -->
                        <div class="content-post">
                            <div class="post-category">
                                <i class="fa fa-file-video-o"></i>
                            </div>

                            <h2 class="title-post"><a href="blog-single.html">Como crear contenido para obtener tráfico</a></h2>
                            <ul class="meta-post clearfix">
                                <li class="author">
                                    <a href="#">by The Maker</a>
                                </li>
                                <li class="categories">
                                    <a href="#">Makerting</a>, <a href="#">Seo</a>
                                </li>
                                <li class="vote">
                                    <a href="#">16</a>
                                </li>
                            </ul><!-- /.meta-post -->
                            <div class="entry-post excerpt">
                                <p> Ofrecer un producto valioso que no pierda vigencia y optimizarlo con muchas palabras claves para favorecerte en las búsquedas, por último, generar enlaces con sitios de alta calidad o con tu propio contenido elaborado previamente.
                                </p>
                                <a class="read-more" href="blog-single.html">
                                Seguir leyendo
                                </a>
                            </div>
                        </div><!-- /.content-post -->
                    </article>

                    <article class="post clearfix">
                        <div class="featured-post">
                            <div class="overlay"></div>
                            <img src="/themes/iseo/imagenes/slides/fotolia_96752713.jpg" alt="image">

                        </div><!-- /.feature-post -->
                        <div class="content-post">
                            <div class="post-category">
                                <i class="fa fa-file-image-o"></i>
                            </div>

                            <h2 class="title-post"><a href="blog-single.html">10 reglas básicas para el Marketing Digital</a></h2>
                            <ul class="meta-post clearfix">
                                <li class="author">
                                    <a href="#">by The Maker</a>
                                </li>
                                <li class="categories">
                                    <a href="#">Business</a>, <a href="#">Marketing</a>
                                </li>
                                <li class="vote">
                                    <a href="#">16</a>
                                </li>
                            </ul><!-- /.meta-post -->
                            <div class="entry-post excerpt">
                                <p>los canales digitales necesarios segun sus objetivos :
                                    <li> analisis de la situacion,</li> <li>objetivos y estrategias,</li>
                                     <li>planificacion y acciones,</li><li>medición y control.</li>
                                </p>
                                <a class="read-more" href="blog-single.html">
                                Seguir leyendo
                                </a>
                            </div>
                        </div><!-- /.content-post -->
                    </article>

                    <article class="post clearfix">
                        <div class="featured-post">
                            <div class="overlay"></div>
                            <img src="/themes/iseo/imagenes/slides/fotolia_135702283.jpg" alt="image">

                        </div><!-- /.feature-post -->
                        <div class="content-post">
                            <div class="post-category">
                                <i class="fa fa-file-audio-o"></i>

                            </div>
                            <h2 class="title-post"><a href="blog-single.html">Haz que los usuarios "amen" tu Página Web</a></h2>
                            <ul class="meta-post clearfix">
                                <li class="author">
                                    <a href="#">by The Maker</a>
                                </li>
                                <li class="categories">
                                    <a href="#">Website</a>, <a href="#">Seo</a>
                                </li>
                                <li class="vote">
                                    <a href="#">16</a>
                                </li>
                            </ul><!-- /.meta-post -->
                            <div class="entry-post excerpt">
                                <p>Transparencia factor fundamental en la construcción de la confianza de los clientes. Sé cercano y abierto, así demostrarás que se puede confiar en tu marca. La confianza de los consumidores es más importante que lo que queremos vender o hacer.
                                </p>
                                <a class="read-more" href="blog-single.html">
                                Seguir leyendo </a>
                            </div>
                        </div><!-- /.content-post -->
                    </article>


                </div>
            </div>
        </div>
    </div>
</div>
</section>

<!-- Testimonials style1 -->
<section class="flat-row parallax parallax2">
<div class="overlay"></div>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="title-section color-white">
                <i class="fa fa-line-chart" aria-hidden="true"></i>
                <h1 class="title">Nuestros clientes opinan sobre <span>SPS</span></h1>
                <div class="sub-title">Lo que obtendrás usando nuestros servicios de marketing digital</div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="flat-testimonials" data-item="2" data-nav="false" data-dots="true" data-auto="false">
                <div class="testimonials style5">
                    <div class="message">
                        <blockquote class="whisper">
                           El trabajo de los diseñadores web busca facilitar la operativa de las páginas, la usabilidad, la rapidez para encontrar la información, entre otras cosas, todas ellas son esenciales para el éxito.
                         </blockquote>
                    </div>

                    <div class="avatar">
                        <div class="testimonial-author-thumbnail">
                            <img src="/themes/iseo/images/SPS.jpg" alt="images">
                        </div>
                        <div class="name"><span>John Smith</span></div>
                        <div class="position">CEO &amp; Founder - Okler</div>
                    </div>
                </div>

                <div class="testimonials style5">
                    <div class="message">
                        <blockquote class="whisper">
                           Ayudando a las empresas a mejorar sus servicios investigando en: evaluación de la experiencia de tu cliente, calidad del servicio percibida, satisfacción y fidelidad del cliente.
                         </blockquote>
                    </div>

                    <div class="avatar">
                        <div class="testimonial-author-thumbnail">
                            <img src="/themes/iseo/images/SPS.jpg" alt="images">
                        </div>
                        <div class="name"><span>John Smith</span></div>
                        <div class="position">CEO &amp; Founder - Okler</div>
                    </div>
                </div>

                <div class="testimonials style5">
                    <div class="message">
                        <blockquote class="whisper">
                           Antes de todo, hazte la siguiente pregunta: ¿Tu web está pensada desde la perspectiva del usuario que accede por primera vez?.
                         </blockquote>
                    </div>

                    <div class="avatar">
                        <div class="testimonial-author-thumbnail">
                            <img src="/themes/iseo//themes/iseo/images/SPS.jpg" alt="images">
                        </div>
                        <div class="name"><span>John Smith</span></div>
                        <div class="position">CEO &amp; Founder - Okler</div>
                    </div>
                </div>

            </div><!-- /.flat-testimonials-->
        </div>
    </div>
</div><!-- /.container -->
</section>

<!-- Partner -->
<section class="flat-row row-partners">
<div class="container">
    <ul class="flat-client" data-item="6" data-nav="false" data-dots="false" data-auto="true">
        <li>
            <img alt="owlcarousel-item-img" src="/themes/iseo/images/clients/Logo-01.jpg"/>
        </li>
        <li>
            <img alt="owlcarousel-item-img" src="/themes/iseo/images/clients/Logo-02.jpg"/>
        </li>
        <li>
            <img alt="owlcarousel-item-img" src="/themes/iseo/images/clients/Logo-03.jpg"/>
        </li>
        <li>
            <img alt="owlcarousel-item-img" src="/themes/iseo/images/clients/Logo-04.jpg"/>
        </li>
        <li>
            <img alt="owlcarousel-item-img" src="/themes/iseo/images/clients/Logo-05.jpg"/>
        </li>
        <li>
            <img alt="owlcarousel-item-img" src="/themes/iseo/images/clients/Logo-06.jpg"/>
        </li>
    </ul>
</div>
</section>





@endsection
