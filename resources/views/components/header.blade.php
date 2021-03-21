@props([
    'background' => 'contact',
])

<div class="absolte top-0 bg-cover bg-center h-96 lg:h-200   {{ $background }}-bg">
    <div class="flex flex-col items-center justify-center text-white uppercase h-96 lg:h-200">
        <h2 class="mb-4 text-5xl font-semibold lg:text-title">{{ $slot }}</h2>
        <div class="md:text-2xl md:flex md:flex-row space-y-4 md:space-x-4 md:space-y-0">
            <x-button type="transparent">ételrendelés</x-button>
            <x-button class="hidden md:inline" type="transparent">asztalfoglalás</x-button>
            <x-button class="hidden md:inline" type="transparent">rendezvények</x-button>
        </div>
    </div>
</div>
