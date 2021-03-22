<x-layout>
    <div class="events-bg h-screen bg-cover flex flex-col items-center justify-center">
        <div class="bg-black py-6 lg:py-12 w-full bg-center bg-cover md:w-1/2 bg-opacity-50">
            <h2 class="lg:mb-4 text-gold text-center uppercase text-2xl lg:text-3xl">Következõ Spaletta Rendezvény</h2>
            <h1 class="lg:mb-4 text-white text-center text-3xl lg:text-4xl font-semibold">Zenés est a Spaletta Étteremben - Candymen Duo // Kecskemét</h1>
            <div class="my-8 uppercase text-white flex items-center justify-center ">
                <div class="border-r border-white px-3 flex flex-col items-center justify-center">
                    <p class="text-2xl lg:text-3xl font-semibold">00</p>
                    <p class="text-base lg:text-lg">Nap</p>
                </div>
                <div class="border-r border-white px-3 text-center">
                    <p class="text-2xl lg:text-3xl font-semibold">01</p>
                    <p class="text-base lg:text-lg">Óra</p>
                </div>
                <div class="border-r border-white px-3 text-center">
                    <p class="text-2xl lg:text-3xl font-semibold">02</p>
                    <p class="text-base lg:text-lg">Perc</p>
                </div>
                <div class="px-3 text-center">
                    <p class="text-2xl lg:text-3xl font-semibold">03</p>
                    <p class="text-base lg:text-lg">Másodperc</p>
                </div>
            </div>
            <a href="/rendezvenyek/rendezveny" class="flex justify-center"> 
                <x-button type="transparent-sm">Részletek</x-button>
            </a>
        </div>
    </div>
    <div>
        <x-section>
            <x-title text="Spaletta" title="Rendezvények" price=""></x-title>
            <div class="my-16 md:my-16 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-12 lg:gap-16">
                <div class="flex flex-col items-center justify-center shadow-lg rounded-md px-4">
                    <div class="flex flex-col items-center">
                        <img src="../images/rendezveny.png" alt="">
                    </div>
                    <div class="py-8 flex flex-col items-center space-y-8 top-80">
                        <p class="bg-gold text-white py-2 px-6 text-2xl font-semibold rounded-md">2021.03.21 15:00</p>
                        <h2 class="text-3xl font-medium text-center">Spaletta vacsora est Hajdú Steve-vel</h2>
                        <x-button type="gray-transparent-radius">
                            <a href="/rendezvenyek/rendezveny">Részletek</a>
                        </x-button>
                    </div>
                </div>
                <div class="flex flex-col items-center justify-center shadow-lg rounded-md px-4">
                    <div class="flex flex-col items-center">
                        <img src="../images/rendezveny.png" alt="">
                    </div>
                    <div class="py-8 flex flex-col items-center space-y-8 top-80">
                        <p class="bg-gold text-white py-2 px-6 text-2xl font-semibold rounded-md">2021.03.21 15:00</p>
                        <h2 class="text-3xl font-medium text-center">Spaletta vacsora est Hajdú Steve-vel</h2>
                        <x-button type="gray-transparent-radius">
                            <a href="/rendezvenyek/rendezveny">Részletek</a>
                        </x-button>
                    </div>
                </div>
                <div class="flex flex-col items-center justify-center shadow-lg rounded-md px-4">
                    <div class="flex flex-col items-center">
                        <img src="../images/rendezveny.png" alt="">
                    </div>
                    <div class="py-8 flex flex-col items-center space-y-8 top-80">
                        <p class="bg-gold text-white py-2 px-6 text-2xl font-semibold rounded-md">2021.03.21 15:00</p>
                        <h2 class="text-3xl font-medium text-center">Spaletta vacsora est Hajdú Steve-vel</h2>
                        <x-button type="gray-transparent-radius">
                            <a href="/rendezvenyek/rendezveny">Részletek</a>
                        </x-button>
                    </div>
                </div>
            </div>
        </x-section>
    </div>
    {{-- @if ($events->first() != null) 
    <div class="events-bg h-screen bg-cover flex items-center justify-center">
        <div class="bg-black w-full bg-center bg-cover md:w-1/2 bg-opacity-50">
            <h2 class="text-3xl gold py-10 px-6 tracking-wide text-center  italic uppercase">Jelenleg nincs Spaletta rendezvény!</h2>
        </div>
    </div>
    @foreach($events as $event) 
        hello
    @endforeach  --}}
</x-layout>