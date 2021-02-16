<div>
    <h2 class="mb-12 text-5xl font-light uppercase text-gold">Regisztracio</h2>
    <form action="{{ route('register') }}" method="POST" class="mt-9 grid grid-cols-1 gap-y-6 sm:grid-cols-2 sm:gap-x-8">
        @csrf
        <x-form.group label="Nev" name="name"></x-form.group>
        <x-form.group label="Telefonszam" name="phone_number"></x-form.group>
        <x-form.group label="E-mail" name="email" type="email"></x-form.group>
        <x-form.group label="Jelszo" name="password" type="password"></x-form.group>
        <x-form.group label="Jelszo megegyszer" name="password" type="password"></x-form.group>
        <div class="text-right sm:col-span-2">
            <x-button type="submit">Regisztracio</x-button>
        </div>
    </form>
</div>
