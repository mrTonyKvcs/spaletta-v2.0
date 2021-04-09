@extends('layouts.app')

@section('title') {{ __('Bejelentkezés') }} @endsection

@section('meta_data')
    <meta name="description" content="Egyszerű regisztráció és egy gyors bejelenkezés után haza rendelheti a Spaletta Étterem ízeit. Várjuk megrendeléseiket.">
    <meta property="og:description" content="Egyszerű regisztráció és egy gyors bejelenkezés után haza rendelheti a Spaletta Étterem ízeit. Várjuk megrendeléseiket.">
    <meta property="og:url" content="https://spalettaetterem.com/bejelentkezes"> 
@endsection

<div>
    <h2 class="mb-12 text-5xl font-light text-center uppercase text-gold">{{ __('Bejelentkezés') }}</h2>

    <form action="{{ route('login') }}" method="POST" class="my-9 sm:mx-16 grid grid-cols-1 gap-y-6 sm:grid-cols-2 sm:gap-x-8">
        @csrf
        <x-form.group label="{{ __('E-mail') }}" name="email" type="email"></x-form.group>
        <x-form.group label="{{ __('Jelszó') }}" name="password" type="password"></x-form.group>
        <div class="text-center sm:col-span-2">
            <x-button>{{ __('Bejelentkezés') }}</x-button>
        </div>
    </form>
</div>
