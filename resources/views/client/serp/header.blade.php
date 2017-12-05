<!DOCTYPE html>
<html lang="es" class="js no-touch">
<head>
    <meta charset="utf-8">
    <title>{{ $title ?: 'Sin título' }}</title>
    <meta name="description" content="{{ $description ?: 'Sin descripción' }}">

    <meta property="og:title" content="{{ $title ?: 'Sin título' }}">
    <meta property="og:type" content="company">
    <meta property="og:url" content="{{ $absoluteUrl }}">
    <meta property="og:site_name" content="{{ $me->trade_name }}">
    <meta property="og:description" content="{{ $description ?: 'Sin descripción' }}">
    <meta property="og:image" content="{{ $me->photo_route }}">
    <meta property="og:image:alt" content="{{ $title ?: 'Sin título' }}">

    @if ($me->getSocialProfile('twitter')->id)
        <meta name="twitter:card" content="summary">
        <meta name="twitter:site" content="{{ '@' . $me->getSocialProfile('twitter')->id }}">
        <meta name="twitter:creator" content="{{ '@' . $me->getSocialProfile('twitter')->id }}">
        <meta name="twitter:url"  content="{{ $absoluteUrl }}">
        <meta name="twitter:title" content="{{ $title ?: 'Sin título' }}">
        <meta name="twitter:description" content="{{ $description ?: 'Sin descripción' }}">
        <meta name="twitter:image" content="{{ $me->photo_route }}">
    @endif

    <link rel="author" href="https://plus.google.com/+SEO-arquitectos">
    <link rel="publisher" href="https://plus.google.com/+SEO-arquitectos">
    <link rel="stylesheet" href="{{ asset('/build/css/print.css') }}" media="print">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Inserta aquí tus estilos CSS -->

    @yield('styles')

    <script type="application/ld+json">
    {
        "{{ '@' }}context" : "http://schema.org",
        "@type" : "company",
        "name" : "{{ $me->trade_name }}",
        "url" : "{{ $absoluteUrl }}",
        "sameAs" : [
    @if ($me->getSocialProfile('facebook')->url != '#')
        "{{ $me->getSocialProfile('facebook')->url }}",
    @endif
    @if ($me->getSocialProfile('twitter')->url != '#')
        "{{ $me->getSocialProfile('twitter')->url }}",
    @endif
    @if ($me->getSocialProfile('google_plus')->url != '#')
        "{{ $me->getSocialProfile('google_plus')->url }}",
    @endif
    @if ($me->getSocialProfile('linkedin')->url != '#')
        "{{ $me->getSocialProfile('linkedin')->url }}",
    @endif
    @if ($me->getSocialProfile('instagram')->url != '#')
        "{{ $me->getSocialProfile('instagram')->url }}",
    @endif
        ]
    }
    </script>
</head>