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

            <div data-sitemap>
                <nav class="primary">
                    <ul>
                        <li id="home">
                            <a href="https://mydomain.co.uk">
                                <i class="fa fa-home"></i> Home <small>Some kind of description</small>
                            </a>
                            <ul>
                                <li>
                                    <a href="/search"><i class="fa fa-search"></i> Search <small>Search by name, location and/or category.</small></a>
                                    <ul>
                                        <li><a href="/search/#list">List view</a></li>
                                        <li><a href="/search/#map">Map view</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="/suppliers"><i class="fa fa-building"></i> Suppliers</a>
                                    <ul>
                                        <li>
                                            <a href="/suppliers/a-z">A to Z</a>
                                            <ul>
                                                <li><a href="/suppliers/a-z/:letter" class="multi">Level 3</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="/suppliers/location">Location</a>
                                            <ul>
                                                <li><a href="/suppliers/location/:location" class="multi">Level 3</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="/suppliers/category">Category</a>
                                            <ul>
                                                <li><a href="/suppliers/category/:category" class="multi">Level 3</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="/supplier/:slug"><i class="fa fa-building"></i> Supplier <small>Supplier details page.</small></a>
                                </li>
                                <li>
                                    <a href="/blog"><i class="fa fa-rss"></i> Blog <small>Filter by category or tag.</small></a>
                                    <ul>
                                        <li><a href="/blog/article" class="multi">Article</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="/about"><i class="fa fa-info-circle"></i> About</a>
                                </li>
                                <li>
                                    <a href="/contact"><i class="fa fa-phone"></i> Contact</a>
                                </li>
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
                        <li><a href="/privacy">Privacy Policy</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>
@endsection
