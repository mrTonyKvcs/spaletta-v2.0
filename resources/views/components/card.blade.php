@props([
    'type',
    'path',
    'alt',
    'title',
    'route'
])

@if ($type == 'link')
        <a href="{{ $route }}">
            <div class="flex items-center justify-center border-2 border-yellow-300 transition ease-in-out duration-700 lg:transform lg:hover:scale-105 ">
                <picture>
                    <source srcset="{{ $path }}.webp" type="image/webp"></source>
                    <img src="{{ $path }}.png" width="300" height="420" alt="{{ $alt }}" title="{{ $title }}">
                  </picture>
                {{-- <img class="filter" src="{{ $path }}" width="300" height="420" alt="{{ $alt }}" title="{{ $title }}"> --}}
                <h2 class="absolute text-4xl font-semibold text-white uppercase">{{ $slot }}</h2>
            </div>
        </a>
@else
    <div class="flex justify-end">
        <img src="../images/chefs.jpg" class="border-2 border-yellow-300 " alt="">
    </div>
    <div class="flex flex-col items-center w-full px-6 py-8 mt-4 bg-white bg-opacity-50 lg:ml-4 lg:mt-0">
        <p class="text-2xl italic font-medium gold font-libre">Rólunk</p>
        <h2 class="text-5xl font-semibold uppercase gray">Bemutatkozunk</h2>
        <p class="pt-10 text-2xl font-medium gray">Fura hullámokat vet az élet. Soha nem gondoltam volna, hogy éttermet fogunk vezetni. Eddig az élet teljesen más területén dolgoztunk, dolgozunk és bár gyermekkorom nyarait régi vendéglátós család szülöttjeként hol fagylaltosfiúként, hol pultosként töltöttem-közben leendő feleségem palacsintát sütött egy lakókocsiban a vágyott Adidas cipőért- nem is álmodtunk efféle karrierről.</p>
        <a href="/rolunk"><p class="gray-border uppercase px-10 pt-3 pb-2.5 text-2xl gray mt-8">tovább</p></a>
    </div>
@endif
