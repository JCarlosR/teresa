<!doctype html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="es"><![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8" lang="es"><![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9" lang="es"><![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="es"><!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>{{ $client->name }}</title>
    <!-- <link rel="shortcut icon" type="image/x-icon" href="./assets/img/favicon.ico"> -->
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">

    <link rel="stylesheet" href="{{ asset('cms/temporal/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('cms/temporal/css/bootstrap-theme.min.css') }}">
    <link rel="stylesheet" href="{{ asset('cms/temporal/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('cms/temporal/fonts/style.css') }}">

    <script src="{{ asset('cms/temporal/js/vendor/modernizr-2.8.3.min.js') }}"></script>
</head>
<body>

<div class="fullpage"></div>
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container-fluid menu-top">
        <div class="navbar-header">
            <img src="https://theressa.net/images/logo.jpg" alt="Logo Theressa" width="180">
        </div>
        <div class="boton hidden-xs">
            <a href="#" type="button" class="btn btn-demo" data-toggle="modal" data-target="#myModal">Contáctanos</a>
        </div>
        <div class="boton visible-xs">
            <a href="#" type="button" class="btn btn-demo" data-toggle="modal" data-target="#myModal" style="padding: 5px 8px 3px 8px"><span class="glyphicon glyphicon-envelope"></span></a>
        </div>
        <!--/.navbar-collapse -->
    </div>
</nav>

<!-- Main jumbotron for a primary marketing message or call to action -->

<div class="container app-container">
    <!-- Example row of columns -->
    <div class="row app-row">
        <div class="col-md-7 text-center">
            <img src="{{ asset($client->photo_route) }}">
        </div>
        <div class="col-md-5 text">
            <div class="cont-text">
                <h2>{{ $client->trade_name }}</h2>
                <h3>{{ $client->description }}</h3>
                <div class="boton2">
                    <a href="#" type="button" class="btn btn-demo" data-toggle="modal" data-target="#myModal2">Notifícame</a>
                </div>
                <p><a href="mailto:informes@blend.pe">informes@blend.pe</a> | +511-2424234</p>
                <div class="rs">
                    <a href="#"><span class="icon-icon-facebook"></span></a>
                </div>
            </div>
        </div>
    </div>
</div> <!-- /container -->


<div class="modal right fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>

            <div class="modal-body">
                <h2>Te escuchamos</h2>
                <h3>Escríbenos que siempre estamos listos para comenzar nuevos proyectos</h3>
                <!-- <h2>Get in touch</h2>
                <h3>Be first to know about the latest updates and get exclusive offer our grand opening.</h3> -->
                <form method="POST" action="send_form" id="form_blend">
                    <div class="form-group row">
                        <div class="col-10">
                            <input class="form-control" type="text" id="name" name="name" placeholder="Nombre" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-10">
                            <input type="email" class="form-control" id="email" name="email" placeholder="Correo" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-10">
                            <input type="text" class="form-control" id="subject" name="subject" placeholder="Asunto" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-10">
                            <textarea class="form-control" id="message" name="message" placeholder="Mensaje" required></textarea>
                        </div>
                    </div>
                    <div class="boton2" style="margin: 15px 0;">
                        <button type="submit" class="btn btn-demo">¡Enviar ahora!</button>
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

<!-- Modal3 -->
<div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel3">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header header-feedback">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body body-feedback" style="position:relative;">
                <h2>¡Gracias!</h2>
                <h3>Tu solicitud ha sido enviada con éxito.</h3>
            </div>
        </div>
    </div>
</div>

<!-- Modal2 -->
<div class="modal right fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2">
    <div class="modal-dialog" role="document">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>

            <div class="modal-body">
                <h2>Notifícame</h2>
                <h3>Sea el primero en enterarse del lanzamiento de nuestro renovado sitio web</h3>
                <!-- <h2>Notify Me</h2>
                <h3>Be first to know about the latest updates and get exclusive offer our grand opening.</h3> -->
                <form method="POST" action="send_notificacion" id="form_notify">
                    <div class="form-group row">
                        <input type="email" class="form-control" id="email_notify" name="email_notify" aria-describedby="emailHelp" placeholder="Correo" required>
                    </div>
                    <div class="boton2" style="margin: 15px 0;">
                        <button type="submit" class="btn btn-demo">Suscríbete</button>
                    </div>
                    <div class="boton3">
                        <button type="button" class="btn btn-demo" data-dismiss="modal" aria-label="Close" id="close_notify">Cancelar</button>
                    </div>
                </form>
            </div>

        </div><!-- modal-content -->
    </div><!-- modal-dialog -->
</div><!-- modal -->
<footer>
    <div class="container-fluid menu-footer">
        <p>&copy; {{ date('Y') }} {{ $client->name }}. Todos los Derechos Reservados</p>
    </div>
</footer>
<script>window.jQuery || document.write('<script src="{{ asset('cms/temporal/js/vendor/jquery-1.11.2.min.js') }}"><\/script>')</script>
<script src="{{ asset('cms/temporal/js/vendor/bootstrap.min.js') }}"></script>
<script src="{{ asset('cms/temporal/js/main.js') }}"></script>
<script src="{{ asset('cms/temporal/js/jquery.validate.min.js') }}"></script>
<script src="{{ asset('cms/temporal/js/list.js') }}"></script>
</body>
</html>
