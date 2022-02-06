<div class="px-4 py-5 border-t border-gray-200 sm:p-0 md:mr-8">
    <form action="#" method="POST">
        <div class="grid grid-cols-6 gap-6">
            <div class="col-span-6">
                <label for="first-name" class="block text-2xl font-medium text-gray-700">{{ __('Név') }}</label>
                <input type="text" wire:model="invoiceData.name" name="name" id="first-name" autocomplete="given-name" class="block w-full py-2 mt-1 text-2xl border-gray-300 focus:ring-gray-100 focus:border-gray-500 shadow-sm">
                @error('invoiceData.name') <span class="error">{{ $message }}</span> @enderror
            </div>
            <div class="col-span-6 sm:col-span-3">
                <label for="first-name" class="block text-2xl font-medium text-gray-700">{{ __('Telefonszám') }}</label>
                <input type="tel" wire:model="invoiceData.phone_number" name="phone" id="first-name" autocomplete="given-name" class="block w-full py-2 mt-1 text-2xl border-gray-300 focus:ring-gray-100 focus:border-gray-500 shadow-sm">
                @error('invoiceData.phone_number') <span class="error">{{ $message }}</span> @enderror
            </div>

            <div class="col-span-6 sm:col-span-3">
                <label for="first-name" class="block text-2xl font-medium text-gray-700">{{ __('Email cím') }}</label>
                <input type="text" wire:model="invoiceData.email" name="email" id="email" autocomplete="given-name" class="block w-full py-2 mt-1 text-2xl border-gray-300 focus:ring-gray-500 focus:border-gray-500 shadow-sm">
                @error('invoiceData.email') <span class="error">{{ $message }}</span> @enderror
            </div>
            <div class="col-span-6 sm:col-span-2">
                <label for="first-name" class="block text-2xl font-medium text-gray-700">{{ __('Irányítószám') }}</label>
                <input type="text" wire:model="invoiceData.zip" name="zip" id="first-name" autocomplete="given-name" class="block w-full py-2 mt-1 text-2xl border-gray-300 focus:ring-gray-100 focus:border-gray-500 shadow-sm">
                @error('invoiceData.zip') <span class="error">{{ $message }}</span> @enderror
            </div>
            <div class="col-span-6 sm:col-span-4">
                <label for="first-name" class="block text-2xl font-medium text-gray-700">{{ __('Város') }}</label>
                <input type="text" wire:model="invoiceData.city" name="city" id="first-name" autocomplete="given-name" class="block w-full py-2 mt-1 text-2xl border-gray-300 focus:ring-gray-100 focus:border-gray-500 shadow-sm">
                @error('invoiceData.city') <span class="error">{{ $message }}</span> @enderror
            </div>
            <div class="col-span-6 sm:col-span-4">
                <label for="first-name" class="block text-2xl font-medium text-gray-700">{{ __('Közterület neve és jellege') }}</label>
                <input type="text" wire:model="invoiceData.street" name="street" id="first-name" autocomplete="given-name" class="block w-full py-2 mt-1 text-2xl border-gray-300 focus:ring-gray-100 focus:border-gray-500 shadow-sm">
                @error('invoiceData.street') <span class="error">{{ $message }}</span> @enderror
            </div>
            <div class="col-span-6 sm:col-span-2">
                <label for="first-name" class="block text-2xl font-medium text-gray-700">{{ __('Házszám') }}</label>
                <input type="text" wire:model="invoiceData.houseNumber" name="houseNumber" id="first-name" autocomplete="given-name" class="block w-full py-2 mt-1 text-2xl border-gray-300 focus:ring-gray-100 focus:border-gray-500 shadow-sm">
                @error('invoiceData.houseNumber') <span class="error">{{ $message }}</span> @enderror
            </div>
        </div>
    </form> 
</div>
