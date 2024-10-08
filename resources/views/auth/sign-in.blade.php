<x-layout>
    <x-header>{{ __('Bejelentkezés és Regisztració') }}</x-header>
    <x-section>
        <div class="w-full">
            <div class="grid sm:grid-cols-2 gap-4">
                <x-auth.login></x-auth.login>
                {{-- <x-auth.register></x-auth.register> --}}
                <livewire:auth.register />
            </div>
        </div>
    </x-section>
</x-layout>
