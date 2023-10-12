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
        <link rel="stylesheet" href="{{ mix('/css/app.css') }}">

        @livewireStyles

        <script async src="https://www.googletagmanager.com/gtag/js?id=G-DXE05BF6Y9"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-DXE05BF6Y9');
        </script>

        
</head>
<body >
    <header>
        <livewire:navbar />
        {{-- @include('partials.new-navbar') --}}
    </header>
    <main class="z-10 bg-white shadow-lg mb-160">
        {{-- <div class="timer" x-data="timer(new Date().setDate(new Date().getDate() + 1))" x-init="init();"> --}}
            {{-- <h1 x-text="time().days"></h1> --}}
            {{-- <h1 x-text="time().hours"></h1> --}}
            {{-- <h1 x-text="time().minutes"></h1> --}}
            {{-- <h1 x-text="time().seconds"></h1> --}}
          {{-- </div> --}}
       @yield('content')
    </main>
    <footer class="light-gray-bg footer-parallax">
        @include('partials.footer')
    </footer>

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>

</body>
</html>