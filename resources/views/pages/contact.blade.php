<x-layout>
    <x-header>
        Kapcsolat
    </x-header>
    <x-section>
        <div class="w-full flex flex-col lg:flex-row items-center lg:items-stretch lg:mb-32">
            <div class="md:w-2/3">
                <x-title text="Küldjön" title="Üzenetet" price=""></x-title>
                <p class="text-center text-gray48 text-xl">Az alábbi ürlap kitöltésevel közvetlen üzenetet tud küldeni.</p>
                <div class="py-12">
                    <div class="flex flex-col lg:flex-row">
                        <div class="mb-6 lg:mr-6 lg:w-1/2">
                            <p class="text-center text-2xl gray font-medium">Teljes név</p>
                            <input type="text" class="w-full gray outline-none text-center font-medium py-2.5 px-5 text-xl border-b border-gray-300">
                        </div>
                        <div class="mb-6 lg:ml-6 lg:w-1/2">
                            <p class="text-center text-2xl gray font-medium">E-mail</p>
                            <input type="email" class="w-full gray outline-none text-center font-medium py-2.5 px-5 text-xl border-b border-gray-300">
                        </div>
                    </div>
                    <div>
                        <div class="mb-6">
                            <p class="text-center text-2xl gray font-medium">Üzenet</p>
                            <textarea type="message" class="w-full gray outline-none text-center font-medium py-2.5 px-5 text-xl border-b border-gray-300"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full md:w-1/2 lg:w-1/3 lg:ml-48 mb-12 lg:mb-0 p-4 pl-12 lg:pl-28 text-lg xl:text-2xl space-y-4 flex flex-col  justify-center rounded-lg shadow-xl">
                <h2 class="text-xl lg:text-3xl uppercase text-gold">Elérhetőségek</h2>
                <div class="flex">
                    <img class="w-10 pr-2" src="../images/svg/mobile-black.svg" alt="">
                    <a href="" class="">+36 20 219 99 75</a>
                </div>
                <div class="flex">
                    <img class="w-10 pr-2" src="../images/svg/phone-black.svg" alt="">
                    <a href="">+36 76 614 744</a>
                </div>
                <div class="flex">
                    <img class="w-10 pr-2" src="../images/svg/email.svg" alt="">
                    <a href="">spaletta.gasztro@gmail.com</a>
                </div>
                <div class="flex">
                    <img class="w-10 pr-2" src="../images/svg/location.svg" alt="">
                    <a href="">6000 Kecskemét, Jókai utca 15.</a>
                </div>
            </div>
        </div>
        <x-opening></x-opening>
    </x-section>
    <x-map></x-map>
</x-layout>