@props([
    "text",
    "title",
    "price",
])

<div>
    <p class="text-3xl text-center font-medium gold font-libre italic">{{ $text }}</p>
    <h2 class="text-5xl text-center uppercase text-gray2e font-semibold">{{ $title }}</h2>
    <p class="text-4xl text-center uppercase mb-8 text-gray-500">{{ $price }}</p>
</div>  