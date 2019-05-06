<!doctype html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel Ecommerce Example</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat%7CRoboto:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/font-awesome.min.css') }}">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/responsive.css') }}">

</head>

<body>
    <div id="app">

        @include('frontend.layouts.partials.nav')

        @yield('content')

      @include('frontend.layouts.partials.footer')

    </div>
    <!-- end #app -->
    <script src="{{ asset('assets/frontend/js/app.js') }}"></script>
</body>


</html>
