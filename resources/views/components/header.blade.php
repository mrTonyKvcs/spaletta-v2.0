@props([
    'background' => 'contact',
])

<div class="absolte top-0 bg-cover bg-center h-96 lg:h-200   {{ $background }}-bg">
    <div class="flex flex-col items-center justify-center text-white uppercase h-96 lg:h-200">
        <h2 class="mb-4 text-5xl text-center font-semibold lg:text-title">{{ $slot }}</h2>
        <div class="md:text-2xl md:flex md:flex-row space-y-4 md:space-x-4 md:space-y-0">
            <x-button type="transparent">{{ __('Ételrendelés') }}</x-button>
            <x-button class="hidden md:inline" type="transparent">{{ __('Asztalfoglalás') }}</x-button>
            <x-button class="hidden md:inline" type="transparent">{{ __('Rendezvények') }}</x-button>
        </div>
    </div>
</div>
