@extends('layouts.app')

@section('title')
    {{ __('Asztalfoglalás') }}
@endsection

@section('meta_data')
    <meta name="description"
        content="{{ __('Foglaljon asztalt online vagy telefonon a kecskeméti Spaletta Étterembe, várunk mindenkit sok szeretettel.') }}">
    <meta property="og:description"
        content="{{ __('Foglaljon asztalt online vagy telefonon a kecskeméti Spaletta Étterembe, várunk mindenkit sok szeretettel.') }}">
    <meta property="og:url" content="https://spalettaetterem.com/asztalfoglalas">
@endsection

<x-layout>
    <x-header background="reservation">
        {{ __('Asztalfoglalás') }}
    </x-header>
    <x-section>
        {{-- <div class="flex flex-col items-center justify-center w-full px-6 space-y-8"> --}}
        {{--    <h2 class="text-4xl italic font-medium gold font-libre">Kedves Vendégeink !</h2> --}}
        {{--    <p class="text-3xl italic font-medium text-center text-gray2e font-libre">2025. december 19-ig az --}}
        {{--        asztalfoglalásokat kizárólag telefonon tudjuk fogadni, megértésüket előre is köszönjük. <a --}}
        {{--            href="tel:+3676614744">+36 76 614 744</a></p> --}}
        {{-- </div> --}}
        <x-reservation></x-reservation>
        <p class="text-2xl text-center my-28 dark-gray">
            {{ __('A fenti űrlapot kitöltve tudjuk fogadni asztalfoglalási igényét. Ha foglalással kapcsolatba kérdése merülne fel az alábbi elérhetőségeken tudja a velünk felvenni a kapcsolatot') }}.
        </p>
        <div class="w-full md:hidden">
            <x-contact></x-contact>
        </div>
        <x-opening></x-opening>
    </x-section>
    <x-map></x-map>
</x-layout>
