<!DOCTYPE html>
<html lang="zxx">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>14 del sur</title>
        <meta description="" content="">
		<link rel="icon" href="favicon.ico">
		<link rel="icon" href="favicon.ico">
		<!-- Bootstrap -->
		<link rel="stylesheet" type="text/css" href="{{ asset('themes/archi/css/bootstrap.min.css') }}">
		<!-- Awesome font icons -->
		<link rel="stylesheet" type="text/css" href="{{ asset('themes/archi/css/font-awesome.min.css') }}" media="screen"/>
		<!-- Owl-coursel -->
		<link rel="stylesheet" type="text/css" href="{{ asset('themes/archi/css/owl-coursel/owl.carousel.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('themes/archi/css/owl-coursel/owl.theme.css') }}">
		<!-- Style -->
		<link rel="stylesheet" type="text/css" href="{{ asset('themes/archi/css/style.css') }}" media="screen">
		<!-- Padd-mr -->
		<link rel="stylesheet" type="text/css" href="{{ asset('themes/archi/css/padd-mr.css') }}" media="screen">

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

@include('themes.archi.includes.header')

@yield('content')

@include('themes.archi.includes.footer')

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

<!-- jQuery -->
		<script src="{{ asset('themes/archi/js/jquery-2.2.4.min.js') }}"></script>
		<!-- Bootstrap -->
		<script src="{{ asset('themes/archi/js/bootstrap.min.js') }}"></script>
		<!-- Owl-coursel -->
		<script src="{{ asset('themes/archi/js/owl-coursel/owl.carousel.js') }}"></script>
		<!-- Parallax scrolling -->
		<script src="{{ asset('themes/archi/js/skrollr.min.js') }}"></script>
		<!-- Header resize -->
		<script src="{{ asset('themes/archi/js/classie.js') }}"></script>
		<!-- Countdown -->
		<script src="{{ asset('themes/archi/js/simpletimer.js') }}"></script>
		<!-- Script -->
		<script src="{{ asset('themes/archi/js/script.js') }}"></script>

</body>
</html>
