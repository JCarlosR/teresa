<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario de contacto</title>
</head>
<body>
    <h1>Formulario de contacto</h1>
    <p>Han usado el formulario de contacto con los siguientes datos:</p>
    <blockquote>
        <p><strong>Nombre: </strong> {{ $name }}</p>
        <p><strong>E-mail: </strong> {{ $email }}</p>
        <p><strong>Mensaje: </strong> {{ $content }}</p>
    </blockquote>
</body>
</html>