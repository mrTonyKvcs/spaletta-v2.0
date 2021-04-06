<x-section>
    <div class="flex flex-col-reverse w-full md:grid md:grid-cols-3 md:gap-4">
        <div class="md:col-span-2">
            {{-- @empty(!$menu) --}}
                {{-- <div class="flex flex-col justify-center w-full mb-10"> --}}
                    {{-- <div class="flex flex-col items-center px-6 lg:container lg:mx-auto"> --}}
                    {{--     <h2 class="mb-12 text-5xl font-light text-center uppercase text-gold"> {{ $menu->type->name }} ajánlatunk</h2> --}}
                    {{-- </div> --}}
                    {{-- <div x-data={show:false} class="max-w-full"> --}}
                    {{--     <button @click="show=!show" class="w-full mb-5 focus:outline-none"> --}}
                    {{--         <div class="flex items-center justify-between max-w-full py-6 text-2xl border-b border-gray-200 md:w-11/12 text-gray48 hover:border-gray48"> --}}
                    {{--             <p>Menü kiválasztása</p> --}}
                    {{--             <div class="flex"> --}}
                    {{--                 <p>{{ $menu->price }} Ft</p> --}}
                    {{--                 <x-icon class="ml-6 mr-4" icon="plus" fill="red" width=20 height=20 viewBox="20 20" strokeWidth=0 /> --}}
                    {{--             </div> --}}
                    {{--         </div> --}}
                    {{--     </button> --}}
                    {{--     <div x-show="show" class="flex flex-col justify-center max-w-full py md:w-11/12"> --}}
                    {{--         @if ($menu->type->slug == 'heti-menu') --}}
                    {{--             <select wire:model="soup" class="block w-full py-2 pl-3 pr-10 mt-1 text-3xl bg-gray-100 border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500"> --}}
                    {{--                 <option>Válasszon levest</option> --}}
                    {{--                 @foreach($menu->items()->soup()->get() as $soup) --}}
                    {{--                     <option  value="{{ $soup->id }}"> --}}
                    {{--                         {{ $soup->name }} --}}
                    {{--                     </option> --}}
                    {{--                 @endforeach --}}
                    {{--             </select> --}}
                    {{--             <select wire:model="mainCourse" class="block w-full py-2 pl-3 pr-10 mt-5 text-3xl bg-gray-100 border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500"> --}}
                    {{--                 <option>Válasszon főételt</option> --}}
                    {{--                 @foreach($menu->items()->mainCourse()->get() as $mainCourse) --}}
                    {{--                     <option  value="{{ $mainCourse->id }}"> --}}
                    {{--                         {{ $mainCourse->name }} --}}
                    {{--                     </option> --}}
                    {{--                 @endforeach --}}
                    {{--             </select> --}}
                    {{--             <button wire:click="addMenuToCart()" type="submit" class="text-2xl mt-10 border border-transparent text-white bg-gray48 hover:bg-gray2e inline-flex font-medium items-center pt-3.5 px-8 xl:px-10 pb-2.5  uppercase shadow-sm focus:outline-none text-center justify-center"> --}}
                    {{--                 Menü hozzáadása --}}
                    {{--             </button> --}}
                    {{--         @else --}}
                    {{--         @endif --}}
                    {{--     </div> --}}
                    {{-- </div> --}}
                {{-- </div> --}}
            {{-- @endempty --}}

            @forelse($categories as $category)
                <x-product-category title="{{ $category->name }}"></x-product-category>

                @forelse($category->items as $item)
                    <div class="mb-32">
                        <div class="flex items-center justify-between w-full py-6 text-2xl border-b border-gray-200 md:w-11/12 text-gray48 hover:border-gray48 focu:outline-none">
                            <p>{{ $item->name }}</p>
                            <div class="flex">
                                <p>{{ $item->price }} Ft</p>
                                <button wire:click="addToCart({{ $item->id }})" class="block ml-6 mr-4 focus:outline-none">
                                    <x-icon icon="plus" fill="red" width=20 height=20 viewBox="20 20" strokeWidth=0 />
                                </button>
                            </div>
                        </div>
                        <p class="text-xl">{{ !empty($item->comment) ? $item->comment : '' }}</p>
                    </div>
                @empty
                    <p>{{ __('A kategoria jelenleg üres') }}!</p>
                @endforelse

            @empty
                <p>Nincs elérhető étel es ital!</p>
            @endforelse
        </div>
        <div class="mb-10">
            <h2 class="mb-12 text-5xl font-light text-center uppercase text-gold">{{ __('Kosár') }}</h2>

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
                <p class="px-4 py-10 text-3xl text-center bg-gray-100 border-b border-gray-200 sm:px-6">{{ __('Üres a kosara') }}!</p>
            @endforelse
            @if (!empty($products))
                <div class="flex items-center justify-between px-4 py-10 bg-gray-100 border-b border-gray-200 sm:px-6">
                    <div class="flex items-center text-2xl font-bold">{{ __('Teljes összeg(Áfával)') }}</div>
                    <div class="flex items-center text-3xl font-bold">{{ $cartTotal }} Ft</div>
                </div>
                <div class="flex justify-center">
                    <x-button>
                        <a href="{{ route('pages.cart') }}">{{ __('Rendelés küldése') }}</a>
                    </x-button>
                </div>
            @endif
        </div>
    </div>
</x-section>
