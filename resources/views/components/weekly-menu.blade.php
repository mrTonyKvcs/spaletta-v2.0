<div class="lg:grid lg:grid-cols-2 lg:gap-24 text-gray48 w-full my-12 space-y-10 md:space-y-0">
    @foreach (config('spaletta.weekly-menu.menu') as $menu)
    <div class="flex flex-col items-center md:w-full">
        <h3 class="text-4xl uppercase font-sembold text-gray2e">{{ __($menu['name']) }}</h3>
        <div class="w-full divide-y divide-gray-300">
            @foreach ($menu['items'] as $item)
                <div class="w-full py-4 flex flex-col md:flex-row items-center justify-between text-2xl">
                    <div class="">
                        <p class="italic font-medium text-center md:text-left">{{ $item['name'] }}</p>
                    </div>
                    <div class="">
                        <p class="font-semibold">{{ $item['price'] }} Ft</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    @endforeach
</div>