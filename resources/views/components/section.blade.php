@props([
    'background'
])

<div class="{{ !empty($background) ? $background : '' }} px-6 py-32">
    <div class="lg:container lg:mx-auto">
        {{ $slot }}
    </div>
</div>