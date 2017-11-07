<!doctype html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="es"><![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8" lang="es"><![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9" lang="es"><![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="es"><!--<![endif]-->
<head>
    <meta charset="utf-8">
    <title>{{ $client->title }}</title>
    <meta name="description" content="{{ $client->description }}"/>

    <meta property="og:title" content="{{ $client->title }}"/>
    <meta property="og:type" content="company"/>
    <meta property="og:url" content="{{ url()->current() }}"/>
    <meta property="og:site_name" content="{{ $client->trade_name }}"/>
    <meta property="og:description" content="{{ $client->description }}"/>
    <meta property="og:image" content="{{ $client->photo_route }}"/>
    <meta property="og:image:alt" content="{{ $client->title }}"/>

    @if ($client->getSocialProfile('twitter')->id)
        <meta name="twitter:card" content="summary">
        <meta name="twitter:site" content="{{ '@' . $client->getSocialProfile('twitter')->id }}">
        <meta name="twitter:creator" content="{{ '@' . $client->getSocialProfile('twitter')->id }}">
        <meta name="twitter:url"  content="{{ url()->current() }}">
        <meta name="twitter:title" content="{{ $client->title }}">
        <meta name="twitter:description" content="{{ $client->description }}">
        <meta name="twitter:image" content="{{ $client->photo_route }}">
    @endif

    <link rel="author" href="https://plus.google.com/+SEO-arquitectos">
    <link rel="publisher" href="https://plus.google.com/+SEO-arquitectos">
    <link rel="stylesheet" href="{{ asset('/build/css/print.css') }}" media="print">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{ asset('/themes/default/css/style.css') }}">
    
    <script type="application/ld+json">
    {
        "{{ '@' }}context" : "http://schema.org",
        "@type" : "company",
        "name" : "{{ $client->trade_name }}",
        "url" : "{{ url()->current() }}",
        "sameAs" : [
    @if ($client->getSocialProfile('facebook')->url != '#')
            "{{ $client->getSocialProfile('facebook')->url }}",
    @endif
        @if ($client->getSocialProfile('twitter')->url != '#')
            "{{ $client->getSocialProfile('twitter')->url }}",
    @endif
        @if ($client->getSocialProfile('google_plus')->url != '#')
            "{{ $client->getSocialProfile('google_plus')->url }}",
    @endif
        @if ($client->getSocialProfile('linkedin')->url != '#')
            "{{ $client->getSocialProfile('linkedin')->url }}",
    @endif
        @if ($client->getSocialProfile('instagram')->url != '#')
            "{{ $client->getSocialProfile('instagram')->url }}",
    @endif
        ]
    }
    </script>

    <link rel="stylesheet" href="{{ asset('cms/temporal/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('cms/temporal/css/bootstrap-theme.min.css') }}">
    <link rel="stylesheet" href="{{ asset('cms/temporal/css/main.css') }}">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="{{ asset('cms/temporal/js/vendor/modernizr-2.8.3.min.js') }}"></script>
</head>
<body>

{{--<div class="fullpage"></div>--}}

{{--<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>--}}

<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container-fluid menu-top">
        <div class="navbar-header">

        </div>
        {{--<div class="boton hidden-xs">--}}
            {{--<a href="#" type="button" class="btn btn-demo" data-toggle="modal" data-target="#myModal">Contáctanos</a>--}}
        {{--</div>--}}
        {{--<div class="boton visible-xs">--}}
            {{--<a href="#" type="button" class="btn btn-demo" data-toggle="modal" data-target="#myModal" style="padding: 5px 8px 3px 8px"><span class="glyphicon glyphicon-envelope"></span></a>--}}
        {{--</div>--}}
    </div>
</nav>

<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="container app-container">
    <div class="row app-row ">
        <div class="col-md-12 ">
            <div class="col-md-5 text-center height">
                <img src="{{ asset($client->photo_route) }}" alt="{{ $client->name }}" title="{{ $client->name }}">
                {{--<img src="/images/users/logo-samuel-cardenas.jpg" alt="">--}}
            </div>
            <div class="col-md-7 text ">
                <div class="cont-text">
                    <h1>{{ $client->trade_name }}</h1>
                    <p>{{ $client->description }}</p>
                    <br>
                    <br>

                    <div class="boton2">
                        <a href="#" type="button" class="btn btn-demo" data-toggle="modal" data-target="#myModal" title="{{ $client->name }}">
                            <h2>  Contacto <i class="fa fa-send"></i></h2>
                        </a>
                    </div>
                    <p>{{ $client->address }} | {{ $client->phones }}</p>
                    <div class="rs">
                        @if ($client->getSocialProfile('facebook')->url != '#')
                            <a target="_blank" href="{{ $client->getSocialProfile('facebook')->url }}" title="{{ $client->name }} en Facebook" >
                                <i class="fa fa-facebook fa1 faceshare"></i>
                            </a>
                        @endif
                        @if ($client->getSocialProfile('facebook')->url != '#')
                            <a target="_blank" href="{{ $client->getSocialProfile('twitter')->url }}" title="{{ $client->name }} en Twitter" >
                                <i class="fa fa-twitter fa1 twittershare"></i>
                            </a>
                        @endif
                        @if ($client->getSocialProfile('facebook')->url != '#')
                            <a target="_blank" href="{{ $client->getSocialProfile('google_plus')->url }}" title="{{ $client->name }} en Google+ " >
                                <i class="fa fa-google-plus fa1 googleshare"></i>
                            </a>
                        @endif
                        @if ($client->getSocialProfile('facebook')->url != '#')
                            <a target="_blank" href="{{ $client->getSocialProfile('linkedin')->url }}" title="{{ $client->name }} en Linkedin" >
                                <i class="fa fa-linkedin fa1 linkedinshare"></i>
                            </a>
                        @endif
                    </div>
                    <div class="col-md-12 col-sm-12 pda-t color2">
                        <p class="left">&copy; {{ date('Y') }} {{ $client->name }}.</p><p class="right"> Optimizado por <a href="//seo-arquitectos.com" title="SEO arquitectos">SEO-arquitectos</a> - Outsourcing Digital.</p>
                    </div>

                    {{--<div class="col-md-12 pad-t">--}}
                    {{--<footer class="center-foo">--}}
                    {{--<div class="container-fluid menu-footer">--}}
                    {{--<p class="left">&copy; {{ date('Y') }} {{ $client->name }}.</p><p class="right"> Optimizado por <a href="//seo-arquitectos.com" title="SEO arquitectos">SEO-arquitectos</a> - Outsourcing Digital.</p>--}}
                    {{--</div>--}}
                    {{--</footer>--}}
                    {{--</div>--}}

                </div>
                {{--<div class="cont-text1">--}}
                    {{--<div class="col-md-12 col-sm-12 pda-t color2">--}}
                        {{--<p class="left">&copy; {{ date('Y') }} {{ $client->name }}.</p><p class="right"> Optimizado por <a href="//seo-arquitectos.com" title="SEO arquitectos">SEO-arquitectos</a> - Outsourcing Digital.</p>--}}
                    {{--</div>--}}
                {{--</div>--}}

            </div>
            <br>
            <br>

        </div>


    </div>
</div> <!-- /container -->
<br>
{{--<div class="container pad-t">--}}
    {{--<div class="row">--}}
        {{--<div class="col-md-12">--}}
            {{--<footer class="center-foo">--}}
                {{--<div class="container-fluid menu-footer">--}}
                    {{--<p class="left">&copy; {{ date('Y') }} {{ $client->name }}.</p><p class="right"> Optimizado por <a href="//seo-arquitectos.com" title="SEO arquitectos">SEO-arquitectos</a> - Outsourcing Digital.</p>--}}
                {{--</div>--}}
            {{--</footer>--}}
        {{--</div>--}}

    {{--</div>--}}
{{--</div>--}}


<div>
    <div class="modal right fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">

                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>

                <div class="modal-body">
                    <h2>Contáctanos</h2>
                    <h3>Siempre listos para comenzar nuevos proyectos</h3>

                    <form method="POST" action="send_form" id="form_blend">
                        <div class="form-group">
                            <input class="form-control" type="text" id="name" name="name" placeholder="Nombre" required>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" id="email" name="email" placeholder="Correo" required>
                        </div>
                        <div class="form-group">
                            <select name="" id="" class="form-control">
                                <option value="">Seleccione asunto</option>
                                <option value="A">Asunto A</option>
                                <option value="B">Asunto B</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" id="message" name="message" placeholder="Mensaje" required></textarea>
                        </div>
                        <div class="boton2" style="margin: 15px 0;">
                            <button type="submit" class="btn btn-demo">
                                Enviar <i class="fa fa-send"></i>
                            </button>
                        </div>
                        <div class="boton3">
                            <!-- <a href="#" type="submit" class="btn btn-demo">Cancelar</a> -->
                            <button type="button" class="btn btn-demo" data-dismiss="modal" aria-label="Close" id="close_form_blend">Cancelar</button>
                        </div>
                    </form>
                </div>

            </div><!-- modal-content -->
        </div><!-- modal-dialog -->
    </div><!-- modal -->

    <div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel3">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header header-feedback">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body body-feedback" style="position:relative;">
                    <p>¡Gracias!</p>
                    <p>Tu solicitud ha sido enviada con éxito.</p>
                </div>
            </div>
        </div>
    </div>
</div>




@if ($client->google_analytics)
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', '{{ $client->google_analytics }}', 'auto');
        ga('send', 'pageview');
    </script>
@endif

<script>window.jQuery || document.write('<script src="{{ asset('cms/temporal/js/vendor/jquery-1.11.2.min.js') }}"><\/script>')</script>
<script src="{{ asset('cms/temporal/js/vendor/bootstrap.min.js') }}"></script>
<script src="{{ asset('cms/temporal/js/main.js') }}"></script>
<script src="{{ asset('cms/temporal/js/jquery.validate.min.js') }}"></script>
<script src="{{ asset('cms/temporal/js/list.js') }}"></script>

</body>
</html>
