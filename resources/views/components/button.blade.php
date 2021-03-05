@props([
    'type' => 'gray',
    'submit' => 'false',
    'colors' => [
        'gray' => 'mt-10 border border-transparent text-white bg-gray48 hover:bg-gray2e',
        'gray-transparent' => 'border border-gray48 text-gray48 bg-transparent hover:bg-gray48 hover:text-white',
        'transparent' => 'border border-white text-white bg-transparent hover:bg-white hover:text-gray48',
        'gold' => 'border border-white  text-white bg-transparent hover:border-gold hover:bg-gold hover:text-white',
    ]

])

<button @if ($submit) type="submit"  @endif {{ $attributes->merge(['class' => "{$colors[$type]} inline-flex font-medium items-center pt-3.5 px-8 xl:px-10 pb-2.5 text-2xl uppercase shadow-sm focus:outline-none"]) }}>
    {{ $slot }}
</button>
