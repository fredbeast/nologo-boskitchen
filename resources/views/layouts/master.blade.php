<!-- app/views/layouts/master.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    @yield('page_info')
    <title>Bo's Kitchen</title>
    <meta name="description" content="Vegan recipes curated by Bo with a goal to show you how nutritious, delicious, colourful and inspiring vegan meals can be."/>
    <meta name="theme-color" content="#ffffff"/>
    <meta name="author" content="Orchestra"/>

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-137560119-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-137560119-1');
    </script>

    <!-- Open Graph -->
    @yield('facebook_meta')
    <meta property="og:title" content="Bo's Kitchen">
    <meta property="og:description" content="Brand new free app for vegan recipes from Bo.">
    <meta property="og:image" content="https://s3.eu-west-2.amazonaws.com/boskitchen/assets/IMG_2092.jpg">
    <meta property="og:url" content="https://boskitchen.app/">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <!-- Main CSS -->
    <link href="{{ mix('js/app.js') }}" rel="stylesheet">

</head>
<body>
@include('includes.header')
@yield('content')
@include('includes.footer')

<!-- Main JS -->
<script type="text/javascript" src="{{ mix('js/app.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/smooth-scroll.polyfills.min.js') }}"></script>
<script>
    var scroll = new SmoothScroll('a[href*="#"]');
</script>
<script>

</script>
</body>
</html>
