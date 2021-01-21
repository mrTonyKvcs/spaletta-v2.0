@extends('layouts.app')

@section('content')
    <div class="w-auto relative bg-black">
        <div class="w-full flex flex-col justify-center items-center py-72 px-6  text-white">
            <h1 class="uppercase text-4xl mb-8 gold font-semibold">spaletta kecskemét</h1>
            <p class="uppercase text-6xl text-center mb-4">étterem és sörház</p>
            <p class="text-2xl mb-4">6000 Kecskemét, Jókai utca 15.</p>
            <a class="uppercase text-2xl mt-4 px-10 py-3 rounded-sm border-2 border-white" href="">kiszállításos étlap & itallap</a>
        </div>
    </div>
    @include('partials.sections.weekly-menu')
    <div class="home-service px-6 py-32">
        <div class=" space-x-4 lg:space-x-0  lg:container lg:mx-auto lg:grid lg:grid-cols-4 lg:gap-12">
            <a href="">
                <div class="flex items-center justify-center transition ease-in-out duration-700 lg:transform lg:hover:scale-105 border-yellow-300 border-2 ">
                    <img class=" filter  " src="../images/home-menu.png" alt="">
                    <h2 class="text-white absolute text-4xl font-semibold uppercase">étlap</h2>
                </div>
            </a>
            <a href="">
                <div class="flex items-center justify-center transition ease-in-out duration-700 lg:transform lg:hover:scale-105 border-yellow-300 border-2">
                    <img class=" filter" src="../images/drinks.png" alt="">
                    <h2 class="text-white absolute text-4xl font-semibold uppercase">itallap</h2>
                </div>
            </a>
            <a href="">
                <div class="flex items-center justify-center transition ease-in-out duration-700 lg:transform lg:hover:scale-105 border-yellow-300 border-2">
                    <img class=" filter" src="../images/home-reservations.png" alt="">
                    <h2 class="text-white absolute text-4xl font-semibold uppercase">asztalfoglalás</h2>
                </div>
            </a>
            <a href="">
                <div class="flex items-center justify-center transition ease-in-out duration-700 lg:transform lg:hover:scale-105 border-yellow-300 border-2">
                    <img class=" filter" src="../images/events.png" alt="">
                    <h2 class="text-white absolute text-4xl font-semibold uppercase">rendezvények</h2>
                </div>
            </a>
        </div>
    </div>
    @include('partials.sections.reservation')
    <div class="home-about bg-cover bg-center px-6 py-32">
        <div class="lg:container w-full lg:mx-auto lg:grid lg:grid-cols-2 lg:gap-12">
            <div class="flex justify-end">
                <img src="../images/chefs.jpg" class="border-yellow-300 border-2 " alt="">
            </div>
            <div class="bg-white bg-opacity-50 w-full py-8 px-6 mt-4 lg:ml-4 lg:mt-0 flex flex-col items-center">
                <p class="text-2xl font-medium gold font-libre italic">Rólunk</p>
                <h2 class="gray text-5xl font-semibold uppercase">Bemutatkozunk</h2>
                <p class="text-2xl gray font-medium pt-10">Fura hullámokat vet az élet. Soha nem gondoltam volna, hogy éttermet fogunk vezetni. Eddig az élet teljesen más területén dolgoztunk, dolgozunk és bár gyermekkorom nyarait régi vendéglátós család szülöttjeként hol fagylaltosfiúként, hol pultosként töltöttem-közben leendő feleségem palacsintát sütött egy lakókocsiban a vágyott Adidas cipőért- nem is álmodtunk efféle karrierről.</p>
                <a href=""><p class="gray-border uppercase px-10 pt-3 pb-2.5 text-2xl gray mt-8">tovább</p></a>
            </div>
        </div>
    </div>
    @include('partials.sections.opening')
@endsection
