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
</head>
<body class="antialiased font-sans bg-gray-200"><div class="" style="">
    <x-sidebar></x-sidebar>
    <x-admin-topheader></x-admin-topheader>
    <main class="flex-1 relative pb-8 z-0 overflow-y-auto">
        <x-admin-header></x-admin-header>
        <div class="mt-8">
            {{ $slot }}
        </div>
    </main>
</body>
</html>