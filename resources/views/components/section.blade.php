@props(['background'])

<div class="{{ !empty($background) ? $background : '' }} px-6 py-32 w-full">
    <div class="lg:container lg:mx-auto flex flex-col items-center">
        {{ $slot }}
    </div>
</div>
