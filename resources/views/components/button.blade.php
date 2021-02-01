@props([
    'type' => 'button',
]);

<button type="{{ $type }}" class="uppercase text-white font-medium text-2xl lg:text-3xl px-10 pt-3 pb-2.5 gray-bg lg:hover:bg-gray-900">{{ $slot }}</button>
