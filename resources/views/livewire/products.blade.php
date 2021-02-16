<x-section>
    <div class="flex flex-col-reverse md:flex-row">
        <div class="flex-auto">
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
                    <p>A kategoria jelenleg ures!</p>
                @endforelse

            @empty
                <p>Nincs elerheto etel es ital!</p>
            @endforelse
        </div>
        <div class="flex-1">
            <h2 class="mb-12 text-5xl font-light text-center uppercase text-gold">Kosár</h2>
            <div class="px-4 py-10 bg-gray-100 border-b border-gray-200 sm:px-6">
                <h3 class="text-2xl font-medium text-gray-900 leading-6">
                    Job Postings
                </h3>
            </div>
        </div>
    </div>
</x-section>
