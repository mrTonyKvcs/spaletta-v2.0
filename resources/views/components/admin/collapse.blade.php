@props([
    'data',
    'emptyText' => ''
])

<div class="overflow-hidden bg-white shadow md:mx-20 sm:rounded-md">
    <ul class="divide-y divide-gray-200">
        @forelse($data as $order)
            <li x-data="{show:false}">
                <a href="#" class="block hover:bg-gray-50">
                    <div class="flex items-center px-4 py-4 sm:px-6">
                        <div class="flex-1 min-w-0 sm:flex sm:items-center sm:justify-between">
                            <div @click="show=!show" class="truncate">
                                <div class="flex text-3xl">
                                    <p class="mr-5 font-medium truncate text-gold">{{ $order->user->name }}</p>
                                    <span class="inline-flex items-center px-3 py-0.5 rounded-full text-2xl font-medium bg-red-100 text-white-800">
                                        <svg class="-ml-1 mr-1.5 h-2 w-2 text-gold" fill="currentColor" viewBox="0 0 8 8">
                                            <circle cx="4" cy="4" r="3"></circle>
                                        </svg>
                                        {{ $order->type->name }}
                                    </span>
                                    <span class="inline-flex items-center px-3 py-0.5 ml-5 rounded-full text-2xl font-medium bg-gray2e text-white">
                                        <svg class="-ml-1 mr-1.5 h-2 w-2 text-gold" fill="currentColor" viewBox="0 0 8 8">
                                            <circle cx="4" cy="4" r="3"></circle>
                                        </svg>
                                        {{ $order->payment->name }}
                                    </span>
                                </div>
                                <div class="flex flex-col mt-2">
                                    <div class="flex items-center text-3xl text-gray-500">
                                        <p>{{ $order->user->phone_number }}</p>
                                    </div>
                                    <div class="flex items-center my-3 text-3xl text-gray-500">
                                        <p>{{ $order->address->name }}</p>
                                    </div>
                                    <div class="flex items-center text-3xl text-gray-500">
                                        <svg class="flex-shrink-0 mr-1.5 h-7 w-7 text-gray-400" x-description="Heroicon name: solid/calendar" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path>
                                        </svg>
                                        <p>
                                            <time datetime="2020-01-07">{{ $order->created_at }}</time>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="flex items-center text-3xl text-gray-500">
                                @if ($order->statuses->last()->slug != 'rendeles-kiszallitva')
                                    @if (!\Auth::user()->is_admin)
                                        <a href="{{ route('pages.order', $order->id) }}" class="inline-flex items-center px-6 py-3 mt-10 text-2xl font-bold text-white border border-gray-300 md:mt-0 bg-gold shadow-sm rounded-md hover:bg-gray-50 hover:text-black focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                            {{ __('Rendelési adatlap') }}
                                        </a>
                                    @else
                                        <button wire:click="updateOrderStatus({{ $order->id }}, {{ $order->statuses->last()->id }})" type="button" class="inline-flex items-center px-6 py-3 text-2xl font-bold text-white border border-gray-300 bg-gold shadow-sm rounded-md hover:bg-gray-50 hover:text-black focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                            {{ $order->statuses->last()->name }}
                                        </button>
                                    @endif
                                @else
                                    <p class="text-2xl font-bold text-gold">Lezárt rendelés</p>
                                @endif
                            </div>
                        </div>
                        <div  @click="show=!show" class="flex-shrink-0 ml-5">
                            <svg class="w-10 h-10 text-gray-400" x-description="Heroicon name: solid/chevron-right" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                    </div>
                </a>
                <div x-show="show" class="flex flex-col justify-center max-w-full m-10 py md:w-11/12" style="display: none;">
                    @foreach($order->items as $item)
                        <p class="mb-2 text-2xl"><span class="mr-5 text-gold">{{ $item->quantity }}db </span>{{ $item->product->name }}</p>
                    @endforeach
                    <hr class="my-3">
                    <p class="mb-2 text-2xl font-bold"><span class="mr-5 text-gold">Teljes összeg:
                        </span>{{ $order->total }} Ft</p>
                </div>
            </li>
        @empty

            <li>
                <p class="p-4 text-3xl">{{ $emptyText }}</p>
            </li>
        @endforelse
    </ul>
</div>
