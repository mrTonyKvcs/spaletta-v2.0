@extends('layouts.app')

@section('title')
    {{ __('Galéria') }}
@endsection

@section('meta_data')
    <meta name="description"
        content="{{ __('A galéria betekintés nyújt a Spaletta Étterem világába. A étterem mellett ételekről,italakról,eseményekről,hangulatos teraszunkról és a sörházról is talál képeket.') }}">
    <meta property="og:description"
        content="{{ __('A galéria betekintés nyújt a Spaletta Étterem világába. A étterem mellett ételekről,italakról,eseményekről,hangulatos teraszunkról és a sörházról is talál képeket.') }}">
    <meta property="og:url" content="https://spalettaetterem.com/galeria">
@endsection

<x-layout>
    <x-header background="gallery">
        {{ __('Galéria') }}
    </x-header>
    <x-section>
        <div x-data="{ openTab: 1 }" class="p-6">

            <ul
                class="flex flex-wrap items-center justify-center text-2xl font-medium uppercase space-x-3 sm:flex md:mb-16 md:flex md:items-center md:justify-center md:space-x-16 light-gray">
                <li @click="openTab = 1" class="mr-1 -mb-px">
                    <a :class="{ 'tab-active': openTab === 1 }"
                        class="pb-1 hover:text-gray58 xl:border-b hover:border-gray-500" href="#">Spaletta</a>
                </li>
                <li @click="openTab = 2" class="mr-1">
                    <a :class="{ 'tab-active': openTab === 2 }"
                        class="pb-1 hover:text-gray58 xl:border-b hover:border-gray-500"
                        href="#">{{ __('Étterem') }}</a>
                </li>
                <li @click="openTab = 3" class="mr-1">
                    <a :class="{ 'tab-active': openTab === 3 }"
                        class="pb-1 hover:text-gray58 xl:border-b hover:border-gray-500"
                        href="#">{{ __('Sörház') }}</a>
                </li>
                {{-- <li @click="openTab = 4" class="mr-1">
                    <a :class="{ 'tab-active': openTab === 4 }"
                        class="pb-6 hover:text-gray58 sm:border-b hover:border-gray-500"
                        href="#">{{ __('Csapatunk') }}</a>
                </li> --}}
                <li @click="openTab = 5" class="mr-1">
                    <a :class="{ 'tab-active': openTab === 5 }"
                        class="pb-1 hover:text-gray58 xl:border-b hover:border-gray-500"
                        href="#">{{ __('Rendezvények') }}</a>
                </li>
            </ul>

            <div class="flex flex-col items-center">
                <div class="">
                    <div class="pt-4 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                        @foreach ($gallery as $item)
                            <div x-show="openTab === {{ $item['tab'] }}">
                                <div class="relative">
                                    <a href="/images/gallery/{{ $item['name'] }}.jpg" target="_blank">
                                        <img width="100" height="100" class="w-full bg-cover h-96"
                                            src="/images/gallery/{{ $item['name'] }}-tn.jpg" alt="">
                                    </a>
                                    <img class="absolute bottom-0 right-0 w-10 m-6" src="../images/svg/camera.svg"
                                        alt="">
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            {{-- <div class="flex flex-wrap">
                <div class="w-1/3 p-3">
                    <img src="https://via.placeholder.com/500x300" class="w-full cursor-pointer"
                        @click="showModal = true; currentImage = 'https://via.placeholder.com/500x300';">
                </div>
                <div class="w-1/3 p-3">
                    <img src="https://via.placeholder.com/500x300" class="w-full cursor-pointer"
                        @click="showModal = true; currentImage = 'https://via.placeholder.com/500x300';">
                </div>
                <div class="w-1/3 p-3">
                    <img src="https://via.placeholder.com/500x300" class="w-full cursor-pointer"
                        @click="showModal = true; currentImage = 'https://via.placeholder.com/500x300';">
                </div>
                <!-- Add more images here -->
            </div>

            <div class="modal fixed w-full h-full top-0 left-0 flex items-center justify-center hidden">
                <div class="modal-overlay absolute w-full h-full bg-gray-900 opacity-50"></div>

                <div
                    class="modal-container bg-white w-11/12 md:max-w-md mx-auto rounded shadow-lg z-50 overflow-y-auto">
                    <div class="modal-content py-4 text-left px-6">
                        <div class="flex justify-between items-center pb-3">
                            <p class="text-2xl font-bold">Modal ablak</p>
                            <button class="modal-close cursor-pointer z-50" @click="showModal = false;">
                                <svg class="fill-current text-black" xmlns="http://www.w3.org/2000/svg" width="18"
                                    height="18" viewBox="0 0 18 18">
                                    <path d="M1.5 1.5l15 15M16.5 1.5l-15 15"></path>
                                </svg>
                            </button>
                        </div>

                        <img :src="currentImage" class="w-full" />

                        <div class="flex justify-end pt-2">
                            <button class="modal-close px-4 bg-indigo-500 p-3 rounded-lg text-white hover:bg-indigo-400"
                                @click="showModal = false;">Bezárás</button>
                        </div>
                    </div>
                </div>
            </div> --}}

        </div>
    </x-section>
</x-layout>
