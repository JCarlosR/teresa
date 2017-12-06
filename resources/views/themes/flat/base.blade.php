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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('/themes/flat/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/themes/flat/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/themes/flat/css/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/themes/flat/css/responsive.css') }}">


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
<body data-spy="scroll" data-offset="70">

@include('themes.flat.includes.header')

@yield('content')

@include('themes.flat.includes.footer')

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
@include('themes.flat.includes.form-modal')
<!-- Latest jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!-- Owl Carousel JS -->
<script src="{{ asset('/themes/flat/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('/themes/flat/js/masonry.js') }}"></script>
<script src="{{ asset('/themes/flat/js/three-col-masonry.js') }}"></script>
<script src="{{ asset('/themes/flat/js/custom.js') }}"></script>

</body>

</html>

