@extends('themes.default.base')

@section('content')
    <div class="cta-1">
        <div class="container">
            <div class="row text-center white">
                <h1 class="cta-title">Contacto</h1>
                <p class="cta-sub-title">Envíanos un mensaje</p>
            </div>
        </div>
    </div>

    <div id="contact" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="page-title text-center">
                        <p>Usa el formulario de contacto, o contáctanos a través de nuestros datos (ubicados en el lado derecho).</p>
                        <hr class="pg-titl-bdr-btm">
                    </div>
                    <p id="messageSent">Tu mensaje ha sido enviado. Gracias!</p>
                    <div id="errormessage"></div>

                    <div class="form-sec">
                        <form id="contactForm">
                            <input type="hidden" name="user_id" value="{{ $me->id }}">
                            <div class="form-group">
                                <input class="form-control" type="text" name="name" placeholder="Nombre" required>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" placeholder="Correo" required>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="phone" placeholder="Teléfono" required>
                            </div>
                            <div class="form-group">
                                <select name="topic" class="form-control" required>
                                    <option value="">Seleccione asunto</option>
                                    @foreach ($me->topics()->pluck('name') as $topic)
                                        <option value="{{ $topic }}">{{ $topic }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="content" placeholder="Mensaje" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary" id="btnSubmitContact">
                                Enviar <i class="fa fa-send"></i>
                            </button>
                        </form>
                    </div>
                </div>
                <div class="col-md-4">
                    <p>
                        <strong>Dirección:</strong>
                        {{ $me->address }}
                    </p>
                    <p>
                        <strong>Teléfono(s):</strong>
                        {{ $me->phones }}
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        var $contactForm, $btnSubmitContact;
        $(function () {
            $contactForm = $("#contactForm");
            $btnSubmitContact = $('#btnSubmitContact');

            $contactForm.on('submit', onSubmitContact);
        });

        function onSubmitContact(event) {
            event.preventDefault();
            $btnSubmitContact.prop('disabled', true);

            $.ajax({
                url: 'https://theressa.net/formulario/contacto',
                dataType: 'json',
                type: 'GET',
                data: $contactForm.serialize(),
                success: function (data) {
                    if (data.success) {
                        $("#contactForm").fadeOut();
                        $('#messageSent').show();
                    } else {
                        displayErrorMessages(data);
                    }

                    $btnSubmitContact.prop('disabled', false);
                },
                error: function() {
                    alert('Ocurrió un error inesperado.');
                }
            });
        }

        function displayErrorMessages(errors) {
            for (var property in errors) {
                if (errors.hasOwnProperty(property)) {
                    alert(errors[property]);
                }
            }
        }
    </script>
@endsection