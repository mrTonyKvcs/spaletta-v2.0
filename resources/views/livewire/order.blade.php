<x-header background="about">Rendeles</x-header>

<x-section>
    <div class="w-full">
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="text-3xl font-extrabold text-gray-900 sm:text-4xl">
                Köszönjük a rendelését!
            </h2>
            {{-- <p class="mt-3 text-3xl text-gray-500 sm:mt-4"> --}}
                {{-- Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellendus repellat laudantium. --}}
            {{-- </p> --}}
        </div>
        <div class="mt-20 grid grid-cols-1 gap-5 md:grid-cols-3">
            <div class="overflow-hidden bg-white shadow">
                <div class="px-4 py-5 sm:p-6">
                    <div class="flex items-center justify-center text-3xl font-medium truncate">
                        <span x-text="active->name"></span>
                    Visszaigazolására vár.
                    </div>
                </div>
            </div>

            <div class="overflow-hidden bg-white shadow">
                <div class="px-4 py-5 {{ $this->setTheColors('keszul-a-rendeles') }} sm:p-6">
                    <div class="flex items-center justify-center text-3xl font-medium truncate">
                    Készítjük a rendelését.
                    </div>
                </div>
            </div>

            <div class="overflow-hidden bg-white shadow">
                <div class="px-4 py-5 {{ $this->setTheColors('a-rendeles-uton-van') }} sm:p-6">
                    <div class="flex items-center justify-center text-3xl font-medium truncate">
                        {{ $order->type->text }}
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-20 grid grid-cols-1 gap-5 md:grid-cols-2">
            <div class="overflow-hidden bg-white shadow">
                <div class="px-4 pb-5 sm:p-6">
                    <h3 class="pb-3 mb-5 text-3xl text-center border-b border-gold border-opacity-25">Rendelés adatai</h3>

                    <div class="mt-5 text-3xl">Rendelésazonosító: <span class="ml-5 text-3xl font-bold">{{ $order->id }}</span></div>
                    <div class="my-5 text-3xl">Rendeléstípusa: <span class="ml-5 text-3xl font-bold">{{ $order->type->name }}</span></div>
                    <div class="my-5 text-3xl">Telefonszám: <span class="ml-5 text-3xl font-bold">{{ $order->user->phone_number }}</span></div>
                    <div class="mb-5 text-3xl">Szállítási cím: <span class="ml-5 text-3xl font-bold">{{ $order->address->name }}</span></div>
                    <div class="mb-5 text-3xl">Megjegyzes: <span class="ml-5 text-3xl font-bold">{{ $order->comment }}</span></div>
                </div>
            </div>
            <div class="overflow-hidden bg-white shadow">
                <div class="flex flex-col justify-between px-4 pb-5 text-center sm:p-6">
                    <div class="">
                        <h3 class="pb-3 mb-5 text-3xl border-b border-gold border-opacity-25">Ételek</h3>
                        @foreach($order->items as $item)
                            <div class="flex justify-between mb-5 text-3xl">{{ $item->quantity . 'db ' . $item->product->name }} <span class="ml-5 text-3xl font-bold">{{ $item->product->price }} Ft</span></div>
                        @endforeach
                    </div>
                    <div class="flex justify-between mb-5 text-3xl">Teljes összeg: <span class="ml-5 text-3xl font-bold">{{ $order->total }} Ft</span></div>
                </div>
            </div>
        </div>
    </div>

</x-section>
