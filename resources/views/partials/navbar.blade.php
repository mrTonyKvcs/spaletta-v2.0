<div class="bg-black text-white text-2xl font-semibold tracking-widest uppercase">
    <div x-data="{ open: false }" class="flex flex-col lg:flex-row w-full absolute">
        <div class="flex justify-between items-center p-6 z-50">
            <a href="/"><img class="w-12 lg:w-24 lg:mr-6" src="../images/logo/logo.png" alt=""></a>
            <button @click="open = !open" class="lg:hidden focus:outline-none">
                <img x-show="!open" class="w-14 " src="../images/svg/menu.svg" alt="">
                <img x-show="open" class="w-14" src="../images/svg/close.svg" alt="">
            </button>
        </div>
        <nav :class="{'flex': open, 'hidden': !open}" class=" relative z-50 h-auto hidden lg:flex lg:justify-between">
            <div @click.away="open = false" class="absolute flex flex-col lg:flex-row dark-gray-bg lg:bg-transparent w-full py-7 lg:py-0" x-data="{ open: false }">
                <button @click="open = !open" class="text-left px-7 py-4 text-2xl font-semibold focus:outline-none tracking-widest uppercase lg:text-gray-300 lg:hover:text-white">
                    <span>Menü</span>
                </button>
                <div x-show="open" class="lg:absolute lg:bg-gray58 lg:top-32 lg:w-108">
                    <div class="px-10 py-4 text-base">
                        <a href="/menu">Kiszállításos Étlap & Itallap</a>
                    </div>
                </div>
                <a class="px-7 py-4 lg:px-7 lg:py-14 lg:text-gray-300 lg:hover:text-white" href="/asztalfoglalas">Asztalfoglalás</a> 
                <a class="px-7 py-4 lg:px-7 lg:py-14 lg:text-gray-300 lg:hover:text-white" href="/esemenyek">Rendezvények</a>
                <a class="px-7 py-4 lg:px-7 lg:py-14 lg:text-gray-300 lg:hover:text-white" href="/galeria">Galéria</a>
                <a class="px-7 py-4 lg:px-7 lg:py-14 lg:text-gray-300 lg:hover:text-white" href="/rolunk">Rólunk</a>
                <a class="px-7 py-4 lg:px-7 lg:py-14 lg:text-gray-300 lg:hover:text-white" href="/kapcsolat">Kapcsolat</a>
                <div class="flex items-center justify-evenly px-7 py-4">
                    <a href="" class="w-10"><img class="w-7" src="../images/svg/facebook-white.svg" alt=""></a>
                    <a href="" class="w-10"><img class="w-7" src="../images/svg/instagram-white.svg" alt=""></a>
                </div>
            </div>
        </nav>
    </div>
</div>

<div class="hidden">
    <div class="flex justify-between items-center p-6">
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
        <a class="px-7 py-4 lg:px-7 lg:py-14 lg:text-gray-300 lg:hover:text-white" href="#">Asztalfoglalás</a> 
        <a class="px-7 py-4 lg:px-7 lg:py-14 lg:text-gray-300 lg:hover:text-white" href="#">Rendezvények</a>
        <a class="px-7 py-4 lg:px-7 lg:py-14 lg:text-gray-300 lg:hover:text-white" href="#">Galéria</a>
        <a class="px-7 py-4 lg:px-7 lg:py-14 lg:text-gray-300 lg:hover:text-white" href="#">Rólunk</a>
        <a class="px-7 py-4 lg:px-7 lg:py-14 lg:text-gray-300 lg:hover:text-white" href="#">Kapcsolat</a> 
    </nav>
    <div>
        <a href=""><img class="w-7" src="../images/svg/facebook-white.svg" alt=""></a>
        <a href=""><img class="w-7" src="../images/svg/instagram-white.svg" alt=""></a>
    </div>
</div>
