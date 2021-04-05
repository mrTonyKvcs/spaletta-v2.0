<div>
    <h2 class="mb-12 text-5xl font-light text-center uppercase text-gold">{{ __('Regisztráció') }}</h2>
    <form wire:submit.prevent="submit" class="mt-9 sm:mx-16 grid grid-cols-1 gap-y-6 sm:grid-cols-2 sm:gap-x-8">
        @csrf
        <x-form.group livewire="true" label="{{ __('Teljes név') }}" name="name"></x-form.group>
        <x-form.group livewire="true"  label="{{ __('Telefonszám') }}" name="phoneNumber"></x-form.group>
        <x-form.group livewire="true"  label="{{ __('E-mail') }}" name="email" type="email"></x-form.group>
        <x-form.group livewire="true"  label="{{ __('Jelszó') }}" name="password" type="password"></x-form.group>
        <x-form.group livewire="true"  label="{{ __('Jelszó megismétlése') }}" name="password_confirmation" type="password"></x-form.group>
        <div class="text-center sm:col-span-2">
            <x-button>{{ __('Regisztráció') }}</x-button>
        </div>
    </form>
</div>
