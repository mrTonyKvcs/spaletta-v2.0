<div>
    <h2 class="mb-12 text-5xl font-light uppercase text-center text-gold">Bejelentkezés</h2>

    <x-jet-validation-errors class="mb-4" />

    @if (session('status'))
        <div class="mb-4 text-sm font-medium text-green-600">
            {{ session('status') }}
        </div>
    @endif

    <form action="{{ route('login') }}" method="POST" class="my-9 sm:mx-16 grid grid-cols-1 gap-y-6 sm:grid-cols-2 sm:gap-x-8">
        @csrf
        <x-form.group label="E-mail" name="email" type="email"></x-form.group>
        <x-form.group label="Jelszó" name="password" type="password"></x-form.group>
        <div class="text-center sm:col-span-2">
            <x-button>Belépés</x-button>
        </div>
    </form>
</div>
