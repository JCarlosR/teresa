@foreach ($services as $service)
    <div id="modal-service-{{ $service->id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title">{{ $service->name }}</h4>
                </div>
                <div class="modal-body">
                    <pre>
                        <code class="language-html">
                            {{ $service->code_string }}
                        </code>
                    </pre>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Aceptar</button>
                </div>
            </div>
        </div>
    </div>
@endforeach
