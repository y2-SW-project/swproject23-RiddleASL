<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Sign Language</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body class="bg-bg">
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-main shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ url('storage/images/Group_3578.svg') }}" alt="Asdasd">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto gap-1 text-lite">
                        <!-- Authentication Links -->
                        <li>
                            <button type="button" class="btn btn-outline-lite border border-lite text-white border-3  fnt-5 px-5 fw-bold">Login</button>
                        </li>
                        <p class="fnt-4">•</p>
                        <li>
                            <button type="button" class="btn btn-outline-lite border border-lite text-white border-3  fnt-5 px-4 fw-bold">Sign-up</button>
                        </li>
                        <p class="fnt-4">•</p>
                        <li>
                            <button type="button" class="btn btn-outline-lite border border-lite text-white border-3  fnt-5 px-2 fw-bold">Eng</button>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <main class="">
            @yield('content')
        </main>
    </div>
</body>
</html>
