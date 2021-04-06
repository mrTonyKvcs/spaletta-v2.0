<x-layout>
    <x-header background="reservation">
        {{ __('Asztalfoglalás') }}
    </x-header>
    <x-section>
        <x-reservation></x-reservation>
        <p class="text-2xl text-center my-28 dark-gray">{{ __('A fenti űrlapot kitöltve tudjuk fogadni asztalfoglalási igényét. Ha foglalással kapcsolatba kérdése merülne fel az alábbi elérhetőségeken tudja a velünk felvenni a kapcsolatot') }}.</p>
        <div class="w-full md:hidden">
            <x-contact></x-contact>
        </div>
        <x-opening></x-opening>
    </x-section>
    <x-map></x-map>
</x-layout>
