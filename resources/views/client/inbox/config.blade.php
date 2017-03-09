@extends('layouts.panel')

@section('dashboard_content')
<div class="page-content container-fluid">
    <h3 class="mt-0">Formulario de contacto</h3>
    <div class="row">
        <div class="col-md-12">
            <div class="widget">
                <div class="widget-heading">
                    <h3 class="widget-title">Acerca de su uso</h3>
                </div>
                <div class="widget-body">
                    <p>Teresa no prescribe el diseño del formulario de contacto.</p>
                    <p>Usar el formulario de Teresa es necesario para hacer un seguimiento de los leads en la plataforma.</p>
                    <p>Su funcionamiento se resume en los siguientes puntos:</p>
                    <ul>
                        <li>Los mensajes son guardados y clasificados por Teresa.</li>
                        <li>Se envía el mail de contacto original al cliente.</li>
                        <li>Y una copia del mismo al Google Account creado para gestionar sus datos.</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="widget">
                <div class="widget-heading">
                    <h3 class="widget-title">Configuración del formulario de contacto</h3>
                </div>
                <div class="widget-body">
                    @if (! $client->contact_email || ! $client->google_account)
                        <div class="alert alert-danger">
                            @if (! $client->contact_email)
                                <p>Por favor ingrese a <strong>Datos -> Datos principales</strong> y defina el <strong>correo de contacto</strong> del cliente antes de continuar.</p>
                            @endif
                            @if (! $client->google_account)
                                <p>Por favor ingrese a <strong>Datos -> Datos principales</strong> y defina el <strong>Google Account</strong> del cliente antes de continuar.</p>
                            @endif
                        </div>
                    @endif

                    <p>Para configurar el formulario se deben seguir los siguientes pasos:</p>

                    <h3>1. Hacer que los formularios funcionen gracias a Teresa.</h3>
                    <p>Esto significa que las peticiones de contacto serán atendidas por Teresa.</p>
                    <p>Para ello se tiene que usar en el atributo <code>action</code> de la etiqueta <code>form</code> la siguiente dirección:</p>
                    <textarea id="form-contact-action" class="form-control">{{ url('/formulario/contacto') }}</textarea>

                    <h3>2. Definir los campos de contacto.</h3>
                    <p>Es importante que todos los formularios usen los mismos campos. De esa forma se guardarán y clasificarán correctamente por Teresa.</p>
                    <p>Los campos son los siguientes:</p>
                    <ul>
                        <li>Nombre completo: <code>name</code></li>
                        <li>Email de contacto: <code>email</code></li>
                        <li>Teléfono: <code>phone</code></li>
                        <li>Asunto: <code>topic</code></li>
                        <li>Mensaje: <code>content</code></li>
                    </ul>
                    <p>A la derecha de cada campo se ha incluido un identificador.</p>
                    <p>Eso significa que los campos se deben enviar con un <code>name</code> específico.</p>
                    <p>Estos atributos <code>name</code> son agregados a los <code>input</code> o <code>select</code> según corresponda.</p>
                    <blockquote>
                        <p>Teresa hará una validación y no aceptará el mensaje si no se han incluido todos los campos requeridos.</p>
                        <p>Todos los campos son obligatorios, a excepción del teléfono.</p>
                    </blockquote>

                    <h3>3. Asuntos disponibles</h3>
                    <p>Para el campo de asunto, reflejado en el código como un <code>select</code> con <code>name="topic"</code> existen asuntos ya predefinidos.</p>
                    <p>Estos son los asuntos que se deben usar:</p>
                    <ul>
                        <li>Proyectos</li>
                        <li>Proveedores</li>
                        <li>Empleo</li>
                        <li>Contacto directo</li>
                        <li>Otros</li>
                    </ul>
                    <p>Estos son los <code>value</code> a usar para cada <code>option</code>. Sin embargo, el nombre asociado a cada opción puede ser cualquier otro.</p>
                    <p>Por ejemplo, si queremos que el usuario vea Presupuestos en vez de Proyectos usaremos:</p>
                    <textarea class="form-control" id="form-contact-options"><option value="Proyectos">Presupuestos</option></textarea>

                    <h3>4. Asociar al cliente con su formulario de contacto</h3>
                    <p>Para que Teresa pueda reconocer a qué cliente se enviaron los mensajes de contacto, es necesario añadir un campo adicional.</p>
                    <p>Los campos descritos en (2) son campos visibles por el usuario. Además de ellos, el formulario tendrá un campo oculto con el ID del cliente destino:</p>
                    <textarea id="form-contact-hidden-id" class="form-control"><input type="hidden" name="client_id" value="{{ $client->id }}"></textarea>
                    <p class="text-muted">Para {{ $client->name }} el ID es {{ $client->id }}, por lo que el código anterior se puede usar directamente.</p>

                    <h3>Ejemplo</h3>
                    <p>Es recomendable seguir los 4 pasos antes descritos sin omitir las clases o la estructura que tiene el formulario de cada plantilla.</p>
                    <p>Sin embargo, para tener una idea, a continuación se muestra un código HTML totalmente funcional:</p>
                    <textarea id="form-contact-example" class="form-control"
                          style="font-family: Monospace, sans-serif; font-size: 12px; border: 0;"
                          rows="20">
<form action="{{ url('/formulario/contacto') }}">
    <input type="hidden" name="client_id" value="{{ $client->id }}">

    Nombre completo:
    <input type="text" name="name" required>

    Email de contacto:
    <input type="email" name="email" required>

    Teléfono:
    <input type="text" name="phone">

    Asunto:
    <select name="topic" required>
        <option value="">Seleccione motivo</option>
        <option value="Proyectos">Presupuestos</option>
        <option value="Proveedores">Proveedores</option>
        <option value="Empleo">Empleo</option>
        <option value="Contacto directo">Contacto directo</option>
        <option value="Otros">Otros</option>
    </select>

    Mensaje:
    <textarea name="content" required>
</form>
                    </textarea>
                    <p class="text-muted">No se recomienda copiar y pegar porque se perderían los estilos del formulario de la plantilla. Se debe usar como guía.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
