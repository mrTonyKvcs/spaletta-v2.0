<x-layout>
    <x-header background="gallery">
        Galéria
    </x-header>
    <x-section>
      <div x-data="{ openTab: 1 }" class="p-6">

        <ul class="hidden sm:flex md:mb-16 md:flex md:items-center md:justify-center md:space-x-16 light-gray font-medium  uppercase text-2xl">
          <li @click="openTab = 1" class="-mb-px mr-1">
            <a :class="{'tab-active': openTab === 1}" class="hover:text-gray58 pb-6 border-b hover:border-gray-500" href="#">Spaletta</a>
          </li>
          <li @click="openTab = 2" class="mr-1">
            <a :class="{'tab-active': openTab === 2}" class="hover:text-gray58 pb-6 border-b hover:border-gray-500" href="#">Étterem</a>
          </li>
          <li @click="openTab = 3" class="mr-1">
            <a :class="{'tab-active': openTab === 3}" class="hover:text-gray58 pb-6 border-b hover:border-gray-500" href="#">Sörház</a>
          </li>
          <li @click="openTab = 4" class="mr-1">
            <a :class="{'tab-active': openTab === 4}" class="hover:text-gray58 pb-6 border-b hover:border-gray-500" href="#">Csapatunk</a>
          </li>
          <li @click="openTab = 5" class="mr-1">
            <a :class="{'tab-active': openTab === 5}" class="hover:text-gray58 pb-6 border-b hover:border-gray-500" href="#">Rendezvények</a>
          </li>
        </ul>

        <div  class="sm:hidden w-full">
          <label for="tabs" class="sr-only"></label>
          <select name="tabs" class="w-full mb-4 uppercase py-2 px-4 focus:outline-none text-2xl gray58 border border-gray-1000">
              <option @click="openTab = 1"><a :class="{'tab-active': openTab === 1}" class="hover:text-gray58 pb-6 border-b hover:border-gray-500" href="#">Spaletta</a></option>
              <option @click="openTab = 2"><a :class="{'tab-active': openTab === 2}" class="hover:text-gray58 pb-6 border-b hover:border-gray-500" href="#">Étterem</a></option>
              <option @click="openTab = 3">Sörház</option>
              <option @click="openTab = 4">Csapatunk</option>
              <option @click="openTab = 5">Rendezvények</option>
          </select>
        </div>

        <div class="flex flex-col items-center">
          <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            <div class="pt-4">
              <div x-show="openTab === 1">
                <div class="relative">
                  <img class="h-96 w-full bg-cover" src="../images/home-menu.png" alt="">
                  <img class="absolute bottom-0 right-0 w-10 m-6" src="../images/svg/camera.svg" alt="">
                </div>
              </div>
              <div x-show="openTab === 2">
                <div class="relative">
                  <img class="h-96 w-full bg-cover" src="../images/drinks.png" alt="">
                  <img class="absolute bottom-0 right-0 w-10 m-6" src="../images/svg/camera.svg" alt="">
                </div>
              </div>
              <div x-show="openTab === 3">
                <div class="relative">
                  <img class="h-96 w-full bg-cover" src="../images/events.png" alt="">
                  <img class="absolute bottom-0 right-0 w-10 m-6" src="../images/svg/camera.svg" alt="">
                </div>
              </div>
              <div x-show="openTab === 4">
                <div class="relative">
                  <img class="h-96 w-full bg-cover" src="../images/home-menu.png" alt="">
                  <img class="absolute bottom-0 right-0 w-10 m-6" src="../images/svg/camera.svg" alt="">
                </div>
              </div>
              <div x-show="openTab === 5">
                <div class="relative">
                  <img class="h-96 w-full bg-cover" src="../images/drinks.png" alt="">
                  <img class="absolute bottom-0 right-0 w-10 m-6" src="../images/svg/camera.svg" alt="">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </x-section>
</x-layout>
    