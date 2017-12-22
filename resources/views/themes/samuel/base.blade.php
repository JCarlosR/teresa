<!DOCTYPE html>
<html lang="es" class="js no-touch">
<head>
    <meta charset="utf-8">
    <title>{{ $me->title }}</title>
    <meta name="description" content="{{ $me->description }}"/>

    <meta property="og:title" content="{{ $me->title }}"/>
    <meta property="og:type" content="company"/>
    <meta property="og:url" content="{{ url()->current() }}"/>
    <meta property="og:site_name" content="{{ $me->trade_name }}"/>
    <meta property="og:description" content="{{ $me->description }}"/>
    <meta property="og:image" content="{{ $me->photo_route }}"/>
    <meta property="og:image:alt" content="{{ $me->title }}"/>

    @if ($me->getSocialProfile('twitter')->id)
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="{{ '@' . $me->getSocialProfile('twitter')->id }}">
    <meta name="twitter:creator" content="{{ '@' . $me->getSocialProfile('twitter')->id }}">
    <meta name="twitter:url"  content="{{ url()->current() }}">
    <meta name="twitter:title" content="{{ $me->title }}">
    <meta name="twitter:description" content="{{ $me->description }}">
    <meta name="twitter:image" content="{{ $me->photo_route }}">
    @endif

    <link rel="author" href="https://plus.google.com/+SEO-arquitectos">
    <link rel="publisher" href="https://plus.google.com/+SEO-arquitectos">
    <link rel="stylesheet" href="{{ asset('/build/css/print.css') }}" media="print">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('/themes/samuel/css/style.css?v=4') }}">

    @if ($me->favicon)
        <link rel="shortcut icon" type="image/x-icon" href="{{ $me->favicon_url }}">
    @endif
    {{--icons manual--}}
    <link rel="apple-touch-icon" sizes="57x57" href="/themes/lindley/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/themes/lindley/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/themes/lindley/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/themes/lindley/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/themes/lindley/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/themes/lindley/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/themes/lindley/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/themes/lindley/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/themes/lindley/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="/themes/lindley/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/themes/lindley/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/themes/lindley/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/themes/lindley/favicon/favicon-16x16.png">
    <link rel="manifest" href="/themes/lindley/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/themes/lindley/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    {{--icons end manual--}}

    @yield('styles')

    <script type="application/ld+json">
    {
        "{{ '@' }}context" : "http://schema.org",
        "@type" : "company",
        "name" : "{{ $me->trade_name }}",
        "url" : "{{ url()->current() }}",
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
<body>

@include('themes.samuel.includes.header')

@yield('content')

@include('themes.samuel.includes.footer')

@if ($me->google_analytics)
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', '{{ $me->google_analytics }}', 'auto');
    ga('send', 'pageview');
</script>
@endif

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="{{ asset('/themes/samuel/js/app.js') }}"></script>

</body>
</html>