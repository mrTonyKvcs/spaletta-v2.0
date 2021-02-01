<div class="text-2xl font-semibold tracking-widest text-white uppercase bg-black">
    <div x-data="{ open: false }" class="absolute flex flex-col w-full lg:flex-row">
        <div class="z-50 flex items-center justify-between p-6">
            <a href="/"><img class="w-12 lg:w-24 lg:mr-6 lg:fixed" src="../images/logo/logo.png" alt=""></a>
            <button @click="open = !open" class="lg:hidden focus:outline-none">
                <img x-show="!open" class="w-14 " src="../images/svg/menu.svg" alt="">
                <img x-show="open" class="w-14" src="../images/svg/close.svg" alt="">
            </button>
        </div>
        <nav :class="{'flex': open, 'hidden': !open}" class="relative z-50 hidden h-auto lg:fixed lg:left-36 lg:flex lg:justify-between">
            <div @click.away="open = false" class="absolute flex flex-col w-full lg:flex-row dark-gray-bg lg:bg-transparent py-7 lg:py-0" x-data="{ open: false }">
                <button @click="open = !open" class="py-4 text-2xl font-semibold tracking-widest text-left uppercase px-7 focus:outline-none lg:text-gray-300 lg:hover:text-white">
                    <span>Menü</span>
                </button>
                <div x-show="open" class="lg:absolute lg:bg-gray58 lg:top-32 lg:w-108">
                    <div class="px-10 py-4 text-base">
                        <a href="/menu">Kiszállításos Étlap & Itallap</a>
                    </div>
                </div>
                <a class="py-4 px-7 lg:px-7 lg:py-14 lg:text-gray-300 lg:hover:text-white" href="/asztalfoglalas">Asztalfoglalás</a> 
                <a class="py-4 px-7 lg:px-7 lg:py-14 lg:text-gray-300 lg:hover:text-white" href="/esemenyek">Rendezvények</a>
                <a class="py-4 px-7 lg:px-7 lg:py-14 lg:text-gray-300 lg:hover:text-white" href="/galeria">Galéria</a>
                <a class="py-4 px-7 lg:px-7 lg:py-14 lg:text-gray-300 lg:hover:text-white" href="/rolunk">Rólunk</a>
                <a class="py-4 px-7 lg:px-7 lg:py-14 lg:text-gray-300 lg:hover:text-white" href="/kapcsolat">Kapcsolat</a>
                <div class="flex items-center py-4 justify-evenly px-7">
                    <a href="" class="w-10"><img class="w-7" src="../images/svg/facebook-white.svg" alt=""></a>
                    <a href="" class="w-10"><img class="w-7" src="../images/svg/instagram-white.svg" alt=""></a>
                    <a href="/cart" class="flex w-10">
                        <x-icon icon="cart" width=25 height=25 viewBox="20 20" strokeWidth=0 />
                        @empty(!$cartTotal)
                            ({{ $cartTotal }})
                        @endempty
                    </a>
                </div>
            </div>
        </nav>
    </div>
</div>

<div class="hidden">
    <div class="flex items-center justify-between p-6">
        <a href=""><img class="w-12 lg:w-24 lg:mr-6" src="../images/logo/logo.png" alt=""></a>
        <button @click="open = !open" class="lg:hidden focus:outline-none">
            <img x-show="!open" class="w-14 " src="../images/svg/menu.svg" alt="">
            <img x-show="open" class="w-14" src="../images/svg/close.svg" alt="">
        </button>
    </div>
    <nav>
        <button>
            <span>Menü</span>
        </button>
        <div>
        </div>
        <a class="py-4 px-7 lg:px-7 lg:py-14 lg:text-gray-300 lg:hover:text-white" href="#">Asztalfoglalás</a> 
        <a class="py-4 px-7 lg:px-7 lg:py-14 lg:text-gray-300 lg:hover:text-white" href="#">Rendezvények</a>
        <a class="py-4 px-7 lg:px-7 lg:py-14 lg:text-gray-300 lg:hover:text-white" href="#">Galéria</a>
        <a class="py-4 px-7 lg:px-7 lg:py-14 lg:text-gray-300 lg:hover:text-white" href="#">Rólunk</a>
        <a class="py-4 px-7 lg:px-7 lg:py-14 lg:text-gray-300 lg:hover:text-white" href="#">Kapcsolat</a> 
    </nav>
    <div>
        <a href=""><img class="w-7" src="../images/svg/facebook-white.svg" alt=""></a>
        <a href=""><img class="w-7" src="../images/svg/instagram-white.svg" alt=""></a>
    </div>
</div>
