@empty(!$menu)
    <div class="flex justify-center px-4 mx-auto my-10 max-w-7xl sm:px-6 lg:px-8">

        <div class="w-full max-w-xl -mx-auto">

            <div class="flex items-center justify-between p-5 bg-white">
                <span class="flex flex-col flex-grow" id="availability-label">
                    <span class="text-3xl font-medium text-gray-900">Mai menü kapcsoló</span>
                    <span class="text-3xl text-gray-500">{!! $menu->started_at . '</br>' . $menu->expired_at !!}</span>
                </span>
                <div wire:click="switch" class="relative flex items-center">
                    <div class="flex items-center h-5">
                        <input id="candidates" name="candidates" type="checkbox" class="text-indigo-600 border-gray-300 rounded w-7 h-7 focus:ring-indigo-500" {{ $active ? 'checked' : '' }}>
                    </div>
                    <div class="ml-3 text-2xl">
                        <label for="candidates" class="font-medium text-gray-700">Elfogyott</label>
                    </div>
                </div>
            </div>

        </div>

    </div>
@endempty
