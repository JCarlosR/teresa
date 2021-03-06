<!DOCTYPE html>
<html lang="es" class="js no-touch">
<head>
    <meta charset="utf-8">
    <title>{{ $me->title }}</title>
    <meta name="description" content="{{ $me->description }}"/>

    <meta property="og:title" content="{{ $me->title }}"/>
    <meta property="og:type" content="company"/>
    <meta property="og:url" content="{{ url()->current() }}"/>
    <meta property="og:image" content="{{ $me->photo_route }}"/>
    <meta property="og:site_name" content="{{ $me->trade_name }}"/>
    <meta property="og:description" content="{{ $me->description }}"/>

    <link rel="author" href="https://plus.google.com/+SEO-arquitectos">
    <link rel="publisher" href="https://plus.google.com/+SEO-arquitectos">
    <link rel="stylesheet" href="{{ asset('/build/css/print.css') }}" media="print">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('/themes/default/css/font-awesome.min.css') }}">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300,600|Raleway:600,300|Josefin+Slab:400,700,600italic,600,400italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="{{ asset('/themes/default/css/slick-team-slider.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('/themes/default/css/style.css') }}">

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
        "{{ $me->getSocialProfile('linkedin')->url }}"
        @endif
      ]
    }
    </script>
</head>
<body>

@include('themes.default.includes.header')

@yield('content')

@include('themes.default.includes.footer')

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
<script src="{{ asset('/themes/default/js/jquery.easing.min.js') }}"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="{{ asset('/themes/default/js/jquery.mixitup.js') }}" type="text/javascript"></script>
<script type="text/javascript" src="{{ asset('/themes/default/js/slick.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('/themes/default/js/custom.js') }}"></script>

</body>
</html>