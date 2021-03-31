<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
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
        @livewireScripts
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
        <style>
            setTimeout(function(){
                alert("Sup!");
            }, 2000);
        </style>
    </footer>
</body>
</html>
