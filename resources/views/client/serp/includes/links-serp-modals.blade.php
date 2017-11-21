@foreach ($links as $link)
    <div id="modal-code-{{ $link->id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title">{{ $link->name }}</h4>
                </div>
                <div class="modal-body">
                    <pre><code class="language-html">{{ $link->code_string }}</code>
                    </pre>
                </div>
                <div class="modal-footer">
                    <a href="/serp/link/{{ $link->id }}" title="Descargar código de encabezado"
                       class="btn btn-info waves-effect waves-light">
                        <i class="glyphicon glyphicon-download-alt"></i>
                    </a>
                    <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Aceptar</button>
                </div>
            </div>
        </div>
    </div>
@endforeach
