<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="es">
<head>

    <meta charset="utf-8">

    <title>optimun visum</title>
    <meta name="description" content="ZupaHealth is a template for Health and Medical websites. The theme is built for doctors, hospitals, health clinics. It has purpose oriented design, responsive layout">
    <meta name="keywords" content="clinic, dentist, doctor, paediatrics, health, hospital, insurance, medical, medicine, patient, pharmacy, rehabilitation, service, surgeon, treatment">
    <meta name="author" content="rollthemes.com">

    <!-- Mobile Specific Metas -->

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="author" href="https://plus.google.com/+SEO-arquitectos">
    <link rel="publisher" href="https://plus.google.com/+SEO-arquitectos">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('themes/zupahealth/css/normalize.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('themes/zupahealth/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('themes/zupahealth/css/responsive.css') }}">
    <link rel="shortcut icon" href="{{ asset('themes/zupahealth/icon/favicon.png') }}">
    <link rel="apple-touch-icon-precomposed" href="{{ asset('themes/zupahealth/apple-touch-icon-158-precomposed.png') }}">

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

@include('themes.zupahealth.includes.header')

@yield('content')

@include('themes.zupahealth.includes.footer')

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

<script type="text/javascript" src="{{ asset('/themes/classify/js/jquery.min.js') }}"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript" src="{{ asset('themes/zupahealth/js/easing.js ') }}"></script>
<script type="text/javascript" src="{{ asset('themes/zupahealth/js/fitvids.js ') }}"></script>
<script type="text/javascript" src="{{ asset('themes/zupahealth/js/matchMedia.js ') }}"></script>
<script type="text/javascript" src="{{ asset('themes/zupahealth/js/jquery.sticky.js ') }}"></script>
<script type="text/javascript" src="{{ asset('themes/zupahealth/js/stellar.js ') }}"></script>
<script type="text/javascript" src="{{ asset('themes/zupahealth/js/waypoints.js ') }}"></script>
<script type="text/javascript" src="{{ asset('themes/zupahealth/js/jquery.animsition.min.js ') }}"></script>
<script type="text/javascript" src="{{ asset('themes/zupahealth/js/jquery.smooth-scroll.js ') }}"></script>
<script type="text/javascript" src="{{ asset('themes/zupahealth/js/owlCarousel.min.js ') }}"></script>
<script type="text/javascript" src="{{ asset('themes/zupahealth/js/jquery.cubeportfolio.min.js ') }}"></script>
<script type="text/javascript" src="{{ asset('themes/zupahealth/js/jquery.magnific-popup.min.js ') }}"></script>
<script type="text/javascript" src="{{ asset('themes/zupahealth/js/progressbar.min.js ') }}"></script>
<script type="text/javascript" src="{{ asset('themes/zupahealth/js/imagesLoaded.min.js ') }}"></script>
<script type="text/javascript" src="{{ asset('themes/zupahealth/js/isotope.min.js ') }}"></script>
<script type="text/javascript" src="{{ asset('themes/zupahealth/js/main.js ') }}"></script>

<!-- Revolution Slider -->
<script type="text/javascript" src="{{ asset('themes/zupahealth/js/jquery.themepunch.tools.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('themes/zupahealth/js/jquery.themepunch.revolution.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('themes/zupahealth/js/extensions/revolution.extension.actions.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('themes/zupahealth/js/extensions/revolution.extension.carousel.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('themes/zupahealth/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('themes/zupahealth/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('themes/zupahealth/js/extensions/revolution.extension.migration.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('themes/zupahealth/js/extensions/revolution.extension.navigation.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('themes/zupahealth/js/extensions/revolution.extension.parallax.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('themes/zupahealth/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('themes/zupahealth/js/extensions/revolution.extension.video.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('themes/zupahealth/js/slider.js') }}"></script>

</body>
</html>
