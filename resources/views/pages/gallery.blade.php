@extends('layouts.app')

@section('title') {{ __('Galéria') }} @endsection

@section('meta_data')
    <meta name="description" content="{{ __('A galéria betekintés nyújt a Spaletta Étterem világába. A étterem mellett ételekről,italakról,eseményekről,hangulatos teraszunkról és a sörházról is talál képeket.') }}">
    <meta property="og:description" content="{{ __('A galéria betekintés nyújt a Spaletta Étterem világába. A étterem mellett ételekről,italakról,eseményekről,hangulatos teraszunkról és a sörházról is talál képeket.') }}">
    <meta property="og:url" content="https://spalettaetterem.com/galeria"> 
@endsection

<x-layout>
    <x-header background="gallery">
        {{ __('Galéria') }}
    </x-header>
    <x-section>
      <div x-data="{ openTab: 1 }" class="p-6">

        <ul class="flex flex-wrap items-center justify-center text-2xl font-medium uppercase space-x-3 sm:flex md:mb-16 md:flex md:items-center md:justify-center md:space-x-16 light-gray">
          <li @click="openTab = 1" class="mr-1 -mb-px">
            <a :class="{'tab-active': openTab === 1}" class="pb-6 hover:text-gray58 sm:border-b hover:border-gray-500" href="#">Spaletta</a>
          </li>
          <li @click="openTab = 2" class="mr-1">
            <a :class="{'tab-active': openTab === 2}" class="pb-6 hover:text-gray58 sm:border-b hover:border-gray-500" href="#">{{ __('Étterem') }}</a>
          </li>
          <li @click="openTab = 3" class="mr-1">
            <a :class="{'tab-active': openTab === 3}" class="pb-6 hover:text-gray58 sm:border-b hover:border-gray-500" href="#">{{ __('Sörház') }}</a>
          </li>
          <li @click="openTab = 4" class="mr-1">
            <a :class="{'tab-active': openTab === 4}" class="pb-6 hover:text-gray58 sm:border-b hover:border-gray-500" href="#">{{ __('Csapatunk') }}</a>
          </li>
          <li @click="openTab = 5" class="mr-1">
            <a :class="{'tab-active': openTab === 5}" class="pb-6 hover:text-gray58 sm:border-b hover:border-gray-500" href="#">{{ __('Rendezvények') }}</a>
          </li>
        </ul>

        <div class="flex flex-col items-center">
          <div class="">
            <div class="pt-4 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
              @foreach($gallery as $item)
                <div x-show="openTab === {{ $item['tab'] }}">
                  <div class="relative">
                      <a href="/images/gallery/{{ $item['name'] }}.jpg" target="_blank">
                          <img width="100" height="100" class="w-full bg-cover h-96" src="/images/gallery/{{ $item['name'] }}-tn.jpg" alt="">
                      </a>
                    <img class="absolute bottom-0 right-0 w-10 m-6" src="../images/svg/camera.svg" alt="">
                  </div>
                </div>
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </x-section>
</x-layout>
    
