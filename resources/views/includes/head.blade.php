<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title></title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <script
        src="https://code.jquery.com/jquery-3.7.0.js"
        integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM="
        crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/d19fab2cf2.js" crossorigin="anonymous"></script>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/themes/lite-purple.css') }}">
    <link rel="stylesheet" href="{{ asset('css/plugins/perfect-scrollbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/plugins/icon-bar-bottom.css') }}">
    <link rel="stylesheet" href="{{ asset('css/plugins/fontawesome-5.css') }}">
    <link rel="stylesheet" href="{{ asset('css/plugins/metisMenu.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/plugins/sweetalert2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/plugins/toastr.css') }}">
    <link rel="stylesheet" href="{{ asset('css/plugins/datatables.min.css') }}">

    <meta name="theme-color" content="#6777ef"/>
    <link rel="apple-touch-icon" href="{{ asset('android-chrome-512x512.PNG') }}">
    <link rel="manifest" href="{{ asset('/manifest.json') }}">

    <script src="{{ asset('/sw.js') }}"></script>

    <script>
        if (!navigator.serviceWorker.controller) {
            navigator.serviceWorker.register("/sw.js").then(function (reg) {
                console.log("Service worker has been registered for scope: " + reg.scope);
            });
        }
    </script>
</head>
