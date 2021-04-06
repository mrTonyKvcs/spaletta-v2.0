@props([
    'label',
    'name',
    'type' => 'text',
    'required' => true,
    'livewire' => false
])

<div class="sm:col-span-2">
    <label class="text-2xl font-medium text-center gray">{{ $label }}</label>
    <input type="{{ $type }}" @if($livewire) wire:model="{{ $name }}" @else name="{{ $name }}" @endif class="w-full gray outline-none text-center font-medium py-2.5 px-5 text-xl border-b border-gray-300" {{ $required ? 'required' : '' }}>

    @error($name) <span class="error">{{ $message }}</span> @enderror
</div>
