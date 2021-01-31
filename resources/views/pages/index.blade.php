<x-layout>
    <div class="w-auto relative bg-black">
        <div class="w-full flex flex-col justify-center items-center py-72 px-6  text-white">
            <h1 class="uppercase text-4xl mb-8 text-gold font-semibold">spaletta kecskemét</h1>
            <p class="uppercase text-6xl text-center mb-4">étterem és sörház</p>
            <p class="text-2xl mb-4">6000 Kecskemét, Jókai utca 15.</p>
            <a class="uppercase text-2xl mt-4 px-10 py-3 rounded-sm border-2 border-white" href="">kiszállításos étlap & itallap</a>
        </div>
    </div>
    @include('partials.sections.weekly-menu')
    <x-section background="home-services">
        <div class=" space-x-4 lg:space-x-0 lg:grid lg:grid-cols-4 lg:gap-12">
            <x-card type="link" path="/images/home-menu.png" route="/menu"></x-card>
            <x-card type="link" path="/images/home-menu.png" route="/menu"></x-card>
            <x-card type="link" path="/images/home-menu.png" route="/menu"></x-card>
            <x-card type="link" path="/images/home-menu.png" route="/menu"></x-card>
        </div>
    </x-section>
    <div class="lg:container lg:mx-auto px-6 py-32 flex flex-col items-center ">
        <p class="text-3xl gold font-libre italic pb-2">Spaletta</p>
        <h2 class="text-5xl gray font-semibold uppercase mb-8">asztalfoglalás</h2>
    @include('partials.sections.reservation')
    </div>
    <div class="home-about bg-cover bg-center px-6 py-32">
        <div class="lg:container w-full lg:mx-auto lg:grid lg:grid-cols-2 lg:gap-12">
            <div class="flex justify-end">
                <img src="../images/chefs.jpg" class="border-yellow-300 border-2 " alt="">
            </div>
            <div class="bg-white bg-opacity-50 w-full py-8 px-6 mt-4 lg:ml-4 lg:mt-0 flex flex-col items-center">
                <p class="text-2xl font-medium gold font-libre italic">Rólunk</p>
                <h2 class="gray text-5xl font-semibold uppercase">Bemutatkozunk</h2>
                <p class="text-2xl gray font-medium pt-10">Fura hullámokat vet az élet. Soha nem gondoltam volna, hogy éttermet fogunk vezetni. Eddig az élet teljesen más területén dolgoztunk, dolgozunk és bár gyermekkorom nyarait régi vendéglátós család szülöttjeként hol fagylaltosfiúként, hol pultosként töltöttem-közben leendő feleségem palacsintát sütött egy lakókocsiban a vágyott Adidas cipőért- nem is álmodtunk efféle karrierről.</p>
                <a href="/rolunk"><p class="gray-border uppercase px-10 pt-3 pb-2.5 text-2xl gray mt-8">tovább</p></a>
            </div>
        </div>
    </div>
    <div class="px-6 py-32 shadow-lg">
        @include('partials.sections.opening')
    </div>
</x-layout>