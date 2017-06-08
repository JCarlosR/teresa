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
    <meta property="og:site_name" content="{{ $me->name }}"/>
    <meta property="og:description" content="{{ $me->description }}"/>

    <link rel="author" href="https://plus.google.com/+SEO-arquitectos">
    <link rel="publisher" href="https://plus.google.com/+SEO-arquitectos">
    <link rel="stylesheet" href="{{ asset('/build/css/print.css') }}" media="print">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>


    <link rel="shortcut icon" href="imagenes/favicon.ico">

    <link rel="stylesheet" href="{{ asset('/themes/classify/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/themes/classify/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('/themes/classify/css/header-1.css') }}">
    <link rel="stylesheet" href="{{ asset('/themes/classify/css/footer-1.css') }}">
    <link rel="stylesheet" href="{{ asset('/themes/classify/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('/themes/classify/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('/themes/classify/plugins/FlexSlider/jquery.flexslider.css') }}">
    <link rel="stylesheet" href="{{ asset('/themes/classify/plugins/owl-carousel/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('/themes/classify/plugins/owl-carousel/owl.theme.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/themes/classify/css/cubeportfolio.min.css') }}">
    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('/themes/classify/ico/apple-icon-57x57.png') }}">
<link rel="apple-touch-icon" sizes="60x60" href="{{ asset('/themes/classify/ico/apple-icon-60x60.png') }}">
<link rel="apple-touch-icon" sizes="72x72" href="{{ asset('/themes/classify/ico/apple-icon-72x72.png') }}">
<link rel="apple-touch-icon" sizes="76x76" href="{{ asset('/themes/classify/ico/apple-icon-76x76.png') }}">
<link rel="apple-touch-icon" sizes="114x114" href="{{ asset('/themes/classify/ico/apple-icon-114x114.png') }}">
<link rel="apple-touch-icon" sizes="120x120" href="{{ asset('/themes/classify/ico/apple-icon-120x120.png') }}">
<link rel="apple-touch-icon" sizes="144x144" href="{{ asset('/themes/classify/ico/apple-icon-144x144.png') }}">
<link rel="apple-touch-icon" sizes="152x152" href="{{ asset('/themes/classify/ico/apple-icon-152x152.png') }}">
<link rel="apple-touch-icon" sizes="180x180" href="{{ asset('/themes/classify/ico/apple-icon-180x180.png') }}">
<link rel="icon" type="image/png" sizes="192x192"  href="{{ asset('/themes/classify/ico/android-icon-192x192.png') }}">
<link rel="icon" type="image/png" sizes="32x32" href="{{ asset('/themes/classify/ico/favicon-32x32.png') }}">
<link rel="icon" type="image/png" sizes="96x96" href="{{ asset('/themes/classify/ico/favicon-96x96.png') }}">
<link rel="icon" type="image/png" sizes="16x16" href="{{ asset('/themes/classify/ico/favicon-16x16.png') }}">
<link rel="manifest" href="ico/manifest.json">

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

@include('themes.classify.includes.header')

@yield('content')

@include('themes.classify.includes.footer')

@if ($me->google_analytics)
<script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-93019741-1', 'auto');
          ga('send', 'pageview');
</script>
@endif


<script type="text/javascript" src="{{ asset('/themes/classify/js/jquery.min.js') }}"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript" src="{{ asset('/themes/classify/plugins/owl-carousel/owl.carousel.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('/themes/classify/js/jquery.counterup.min.js') }}"></script>
<!-- WAYPOINTS -->
<script type="text/javascript" src="{{ asset('/themes/classify/js/waypoints.min.js') }}"></script>

<!-- FLEXSLIDER -->
<script type="text/javascript" src="{{ asset('/themes/classify/plugins/FlexSlider/jquery.flexslider-min.js') }}"></script>
<!-- MAGNIFIC POPUP-->
<script type="text/javascript" src="{{ asset('/themes/classify/js/jquery.magnific-popup.min.js') }}"></script>
<!-- MAGNIFIC POPUP  -->
<script type="text/javascript" src="{{ asset('/themes/classify/js/magnific-popup.min.js') }}"></script>
<!-- CUBE PORTFOLIO -->
<script type="text/javascript" src="{{ asset('/themes/classify/js/jquery.cubeportfolio.min.js') }}"></script>
<!-- CUBE PORTFOLIO -->
<script type="text/javascript" src="{{ asset('/themes/classify/js/cubeportfolio/portfolio-masonry-4col.js') }}"></script>
<!-- CUBE TESTIMONIALS -->
<script type="text/javascript" src="{{ asset('/themes/classify/js/cubeportfolio/testimonials.js') }}"></script>
<!-- CUBE TEAM -->
<script type="text/javascript" src="{{ asset('/themes/classify/js/cubeportfolio/team.js') }}"></script>
<!-- CUBE BLOG -->
<script type="text/javascript" src="{{ asset('/themes/classify/js/cubeportfolio/blog-grid-3col.js') }}"></script>
<!-- CUSTOM-->
<script type="text/javascript" src="{{ asset('/themes/classify/js/custom.js') }}"></script>

</body>
</html>
