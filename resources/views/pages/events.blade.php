@extends('layouts.app')

@section('title') Rendezvények @endsection

@section('meta_data')
    <meta name="description" content="A Spaletta Étteremben vacsora, színházi esteket és számtalan változatos rendezvényekkel készül a vendégei számára.">
    <meta property="og:description" content="A Spaletta Étteremben vacsora, színházi esteket és számtalan változatos rendezvényekkel készül a vendégei számára.">
    <meta property="og:url" content="https://spalettaetterem.com/esemenyek"> 
@endsection

<x-layout>
    <div class="events-bg h-screen bg-cover flex items-center justify-center">
        <div class="bg-black w-full bg-center bg-cover md:w-1/2 bg-opacity-50">
            <h2 class="text-3xl gold py-10 px-6 tracking-wide text-center  italic uppercase">{{ __('Jelenleg nincs Spaletta rendezvény') }}!</h2>
        </div>
    </div>
</x-layout>