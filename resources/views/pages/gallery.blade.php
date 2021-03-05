<x-layout>
    <x-header background="gallery">
        Galéria
    </x-header>
    <x-section>
        <x-tabs x-data="{ active: 'first'}"></x-tabs>
        <div class="flex flex-col items-center">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                <div x-show="active === 'first" class="relative">
                    <img class="h-96 w-full bg-cover" src="../images/home-menu.png" alt="">
                    <img class="absolute bottom-0 right-0 w-10 m-6" src="../images/svg/camera.svg" alt="">
                </div>
                <div x-show="active === 'second" class="relative">
                    <img class="h-96 w-full bg-cover" src="../images/drinks.png" alt="">
                    <img class="absolute bottom-0 right-0 w-10 m-6" src="../images/svg/camera.svg" alt="">
                </div>
                <div x-show="active === 'third" class="relative">
                    <img class="h-96 w-full bg-cover" src="../images/events.png" alt="">
                    <img class="absolute bottom-0 right-0 w-10 m-6" src="../images/svg/camera.svg" alt="">
                </div>
            </div>
            <x-button>További képek</x-button>
        </div>
    </x-section>
</x-layout>
    