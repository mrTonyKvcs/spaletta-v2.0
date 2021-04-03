<x-layout>
    <x-header background="reservation">
        {{ __('Asztalfoglalás') }}
    </x-header>
    <x-section>
        <x-reservation></x-reservation>
        <x-button type="gray">{{ __('Asztalfoglalás') }}</x-button>
        <p class="my-28 text-2xl text-center dark-gray">{{ __('A fenti űrlapot kitöltve tudjuk fogadni asztalfoglalási igényét. Ha foglalással kapcsolatba kérdése merülne fel az alábbi elérhetőségeken tudja a velünk felvenni a kapcsolatot') }}.</p>
        <div class="md:hidden w-full">
            <x-contact></x-contact>
        </div>
        <x-opening></x-opening>
    </x-section>
    <x-map></x-map>
</x-layout>
