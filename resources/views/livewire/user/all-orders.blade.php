<div>
    <x-header background="about">{{ __('Összes rendelés') }}</x-header>

    <x-section>

        <div class="w-full">
            @if($orders->isNotEmpty())
            <div class="flex items-center justify-center mb-10">
                <input class="mr-5" type="date" wire:model="searchDate" />
                <x-button wire:click="resetSearchQuery()">ÖSSZES RENDELÉS</x-button>
            </div>
            @endif

            <x-admin.collapse :data="$orders" :emptyText="'Nincs megjeleníthető rendelése!'"/>

        </div>

    </x-section>
</div>
