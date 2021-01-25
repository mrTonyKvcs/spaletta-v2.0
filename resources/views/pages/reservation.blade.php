@extends('layouts.app')

@section('content')
<div class="absolte top-0 bg-cover bg-center bg-img h-auto reservation-bg">
    <div class="flex flex-col items-center justify-center bg-img uppercase text-white">
        <h1 class="text-4xl lg:title font-semibold mb-4">asztalfoglalás</h1>
        <a class="text-2xl pt-3.5 pb-2.5 px-10 border border-white hover:bg-white hover:text-black" href="">étlap</a>
    </div>
</div>
<div class="lg:container lg:mx-auto px-6 py-32 flex flex-col items-center">
    @include('partials.sections.reservation')
    <p class="my-28 text-2xl text-center dark-gray">A fenti űrlapot kitöltve tudjuk fogadni asztalfoglalási igényét. Ha foglalással kapcsolatba kérdése merülne<br> fel az alábbi elérhetőségeken tudja a velünk felvenni a kapcsolatot.</p>
    @include('partials.sections.opening')
</div>
@endsection