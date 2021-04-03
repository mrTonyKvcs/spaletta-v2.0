<div x-show="open" class="px-5 py-5 mt-5 bg-gray-100">
    <form action="#" method="POST">
        <div class="my-10 grid grid-cols-6 gap-6">

            <div class="col-span-6">
                @error('street') <span class="error">{{ $message }}</span> @enderror
                @error('houseNumber') <span class="error">{{ $message }}</span> @enderror
            </div>

            <div class="col-span-6 sm:col-span-3 lg:col-span-1">
                <label for="city" class="block text-2xl font-medium text-gray-700">Irányítószám*</label>
                <input type="number" wire:model="zipCode" class="block w-full px-3 py-4 mt-1 border-gray-300 focus:ring-gray-500 focus:border-gray-500 shadow-sm sm:text-2xl rounded-md" readonly required>
            </div>

            <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                <label for="state" class="block text-2xl font-medium text-gray-700">Város*</label>
                <input type="text" wire:model="city" class="block w-full px-3 py-4 mt-1 border-gray-300 focus:ring-gray-500 focus:border-gray-500 shadow-sm sm:text-2xl rounded-md" readonly required>
            </div>

            <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                <label for="state" class="block text-2xl font-medium text-gray-700">Közterület neve*</label>
                <input type="text" wire:model="street" class="block w-full px-3 py-4 mt-1 border-gray-300 focus:ring-gray-500 focus:border-gray-500 shadow-sm sm:text-2xl rounded-md" required>
            </div>
            <div class="col-span-6 sm:col-span-3 lg:col-span-1">
                <label for="state" class="block text-2xl font-medium text-gray-700">Házszám*</label>
                <input type="text" wire:model="houseNumber" class="block w-full px-3 py-4 mt-1 border-gray-300 focus:ring-gray-500 focus:border-gray-500 shadow-sm sm:text-2xl rounded-md" required>
            </div>
            <div class="col-span-6 sm:col-span-3 lg:col-span-1">
                <label for="state" class="block text-2xl font-medium text-gray-700">Emelet</label>
                <input type="number" wire:model="floor" class="block w-full px-3 py-4 mt-1 border-gray-300 focus:ring-gray-500 focus:border-gray-500 shadow-sm sm:text-2xl rounded-md">
            </div>
            <div class="col-span-6 sm:col-span-3 lg:col-span-1">
                <label for="state" class="block text-2xl font-medium text-gray-700">Ajtó</label>
                <input type="number" wire:model="door" class="block w-full px-3 py-4 mt-1 border-gray-300 focus:ring-gray-500 focus:border-gray-500 shadow-sm sm:text-2xl rounded-md">
            </div>
            <div class="col-span-6 sm:col-span-3 lg:col-span-4">
                <label for="state" class="block text-2xl font-medium text-gray-700">Csengő</label>
                <input type="text" wire:model="ring" class="block w-full px-3 py-4 mt-1 border-gray-300 focus:ring-gray-500 focus:border-gray-500 shadow-sm sm:text-2xl rounded-md">
            </div>
            <div class="col-span-6 sm:col-span-6 lg:col-span-6">
                <label for="state" class="block text-2xl font-medium text-gray-700">Megjegyzés</label>
                <textarea wire:model="addressComment" rows="3" class="block w-full mt-1 border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-3xl"></textarea>
            </div>
        </div>
        <div class="flex justify-center mt-10 flex-end">

            <button type="button" wire:click="createNewAddress();" class="mt-10 uppercase text-white font-medium text-2xl lg:text-2xl px-10 pt-3 pb-2.5 gray-bg lg:hover:bg-gray-900">Új szállítási cím mentése</button>

        </div> 
    </form>
</div>
