<x-layout>
    <div class="flex flex-col items-center justify-center h-screen bg-cover events-bg">
        <div class="w-full py-6 bg-black bg-center bg-cover lg:py-12 md:w-1/2 bg-opacity-50">
            <h2 class="text-2xl text-center uppercase lg:mb-4 text-gold lg:text-3xl">{{ __('Következõ Spaletta Rendezvény') }}</h2>
            <h1 class="text-3xl font-semibold text-center text-white lg:mb-4 lg:text-4xl">{{ $nextEvent->title }}</h1>
            {{-- @dd($nextEvent->started_at->format('Y-m-d H:i:s')) --}}
            <div x-data="timer(new Date('{{ $nextEvent->started_at }}'))" x-init="init();" class="flex items-center justify-center my-8 text-white uppercase timer ">
            {{-- <div x-data="timer(new Date().setDate(new Date().getDate() + 1))" x-init="init();" class="flex items-center justify-center my-8 text-white uppercase timer "> --}}
                <div class="flex flex-col items-center justify-center px-3 border-r border-white">
                    <p x-text="'{{ $nextEvent->started_at->format('Y-m-d H:i:s') }}'"></p>
                    <p x-text="time().days" class="text-2xl font-semibold lg:text-3xl"></p>
                    <p class="text-base lg:text-lg">{{ __('Nap') }}</p>
                </div>
                <div class="px-3 text-center border-r border-white">
                    <p x-text="time().hours" class="text-2xl font-semibold lg:text-3xl"></p>
                    <p class="text-base lg:text-lg">{{ __('Óra') }}</p>
                </div>
                <div class="px-3 text-center border-r border-white">
                    <p x-text="time().minutes" class="text-2xl font-semibold lg:text-3xl"></p>
                    <p class="text-base lg:text-lg">{{ __('Perc') }}</p>
                </div>
                <div class="px-3 text-center">
                    <p  x-text="time().seconds" class="text-2xl font-semibold lg:text-3xl"></p>
                    <p class="text-base lg:text-lg">{{ __('Másodperc') }}</p>
                </div>
            </div>
            <a href="{{ route('events.show', $nextEvent->id) }}" class="flex justify-center"> 
                <x-button type="transparent-sm">{{ __('Részletek') }}</x-button>
            </a>
        </div>
    </div>
    <div>
        <x-section>
            <x-title text="Spaletta" title="{{ __('Rendezvények') }}" price=""></x-title>
            <div class="my-16 md:my-16 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-12 lg:gap-16">
                @foreach($events as $event)
                <div class="flex flex-col items-center justify-center px-4 shadow-lg rounded-md">
                    <div class="flex flex-col items-center">
                        <img src="../images/rendezveny.png" alt="">
                    </div>
                    <div class="flex flex-col items-center py-8 space-y-8 top-80">
                        <p class="px-6 py-2 text-2xl font-semibold text-white bg-gold rounded-md">{{ $event->started_at }}</p>
                        <h2 class="text-3xl font-medium text-center">{{ $event->title }}</h2>
                        <x-button type="gray-transparent-radius">
                            <a href="{{ route('events.show', $nextEvent->id) }}">{{ __('Részletek') }}</a>
                        </x-button>
                    </div>
                </div>
                @endforeach
            </div>
        </x-section>
    </div>
    {{-- @if ($events->first() != null) 
    <div class="flex items-center justify-center h-screen bg-cover events-bg">
        <div class="w-full bg-black bg-center bg-cover md:w-1/2 bg-opacity-50">
            <h2 class="px-6 py-10 text-3xl italic tracking-wide text-center uppercase gold">{{ __('Jelenleg nincs Spaletta rendezvény') }}!</h2>
        </div>
    </div>
    @foreach($events as $event) 
        hello
    @endforeach  --}}
</x-layout>
