<div>
    <h2 class="px-4 mt-20 mb-10 text-3xl font-medium text-center text-gray-900 uppercase mx-aut max-w-8xl leading-6 sm:px-6 lg:px-8">Napi rendelések</h2>
    <x-admin.collapse :data="$orders" :emptyText="'Nincs aktív rendelés!'" />

    @if($finishedOrders->isNotEmpty())
        <h2 class="px-4 mt-20 mb-10 text-3xl font-medium text-center text-gray-900 uppercase mx-aut max-w-8xl leading-6 sm:px-6 lg:px-8">Kiszálított napi rendelések</h2>
        <x-admin.collapse :data="$finishedOrders" />
    @endif
</div>
