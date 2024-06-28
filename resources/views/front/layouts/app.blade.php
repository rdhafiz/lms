<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title> @yield('title') - {{env('APP_NAME')}} </title>

    <link rel="stylesheet" href="{{asset('assets/css/aos.css')}}">

    {{-- vuejs cdn --}}
    <script src="{{asset('/assets/js/vue.global.js')}}"></script>

    {{-- axios cdn --}}
    <script src="{{asset('/assets/js/axios.min.js')}}"></script>

    {{-- bootstrap scss --}}
    @vite('resources/bootstrap/scss/bootstrap.scss')

    {{-- stylesheet scss --}}
    @vite('resources/scss/stylesheet.scss')

</head>
<body>

    {{-- preloader --}}
    @include('front.layouts.widgets.preloader')

    {{-- header --}}
    @include('front.layouts.widgets.header')

    {{-- content --}}
    @yield('content')

    {{-- footer --}}
    @include('front.layouts.widgets.footer')

    {{-- bootstrap bundle js --}}
    <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>

    {{-- aos --}}
    <script src="{{asset('assets/js/aos.js')}}"></script>

    <script>

        window.core = {
            @if(\Illuminate\Support\Facades\Auth::guard('users')->check())
                UserInfo: {!! \Illuminate\Support\Facades\Auth::guard('users')->user() !!},
            @else
                UserInfo: null,
            @endif
        };

        AOS.init();
    </script>

</body>
</html>
