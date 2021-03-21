<div>
    <h2 class="mb-12 text-5xl font-light text-center uppercase text-gold">Regisztráció</h2>
    <form action="{{ route('register') }}" method="POST" class="mt-9 sm:mx-16 grid grid-cols-1 gap-y-6 sm:grid-cols-2 sm:gap-x-8">
        @csrf
        <x-form.group label="Név" name="name"></x-form.group>
        <x-form.group label="Telefonszám" name="phone_number"></x-form.group>
        <x-form.group label="E-mail" name="email" type="email"></x-form.group>
        <x-form.group label="Jelszó" name="password" type="password"></x-form.group>
        <x-form.group label="Jelszó megismétlése" name="password_confirmation" type="password"></x-form.group>
        <div class="text-center sm:col-span-2">
            <x-button>Regisztráció</x-button>
        </div>
    </form>
</div>
