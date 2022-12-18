<div>
    <div class="flex flex-col justify-between px-4 py-5 border-t border-gray-200 md:flex-row sm:p-0 md:mr-5">
        <dl class="sm:divide-y sm:divide-gray-200">
            @if ($this->isDinner)
                <div class="flex flex-row items-center py-4 sm:py-5 sm:px-6">
                    <select
                        wire:model="activePrice"
                        class="block w-full py-2 pr-10 mt-1 text-2xl border-gray-300 rounded-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500"
                    >
                        <option value="{{ $this->event->price }}">Vacsora menü nélkül</option>
                        <option value="{{ $this->event->dinner_price }}">Vacsora menüvel </option>
                    </select>
                </div>
            @endif
            <div class="flex flex-row items-center py-4 sm:py-5 sm:px-6">
                <dt class="text-3xl text-gray-500 font-lg">
                    <div class="flex mt-4 sm:mt-0 sm:pr-9">
                        <div>
                            {{-- <label for="location" class="block text-sm font-medium text-gray-700">Location</label>
                            --}}
                            <select id="location" wire:model="quantity"
                                class="block w-full py-2 pr-10 mt-1 text-2xl border-gray-300 rounded-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
                                @for ($i=1; $i <= 10; $i++) <option value="{{ $i }}">{{ $i }}</option> @endfor
                            </select>
                        </div>

                        <div class="absolute top-0 right-0">
                            <button type="button" class="inline-flex p-2 -m-2 text-gray-400 hover:text-gray-500">
                                <span class="sr-only">Remove</span>
                                <svg class="w-5 h-5" x-description="Heroicon name: solid/x"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                    aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                </dt>
                <dd class="mt-1 ml-5 text-2xl text-gray-900 sm:mt-0 sm:col-span-2">db</dd>
            </div>
        </dl>
        <div x-data="{price: @entangle('activePrice'),selectDinner: @entangle('selectDinner'), dinnerPrice: @entangle('dinnerPrice'), quantity: @entangle('quantity')}"
            class="flex flex-row items-center mt-3 md:mt-0">
            <label class="mr-5 text-2xl">Összesen: </label>
            <div class="text-2xl"><span class="font-bold" x-text="quantity * price"></span> <span>Ft</span></div>
        </div>
    </div>
</div>
