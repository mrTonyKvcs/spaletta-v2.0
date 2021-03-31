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
<body class="font-sans antialiased bg-gray-200"><div class="" style="">
    <x-sidebar></x-sidebar>
    <x-admin-topheader></x-admin-topheader>
    <main class="relative z-0 flex-1 pb-8 overflow-y-auto">
        {{-- <x-admin-header></x-admin-header> --}}
        <div class="mt-8 max-w-8xl">
            {{ $slot }}
        </div>
    </main>
</body>
</html>
