<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') - {{env('APP_NAME')}}</title>

    @vite('resources/bootstrap/scss/bootstrap.scss')

</head>
<body>

    @include('front.layouts.widgets.header')

    @yield('content')

    @include('front.layouts.widgets.footer')

    <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}" type="application/javascript"></script>

</body>
</html>
