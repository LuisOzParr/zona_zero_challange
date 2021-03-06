<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'service_control') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    @include('layouts.partials.navBar')
    @component('components.hero')
        @yield('title')
    @endcomponent
    @yield('before_content')
    <section class="section">
        <div class="container">
            @yield('content')
        </div>
    </section>

    <footer class="footer">
        <div class="content has-text-centered">
            <p>
                <strong>Zona Zero challenge</strong> by <a href="https://ozparrzource.com">Luis Ozuna</a>. This web App is a challenge to
                <a href="https://www.computrabajo.com.mx/empresas/acerca-de-zona-zero-sa-de-cv-11DDACA8CB78DC6F">Zona zero SA de CV</a>
            </p>
            <a class="button" href="https://github.com/LuisOzParr/zona_zero_challange">
                <span class="icon">
                  <i class="fab fa-github"></i>
                </span>
                <span>GitHub</span>
            </a>
        </div>
    </footer>
    @yield('js')
</body>
</html>
