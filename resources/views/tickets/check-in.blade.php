@section('title') {{ __('Asztalfoglalás') }} @endsection

@section('meta_data')
    <meta name="description" content="{{ __('Check In') }}">
    <meta property="og:description" content="{{ __('') }}">
    <meta property="og:url" content=""> 
@endsection

<x-layout>
    <x-header background="reservation">
        {{ __('Jegy ellenőrzése') }}
    </x-header>

    <x-section>
        <div class="">
            <div class="overflow-hidden bg-white shadow">
                <div class="px-4 pb-5 sm:p-6">
                    @if(!empty($ticket) && isset($ticket->is_paid) && $ticket->is_paid)
                        <h3 class="pb-3 mb-5 text-3xl text-center uppercase border-b border-opacity-25 text-gold border-gold">Érvényes jegy</h3>

                        <p class="mb-10 text-3xl">{!!  $ticket->is_paid ? 'Érvényeítve: ' . '<span class="text-gray-300">' .$ticket->check_in . '</span>' : ''  !!}</p>

                        <h3 class="pb-3 mb-5 text-3xl text-center uppercase border-b border-opacity-25 border-gold text-gold">{{ __('Rendelés adatai') }}</h3>

                        <div class="mt-5 text-3xl">{{ __('Esemény neve') }}: <span class="ml-5 text-3xl font-bold">{{ $ticket->event->title }}</span></div>
                        <div class="mt-5 text-3xl">{{ __('Rendelésazonosító') }}: <span class="ml-5 text-3xl font-bold">{{ $ticket->order_number }}</span></div>
                        <div class="mt-5 text-3xl">{{ __('Fizetési mód') }}: <span class="ml-5 text-3xl font-bold">{{ $ticket->payment->name }}</span></div>
                        <div class="mb-5 text-3xl">{{ __('Jegyek') }}: 
                            @foreach($ticket->sold as $type)
                                <div class="ml-5 text-3xl font-bold">{{ $type->category->name }}: {{ $type->price . 'Ft/DB' }} {{ $type->quantity }}db</div>
                            @endforeach
                        </div>
                        <div class="mb-5 text-3xl">{{ __('Összesen fizetendő') }}: <span class="ml-5 text-3xl font-bold">{{ $ticket->total }} Ft</span></div>
                        <div class="my-5 text-3xl">{{ __('Név') }}: <span class="ml-5 text-3xl font-bold">{{ $ticket->name }}</span></div>
                        <div class="my-5 text-3xl">{{ __('Telefonszám') }}: <span class="ml-5 text-3xl font-bold">{{ $ticket->phone_number }}</span></div>
                        <div class="my-5 text-3xl">{{ __('Email cím') }}: <span class="ml-5 text-3xl font-bold">{{ $ticket->email }}</span></div>
                        <div class="mb-5 text-3xl">{{ __('Szállítási cím') }}: <span class="ml-5 text-3xl font-bold">{{ $ticket->address }}</span></div>
                    @else
                        <h3 class="pb-3 mb-5 text-3xl text-center uppercase border-b border-opacity-25 border-gold" style="color: red;">Érvénytelen jegy</h3>
                    @endif
                </div>
            </div>
        </div>
    </x-section>
</x-layout>
