<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="manifest" href="/manifest.json">
        <title>Bo's Kitchen</title>
        <meta name="description" content="Vegan recipes from Bo"/>

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
            if ('serviceWorker' in navigator ) {
                window.addEventListener('load', function() {
                    navigator.serviceWorker.register('/service-worker.js').then(function(registration) {
                        // Registration was successful
                        console.log('ServiceWorker registration successful with scope: ', registration.scope);
                    }, function(err) {
                        // registration failed :(
                        console.log('ServiceWorker registration failed: ', err);
                    });
                });
            }
        </script>
        <!-- Open Graph Links -->
        <meta property="og:title" content="Bo's Kitchen">
        <meta property="og:description" content="Brand new free app for vegan recipes from Bo.">
        <meta property="og:image" content="https://s3.eu-west-2.amazonaws.com/boskitchen/assets/IMG_2092.jpg">
        <meta property="og:url" content="https://boskitchen.app/">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    </head>
    <body>
            <div id="app">
            </div>
       <!-- JS File -->
        <script src="{{asset('js/app.js')}}" async></script>
        <!-- Font Awesome Icons -->
        <script src="https://use.fontawesome.com/releases/v5.8.1/js/all.js" integrity="sha384-g5uSoOSBd7KkhAMlnQILrecXvzst9TdC09/VM+pjDTCM+1il8RHz5fKANTFFb+gQ" crossorigin="anonymous"></script>
    </body>

</html>
