@extends('layouts.landingpage')

@section('title') Qr-Menu @endsection

@section('meta_data')
    <meta name="description"
        content="A Spaletta Étterem heti ajánlatát, étlapját és eseményeit megelözés céljából qr kóddal is megtekinthető">
    <meta property="og:description"
        content="A Spaletta Étterem heti ajánlatát, étlapját és eseményeit megelözés céljából qr kóddal is megtekinthető">
    <meta property="og:url" content="https://spalettaetterem.com/landingpage">

@endsection

@section('content')
    <div
        class="max-w-sm mx-auto px-8 pt-10 pb-12 sm:pt-32 sm:pb-44 md:pt-20 md:pb-24 flex flex-col items-center justify-between h-screen">
        <div class="">
        <img src=" /images/logo/logo-qr.png" class="h-32 w-auto" alt="">
        </div>
        <div class="text-center">
            <h1 class="text-3xl text-gray-800 font-semibold mb-6">Üdvözöljük!</h1>
            <p class="text-xl text-gray-400 tracking-wide">Kérem válaszon az alábbi lehetőségek közül:</p>
        </div>
        <div class="px-8 w-full space-y-10">
            <button tabindex="-1"
                class="focus:outline-none uppercase text-base tracking-widest w-full py-3 rounded-full font-semibold text-white bg-gray-800 ring ring-gray-400 ring-offset-2">
                <a href="/hetimenu">Heti menü</a>
            </button>
            <button tabindex="-1"
                class="focus:outline-none uppercase text-base tracking-widest w-full py-3 rounded-full font-semibold text-white bg-gray-800 ring ring-gray-400 ring-offset-2">
                <a href="/etlap">À La Carte</a>
            </button>
            <button tabindex="-1"
                class="focus:outline-none uppercase text-base tracking-widest w-full py-3 rounded-full font-semibold text-white bg-gray-800 ring ring-gray-400 ring-offset-2">
                <a href="/esemenyek">Rendezvények</a>
            </button>
        </div>
    </div>
@endsection
