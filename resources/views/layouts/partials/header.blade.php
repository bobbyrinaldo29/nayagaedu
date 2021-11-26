<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{ asset('/favicon.png') }}">
    <title>{{ config('app.name') }} | @isset($title) {{ $title }} @endisset</title>

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.2/css/all.css">
    <link href="{{ asset('vendor/jquery-nice-select/css/nice-select.css') }}" rel="stylesheet">

    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{ asset('vendor/animate.css/animate.min.css') }}">

    <!-- Fancybox CSS -->
    <link rel="stylesheet" href="{{ asset('vendor/fancybox/dist/jquery.fancybox.min.css') }}">

    <!-- OWL carousel CSS -->
    <link rel="stylesheet" href="{{ asset('vendor/owl.carousel/dist/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/owl.carousel/dist/assets/owl.theme.default.min.css') }}">

    <!-- Main CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.min.css') }}">

    <!-- Leaflet Map -->
    <link rel="stylesheet" href="{{ asset('vendor/leaflet/leaflet.css') }}" />

    <!-- Google Font -->
    <link
        href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i,900,900i&amp;subset=latin-ext"
        rel="stylesheet">

    {!! ReCaptcha::htmlScriptTagJsApi() !!}

</head>
