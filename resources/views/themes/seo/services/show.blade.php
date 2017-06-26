@extends('themes.seo.base')

@section('styles')
    <style>
        #myCarousel img {
            width: 100%;
            height: auto;
        }
    </style>
@endsection

@section('content')
<!--Bread Crumb-->
<section id="breadcrumb" class="two green-color">
<div class="container">
    <div class="row">
        <div class="col-sm-12 text-center breadcrumb-block">
            <h1>Diagnóstico Digital para Oficinas AEC</h1>
            <ol class="breadcrumb">
                <li>
                    <a href="../index.html">Inicio</a>
                </li>
                    <li>
                        <a href="../servicios.html">Servicios</a>
                    </li>
                <li class="active">diagnóstico digital</li>
            </ol>
        </div>
    </div>
</div>
</section>
<!--Single Services-->
<section id="single-services" class="space two border-bottom-full">
<div class="container">
    <div class="row">
        <div class="col-sm-8 col-md-9 service-block">
            <div class="service-image">

                <div class="service-item">
                    <h3>Como funciona el servicio de Diagnóstico Digital para una oficina AEC</h3>

                    <p>Nuestro servicio de Diagnóstico digital evalúa las eficiencia técnicas de todas las url´s de un website y entregamos un informe técnico como hoja de  ruta dirigida a los desarrolladores  informáticos y/o  encargados del mantenimiento web para nuestro cliente. La evaluación contempla el análisis del dominio, servidor, website, contenido, etiquetado, presencia digital y backlinks.</p>

                    <img src="imagenes/analisis-seo.jpg" alt="Gráfico de Diagnóstico Digital" title="Gráfico de Diagnóstico Digital Oficinas AEC">

                    <p>Hemos realizados más de 1,500 diagnósticos técnicos avanzados para diferentes empresas de arquitectura, ingeniería y construcción en los que evaluamos factores como la edad del dominio, certificados SSL, rapidez de carga del website, lenguaje de programación, rapidez de carga del website, calidad de etiquetas principales, contenido web, presencia en medios digitales y enlaces externos e internos de la web.</p>
                </div>
                <br>
                <div class="col-sm-6 padding-right">
                    <div class="service-item">

                          <h3>Diferenciación del mercado</h3>
                          <p>Hemos logrado trabajar digitalmente Lima, Perú - San José, Costa Rica compartiendo accesos digitales para un rastreo global de sus medios digitales y la conexión al website. Ahora, la diseñadora Belén Rodriguez ha conocido un poco más sobre el SEO whitehat  que tiene como misión las buenas practicas del SEO.</p>
                    </div>
                    <br>
                        <div class="service-item">
                          <h3>En que lugares ofrecemos el servicio</h3>
                    <p>El documento que entregamos tiene información detallada de los aspectos de técnicos de un website listado por urls del dominio principal.</p>
                    <p>Hemos realizado diagnósticos digitales para clientes de diferentes países como Perú, Colombia, Chile, Ecuador, Argentina, México, España y Costa Rica con el objetivo de atender diversos países e idiomas, que no son más que la traducción literal de ajustes técnicos del código de programación web y configuración del dominio.</p>
                        </div>
                </div>
                <div class="col-sm-6 padding-left service-item">
                    <h3>Caso de éxito</h3>
                    <p>Uno de los mejores proyectos de diagnóstico digital fue para la oficina de decoración Horazdluz.com fue mediante el diagnóstico que nos dimos cuenta de la fuerza del dominio registrado hace ya 12 años atrás, una autoridad de muy buena referencia para motores de búsqueda.  Al tener un dominio con tantos años de registro nos beneficia en la credibilidad y confianza para los resultados de búsqueda.  </p>
                    <img src="imagenes/analisis-web.jpg" alt="Gráfico análisis web oficinas AEC" title="Gráfico análisis web oficinas AEC">
                </div>
            </div>
        </div>
        <aside class="col-sm-4 col-md-3">
            <div class="widget category">
                <ul>
                    <li class="active"><a href="presencia-en.internet.html"><i class="icofont icofont-simple-right"></i>Presencia en Internet</a> </li>
                    <li><a href="../servicios/websites-corporativas.html"><i class="icofont icofont-simple-right"></i>Website Corporativa</a> </li>
                    <li><a href="../servicios/optimizacion-seo.html"><i class="icofont icofont-simple-right"></i>Optimización SEO</a> </li>
                    <li><a href="../servicios/formacion-digital.html"><i class="icofont icofont-simple-right"></i>Formación Digital</a> </li>
                    <li><a href="../servicios/diagnostico-digital.html"><i class="icofont icofont-simple-right"></i>Diagnóstico Digital</a> </li>
                    <li><a href="../servicios/fotografia-de-proyectos.html"><i class="icofont icofont-simple-right"></i>Fotografía de Proyectos</a> </li>
                </ul>
            </div>
            <div class="widget expert">
                <h4>¿Ayuda de un experto?</h4>
                <p>Contáctanos y te ayudaremos a centralizar tu información digital mediante herramientas creadas para el sector AEC.</p>
                <a href="#formulario" class="btn radius-4x green-btn">Pedir Ayuda!</a>
            </div>
            <div class="widget testimonial gray-bg">
                <h4>Otros Servicios</h4>
                <div class="owl-theme owl-carousel" id="testi-slider">
                    <div class="item">
                        <div class="testimonial-block"> <br>
                        <div class="name">Websites Corporativas</div>
                            <p>“Desarrollo de websites corporativas para oficinas AEC con páginas y contenidos adaptados a los nuevos dispositivos digitales y resoluciones de pantalla.</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimonial-block"> <br>
                        <div class="name">Optimización SEO</div>
                            <p>“Analisis y mejora website, lectura y detección de fallos técnicos básicos de dominio, código web, contenido website y configuración de medios digitales sociales y profesionales.</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimonial-block"> <br>
                        <div class="name">Formación Digital</div>
                            <p>“Cursos dirigidos a profesionales de la AEC para conocer los medios digitales mas usados y lograr centralizar, compartir y editar archivos de trabajo en la nube.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="widget brochure">
                <a href="#formulario"><i class="icofont icofont-prescription"></i>Escríbenos!</a>
            </div>
        </aside>
    </div>
</div>
</section>

@endsection
