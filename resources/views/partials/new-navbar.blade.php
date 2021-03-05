<nav id="nav" x-data="{ open: false }" class="fixed z-50 w-full text-xl font-medium xl:text-2xl">
    <div class="px-5 py-3  lg:py-0 lg:px-6">
      <div class="flex items-center justify-between lg:h-40">
        <div class="flex">
          <div class="flex items-center flex-shrink-0 mr-6">
            <a href="/"><img class="w-14 md:w-20 lg:w-24" src="../images/logo/logo.png" alt="Spaletta-logo"></a>
          </div>
          <div class="hidden uppercase lg:flex xl:space-x-2">
            <a href="/menu" class="py-4 text-white px-7 lg:px-5 lg:py-14 lg:hover:text-gold">
                Rendelés
            </a>
            <a href="/asztalfoglalas" class="py-4 text-white px-7 lg:px-5 lg:py-14 lg:hover:text-gold">
                Asztalfoglalás
            </a>
            <a href="/esemenyek" class="py-4 text-white px-7 lg:px-5 lg:py-14 lg:hover:text-gold">
                Rendezvények
            </a>
            <a href="/galeria" class="py-4 text-white px-7 lg:px-5 lg:py-14 lg:hover:text-gold">
                Galéria
            </a>
            <a href="rolunk" class="py-4 text-white px-7 lg:px-5 lg:py-14 lg:hover:text-gold">
                Rólunk
            </a>
            <a href="kapcsolat" class="py-4 text-white px-7 lg:px-5 lg:py-14 lg:hover:text-gold">
                Kapcsolat
            </a>
            <a href="/cart" class="flex w-10">
                <x-icon icon="cart" width=25 height=25 viewBox="20 20" strokeWidth=0 />
            @empty(!$cartTotal)
                ({{ $cartTotal }})
            @endempty
            </a>
          </div>
        </div>
        
        <div class="hidden lg:ml-6 lg:flex lg:items-center">
          @if (Auth::check())
          <div @click.away="open = false" class="relative ml-3" x-data="{ open: false }">
            <div>
              <button @click="open = !open" class="flex focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" id="user-menu" aria-haspopup="true" x-bind:aria-expanded="open">
                <img class="w-8" src="../images/svg/user.svg" alt="">
                <div class="pl-2 pr-2 text-2xl font-medium text-white align-bottom">Vezetéknév</div>
                <img x-show="!open" class="w-8" src="../images/svg/down.svg" alt="">
                <img x-show="open" class="w-8" src="../images/svg/up.svg" alt="">
              </button>
            </div>
            <div x-show="open" x-description="Profile dropdown panel, show/hide based on dropdown state." x-transition:enter="transition ease-out duration-75" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute left-0 py-1 mt-2 text-xl bg-white shadow-lg origin-top-left w-72 rounded-md ring-1 ring-black ring-opacity-5" role="menu" aria-orientation="vertical" aria-labelledby="user-menu" style="display: none;">
              <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100" role="menuitem">Profil</a>
              <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100" role="menuitem">Kijelenkezés</a>
            </div>
          </div>
          
          <button class="px-4 ml-4 border-l focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 border-gold">
            <img class="w-8" src="../images/svg/cart.svg" alt="">
          </button>
        @else
        <div class="flex items-center">
          <x-button class="mr-8" type="gold">Belépés</x-button>
          <x-button type="gold">Regisztráció</x-button>
        </div> 
        @endif
        </div>
        <div class="flex items-center -mr-2 lg:hidden">
          <!-- Mobile menu button -->
            <button @click=" open = !open" class="lg:hidden focus:outline-none">
                <img x-show="!open" class="z-20 w-14 md:w-20" src="../images/svg/menu.svg" alt="">
                <img x-show="open" class="z-20 w-14 md:w-20" src="../images/svg/close.svg" alt="">
            </button>
        </div>
      </div>
    </div>

    <div x-description="Mobile menu, toggle classes based on menu state." x-state:on="Menu open" x-state:off="Menu closed" :class="{ 'block': open, 'hidden': !open }" class="hidden text-2xl leading-tight text-white bg-gray26 md:text-3xl lg:hidden">
      <div class="pt-2 pb-3 space-y-1">
        <!-- Current: "bg-indigo-50 border-indigo-500 text-indigo-700", Default: "border-transparent text-gray-500 hover:bg-gray-50 hover:border-gray-300 hover:text-gray-700" -->
        <a href="#" class="block py-3 pl-3 pr-4 font-medium border-l-4 border-transparent hover:border-gold hover:text-gold">Rendelés</a>
        <a href="#" class="block py-3 pl-3 pr-4 font-medium border-l-4 border-transparent hover:border-gold hover:text-gold">Asztalfoglalás</a>
        <a href="#" class="block py-3 pl-3 pr-4 font-medium border-l-4 border-transparent hover:border-gold hover:text-gold">Rendezvények</a>
        <a href="#" class="block py-3 pl-3 pr-4 font-medium border-l-4 border-transparent hover:border-gold hover:text-gold">Galéria</a>
        <a href="#" class="block py-3 pl-3 pr-4 font-medium border-l-4 border-transparent hover:border-gold hover:text-gold">Rólunk</a>
        <a href="#" class="block py-3 pl-3 pr-4 font-medium border-l-4 border-transparent hover:border-gold hover:text-gold">Kapcsolat</a>
      </div>
      <div class="pt-4 pb-3 border-t border-white">
      @if (Auth::check())
        <div class="flex items-center px-4">
          <div class="flex-shrink-0">
            <img class="rounded-full w-14 md:w-16" src="../images/svg/user.svg" alt="">
          </div>
          <div class="ml-3">
            <div class="">Tom Cook</div>
            <div class="">tom@example.com</div>
          </div>
          <button class="flex-shrink-0 p-1 ml-auto rounded-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
            <!--<span class="sr-only">View notifications</span>
            <svg class="w-6 h-6" x-description="Heroicon name: outline/bell" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path>
            </svg>-->
            <img class="w-10 md:w-12" src="../images/svg/bell.svg" alt="">
          </button>
        </div>
        <div class="mt-3 space-y-1">
          <a href="#" class="block px-4 py-3 font-medium hover:text-gray-800">Profil</a>
          <a href="#" class="block px-4 py-3 font-medium hover:text-gray-800">Kijelenkezés</a>
        </div>
      </div>
      @else
      <div class="flex items-center justify-evenly"> 
        <x-button type="transparent">Belépés</x-button>
        <x-button type="transparent">Regisztráció</x-button>
      </div>
      @endif
    </div>
</nav>
  
