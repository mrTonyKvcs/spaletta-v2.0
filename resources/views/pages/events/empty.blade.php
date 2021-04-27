@extends('layouts.app')

@section('title') {{ __('Rendezvények') }} @endsection

@section('meta_data')
    <meta name="description" content="{{ __('A Spaletta Étteremben vacsora, színházi esteket és számtalan változatos rendezvényekkel készül a vendégei számára.') }}">
    <meta property="og:description" content="{{ __('A Spaletta Étteremben vacsora, színházi esteket és számtalan változatos rendezvényekkel készül a vendégei számára.') }}">
    <meta property="og:url" content="https://spalettaetterem.com/esemenyek"> 
@endsection

<x-layout>
    <div class="flex items-center justify-center h-screen bg-cover events-bg">
        <div class="w-full bg-black bg-center bg-cover md:w-1/2 bg-opacity-50">
            <h1 class="px-6 py-10 text-3xl italic tracking-wide text-center uppercase gold">{{ __('Jelenleg nincs Spaletta rendezvény') }}!</h1>
        </div>
    </div>
</x-layout>
