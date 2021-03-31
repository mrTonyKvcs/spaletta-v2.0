<x-section>
    <div class="w-full">
        @if(auth()->check())
            <div class="mb-10">
                <label for="about" class="block text-3xl font-medium text-gray-700 sm:mt-px sm:pt-2">
                    {{ __('Telefonszám') }}
                </label>
                <input type="tel" wire:model="phoneNumber" class="block w-full px-3 py-4 mt-1 text-2xl bg-gray-100 border-gray-300 focus:ring-gray-500 focus:border-gray-500 shadow-sm" required>

                @error('phoneNumber') <span class="error">{{ $message }}</span> @enderror
            </div>

            <div class="mb-10">
                <label for="location" class="block text-3xl font-medium text-gray-700 ">{{ __('Rendelés típusa') }}</label>
                <select wire:model="orderType" class="block w-full py-2 pl-3 pr-10 mt-1 text-3xl bg-gray-100 border-gray-300 focus:outline-none">
                    <option>{{ __('Válasszon rendelési típust') }}!</option>
                    @foreach($orderTypes as $type)
                        <option  value="{{ $type->id }}">
                        {{ $type->name }}
                        </option>
                    @endforeach
                </select>
                @error('orderType') <span class="error">{{ $message }}</span> @enderror
            </div>

            @if ($orderType = 'hazhozszallitas')
                <div x-data="{ open: @entangle('showNewAddressForm') }" class="mb-10">
                    <div class="flex flex-row justify-between">
                        <label for="location" class="block text-3xl font-medium text-gray-700 ">{{ __('Szállítási cím') }}</label>
                        <button x-show="!open" @click="open = true" class="text-2xl uppercase text-gold" type="button">{{ __('Új hozzáadása') }}</button>
                        <button x-show="open" @click="open = false" class="text-2xl text-red-500 uppercase" type="button">{{ __('Mégsem') }}</button>
                        {{-- <x-modal></x-modal> --}}
                    </div>
                    @include('./partials.modal')

                    <select wire:model="deliveryAddressId" class="block w-full py-2 pl-3 pr-10 mt-1 text-3xl bg-gray-100 border-gray-300 focus:outline-none">
                        <option>{{ __('Válasszon szállítási címet!') }}</option>
                        @forelse($deliveryAddresses as $address)
                            <option value="{{ $address['id'] }}" {{ $address->default ? 'selected' : null }}>
                        {{ $address->name }}
                            </option>
                        @empty
                            <option value="">{{ __('Nincs mentet szállítási cím') }}</option>
                        @endforelse
                    </select>
                    @error('deliveryAddressId') <span class="error">{{ $message }}</span> @enderror
                </div>
            @endif

            <div class="mb-10">
                <div class="flex flex-col">
                    <label for="about" class="block text-3xl font-medium text-gray-700 sm:mt-px sm:pt-2">
                        {{ __('Megjegyzés') }}
                    </label>
                    <div class="w-full mt-1">
                        <textarea wire:model="comment" rows="10" class="w-full border border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-2xl"></textarea>
                    </div>
                </div>
            </div>
        @endif

        <div class="flex flex-col">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                    <div class="overflow-hidden border-b border-gray-200 shadow">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-100">
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-3xl font-light tracking-wider text-left text-gray-500 uppercase">
                                        {{ __('Név') }}
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-3xl font-light text-center text-gray-500 uppercase">
                                        {{ __('Mennyiség') }}
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-3xl font-light tracking-wider text-center text-gray-500 uppercase">
                                        {{ __('Ár') }}
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-3xl font-light tracking-wider text-center text-gray-500 uppercase">
                                        {{ __('Hozzáadd') }}
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-3xl font-light tracking-wider text-center text-gray-500 uppercase">
                                        {{ __('Törlés') }}
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Odd row -->
                                @forelse($products as $product)
                                    <tr class="bg-white">
                                        <td class="px-6 py-4 text-3xl font-light text-gray-900 whitespace-nowrap">{{ $product['name'] }}</td>
                                        <td class="px-6 py-4 text-sm text-3xl font-light text-center text-gray-500 whitespace-nowrap">{{ $product['quantity'] }} db</td>
                                        <td class="px-6 py-4 text-sm text-3xl font-light text-center text-gray-500 whitespace-nowrap">{{ $product['price'] }} Ft</td>
                                        <td class="flex justify-center px-6 py-4 text-sm text-3xl font-light text-center text-gray-500 whitespace-nowrap">
                                            <button wire:click="addToCart({{ $product['id'] }})" class="block ml-6 mr-4 text-center">

                                                <x-icon icon="plus" fill="red" width=20 height=20 viewBox="20 20" strokeWidth=0 />
                                            </button>
                                        </td>
                                        <td class="px-6 py-4 text-sm text-3xl font-light font-medium text-center whitespace-nowrap">
                                            <button wire:click="removeFromCart({{ $product['id'] }})" class="px-3 py-1 text-red-600 rounded cursor-pointer bg-red hover:bg-red-dark">X</button>
                                        </td>
                                    </tr>
                                @empty
                                    <tr class="bg-white">
                                        <td class="px-6 py-4 text-3xl font-light text-gray-900 whitespace-nowrap">{{ __('Üres a kosara') }}.<a href="{{ route('pages.menu') }}" class="pl-2 text-gold">{{ __('Ide') }}</a> {{ __('kattintva már választhat is ételeink közül') }}.</td>
                                    @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="flex flex-col items-center justify-between mt-10 md:flex-row w-100">
            <button type="button" wire:click="checkout" class="flex items-center text-3xl font-medium text-red-600 hover:text-red-500">
                <x-icon icon="trash" width="18" height="18"></x-icon> {{ __('Kosár üritése') }}
            </button>

            <div>
                <label class="text-3xl font-medium text-center gray">{{ __('Teljes összeg') }}:</label>
                <span class="ml-10 text-4xl font-bold text-center gray">{{ $cartTotal }} Ft</span>
            </div>
        </div>

        <div class="flex justify-center mt-10 flex-end">
            @if(auth()->check())
            @empty(!$cart['products'])
                {{-- @if(!$orderType != '' && !$deliveryAddressId != '') --}}
                    <button wire:click="submitOrder" type="button" class="mt-10 uppercase text-white hover font-medium text-2xl lg:text-3xl px-10 pt-3 pb-2.5 gray-bg lg:hover:bg-gray48 "> {{ __('Rendelés küldése') }}</button>
                    {{-- <x-button type="gray" wire:click="submitOrder">Rendelés Küldése</x-button> --}}
                    {{-- @endif --}}
                @endempty
            @else
                <a href="{{ route('auth.signin') }}" class="mr-2 sm:mr-6">
                    <x-button type="gray">{{ __('Bejelentkezés') }}</x-button>
                </a>
                <a href="{{ route('auth.signin') }}" class="">
                    <x-button type="gray">{{ __('Regisztráció') }}</x-button>
                </a>
            @endif
        </div>
    </div>
</x-section>
