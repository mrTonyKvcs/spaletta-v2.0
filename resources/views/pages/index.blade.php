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
    {{-- <div class="px-6 mt-56 md:grid md:grid-cols-2">
        <div class="flex items-center justify-end">
            <img class="lg:w-2/3" src="/images/events/dc2022.jpg" alt="">
        </div>
        <div class="flex flex-col items-center justify-center mt-10 space-y-8 md:mt-0">
            <h2 class="text-4xl italic font-semibold text-center uppercase gold">DiningCity Országos Étterem Hét a Spalettában !</h2>
            <p class="text-3xl font-medium text-center text-gray2e font-libre">2022. október 11 - október 16.</p>
            <x-button type="gray-transparent"><a href=" https://www.etteremhet.hu/lang/hu/cities/countryside/restaurants/spaletta-etterem-es-sorhaz-kecskemet?search%5Bdate%5D=&search%5Bmeal_type%5D=&search%5Bno_persons%5D=2&search%5Bsearch_query%5D=&sort=name">Asztalfoglalás</a></x-button>
        </div>
    </div>  --}}
    {{-- <div class="flex flex-col items-center justify-center w-full px-6 mt-56 space-y-8">
        <h2 class="text-4xl italic font-medium gold font-libre">Kedves Vendégeink !</h2>
        <p class="text-3xl italic font-medium text-center text-gray2e font-libre">A nyári szünet után , augusztus 30-án (kedden)  a megszokott nyitvatartással várjuk Vendégeinket</p>
    </div> --}}
    <x-section>
        <div class="flex flex-col items-center mt-24">
            <x-title title="{{ __('Heti Menü') }}" text="{{ config('spaletta.weekly-menu.menu-date') }}" price="2800 Ft"></x-title>
            <x-weekly-menu></x-weekly-menu>
            <x-title title="{{ __('Hétvégi Menü') }}" text="{{ config('spaletta.weekly-menu.weekend-date') }}" price="3700 Ft"></x-title>
            <x-weekend-menu></x-weekend-menu>
            <p class="text-xl">{{ __('(Az ár nem tartalmazza a csomagolás díját)') }}</p>
            <x-button><a href="{{ route('pages.menu') }}">{{ __('Étlap') }}</a></x-button>
        </div>
    </x-section>
    <x-section background="home-services">
        <div class="gap-12 space-x-4 lg:space-x-0 md:grid md:grid-cols-2 lg:grid lg:grid-cols-4 lg:gap-12">
            <x-card type="link" path="/images/home-menu" route="{{ route('pages.menu') }}" alt="spaletta" title="spaletta">{{ __('Étlap') }}</x-card>
            <x-card type="link" path="/images/home-reservations" route="{{ route('pages.reservation') }}" alt="reservation" title="reservation"> {{ __('Asztalfoglalás') }}</x-card>
            <x-card type="link" path="/images/events" route="{{ route('events.index') }}" alt="events" title="events">{{ __('Rendezvények') }}</x-card>
            <x-card type="link" path="/images/index-contact" route="{{ route('pages.contact') }}" alt="drinks" title="drinks">{{ __('Kapcsolat') }}</x-card>
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
                    <img class="hidden w-full border-2 border-yellow-300 xl:block" src="/images/index.png" alt="Rolunk"
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
    <x-section id="newsletter" background="dark-gray-bg">
        <div class="flex flex-col items-center justify-center w-full lg:w-2/3 lg:grid">
            <p class="text-3xl italic font-medium text-center gold font-libre">{{ __('Spaletta') }}</p>
            <h2 class="text-5xl font-semibold text-center text-white uppercase">{{ __('Hírlevél feliratkozás') }}</h2>
            <p class="pt-10 text-2xl font-medium text-center text-white">{{ __('Iratkozzon fel hírlevelünkre és értesüljön első kézből legújabb eseményeinkről, ajánlatainkról! ') }}</p>
            <div class="w-full mb-10">
                @include('flash-message')
            </div>
            <form style="" method="POST" action="{{ route('pages.newsletter') }}" class="flex flex-col items-center justify-center w-full">
                @csrf
                <div class="flex justify-center w-full max-w-lg">
                    <input type="email" name="email" id="email" autocomplete="email" class="h-20 bg-white w-full gray my-10 outline-none text-center font-medium py-2.5 px-5 text-xl border-b border-gray-300" required>
                </div>
                <div class="relative flex newsletter-input" style="">
                    <div class="flex items-center h-5">
                      <input id="gdpr" name="gdpr" type="checkbox" class="w-8 h-8 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500" required>
                    </div>
                    <div class="flex items-center ml-3 text-lg">
                      <p class="text-xl text-white">Az <a href="#" class="gold">Adatkezelési Tájékoztatót</a> megértettem és hozzájárulok, hogy a Spaletta ÉTTEREM ÉS SÖRHÁZ az általam megadott e-mail címemre – hozzájárulásom visszavonásig – hírlevelet küldjön, az adataimat kezelje és kapcsolatba lépjen velem marketing célú megkeresésekkel.</p>
                    </div>
                  </div>
                <button type="submit" class="h-20 w-6/12 text-2xl text-center border border-white text-white bg-transparent hover:bg-white hover:text-gray-500 inline-flex font-medium items-center pt-3.5 px-8 xl:px-10 pb-2.5 transition duration-300 ease-in uppercase shadow-sm focus:outline-none mt-8">
                    Feliratkozás
                </button>
            </form>
            <p class="pt-10 mt-10 text-2xl font-medium text-center text-white"><a href="{{ route('pages.unsubscribe-page') }}">{{ __('Hírlevél leiratkozáshoz kattintson ide') }}</p>
        </div>
</x-section>
    <x-map></x-map>
</x-layout>
