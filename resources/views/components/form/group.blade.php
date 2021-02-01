@props([
    'label',
    'name',
    'type' => 'text',
    'required' => true
])

<div class="sm:col-span-2">
    <label class="text-2xl font-medium text-center gray">{{ $label }}</label>
    <input type="{{ $type }}" name="{{ $name }}" class="w-full gray outline-none text-center font-medium py-2.5 px-5 text-xl border-b border-gray-300" {{ $required ? 'required' : '' }}>
</div>
