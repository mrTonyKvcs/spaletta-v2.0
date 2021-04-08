@extends('layouts.app')

@section('title') Rendelés @endsection

@section('meta_data')
    <meta name="description" content="A Spaletta Étterem a kialakult helyzet miatt kiszállításos étlappal, és itallappal jelentkezik. Várjuk megrendelésüket, házhoz visszük a Spaletta ízeket!">
    <meta property="og:description" content="A Spaletta Étterem a kialakult helyzet miatt kiszállításos étlappal, és itallappal jelentkezik. Várjuk megrendelésüket, házhoz visszük a Spaletta ízeket!">
    <meta property="og:url" content="https://spalettaetterem.com/rendeles"> 
@endsection

<x-layout>
    <x-header background="menu">
        {{ __('Rendelés') }}
    </x-header>
    <livewire:products></livewire>
</x-layout>
