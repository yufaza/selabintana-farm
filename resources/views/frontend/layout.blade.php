<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- FONTS  -->
    <!-- <link rel="stylesheet" href="https://mimity-fashion53.netlify.com/fonts/nunito.css"> -->
    <!-- <link rel="stylesheet" href="https://mimity-fashion53.netlify.com/fonts/roboto.css"> -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700">

    <!-- REQUIRED CSS: BOOTSTRAP, METISMENU, PERFECT-SCROLLBAR  -->
    <link rel="stylesheet" href="/frontend/vendor.min.css">

    <!-- PLUGINS FOR CURRENT PAGE -->
    <link rel="stylesheet" href="/frontend/swiper.min.css">
    <link rel="stylesheet" href="/frontend/noty.min.css">

    <!-- Mimity CSS  -->
    <link rel="stylesheet" href="/frontend/style.min.css">

    <title>Home - Mimity</title>
</head>

<body>
    @include('frontend.navbar')
    @include('frontend.message')
    @yield('content')
    @include('frontend.footer')
    @yield('scripts')
</body>

</html>
