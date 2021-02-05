<x-layout>
    <div class="w-auto relative">
        <div class="w-full flex flex-col justify-center items-center py-72 px-6  text-white">
            <h1 class="uppercase text-4xl mb-8 text-gold font-semibold">spaletta kecskemét</h1>
            <p class="uppercase text-6xl text-center mb-4">étterem és sörház</p>
            <p class="text-2xl mb-4">6000 Kecskemét, Jókai utca 15.</p>
            <div class="flex flex-col items-center  md:flex-row  text-3xl mb-4">
                <div class="flex items-center mb-4 md:mb-0 md:mr-6">
                    <img class="w-10 pr-2" src="../images/svg/mobile.svg" alt="">
                    <a href="" class="">+36 20 219 99 75</p>
                </div>
                <div class="flex items-center">
                    <img class="w-10 pr-2" src="../images/svg/phone.svg" alt="">
                    <a href="">+36 76 614 744</a>
                </div>
            </div>
            <x-button>ételrendelés</x-button>
        </div>
        <video poster="../images/chefs.jpg" autoplay playsinline muted loop>
            <source src="../videos/spaletta-video.mp4" type="video/webm">
            <source src="../videos/spaletta-video.mp4" type="video/mp4">
        </video>
    </div>
    <x-section>
        <div class="mt-32 flex flex-col items-center">
            <x-title title="Heti Menü" text="2021.02.02 - 2021.02.05." price="1800 Ft"></x-title>
            <x-weekly-menu></x-weekly-menu>
            <x-title title="Hétvégi Menük" text="2021.02.06 - 2021.02.07." price="2600 Ft"></x-title>
            <x-weekend-menu></x-weekend-menu>
            <p class="text-xl">(Az ár nem tartalmaza a csomagolás díját)</p>
            <x-button>étlap</x-button>
        </div>
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
            <div class="bg-white bg-opacity-75 w-full py-8 px-6 mt-4 lg:mt-0 flex flex-col items-center">
                <p class="text-2xl font-medium gold font-libre italic">Rólunk</p>
                <h2 class="text-gray2e text-5xl font-semibold uppercase">Bemutatkozunk</h2>
                <p class="text-2xl gray font-medium pt-10">Fura hullámokat vet az élet. Soha nem gondoltam volna, hogy éttermet fogunk vezetni. Eddig az élet teljesen más területén dolgoztunk, dolgozunk és bár gyermekkorom nyarait régi vendéglátós család szülöttjeként hol fagylaltosfiúként, hol pultosként töltöttem-közben leendő feleségem palacsintát sütött egy lakókocsiban a vágyott Adidas cipőért- nem is álmodtunk efféle karrierről.</p>
                <x-button>tovább</x-button>
            </div>
        </div>
    </x-section>
    <x-section class="shadow-lg">
        <x-opening></x-opening>
    </x-section>
    <x-map></x-map> 
</x-layout>