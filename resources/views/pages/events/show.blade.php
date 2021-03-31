<x-layout>
    <x-header background="reservation">
        Rendezvény neve
    </x-header>
    <x-section>
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-20">
                <img src="/images/rendezveny.png" alt="">
                <div class="flex flex-col justify-center space-y-10">
                    <div class="flex items-center justify-center">
                        <div class="flex justify-center pr-6 border-gold border-r">
                            <img class="w-7" src="/images/svg/calender.svg" alt="">
                            <p class="text-2xl ml-4 text-gold">2021.03.21. 15:00</p>
                        </div>
                        <div class="flex justify-center pl-6">
                            <img class="w-7" src="/images/svg/calender.svg" alt="">
                            <p class="text-2xl ml-4 text-gold">2021.03.21. 15:00</p>
                        </div>
                    </div>
                    <p class="text-2xl">{{ __('Éttermek éjszakája rendezvénysorozat keretein belül folytatódik a Spaletta vacsoraest.Az aktuális esemény a megszokottól eltérően, egy stand up est lesz, Hajdu you do? címmel, Hajdú Steve humorista és színész előadásában') }}.</p>
                    <p class="text-2xl">{{ __('Belépő') }}: 6000 Ft</p>
                    <p class="text-2xl">{{ __('További információ') }}<a class="text-gold pl-2 text-2xl"  href="https://www.facebook.com/events/595767197688697">facebook oldalunkon.</a></p>
                    <div class="text-center">
                        <x-button type="gray-transparent">{{ __('Jegyvásárlás') }}</x-button>
                    </div>
                </div>
            </div>
    </x-section>
</x-layout>