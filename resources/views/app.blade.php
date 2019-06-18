<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="manifest" href="/manifest.json">
        <title>Bo's Kitchen</title>
        <meta name="description" content="Exclusive vegan recipes for stunning breakfasts, nutritious lunches and mouth watering puddings. Fluffy pancakes, chewy cookies and experimental smoothies."/>

        <meta name="author" content="Orchestra"/>

        <meta name="csrf-token" content="{{ csrf_token() }}">
        <script>window.Laravel = { csrfToken: ' {{csrf_token()}} '}</script>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-137560119-1"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'UA-137560119-1');
        </script>
        <script>

        </script>
        <!-- Open Graph Links -->
        <meta property="og:title" content="Bo's Kitchen">
        <meta property="og:description" content="Brand new free app for vegan recipes from Bo.">
        <meta property="og:image" content="https://s3.eu-west-2.amazonaws.com/boskitchen/assets/IMG_2092.jpg">
        <meta property="og:url" content="https://boskitchen.app/">

        <!-- Styles -->
        <link href="{{ mix('css/app.css') }}" rel="stylesheet">

    </head>
    <body>
            <div id="app" >
            </div>
       <!-- JS File -->
        <script src="{{mix('js/app.js')}}" async></script>
        <!-- Font Awesome Icons -->
            <script defer src="https://use.fontawesome.com/releases/v5.8.1/js/solid.js" integrity="sha384-IA6YnujJIO+z1m4NKyAGvZ9Wmxrd4Px8WFqhFcgRmwLaJaiwijYgApVpo1MV8p77" crossorigin="anonymous"></script>
            <script defer src="https://use.fontawesome.com/releases/v5.8.1/js/fontawesome.js" integrity="sha384-EMmnH+Njn8umuoSMZ3Ae3bC9hDknHKOWL2e9WJD/cN6XLeAN7tr5ZQ0Hx5HDHtkS" crossorigin="anonymous"></script>
            <script type="text/javascript" src="//downloads.mailchimp.com/js/signup-forms/popup/unique-methods/embed.js" data-dojo-config="usePlainJson: true, isDebug: false"></script><script type="text/javascript">window.dojoRequire(["mojo/signup-forms/Loader"], function(L) { L.start({"baseUrl":"mc.us20.list-manage.com","uuid":"bdd71456e2cd98b0500789398","lid":"f88e6520d8","uniqueMethods":true}) })</script>
    </body>

</html>
