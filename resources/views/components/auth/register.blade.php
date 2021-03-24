<div>
    <h2 class="mb-12 text-5xl font-light text-center uppercase text-gold">{{ __('Regisztráció') }}</h2>
    <form action="{{ route('register') }}" method="POST" class="mt-9 sm:mx-16 grid grid-cols-1 gap-y-6 sm:grid-cols-2 sm:gap-x-8">
        @csrf
        <x-form.group label="{{ __('Vezetéknév és keresztnév') }}" name="name"></x-form.group>
        <x-form.group label="{{ __('Telefonszám') }}" name="phone_number"></x-form.group>
        <x-form.group label="{{ __('E-mail') }}" name="email" type="email"></x-form.group>
        <x-form.group label="{{ __('Jelszó') }}" name="password" type="password"></x-form.group>
        <x-form.group label="{{ __('Jelszó megismétlése') }}" name="password_confirmation" type="password"></x-form.group>
        <div class="text-center sm:col-span-2">
            <x-button>{{ __('Regisztráció') }}</x-button>
        </div>
    </form>
</div>
