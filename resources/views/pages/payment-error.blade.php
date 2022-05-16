@section('title') {{ __('Sikertelen vásárlás') }} @endsection

@section('meta_data')
    <meta name="description" content="{{ __('Sikeres vásárlás') }}">
    <meta property="og:description" content="{{ __('Sikeres vásárlás') }}">
    <meta property="og:url" content="https://spalettaetterem.com/asztalfoglalas"> 
@endsection

<x-layout>
    <x-header background="reservation">
        {{ __('Sikertelen vásárlás') }}
    </x-header>

    <x-section>
        <div class="">
            <div class="overflow-hidden bg-white shadow">
                <div class="px-4 pb-5 sm:p-6">
                    @if ($transaction->status === 'CANCEL')
                        <h3 class="pb-3 mb-5 text-3xl text-center uppercase text-gold">{{ __('Ön megszakította a fizetést') }}</h3>
                    @elseif ($transaction->status === 'TIMEOUT')
                        <h3 class="pb-3 mb-5 text-3xl text-center uppercase text-gold">{{ __('Ön túllépte a tranzakció elindításának lehetséges maximális idejét.') }}</h3>
                    @elseif ($transaction->status === 'FAIL')
                        <h3 class="pb-3 mb-5 text-3xl text-center uppercase border-b border-opacity-25 text-gold border-gold">{{ __('Sikertelen tranzakció') }}</h3>
                        <h3 class="pb-3 mb-5 text-3xl text-center uppercase border-b border-opacity-25 ">{{ __('SimplePay tranzakció azonosító: ') . $transaction->transaction_id }}</h3>
                        <h3 class="pb-3 mb-5 text-3xl text-center uppercase border-b border-opacity-25 ">Kérjük, ellenőrizze a tranzakció során megadott adatok helyességét.  Amennyiben minden adatot helyesen adott meg, a visszautasítás okának kivizsgálása érdekében kérjük, szíveskedjen kapcsolatba lépni kártyakibocsátó bankjával.</h3>
                    @endif
                </div>
            </div>
        </div>
    </x-section>
</x-layout>
