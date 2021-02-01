<x-layout>
    <div class="w-auto relative bg-black">
        <div class="w-full flex flex-col justify-center items-center py-72 px-6  text-white">
            <h1 class="uppercase text-4xl mb-8 text-gold font-semibold">spaletta kecskemét</h1>
            <p class="uppercase text-6xl text-center mb-4">étterem és sörház</p>
            <p class="text-2xl mb-4">6000 Kecskemét, Jókai utca 15.</p>
            <a class="uppercase text-2xl mt-4 px-10 py-3 rounded-sm border-2 border-white" href="">kiszállításos étlap & itallap</a>
        </div>
    </div>
    <x-section>
        <x-title title="Heti Menü" text="2021.02.02 - 2021.02.05." price="1800 Ft"></x-title>
        <x-weekly-menu></x-weekly-menu>
        <x-title title="Hétvégi Menük" text="2021.02.06 - 2021.02.07." price="2600 Ft"></x-title>
        <x-weekly-menu></x-weekly-menu>
        <p>(Az árak nem tartalmazzák a csomagolás árát)</p>
        <x-button>étlap</x-button>
    </x-section>
    <x-section background="home-services">
        <div class=" space-x-4 lg:space-x-0 lg:grid lg:grid-cols-4 lg:gap-12">
            <x-card type="link" path="/images/home-menu.png" route="/menu">étlap</x-card>
            <x-card type="link" path="/images/drinks.png" route="/menu">itallap</x-card>
            <x-card type="link" path="/images/home-reservations.png" route="/menu">asztalfoglalás</x-card>
            <x-card type="link" path="/images/events.png" route="/menu">rendezvények</x-card>
        </div>
    </x-section>
    <x-section>
        <x-title text="Spaletta" title="Asztalfoglalás" price=""></x-title>
        <x-reservation></x-reservation>
        <x-button>Asztalfoglalás</x-button>
    </x-section>
    <x-section background="home-about">
        <div class="md:grid md:grid-cols-2">
            <div class="flex justify-end lg:mr-24">
                <img src="../images/chefs.jpg" class="border-yellow-300 border-2 " alt="">
            </div>
            <div class="bg-white bg-opacity-50 w-full py-8 px-6 mt-4 lg:mt-0 flex flex-col items-center">
                <p class="text-2xl font-medium gold font-libre italic">Rólunk</p>
                <h2 class="gray text-5xl font-semibold uppercase">Bemutatkozunk</h2>
                <p class="text-2xl gray font-medium pt-10">Fura hullámokat vet az élet. Soha nem gondoltam volna, hogy éttermet fogunk vezetni. Eddig az élet teljesen más területén dolgoztunk, dolgozunk és bár gyermekkorom nyarait régi vendéglátós család szülöttjeként hol fagylaltosfiúként, hol pultosként töltöttem-közben leendő feleségem palacsintát sütött egy lakókocsiban a vágyott Adidas cipőért- nem is álmodtunk efféle karrierről.</p>
                <a href="/rolunk"><p class="gray-border uppercase px-10 pt-3 pb-2.5 text-2xl gray mt-8">tovább</p></a>
            </div>
        </div>
    </x-section>
    <x-section class="shadow-lg">
        <x-opening></x-opening>
    </x-section>
</x-layout>