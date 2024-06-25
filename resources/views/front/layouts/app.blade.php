<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') - {{env('APP_NAME')}}</title>

    {{-- bootstrap scss --}}
    @vite('resources/bootstrap/scss/bootstrap.scss')

    {{-- stylesheet scss --}}
    @vite('resources/scss/stylesheet.scss')

</head>
<body>

    {{-- header --}}
    @include('front.layouts.widgets.header')

    {{-- content --}}
    @yield('content')

    {{-- footer --}}
    @include('front.layouts.widgets.footer')

    {{-- bootstrap bundle js --}}
    <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}" type="application/javascript"></script>

</body>
</html>
