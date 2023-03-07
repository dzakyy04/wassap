<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name') }}</title>

    {{-- Bootsrap css --}}
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    {{-- Swiper CSS --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    {{-- Swiper JS --}}
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    {{-- Main css --}}
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    {{-- CSS Include --}}
    @stack('css')
</head>

<body>
    @include('partials.navbar')

    @yield('content')

    @stack('footer')
    {{-- Bootsrap js --}}
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    @stack('js')
</body>

</html>
