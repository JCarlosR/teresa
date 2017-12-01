<div class="modal zoom-anim-dialog mfp-hide apply-popup " id="myModal" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close mfp-close" data-dismiss="modal"  ><i class="fa fa-times" aria-hidden="true"></i></button>
                <h4 class="modal-title">ESCRÍBENOS</h4>
            </div>

            <div class="modal-body back-modal ">
                <div id="contact-message"></div>

                <form id="lindleyFormmulario" class="contact-form " action="https://theressa.net/formulario/contacto">
                    <input type="hidden" name="user_id" value="6">
                    <input type="hidden" name="url" value="{{ request()->fullUrl() }}">
                    <div class="divider border-padbtm"></div>
                    <div>
                        <input name="name" type="text" id="name" placeholder="Nombre Completo" required="required" />
                    </div>
                    <div>
                        <input name="email" type="email" id="email" placeholder="Correo electrónico" pattern="^[A-Za-z0-9](([_\.\-]?[a-zA-Z0-9]+)*)@([A-Za-z0-9]+)(([\.\-]?[a-zA-Z0-9]+)*)\.([A-Za-z]{2,})$" required="required" />
                    </div>

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

                    <div>
                        <textarea name="content" cols="40" rows="3" id="comments" placeholder="Mensaje" spellcheck="true" required="required"></textarea>
                    </div>

                    <div class="divider border-padtop"></div>

                    <input type="submit" class=" border btn-message btn-block " id="submit" value="Enviar" />
                </form>
            </div>
        </div>
    </div>
</div>