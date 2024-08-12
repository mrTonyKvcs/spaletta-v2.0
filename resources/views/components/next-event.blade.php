<div class="flex flex-col items-center justify-center h-screen bg-cover events-bg">
    <div class="w-full py-6 bg-black bg-opacity-50 bg-center bg-cover lg:py-12 md:w-1/2">
        <h2 class="text-2xl text-center uppercase lg:mb-4 text-gold lg:text-3xl">
            {{ __('Következő Spaletta Rendezvény') }}</h2>
        <h1 class="text-3xl font-semibold text-center text-white lg:mb-4 lg:text-4xl">{{ $nextEvent->title }}</h1>
        {{-- @dd($nextEvent->started_at->format('Y-m-d H:i:s')) --}}
        <div class="flex items-center justify-center my-8 text-white uppercase timer ">
            <h3 class="text-2xl font-semibold text-center text-white lg:mb-4 lg:text-3xl">{{ $nextEvent->started_at }}
            </h3>
            {{-- <div x-data="timer(new Date('{{ $nextEvent->started_at }}'))" x-init="init();" class="flex items-center justify-center my-8 text-white uppercase timer "> --}}
            {{-- <div x-data="timer(new Date().setDate(new Date().getDate() + 1))" x-init="init();" class="flex items-center justify-center my-8 text-white uppercase timer "> --}}
            {{-- <div class="flex flex-col items-center justify-center px-3 border-r border-white"> --}}
            {{--     <p x-text="'{{ $nextEvent->started_at->format('Y-m-d H:i:s') }}'"></p> --}}
            {{--     <p x-text="time().days" class="text-2xl font-semibold lg:text-3xl"></p> --}}
            {{--     <p class="text-base lg:text-lg">{{ __('Nap') }}</p> --}}
            {{-- </div> --}}
            {{-- <div class="px-3 text-center border-r border-white"> --}}
            {{--     <p x-text="time().hours" class="text-2xl font-semibold lg:text-3xl"></p> --}}
            {{--     <p class="text-base lg:text-lg">{{ __('Óra') }}</p> --}}
            {{-- </div> --}}
            {{-- <div class="px-3 text-center border-r border-white"> --}}
            {{--     <p x-text="time().minutes" class="text-2xl font-semibold lg:text-3xl"></p> --}}
            {{--     <p class="text-base lg:text-lg">{{ __('Perc') }}</p> --}}
            {{-- </div> --}}
            {{-- <div class="px-3 text-center"> --}}
            {{--     <p  x-text="time().seconds" class="text-2xl font-semibold lg:text-3xl"></p> --}}
            {{--     <p class="text-base lg:text-lg">{{ __('Másodperc') }}</p> --}}
            {{-- </div> --}}
        </div>
        <a href="{{ route('events.show', $nextEvent->id) }}" class="flex justify-center">
            <x-button type="transparent-sm">{{ __('Részletek') }}</x-button>
        </a>
    </div>
</div>
