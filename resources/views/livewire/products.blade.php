<x-section>
    <div class="flex flex-col-reverse w-full md:grid md:grid-cols-3 md:gap-4">
        <div class="md:col-span-2">
            @forelse($categories as $category)
                <x-product-category title="{{ $category->name }}"></x-product-category>

                @forelse($category->items as $item)
                    <div class="mb-32">
                        <div class="flex items-center justify-between w-full py-6 text-2xl border-b border-gray-200 md:w-11/12 text-gray48 hover:border-gray48">
                            <p>{{ $item->name }}</p>
                            <div class="flex">
                                <p>{{ $item->price }} Ft</p>
                                <button wire:click="addToCart({{ $item->id }})" class="block ml-6 mr-4">
                                    <x-icon icon="plus" fill="red" width=20 height=20 viewBox="20 20" strokeWidth=0 />
                                </button>
                            </div>
                        </div>
                        <p class="text-xl">{{ !empty($item->comment) ? $item->comment : '' }}</p>
                    </div>
                @empty
                    <p>A kategoria jelenleg üres!</p>
                @endforelse

            @empty
                <p>Nincs elérhető étel es ital!</p>
            @endforelse
        </div>
        <div class="mb-10">
            <h2 class="mb-12 text-5xl font-light text-center uppercase text-gold">Kosár</h2>

            @forelse($products as $item)
                <div class="flex items-center justify-between px-4 py-10 bg-gray-100 border-b border-gray-200 sm:px-6">
                    <div class="flex items-center">
                        @if($item['quantity'] > 1)
                            <h3 class="mr-2 text-2xl font-medium text-gray-900 leading-6">{{ $item['quantity'] }} db</h3>
                        @endif
                        <h3 class="text-2xl font-medium text-gray-900 leading-6">{{ $item['name'] }}</h3>
                    </div>
                    <div class="flex items-center">
                        <button wire:click="addToCart({{ $item['id'] }})" class="block ml-6 mr-4">
                            <x-icon icon="plus" fill="red" width=20 height=20 viewBox="20 20" strokeWidth=0 />
                        </button>
                        <button wire:click="removeFromCart({{ $item['id'] }})" class="px-3 py-1 text-3xl text-red-600 rounded cursor-pointer bg-red hover:bg-red-dark">
                            <x-icon icon="trash" width="18" height="18"></x-icon>
                        </button>
                    </div>
                </div>
            @empty
                <p class="px-4 py-10 text-3xl text-center bg-gray-100 border-b border-gray-200 sm:px-6">Üres a kosara!</p>
            @endforelse
            @if (!empty($products))
                <div class="flex items-center justify-between px-4 py-10 bg-gray-100 border-b border-gray-200 sm:px-6">
                    <div class="flex items-center text-2xl font-bold">Teljes összeg <em>(Áfával)</em> </div>
                    <div class="flex items-center text-3xl font-bold">{{ $cartTotal }} Ft</div>
                </div>
                <div class="flex justify-center mb-10">
                    <a href="{{ route('pages.cart') }}" class="mt-10 uppercase text-white font-medium text-2xl lg:text-3xl px-10 pt-3 pb-2.5 gray-bg lg:hover:bg-gray-900">Rendelés küldése</a>
                </div>

            @endif
        </div>
    </div>
</x-section>
