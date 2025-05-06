@props([
    'background' => 'contact-bg.jpg',
    'showButtons' => true,
    'backgroundColor' => false,
])

<div class="top-0 bg-center bg-cover absolte h-96 lg:h-200 bg-zoom"
    style="{{ $backgroundColor ? 'background-color: #ffb606;' : 'background-image: url({{ $background ?>' }});' }}">
    <div class="flex flex-col items-center justify-center text-white uppercase h-96 lg:h-200">
        <h1 class="mb-4 text-4xl font-semibold text-center lg:text-title">{{ $slot }}</h1>
        @if ($showButtons)
            <div class="space-y-4 md:text-2xl md:flex md:flex-row md:space-x-4 md:space-y-0">
                <a href="{{ route('pages.menu') }}"><x-button type="transparent">{{ __('Étterem') }}</x-button></a>
                <a href="{{ route('pages.reservation') }}"><x-button class="hidden md:inline"
                        type="transparent">{{ __('Asztalfoglalás') }}</x-button></a>
                <a href="{{ route('events.index') }}"><x-button class="hidden md:inline"
                        type="transparent">{{ __('Rendezvények') }}</x-button></a>
            </div>
        @endif
    </div>
</div>
