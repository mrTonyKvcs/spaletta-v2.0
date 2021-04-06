<div>
    <x-header background="about">{{ __('Összes rendelés') }}</x-header>

    <x-section>

        <div class="w-full">
            <div class="flex items-center justify-center mb-10">
                <input class="mr-5" type="date" wire:model="searchDate" />
                <x-button wire:click="resetSearchQuery()">ÖSSZES RENDELÉS</x-button>
            </div>

            <x-admin.collapse :data="$orders" :emptyText="'Nincs megjeleníthető rendelése!'"/>

            <div class="mt-10">
                {{ $orders->links() }}
            </div>
        </div>

    </x-section>
</div>
