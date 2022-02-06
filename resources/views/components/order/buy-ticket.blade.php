<div>
    <!-- This example requires Tailwind CSS v2.0+ -->
    <div class="flex flex=row">
        <div class="overflow-hidden bg-white shadow sm:rounded-lg">
            <div class="px-4 py-5 sm:px-6">
                <h3 class="text-3xl font-medium text-gray-900 leading-6">Jegyvásárlás</h3>
            </div>

            <x-order.ticket-calculator />

        </div>

        <div class="overflow-hidden bg-white shadow sm:rounded-lg">
            <div class="px-4 py-5 sm:px-6">
                <h3 class="text-3xl font-medium text-gray-900 leading-6">Szamlazasi adatok</h3>
            </div>

            <x-form.ticket-personal-data />
        </div>
    </div>
</div>
