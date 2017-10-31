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
                                <span data-name>{{ $home->name }}</span>
                            </a>
                            <ul>
                                @foreach ($home->children as $node)
                                    @include('client.sitemap.node-level-2')
                                @endforeach
                            </ul>
                        </li>
                    </ul>
                </nav>

                <nav class="secondary">
                    <ul>
                        @foreach ($lv1_nodes as $node)
                        <li>
                            <a href="{{ $node->url }}" data-edit="{{ $node->id }}">
                                {{--<span data-name>{{ $node->name }}</span>--}}
                            </a>
                        </li>
                        @endforeach
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
    <script>
        $(function () {
            $('[data-sitemap]').fadeIn();
        });
    </script>
@endsection
