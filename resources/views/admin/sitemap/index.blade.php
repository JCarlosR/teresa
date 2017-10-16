@extends('layouts.panel')

@section('styles')
    <link rel="stylesheet" href="{{ asset('/vendor/sitemap.css') }}">
@endsection

@section('dashboard_content')
<div class="page-content container-fluid">
    <div class="widget">
        <div class="widget-heading">
            <h3 class="widget-title">Sitemap</h3>
        </div>
        <div class="widget-body">
            <p class="mb-20">Sitemap planificado para la realización del sitio web.</p>

            <div data-sitemap style="display: none">
                <nav class="primary">
                    <ul>
                        <li id="home">
                            <a href="{{ $home->url }}" data-edit="{{ $home->id }}">
                                <form action="{{ url('/admin/sitemap') }}" method="post">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="add_to" value="{{ $home->id }}">
                                    <i class="glyphicon glyphicon-plus-sign" data-add></i>
                                </form>

                                <span data-name>{{ $home->name }}</span>
                                <small data-description>{{ $home->description }}</small>
                            </a>
                            <ul>
                                @foreach ($home->children as $node)
                                    <li>
                                        <a href="{{ $node->url }}" data-edit="{{ $node->id }}">
                                            <form action="{{ url('/admin/sitemap') }}" method="post">
                                                {{ csrf_field() }}
                                                <input type="hidden" name="add_to" value="{{ $node->id }}">
                                                <i class="glyphicon glyphicon-plus-sign" data-add></i>
                                            </form>

                                            <span data-name>{{ $node->name }}</span>
                                            <small data-description>{{ $node->description }}</small>
                                        </a>
                                        <ul>
                                            @foreach ($node->children as $child)
                                            <li>
                                                <a href="{{ $child->url }}" data-edit="{{ $child->id }}">
                                                    {{ $child->name }}
                                                </a>
                                            </li>
                                            @endforeach
                                        </ul>
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                    </ul>
                </nav>

                <nav class="secondary">
                    <ul>
                        <li><a href="/login">Sign In</a></li>
                        <li><a href="/sitemap">Site Map</a></li>
                        <li><a href="/faqs">FAQs</a></li>
                        <li><a href="/terms">Terms &amp; Conditions</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>

<div id="modal-edit-node" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">Modificar enlace</h4>
            </div>
            <form action="{{ url('/admin/sitemap') }}" method="post">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                <input type="hidden" name="site_map_link_id" value="">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="field-1" class="control-label">Nombre</label>
                                <input type="text" class="form-control" id="field-1" placeholder="Nombre o título de la página" name="name">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="field-2" class="control-label">Url</label>
                                <input type="text" class="form-control" id="field-2" placeholder="Ruta hacia una página (ejemplo /blog)" name="url">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="field-3" class="control-label">Descripción</label>
                        <input type="text" class="form-control" id="field-3" placeholder="Descripción breve de la página" name="description">
                    </div>
                    <div class="form-group">
                        <div class="checkbox-custom">
                            <input id="check-delete" type="checkbox" value="1" name="check-delete">
                            <label for="check-delete">Deseo eliminar este enlace del sitemap y así mismo sus nodos descendientes</label>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-info waves-effect waves-light">Guardar cambios</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@section('scripts')
    <script>
        var $modalEdit;

        $(function () {
            $('[data-sitemap]').fadeIn();
            $modalEdit = $('#modal-edit-node');
            $('[data-add]').on('click', addNode);
            $('[data-edit]').on('click', editNode);
        });

        function addNode(event) {
            $(this).parent().submit();

            event.stopPropagation();
            return false;
        }

        function editNode() {
            var target = $(this).data('edit');
            // alert('edit ' + target);
            var name = $(this).find('[data-name]').text();
            var description = $(this).find('[data-description]').text();
            var url = $(this).attr('href');

            $modalEdit.find('[name=site_map_link_id]').val(target);
            $modalEdit.find('[name=name]').val(name);
            $modalEdit.find('[name=description]').val(description);
            $modalEdit.find('[name=url]').val(url);
            $modalEdit.modal('show');
            return false;
        }
    </script>
@endsection
