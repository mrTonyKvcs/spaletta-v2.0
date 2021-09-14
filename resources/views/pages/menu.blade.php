@extends('layouts.app')

@section('title') {{ __('Étlap') }} @endsection

@section('meta_data')
    <meta name="description" content="{{ __('Fura hullámokat vet az élet. Soha nem gondoltam volna, hogy éttermet fogunk vezetni. Eddig az élet teljesen más területén dolgoztunk, dolgozunk és bár gyermekkorom nyarait régi vendéglátós család szülöttjeként hol fagylaltosfiúként, hol pultosként töltöttem-közben leendő feleségem palacsintát sütött...') }}">
    <meta property="og:description" content="{{ __('Fura hullámokat vet az élet. Soha nem gondoltam volna, hogy éttermet fogunk vezetni. Eddig az élet teljesen más területén dolgoztunk, dolgozunk és bár gyermekkorom nyarait régi vendéglátós család szülöttjeként hol fagylaltosfiúként, hol pultosként töltöttem-közben leendő feleségem palacsintát sütött...') }}">
    <meta property="og:url" content="https://spalettaetterem.com/etlap"> 
@endsection

<x-layout>
    <x-header background="menu">
        {{ __($title) }}
    </x-header>
    <x-section>
        <div class="flex flex-col-reverse w-full">
            <div class="">
                
                
                @forelse($categories as $category)
                    <x-product-category title="{{ $category->name }}"></x-product-category>

                    @forelse($category->items as $item)
                        <div class="mb-32">
                            <div class="flex items-center justify-between w-full py-6 text-2xl border-b border-gray-200 md:w-11/12 text-gray48 hover:border-gray48 focu:outline-none transition duration-300 ease-in">
                                <p>{{ $item->name }}</p>
                                <div class="flex">
                                    <p>{{ $item->price }} Ft</p>
                                    {{-- <button wire:click="addToCart({{ $item->id }})" class="block ml-6 mr-4 focus:outline-none">
                                        <x-icon icon="plus" fill="red" width=20 height=20 viewBox="20 20" strokeWidth=0 />
                                    </button> --}}
                                </div>
                            </div>
                            <p class="text-xl">{{ !empty($item->comment) ? $item->comment : '' }}</p>
                        </div>
                    @empty
                        <p>{{ __('A kategoria jelenleg üres') }}!</p>
                    @endforelse

                @empty
                    <p>Nincs elérhető étel es ital!</p>
                @endforelse
            </div>
        </div>
    </x-section>
</x-layout>
