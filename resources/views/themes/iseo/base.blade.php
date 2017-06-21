<!DOCTYPE html>
<html  xml:lang="es" lang="es">
<head>

    <meta charset="utf-8">
    <title>Servicios Profesionales SEO</title>

    <meta name="author" content="SPS">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Bootstrap  -->
    <link rel="stylesheet" type="text/css" href="{{asset('/themes/iseo/stylesheets/bootstrap.css')}}" >

    <!-- Theme Style -->
    <link rel="stylesheet" type="text/css" href="{{asset('/themes/iseo/stylesheets/style.css')}}">

    <!-- Responsive -->
    <link rel="stylesheet" type="text/css" href="{{asset('/themes/iseo/stylesheets/responsive.css')}}">

    <!-- Colors -->
    <link rel="stylesheet" type="text/css" href="{{asset('/themes/iseo/stylesheets/colors/color1.css')}}" id="colors">

    <!-- Animation Style -->
    <link rel="stylesheet" type="text/css" href="{{asset('/themes/iseo/stylesheets/animate.css')}}">

    <!-- Favicon and touch icons  -->
    <link href="{{asset ('/themes/iseo/imagenes/logo/apple-touch-icon-48-precomposed.png') }}" rel="apple-touch-icon-precomposed" sizes="48x48">
    <link href="{{asset ('/themes/iseo/imagenes/logo/apple-touch-icon-32-precomposed.png') }}" rel="apple-touch-icon-precomposed">
    <link href="{{asset ('/themes/iseo/imagenes/favicon.ico') }}" rel="shortcut icon">

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

@include('themes.iseo.includes.header')

@yield('content')

@include('themes.iseo.includes.footer')

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

<!-- Javascript -->
    <script type="text/javascript" src="{{ asset('/themes/iseo/javascript/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('/themes/iseo/javascript/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('/themes/iseo/javascript/jquery.easing.js')}}"></script>
    <script type="text/javascript" src="{{ asset('/themes/iseo/javascript/jquery-waypoints.js')}}"></script>
    <script type="text/javascript" src="{{ asset('/themes/iseo/javascript/jquery.cookie.js')}}"></script>
    <script type="text/javascript" src="{{ asset('/themes/iseo/javascript/jquery.fitvids.js')}}"></script>
    <script type="text/javascript" src="{{ asset('/themes/iseo/javascript/parallax.js')}}"></script>
    <script type="text/javascript" src="{{ asset('/themes/iseo/javascript/jquery.magnific-popup.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('/themes/iseo/javascript/owl.carousel.js')}}"></script>
    <script type="text/javascript" src="{{ asset('/themes/iseo/javascript/jquery.flexslider-min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('/themes/iseo/javascript/jquery-validate.js')}}"></script>
    <script type="text/javascript" src="{{ asset('/themes/iseo/javascript/main.js')}}"></script>

    <!-- Revolution Slider -->
    <script type="text/javascript" src="{{ asset('/themes/iseo/javascript/jquery.themepunch.tools.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('/themes/iseo/javascript/jquery.themepunch.revolution.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('/themes/iseo/javascript/slider.js')}}"></script>
</body>
</html>
