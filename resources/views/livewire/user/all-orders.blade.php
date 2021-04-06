<div>
    <x-header background="about">{{ __('Összes rendelés') }}</x-header>

    <x-section>

        <div class="w-full">
            <div class="flex items-center justify-center mb-10">
                <input class="bg-white gray outline-none text-center font-medium py-2.5 px-5 text-xl border-b border-gray-300 mr-5 mt-10" type="date" wire:model="searchDate" />
                <x-button wire:click="resetSearchQuery()">ÖSSZES RENDELÉS</x-button>
            </div>

            <x-admin.collapse :data="$orders" :emptyText="'Nincs megjeleníthető rendelése!'"/>

        </div>

    </x-section>
</div>
