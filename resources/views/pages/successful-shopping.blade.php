@section('title') {{ __('Sikeres vásárlás') }} @endsection

@section('meta_data')
    <meta name="description" content="{{ __('Sikeres vásárlás') }}">
    <meta property="og:description" content="{{ __('Sikeres vásárlás') }}">
    <meta property="og:url" content="https://spalettaetterem.com/asztalfoglalas"> 
@endsection

<x-layout>
    <x-header background="reservation">
        {{ __('Sikeres vásárlás') }}
    </x-header>

    <x-section>
        <div class="">
            <div class="overflow-hidden bg-white shadow">
                <div class="px-4 pb-5 sm:p-6">
                    <h3 class="pb-3 mb-5 text-3xl text-center uppercase border-b text-gold border-gold border-opacity-25">{{ __('Következő lépés') }}</h3>
                    <p class="mb-10 text-3xl">Köszönjük a vásárlását!<br> A megadott email cimre küldött levélben csatolva megtalálja az átutalásos számlát. <br> <strong>Fizetési  határidő: </strong> <span class="text-gold">{{ $ticket->payment_expired }}</span> <br> Ennek teljesítese után a regisztrált email címre(<span class="text-gold">{{ $ticket->email }}</span>) küldjük ki a jegyeket.</p>

                    <h3 class="pb-3 mb-5 text-3xl text-center uppercase border-b border-gold border-opacity-25 text-gold">{{ __('Rendelés adatai') }}</h3>

                    <div class="mt-5 text-3xl">{{ __('Esemény neve') }}: <span class="ml-5 text-3xl font-bold">{{ $ticket->event->title }}</span></div>
                    <div class="mt-5 text-3xl">{{ __('Rendelésazonosító') }}: <span class="ml-5 text-3xl font-bold">{{ $ticket->order_number }}</span></div>
                    <div class="mt-5 text-3xl">{{ __('Fizetési mód') }}: <span class="ml-5 text-3xl font-bold">{{ $ticket->payment->name }}</span></div>
                    <div class="mb-5 text-3xl">{{ __('Jegyek száma') }}: <span class="ml-5 text-3xl font-bold">{{ $ticket->quantity }}  db</span></div>
                    <div class="mb-5 text-3xl">{{ __('Összesen fizetendő') }}: <span class="ml-5 text-3xl font-bold">{{ $ticket->total }} Ft</span></div>
                    <div class="my-5 text-3xl">{{ __('Név') }}: <span class="ml-5 text-3xl font-bold">{{ $ticket->name }}</span></div>
                    <div class="my-5 text-3xl">{{ __('Telefonszám') }}: <span class="ml-5 text-3xl font-bold">{{ $ticket->phone_number }}</span></div>
                    <div class="my-5 text-3xl">{{ __('Email cím') }}: <span class="ml-5 text-3xl font-bold">{{ $ticket->email }}</span></div>
                    <div class="mb-5 text-3xl">{{ __('Szállítási cím') }}: <span class="ml-5 text-3xl font-bold">{{ $ticket->address }}</span></div>
                </div>
            </div>
        </div>
    </x-section>
</x-layout>
