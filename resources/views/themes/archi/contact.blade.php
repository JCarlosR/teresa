@extends('themes.archi.base')

@section('content')
    <!--CTA1 START-->
    <div class="cta-1">
        <div class="container">
            <div class="row text-center white">
                <h1 class="cta-title">Contacto</h1>
                <p class="cta-sub-title">Envíanos un mensaje</p>
            </div>
        </div>
    </div>
    <!--CTA1 END-->

    <!--CONTACT START-->
    <div id="contact" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="page-title text-center">
                        <p>Usa el formulario de contacto, o contáctanos a través de nuestros datos (ubicados en el lado derecho).</p>
                        <hr class="pg-titl-bdr-btm">
                    </div>
                    <div id="sendmessage">Your message has been sent. Thank you!</div>
                    <div id="errormessage"></div>

                    <div class="form-sec">
                        <form action="" method="post" role="form" class="contactForm">
                            <div class="col-md-4 form-group">
                                <input type="text" name="name" class="form-control text-field-box" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                                <div class="validation"></div>
                            </div>
                            <div class="col-md-4 form-group">
                                <input type="email" class="form-control text-field-box" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                                <div class="validation"></div>
                            </div>
                            <div class="col-md-4 form-group">
                                <input type="text" class="form-control text-field-box" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                                <div class="validation"></div>
                            </div>
                            <div class="col-md-12 form-group">
                                <textarea class="form-control text-field-box" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                                <div class="validation"></div>

                                <button class="button-medium" id="contact-submit" type="submit" name="contact">Enviar ahora</button>
                            </div>
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
    <!--CONTACT END-->
@endsection
