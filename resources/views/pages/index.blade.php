@extends('layouts.app')

@section('title') {{ __('Kezdőlap') }} @endsection

@section('meta_data')
    <meta name="description" content="{{ __('A Spaletta Étterem hetente frissülő menü ajánlattal, online asztalfoglalási lehetőséggel várja vendégeit keddtől vasárnapig.') }}">
    <meta property="og:description" content="{{ __('A Spaletta Étterem hetente frissülő menü ajánlattal, online asztalfoglalási lehetőséggel várja vendégeit keddtől vasárnapig.') }}">
    <meta property="og:url" content="https://spalettaetterem.com/"> 
@endsection

<x-layout>
    <div class="relative w-auto">
        <div class="flex flex-col items-center justify-center w-full px-6 text-white bg-transparent py-72">
            <h1 class="z-20 mb-8 text-4xl font-semibold uppercase text-gold">{{ __('Spaletta kecskemét') }}</h1>
            <p class="z-20 mb-4 text-6xl text-center uppercase">{{ __('Étterem és sörház') }}</p>
            <p class="z-20 mb-4 text-2xl">6000 Kecskemét, Jókai utca 15.</p>
            <div class="flex flex-col items-center mb-4 text-3xl md:flex-row xl:mb-10">
                <div class="z-20 flex items-center mb-4 md:mb-0 md:mr-6">
                    <img class="w-10 pr-2" src="../images/svg/mobile.svg" alt="mobile-icon">
                    <a href="tel:+36 20 219 99 75" class="">+36 20 219 99 75</p>
                </div>
                <div class="z-20 flex items-center">
                    <img class="w-10 pr-2" src="../images/svg/phone.svg" alt="phone-icon">
                    <a href="tel:+36 76 614 744">+36 76 614 744</a>
                </div>
            </div>
            <x-button class="z-20" type="transparent"><a href="{{ route('pages.menu') }}">{{ __('Étlap') }}</a></x-button>
        </div>
        <video poster="../images/gallery-bg.jpg" autoplay playsinline muted loop>
            <source src="../videos/spaletta-video.mp4" type="video/webm">
            <source src="../videos/spaletta-video.mp4" type="video/mp4">
        </video>
    </div>
    {{-- <div class="md:grid md:grid-cols-2 mt-56 px-6">
        <div class="flex justify-end items-center">
            <img class="lg:w-2/3" src="/images/karacsony.jpg" alt="">
        </div>
        <div class="flex flex-col justify-center items-center space-y-8 mt-10 md:mt-0">
            <h2 class="text-4xl text-center uppercase text-gray2e font-semibold">Karácsonyi ajánlataink!</h2>
            <p class="text-3xl text-center font-medium gold font-libre italic">Várjuk megrendeléseiket<br> december 22-ig!</p>
            <x-button type="gray-transparent"><a href="/karacsonyimenu">Részletek</a></x-button>
        </div>
    </div>  --}}
    <x-section>
        <div class="flex flex-col items-center mt-24">
            <x-title title="{{ __('Heti Menü') }}" text="{{ config('spaletta.weekly-menu.menu-date') }}" price="2100 Ft"></x-title>
            <x-weekly-menu></x-weekly-menu>
            {{-- <x-title title="{{ __('Hétvégi Menü') }}" text="{{ config('spaletta.weekly-menu.weekend-date') }}" price="2600 Ft"></x-title>
            <x-weekend-menu></x-weekend-menu> --}}
            <p class="text-xl">{{ __('(Az ár nem tartalmazza a csomagolás díját)') }}</p>
            <x-button><a href="{{ route('pages.menu') }}">{{ __('Étlap') }}</a></x-button>
        </div>
    </x-section>
    <x-section background="home-services">
        <div class=" space-x-4 lg:space-x-0 md:grid md:grid-cols-2 gap-12 lg:grid lg:grid-cols-4 lg:gap-12">
            <x-card type="link" path="/images/home-menu" route="{{ route('pages.menu') }}" alt="spaletta" title="spaletta">{{ __('Étlap') }}</x-card>
            <x-card type="link" path="/images/drinks" route="{{ route('pages.menu') }}" alt="drinks" title="drinks">{{ __('Itallap') }}</x-card>
            <x-card type="link" path="/images/home-reservations" route="{{ route('pages.reservation') }}" alt="reservation" title="reservation"> {{ __('Asztalfoglalás') }}</x-card>
            <x-card type="link" path="/images/events" route="{{ route('events.index') }}" alt="events" title="events">{{ __('Rendezvények') }}</x-card>
        </div>
    </x-section>
    <x-section>
        <x-title text="Spaletta" title="{{ __('Asztalfoglalás') }}" price=""></x-title>
        <x-reservation></x-reservation>
    </x-section>
    <x-section background="home-about">
        <div class="md:grid md:grid-cols-2">
            <div class="flex justify-end sm:mr-6 lg:mr-24">
                <picture>
                    <source srcset="/images/index.webp" type="image/webp">
                    <img class="w-full hidden border-2 border-yellow-300 xl:block" src="/images/index.png" alt="Rolunk"
                        title="Rolunk" height="329" width="490">
                </picture>
            </div>
            <div class="flex flex-col items-center w-full px-6 py-8 mt-4 bg-white bg-opacity-75 sm:mt-0">
                <p class="text-3xl italic font-medium gold font-libre">{{ __('Rólunk') }}</p>
                <h2 class="text-5xl font-semibold text-center uppercase text-gray2e">{{ __('Bemutatkozunk') }}</h2>
                <p class="pt-10 text-2xl font-medium gray">{{ __('Fura hullámokat vet az élet. Soha nem gondoltam volna, hogy éttermet fogunk vezetni. Eddig az élet teljesen más területén dolgoztunk, dolgozunk és bár gyermekkorom nyarait régi vendéglátós család szülöttjeként hol fagylaltosfiúként, hol pultosként töltöttem-közben leendő feleségem palacsintát sütött egy lakókocsiban a vágyott Adidas cipőért- nem is álmodtunk efféle karrierről.') }}</p>
                <x-button class="mt-8" type="gray-transparent"><a href="/rolunk">{{ __('Tovább') }}</a></x-button>
            </div>
        </div>
    </x-section>
    <x-section class="shadow-lg">
        <x-opening></x-opening>
    </x-section>
    <x-map></x-map>
</x-layout>
