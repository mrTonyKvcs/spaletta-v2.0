<x-header background="about">Rendeles</x-header>

<x-section>
    <div class="flow-root">
        <ul class="flex justify-center -mb-8">
            @switch ($status->slug)
            @case('visszaigazolasra-var')
            <li>
                <div class="relative pb-8">
                    <span class="absolute top-4 left-4 -ml-px h-full w-0.5 bg-gray-200" aria-hidden="true"></span>
                    <div class="relative flex items-center space-x-3">
                        <div>
                            <svg class="w-15 h-15" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        </div>
                        <div class="min-w-0 flex-1 pt-1.5 flex justify-between space-x-4">
                            <div>
                                <p class="text-4xl text-gray-500">Visszaigazolásra vár.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            @break
            @default
            Default case..
        @endswitch
        </ul>
    </div>
</x-section>
