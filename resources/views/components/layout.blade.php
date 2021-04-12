<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>@hasSection('title') @yield('title') | Spaletta Kecskemét – Étterem és Sörház @else Spaletta Kecskemét – Étterem és Sörház @endif</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta property="og:title" content="Spaletta Kecskemét – Étterem és Sörház"> 
        @hasSection('meta_data')
            @yield('meta_data')
        @else
            <meta property="og:description" content="A kecskeméti Spaletta Étterem & Sörház kiváló alapanyagokból készült ételekkel, házi készítésű tésztákkal és prémium minőségű sörök széles választékával várja vendégeit.">
            <meta property="og:url" content="https://spalettaetterem.com/"> 
        @endif
        <meta property="og:type" content="website">
        <meta property="robots" content="index, follow">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        @livewireStyles

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
        <script charset="utf-8">
            function autoRefresh() {
                setTimeout("location.reload(true);", 60000);
            }
        </script>
        @livewireScripts
        @include('./partials.page-speed')
    </head>
<body>
    <header>
        <livewire:navbar></livewire>
        {{-- @include('partials.new-navbar') --}}
    </header>
    <main class="z-10 bg-white shadow-lg mb-160">
       {{ $slot }}
    </main>
    <footer class="light-gray-bg footer-parallax">
        @include('partials.footer')
    </footer>
</body>
</html>
