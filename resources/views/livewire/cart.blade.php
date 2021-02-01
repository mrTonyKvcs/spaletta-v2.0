<x-section>
    <div class="flex flex-col">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                <div class="overflow-hidden border-b border-gray-200 shadow sm:rounded-lg">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th scope="col" class="px-6 py-3 text-3xl font-light tracking-wider text-left text-center text-gray-500 uppercase">
                                    Nev
                                </th>
                                <th scope="col" class="px-6 py-3 text-3xl font-light text-center text-gray-500 uppercase">
                                    Mennyiseg
                                </th>
                                <th scope="col" class="px-6 py-3 text-3xl font-light tracking-wider text-left text-center text-gray-500 uppercase">
                                    Ar
                                </th>
                                <th scope="col" class="px-6 py-3 text-3xl font-light tracking-wider text-left text-center text-gray-500 uppercase">
                                    Torles
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
                                    <td class="px-6 py-4 text-sm text-3xl font-light font-medium text-center whitespace-nowrap">
                                        <button wire:click="removeFromCart({{ $product['id'] }})" class="px-3 py-1 text-red-600 rounded cursor-pointer bg-red hover:bg-red-dark">X</button>
                                    </td>
                                </tr>
                            @empty
                                <tr class="bg-white">
                                    <td class="px-6 py-4 text-3xl font-light text-gray-900 whitespace-nowrap">Ures a kosar</td>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="flex justify-center mt-10">
    @if(\Auth::check())
        @empty(!$cart['products'])
            <button type="button" wire:click="submitOrder" class="mt-10 uppercase text-white font-medium text-2xl lg:text-3xl px-10 pt-3 pb-2.5 gray-bg lg:hover:bg-gray-900">Rendeles kuldese</button>
        @endempty
    @else
        <a href="{{ route('auth.signin') }}" class="mt-10 uppercase text-white font-medium text-2xl lg:text-3xl px-10 pt-3 pb-2.5 gray-bg lg:hover:bg-gray-900">Bejelentkezes / Regisztracio</a>
    @endif
    </div>

</x-section>
