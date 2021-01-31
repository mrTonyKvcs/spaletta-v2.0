@extends('layouts.app')

@section('content')
    <div class="absolte top-0 bg-cover bg-center  h-96 lg:h-200 gallery-bg">
        <div class="flex flex-col items-center justify-center h-96 lg:h-200 uppercase text-white">
            <h2 class="text-4xl lg:text-title font-semibold mb-4">Galéria</h2>
            <div class="hidden md:text-2xl md:flex md:flex-row space-y-4  md:space-x-4 md:space-y-0">
                <a href="/menu" class="pt-3.5 pb-2.5 px-10 border border-white hover:bg-white hover:text-black">Étlap</a>
                <a href="/asztalfoglalas" class="pt-3.5 pb-2.5 px-10 border border-white hover:bg-white hover:text-black">Asztalfoglalás</a>
                <a href="/esemenyek" class="pt-3.5 pb-2.5 px-10 border border-white hover:bg-white hover:text-black">Rendezvények</a>
            </div>
        </div>
    </div>
    <div class="py-32 px-6 lg:container lg:mx-auto">
        <select name="vendegek" id="" class=" md:hidden w-full mb-4 uppercase py-2 px-4 text-2xl gray58 border border-gray-1000">
            <option value="1">Spaletta</option>
            <option value="2">étterem</option>
            <option value="3">Sörház</option>
            <option value="4">Csapatunk</option>
            <option value="5">Rendezvények</option>
        </select>
        <nav class="hidden md:mb-10 md:flex md:items-center md:justify-center md:space-x-16 light-gray font-medium  uppercase text-2xl">
            <a href="" class="hover:text-gray58 pb-6 hover:border-b hover:border-gray-500">Spaletta</a>
            <a href="" class="hover:text-gray58 pb-6 hover:border-b hover:border-gray-500">étterem</a>
            <a href="" class="hover:text-gray58 pb-6 hover:border-b hover:border-gray-500">Sörház</a>
            <a href="" class="hover:text-gray58 pb-6 hover:border-b hover:border-gray-500">Csapatunk</a>
            <a href="" class="hover:text-gray58 pb-6 hover:border-b hover:border-gray-500">Rendezvények</a>
        </nav>
        <div class="">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                <div class="relative">
                    <img class="h-96 w-full bg-cover" src="../images/home-menu.png" alt="">
                    <img class="absolute bottom-0 right-0 w-10 m-6" src="../images/svg/camera.svg" alt="">
                </div>
                <div class="relative">
                    <img class="h-96 w-full bg-cover" src="../images/home-menu.png" alt="">
                    <img class="absolute bottom-0 right-0 w-10 m-6" src="../images/svg/camera.svg" alt="">
                </div>
                <div class="relative">
                    <img class="h-96 w-full bg-cover" src="../images/home-menu.png" alt="">
                    <img class="absolute bottom-0 right-0 w-10 m-6" src="../images/svg/camera.svg" alt="">
                </div>
            </div>
            <a href="" class="flex items-center justify-center"><h3 class="w-1/6 uppercase text-white text-2xl font-medium rounded-full mt-10 px-10 pt-3 pb-2.5 gray-bg lg:hover:bg-gray-900 text-center">További képek..</h3></a>
        </div>
    </div>
@endsection