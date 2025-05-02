@extends('layouts.app')

@section('title')
    {{ __('Heti Menü') }}
@endsection

@section('meta_data')
    <meta name="description"
        content="{{ __('A Spaletta Étterem hetente frissülő menü ajánlattal várja vendégeit keddtől szombatigig.') }}">
    <meta property="og:description"
        content="{{ __('A Spaletta Étterem hetente frissülő menü ajánlattal várja vendégeit keddtől szombatigig.') }}">
    <meta property="og:url" content="https://spalettaetterem.com/hetimenu">
@endsection

<x-layout>
    <x-header background="menu">
        {{ __('Heti Menü') }}
    </x-header>
    <x-section>
        <div class="flex flex-col items-center mt-24">
            <x-title title="{{ __('Heti Menü') }}" text="{{ config('spaletta.weekly-menu.menu-date') }}"
                price="3100 Ft"></x-title>
            <x-weekly-menu></x-weekly-menu>
            <x-title title="{{ __('Hétvégi Menü') }}" text="{{ config('spaletta.weekly-menu.weekend-date') }}"
                price="4000 Ft"></x-title>
            <x-weekend-menu></x-weekend-menu>
            <p class="text-xl">{{ __('(Az ár nem tartalmazza a csomagolás díját)') }}</p>
            <x-button><a href="{{ route('pages.restaurant') }}">{{ __('Étlap') }}</a></x-button>
        </div>
    </x-section>
</x-layout>
