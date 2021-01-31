@props([
    'background' => 'contact',
])

<div class="absolte top-0 bg-cover bg-center  h-96 lg:h-200 {{ $background }}-bg ">
    <div class="flex flex-col items-center justify-center h-96 lg:h-200 uppercase text-white">
        <h2 class="text-4xl lg:text-title font-semibold mb-4">{{ $slot }}</h2>
        <div class="hidden md:text-2xl md:flex md:flex-row space-y-4  md:space-x-4 md:space-y-0">
            <a href="/menu" class="pt-3.5 pb-2.5 px-10 border border-white hover:bg-white hover:text-black">Étlap</a>
            <a href="/asztalfoglalas" class="pt-3.5 pb-2.5 px-10 border border-white hover:bg-white hover:text-black">Asztalfoglalás</a>
            <a href="/esemenyek" class="pt-3.5 pb-2.5 px-10 border border-white hover:bg-white hover:text-black">Rendezvények</a>
        </div>
    </div>
</div>