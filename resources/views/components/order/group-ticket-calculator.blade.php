<div>
    <div class="flex flex-col justify-between w-full px-4 py-5 border-t border-gray-200 md:flex-row sm:p-0 md:mr-5">
<div class="flex flex-col w-full py-4 mt-1 text-2xl sm:py-5 sm:px-6 md:flex-row md:justify-between">
            <form wire:submit.prevent="purchaseTickets" class="flex-col gap-5 ">
                @foreach ($this->ticketTypes as $typeIndex => $ticketType)
                <div class="flex flex-row">
                    <label class="mr-5 font-bold">{{ $ticketType->category->name }} (db): </label>
                    <input
                        class="text-center block border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-lg sm:leading-6 mb-5"
                        type="number" min="0" wire:model="ticketTypes.{{ $typeIndex }}.quantity">

                </div>
                    @empty(!$ticketType->comment)
                        <p class="text-gray-500 text-md">({{ $ticketType->comment }})</p>
                    @endif
                @endforeach
            </form>
            @error('quantity') <span class="error">{{ $message }}</span> @enderror
            <h2 class="font-bold">Összesen: {{ $this->total ?? 0 }} Ft</h2>
        </div>
    </div>
</div>