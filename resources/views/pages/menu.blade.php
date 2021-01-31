@extends('layouts.app')

@section('content')
    <div class="absolte top-0 bg-cover bg-center  h-96 lg:h-200 menu-bg ">
        <div class="flex flex-col items-center justify-center h-96 lg:h-200 uppercase text-white">
            <h2 class="text-4xl lg:text-title font-semibold mb-4">Menü</h2>
        </div>
    </div>
    <div class="py-32 px-6 lg:container lg:mx-auto flex flex-col items-center">
        <h2 class="mb-12 text-5xl uppercase font-light text-gold">Fogások</h2>
        <div class="flex items-center justify-between w-full md:w-11/12 text-2xl text-gray48 py-6 border-b border-gray-200 hover:border-gray48">
            <p>étel</p>
            <p>ár</p>
        </div>
    </div>
@endsection