@props([
    'background' => 'contact',
])

<div class="absolte top-0 bg-cover bg-center h-96 lg:h-200 bg-zoom {{ $background }}-bg">
    <div class="flex flex-col items-center justify-center text-white uppercase h-96 lg:h-200">
        <h1 class="mb-4 text-5xl text-center font-semibold lg:text-title">{{ $slot }}</h1>
        <div class="md:text-2xl md:flex md:flex-row space-y-4 md:space-x-4 md:space-y-0">
            <a href="/menu"><x-button type="transparent">{{ __('Ételrendelés') }}</x-button></a> 
            <a href="/asztalfoglalas"><x-button class="hidden md:inline" type="transparent">{{ __('Asztalfoglalás') }}</x-button></a>
            <a href="/esemenyek"><x-button class="hidden md:inline" type="transparent">{{ __('Rendezvények') }}</x-button></a>
        </div>
    </div>
</div>