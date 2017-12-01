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
    <link rel="stylesheet" href=" https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('/themes/lindley/css/style.css?v=14') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/themes/lindley/css/icons.css') }}">
    @if ($me->favicon)
        <link rel="shortcut icon" type="image/x-icon" href="{{ $me->favicon_url }}">
    @endif

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

@include('themes.lindley.includes.header')

@yield('content')

@include('themes.lindley.includes.footer')

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
@include('themes.lindley.includes.form-modal')
<div class="back-to-top reveal" id="back-to-top">
    <i class="fa fa-angle-up fa-2x"></i>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="{{ asset('/themes/lindley/js/custom.js') }}"></script>

</body>
</html>