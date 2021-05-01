<div class="flex items-center justify-center text-gray48">
    @foreach (config('spaletta.weekly-menu.weekendmenu') as $menu)
    <div class="flex flex-col items-center mb-16">
        <h3 class="text-4xl uppercase pb-4 font-semibold text-gray2e">{{ __($menu['name']) }}</h3>
        <div class="w-full text-center divide-y divide-gray-300 font-semibold">
            @foreach ($menu['items'] as $item)
                <p class="py-4 text-2xl w-full">{{ $item }}</p>
            @endforeach
        </div>
    </div>
    @endforeach
</div>