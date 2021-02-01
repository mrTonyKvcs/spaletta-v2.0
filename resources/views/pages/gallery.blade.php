<x-layout>
    <x-header background="gallery">
        Galéria
    </x-header>
    <x-section>
        <x-tabs x-data="{ active: 'first'}"></x-tabs>
        <div class="">
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
            <a href="" class="flex items-center justify-center"><h3 class="w-1/6 uppercase text-white text-2xl font-medium rounded-full mt-10 px-10 pt-3 pb-2.5 gray-bg lg:hover:bg-gray-900 text-center">További képek..</h3></a>
        </div>
    </x-section>
</x-layout>
    