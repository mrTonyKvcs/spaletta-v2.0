@extends('layouts.app')

@section('title') {{ __('Karácsonyi menü') }} @endsection

@section('meta_data')
    <meta name="description" content="Karácsonyi menü ajánlat a Spaletta Étteremben. Vigye otthonába a Spaletta ízeit az ünnepi asztalra. Várjuk megrendeléseiket december 22-ig.">
    <meta property="og:description" content="Karácsonyi menü ajánlat a Spaletta Étteremben. Vigye otthonába a Spaletta ízeit az ünnepi asztalra. Várjuk megrendeléseiket december 22-ig.">
    <meta property="og:url" content="https://spalettaetterem.com/karacsonyimenu"> 
@endsection

<x-layout>
    <x-header background="chrismas">
        Karácsonyi ajánlatok
    </x-header>
    <x-section>

        <div class="flex flex-col items-center px-6 lg:container lg:mx-auto">
            <h2 class="mb-12 text-4xl md:text-5xl font-light uppercase text-gold">Előétel (2 személyre)</h2>
        </div>
        <div class="mb-32 w-full">
            <div class="flex items-center justify-between w-full py-2 text-2xl border-b border-gray-200 md:w-11/12 text-gray48 hover:border-gray48 focu:outline-none transition duration-300 ease-in">
                <p class="font-semibold">Kacsamáj zsírjában, zöldségekkel</p>
                <div class="flex">
                    <p>5.500 Ft</p>
                    {{-- <button wire:click="addToCart({{ $item->id }})" class="block ml-6 mr-4 focus:outline-none">
                        <x-icon icon="plus" fill="red" width=20 height=20 viewBox="20 20" strokeWidth=0 />
                    </button> --}}
                </div>
            </div>
        </div>

        <div class="flex flex-col items-center px-6 lg:container lg:mx-auto">
            <h2 class="mb-12 text-4xl md:text-5xl font-light uppercase text-gold">Levesek</h2>
        </div>
        <div class="mb-32 w-full">
            <div class="flex items-center justify-between w-full py-2 text-2xl border-b border-gray-200 md:w-11/12 text-gray48 hover:border-gray48 focu:outline-none transition duration-300 ease-in">
                <p class="font-semibold">Pontyhalászlé</p>
                <div class="flex">
                    <p>3.500 Ft</p>
                    {{-- <button wire:click="addToCart({{ $item->id }})" class="block ml-6 mr-4 focus:outline-none">
                        <x-icon icon="plus" fill="red" width=20 height=20 viewBox="20 20" strokeWidth=0 />
                    </button> --}}
                </div>
            </div>
            <p class="text-2xl text-gray48 py-2">haltej, halikra, tészta</p>
        </div>
        <div class="mb-32 w-full">
            <div class="flex items-center justify-between w-full py-2 text-2xl border-b border-gray-200 md:w-11/12 text-gray48 hover:border-gray48 focu:outline-none transition duration-300 ease-in">
                <p class="font-semibold">Ünnepi borleves</p>
                <div class="flex">
                    <p>2.500 Ft</p>
                    {{-- <button wire:click="addToCart({{ $item->id }})" class="block ml-6 mr-4 focus:outline-none">
                        <x-icon icon="plus" fill="red" width=20 height=20 viewBox="20 20" strokeWidth=0 />
                    </button> --}}
                </div>
            </div>
        </div>

        <div class="flex flex-col items-center px-6 lg:container lg:mx-auto">
            <h2 class="mb-12 text-4xl md:text-5xl font-light uppercase text-gold">Tálak (2 személyre)</h2>
        </div>
        <div class="mb-32 w-full">
            <div class="flex items-center justify-between w-full py-2 text-2xl border-b border-gray-200 md:w-11/12 text-gray48 hover:border-gray48 focu:outline-none transition duration-300 ease-in">
                <p class="font-semibold">Karácsonyi tál</p>
                <div class="flex">
                    <p>11.000 Ft</p>
                    {{-- <button wire:click="addToCart({{ $item->id }})" class="block ml-6 mr-4 focus:outline-none">
                        <x-icon icon="plus" fill="red" width=20 height=20 viewBox="20 20" strokeWidth=0 />
                    </button> --}}
                </div>
            </div>
            <p class="text-2xl text-gray48 py-2">sült kacsacomb, szántódi ropogós, rántott sajt, spaletta cigánypecsenye, roston sült kacsamáj, jázmin rizs, burgonyapüré, párolt káposzta</p>
        </div>
        <div class="mb-32 w-full">
            <div class="flex items-center justify-between w-full py-2 text-2xl border-b border-gray-200 md:w-11/12 text-gray48 hover:border-gray48 focu:outline-none transition duration-300 ease-in">
                <p class="font-semibold">Halas tál</p>
                <div class="flex">
                    <p>12.000 Ft</p>
                    {{-- <button wire:click="addToCart({{ $item->id }})" class="block ml-6 mr-4 focus:outline-none">
                        <x-icon icon="plus" fill="red" width=20 height=20 viewBox="20 20" strokeWidth=0 />
                    </button> --}}
                </div>
            </div>
            <p class="text-2xl text-gray48 py-2">sókéregben sült fogas, ötmagvas harcsa, sült ponty, citrusos lazac, párolt zöldség, bulgur</p>
        </div>

        <div class="flex flex-col items-center px-6 lg:container lg:mx-auto">
            <h2 class="mb-12 text-4xl md:text-5xl font-light uppercase text-gold">Sütemények (2 személyre)</h2>
        </div>
        <div class="mb-32 w-full">
            <div class="flex items-center justify-between w-full py-2 text-2xl border-b border-gray-200 md:w-11/12 text-gray48 hover:border-gray48 focu:outline-none transition duration-300 ease-in">
                <p class="font-semibold">Sütis boksz</p>
                <div class="flex">
                    <p>4.500 Ft</p>
                    {{-- <button wire:click="addToCart({{ $item->id }})" class="block ml-6 mr-4 focus:outline-none">
                        <x-icon icon="plus" fill="red" width=20 height=20 viewBox="20 20" strokeWidth=0 />
                    </button> --}}
                </div>
            </div>
            <p class="text-2xl text-gray48 py-2">mákos/diós bejgli, hókifli, zserbó</p>
        </div>
        <div class="flex flex-col md:flex-row items-center justify-center px-6 lg:container lg:mx-auto">
            <h2 class="mb-12 text-3xl md:text-4xl font-medium uppercase text-gray48 text-center">Várjuk megrendeléseiket<br> december 22-ig!</h2>
            <x-contact/>
        </div>
        
    </x-section>
</x-layout>