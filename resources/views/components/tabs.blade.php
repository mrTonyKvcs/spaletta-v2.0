<div  class="sm:hidden w-full">
    <label for="tabs" class="sr-only"></label>
    <select id="tabs" name="tabs" class="w-full mb-4 uppercase py-2 px-4 focus:outline-none text-2xl gray58 border border-gray-1000">
        <option @click="active = 'first'">Spaletta</option>
        <option @click="active = 'second'">étterem</option>
        <option @click="active = 'third'">Sörház</option>
        <option @click="active = 'fourth'">Csapatunk</option>
        <option @click="active = 'fifth'">Rendezvények</option>
    </select>
</div>
<div class="hidden sm:block">
    <nav class="md:mb-10 md:flex md:items-center md:justify-center md:space-x-16 light-gray font-medium  uppercase text-2xl" aria-label="Tabs">
    <a href="" class="hover:text-gray58 pb-6 border-b hover:border-gray-500">Spaletta</a>
    <a href="" class="hover:text-gray58 pb-6 border-b hover:border-gray-500">étterem</a>
    <a href="" class="hover:text-gray58 pb-6 border-b hover:border-gray-500">Sörház</a>
    <a href="" class="hover:text-gray58 pb-6 border-b hover:border-gray-500">Csapatunk</a>
    <a href="" class="hover:text-gray58 pb-6 border-b hover:border-gray-500">Rendezvények</a>
    </nav>
</div>
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
