<x-layout>
    <x-header background="about">Rólunk</x-header>
    <x-section>
        <div class="md:flex">
            <div class="md:w-1/2">
                <x-title text="Spaletta" title="Történetünk" price=""></x-title>
                <x-history-text></x-history-text> 
            </div>
            <div class="my-12 md:my-0 md:w-1/2 md:flex md:flex-col md:items-center md:pb-24">
                <img class="mb-8 border border-gold" src="../images/about-image.jpg" alt="">
                <img class="border border-gold" src="../images/about-image2.png" alt="">
            </div>
        </div>
        <x-opening></x-opening>
    </x-section>
    <x-map></x-map>
</x-layout>