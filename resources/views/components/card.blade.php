@props([
    'type',
    'path',
    'alt',
    'title',
    'route'
])

@if ($type == 'link')
        <a href="{{ $route }}">
            <div class="flex items-center justify-center transition ease-in-out duration-700 lg:transform lg:hover:scale-105 border-yellow-300 border-2 ">
                <picture>
                    <source srcset="{{ $path }}.webp" type="image/webp"></source>
                    <img src="{{ $path }}.png" width="300" height="420" alt="{{ $alt }}" title="{{ $title }}">
                  </picture>
                {{-- <img class="filter" src="{{ $path }}" width="300" height="420" alt="{{ $alt }}" title="{{ $title }}"> --}}
                <h2 class="text-white absolute text-4xl font-semibold uppercase">{{ $slot }}</h2>
            </div>
        </a>
@else
    <div class="flex justify-end">
        <img src="../images/chefs.jpg" class="border-yellow-300 border-2 " alt="">
    </div>
    <div class="bg-white bg-opacity-50 w-full py-8 px-6 mt-4 lg:ml-4 lg:mt-0 flex flex-col items-center">
        <p class="text-2xl font-medium gold font-libre italic">Rólunk</p>
        <h2 class="gray text-5xl font-semibold uppercase">Bemutatkozunk</h2>
        <p class="text-2xl gray font-medium pt-10">Fura hullámokat vet az élet. Soha nem gondoltam volna, hogy éttermet fogunk vezetni. Eddig az élet teljesen más területén dolgoztunk, dolgozunk és bár gyermekkorom nyarait régi vendéglátós család szülöttjeként hol fagylaltosfiúként, hol pultosként töltöttem-közben leendő feleségem palacsintát sütött egy lakókocsiban a vágyott Adidas cipőért- nem is álmodtunk efféle karrierről.</p>
        <a href="/rolunk"><p class="gray-border uppercase px-10 pt-3 pb-2.5 text-2xl gray mt-8">tovább</p></a>
    </div>
@endif