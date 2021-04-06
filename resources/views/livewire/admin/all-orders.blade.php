<div>
    <h2 class="px-4 mx-auto mt-8 mb-20 text-3xl font-medium text-center text-gray-900 uppercase max-w-8xl leading-6 sm:px-6 lg:px-8">ÖSSZES RENDELÉS</h2>

    <div class="mx-20 mb-10">
        <input class="mx-20 mb-10" type="date" wire:model="searchDate" />
        <x-button wire:click="resetSearchQuery()">ÖSSZES RENDELÉS</x-button>
    </div>

    <x-admin.collapse :data="$orders" :emptyText="'Nincs aktív rendelés!'"/>

    <div class="mx-20 mt-10">
        {{ $orders->links() }}
    </div>
</div>
