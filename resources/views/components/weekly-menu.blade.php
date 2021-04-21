<div class="lg:grid lg:grid-cols-2 lg:gap-24 text-gray48">
    @foreach (config('spaletta.weekly-menu.menu') as $menu)
    <div class="flex flex-col items-center md:w-160 mb-16">
        <h3 class="text-4xl uppercase pb-4 font-semibold text-gray2e">{{ __($menu['name']) }}</h3>
        <div class="w-full text-center divide-y divide-gray-300 font-semibold">
            @foreach ($menu['items'] as $item)
                <p class="py-4 text-2xl w-full">{{ $item }}</p>
            @endforeach
        </div>
    </div>
    @endforeach
</div>