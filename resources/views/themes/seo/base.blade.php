<!DOCTYPE html>
<html lang="es" class="js no-touch">
<head>
    <meta charset="utf-8">
    <title>{{ $me->title }}</title>
    <meta name="description" content="{{ $me->description }}"/>

        <link rel="author" href="https://plus.google.com/+SEO-arquitectos">
        <link rel="publisher" href="https://plus.google.com/+SEO-arquitectos">
        <link rel="stylesheet" href="css/print.css" media="print">
        <link rel="apple-touch-icon" sizes="180x180" href="imagenes/SEO-arquitectos.png">
        <link rel="shortcut icon" type="image/x-icon" href="imagenes/favicon.ico">

        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <!-- All Css -->
        <link rel="stylesheet" type="text/css" href="{{ asset ('/themes/seo/css/bootstrap.css') }}" media="screen">
        <link rel="stylesheet" type="text/css" href="{{ asset ('/themes/seo/css/font-awesome.min.css') }}" media="screen">
        <link rel="stylesheet" type="text/css" href="{{ asset ('/themes/seo/css/icofont.css') }}" media="screen">
        <link rel="stylesheet" type="text/css" href="{{ asset ('/themes/seo/css/hover-min.css') }}" media="screen">
        <!--Owl Carousel-->
        <link rel="stylesheet" type="text/css" href="{{ asset ('/themes/seo/css/owl.carousel.css') }}" media="screen">
        <link rel="stylesheet" type="text/css" href="{{ asset ('/themes/seo/css/owl.theme.css') }}" media="screen">
        <link rel="stylesheet" type="text/css" href="{{ asset ('/themes/seo/css/owl.transitions.css') }}" media="screen">
        <!--Portfolio-->
        <link rel="stylesheet" type="text/css" href="{{ asset ('/themes/seo/css/spsimpleportfolio.css') }}" media="screen">
        <link rel="stylesheet" type="text/css" href="{{ asset ('/themes/seo/css/featherlight.min.css') }}" media="screen">
        <link rel="stylesheet" type="text/css" href="{{ asset ('/themes/seo/css/style.css') }}" media="screen">
        <link rel="stylesheet" type="text/css" href="{{ asset ('/themes/seo/css/responsive.css') }}" media="screen">

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
<body class="body-innerwrapper">

@include('themes.seo.includes.header')

@yield('content')

@include('themes.seo.includes.footer')

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

<!--All Js-->
<script type="text/javascript" src="{{ asset ('/themes/seo/js/jQuery.js') }}"></script>
<script type="text/javascript" src="{{ asset ('/themes/seo/js/jquery.easing.min.js') }}"></script>
<script type="text/javascript" src="{{ asset ('/themes/seo/js/bootstrap.js') }}"></script>
<script src="https://use.fontawesome.com/e18447245b.js"></script>
<script type="text/javascript" src="{{ asset ('/themes/seo/js/appear.js') }}"></script>
<!--Portfolio-->
<script type="text/javascript" src="{{ asset ('/themes/seo/js/isotope.js') }}"></script>
<script type="text/javascript" src="{{ asset ('/themes/seo/js/spsimpleportfolio.js') }}"></script>
<script type="text/javascript" src="{{ asset ('/themes/seo/js/featherlight.min.js') }}"></script>
<script type="text/javascript" src="{{ asset ('/themes/seo/js/jquery.shuffle.modernizr.min.js') }}"></script>
<script type="text/javascript" src="{{ asset ('/themes/seo/js/steller.js') }}"></script>
<script type="text/javascript" src="{{ asset ('/themes/seo/js/smooth-scroll.js') }}"></script>
<script type="text/javascript" src="{{ asset ('/themes/seo/js/owl.carousel.js') }}"></script>
<script type="text/javascript" src="{{ asset ('/themes/seo/js/custom.js?5') }}"></script>

</body>
</html>
