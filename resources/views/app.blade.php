<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{csrf_token()}}">
        <script>window.Laravel = { csrfToken: ' {{csrf_token()}} '}</script>
        <link rel="manifest" href="/manifest.json">

        <title>Bo's Kitchen</title>
        <!--
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
        -->
        <!-- CSS File -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">



        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->

    </head>
    <body>
        <div id="app" class="flex-center position-ref full-height">

            <div id="app">
            </div>
        </div>
        <!-- JS File -->
        <script src="{{asset('js/app.js')}}" async></script>
    </body>

</html>
