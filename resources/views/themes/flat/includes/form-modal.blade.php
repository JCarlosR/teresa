<!-- Modal -->
<div class="modal fade " id="myModal" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Contáctenos</h4>
            </div>
            <div class="modal-body back-modal">

                <form id="formulario" action="https://theressa.net/formulario/contacto">
                    <input type="hidden" name="user_id" value="41">

                    <input type="hidden" name="url" value="{{ request()->fullUrl() }}">
                    <div class="form-group">
                        <input type="text" name="name"  placeholder="Nombre" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" placeholder="Correo" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <input type="text" name="phone" placeholder="Teléfono" class="form-control">
                    </div>
                    <div class="form-group">
                        <select name="topic" class="form-control" required >
                            <option value="">Seleccione motivo</option>
                            <option value="Proyectos">Presupuestos</option>
                            <option value="Proveedores">Proveedores</option>
                            <option value="Empleo">Empleo</option>
                            <option value="Contacto directo">Contacto directo</option>
                            <option value="Otros">Otros</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <textarea  class="form-control" name="content"  cols="30" rows="10" placeholder="Mensaje"></textarea>
                    </div>

                    <div class="form-group text-center">
                        <button type="submit" class=" btn  ">
                            {{--<i class="glyphicon glyphicon-send"></i>--}}
                            Enviar formulario
                        </button>
                    </div>
                    {{--<p class="form5">Respetamos su privacidad, no venderemos ni rentaremos sus <br>datos personales</p>--}}
                </form>
            </div>

        </div>

    </div>
</div>