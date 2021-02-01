<x-section>
    @forelse($categories as $category)
        <x-product-category title="{{ $category->name }}"></x-product-category>

        @forelse($category->items as $item)
            <div>
                <div class="flex items-center justify-between w-full py-6 text-2xl border-b border-gray-200 md:w-11/12 text-gray48 hover:border-gray48">
                    <p>{{ $item->name }}</p>
                    <div class="flex">
                        <p>{{ $item->price }} Ft</p>
                        <button wire:click="addToCart({{ $item->id }})" class="block ml-6 mr-4">
                            <x-icon icon="plus" fill="red" width=20 height=20 viewBox="20 20" strokeWidth=0 />
                        </button>
                    </div>
                </div>
            </div>
        @empty
            <p>A kategoria jelenleg ures!</p>
        @endforelse

    @empty
        <p>Nincs elerheto etel es ital!</p>
    @endforelse
</x-section>
