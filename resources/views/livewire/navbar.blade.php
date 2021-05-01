<nav id="nav" x-data="{ open: false }" class="fixed z-50 w-full text-xl font-medium xl:text-2xl">
    <div class="px-5 py-3 lg:py-0 lg:px-6">
      <div class="flex items-center justify-between lg:h-32">
        <div class="flex">
          <div class="flex items-center flex-shrink-0 lg:mr-6">
            {{-- <a href="/" class="md:hidden"><img height="35" width="35" src="/images/logo/logo.png" alt="Spaletta-logo" title="Spaletta-logo"></a>
            <a href="/" class="hidden md:block"><img height="50" width="50" src="/images/logo/logo-xl.png" alt="Spaletta-logo" title="Spaletta-logo"></a> --}}
            <a href="/" class="md:hidden">
              <picture>
                <source srcset="/images/logo/logo.webp" type="image/webp"></source>
                <img src="/images/logo/logo.png" height="35" width="35" alt="Spaletta-logo" title="Spaletta-logo">
              </picture>
            </a>
            <a href="/" class="hidden md:block">
              <picture>
                <source srcset="/images/logo/logo-xl.webp" type="image/webp"></source>
                <img src="/images/logo/logo-xl.png" height="50" width="50" alt="Spaletta-logo" title="Spaletta-logo">
              </picture>
            </a>
          </div>
          <div class="items-center hidden uppercase navbar xl:flex xl:space-x-2">
            <a href="{{ route('pages.menu') }}" class="py-4 text-white px-7 lg:px-5 lg:py-14 transition duration-300 ease-in lg:hover:text-gold">
                {{ __('Rendelés') }}
            </a>
            <a href="{{ route('pages.reservation') }}" class="py-4 text-white px-7 lg:px-5 lg:py-14 transition duration-300 ease-in lg:hover:text-gold">
                {{ __('Asztalfoglalás') }}
            </a>
            <a href="{{ route('pages.events') }}" class="py-4 text-white px-7 lg:px-5 lg:py-14 transition duration-300 ease-in lg:hover:text-gold">
                {{ __('Rendezvények') }}
            </a>
            <a href="{{ route('pages.gallery') }}" class="py-4 text-white px-7 lg:px-5 lg:py-14 transition duration-300 ease-in lg:hover:text-gold">
                {{ __('Galéria') }}
            </a>
            <a href="{{ route('pages.about') }}" class="py-4 text-white px-7 lg:px-5 lg:py-14 transition duration-300 ease-in lg:hover:text-gold">
                {{ __('Rólunk') }}
            </a>
            <a href="{{ route('pages.contact') }}" class="py-4 text-white px-7 lg:px-5 lg:py-14 transition duration-300 ease-in lg:hover:text-gold">
                {{ __('Kapcsolat') }}
            </a>
            
            <div x-data="{ open: false }" @keydown.escape.stop="open = false" @click.away="open = false" class="relative inline-block ml-48 text-right">
              <div>
                <button type="button" class="inline-flex items-center justify-center w-full px-4 py-2 font-medium text-gray-700 xl:text-2xl focus:outline-none transition duration-300 ease-in" id="options-menu" aria-expanded="true" @click="open = !open" aria-haspopup="true" x-bind:aria-expanded="open">
                  <img class="w-10" height="25" width="13" src="/images/flag/{{ LaravelLocalization::getCurrentLocale() }}.png" alt="flag" title="flag" >
                  <img x-show="!open" class="w-10" height="25" width="25" src="/images/svg/down-white.svg" alt="">
                  <img x-show="open" class="w-10" height="25" width="25" src="/images/svg/up-white.svg" alt="">
                  {{-- <svg class="w-5 h-5 ml-2 -mr-1" x-description="Heroicon name: solid/chevron-down" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                      <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                  </svg> --}}
                </button>
              </div>
          
              <div  x-show="open" x-transition:enter="transition ease-in duration-500" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-300" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute right-0 mt-2 bg-white origin-top-right focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="options-menu">
                  <div class="py-1" role="none">
                      @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                          @if (LaravelLocalization::getCurrentLocale() != $localeCode)
                              <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}" class="block px-4 py-2 text-xl text-left text-gray26 hover:bg-gray-100 hover:text-gray-900" role="menuitem">
                                  {{ $properties['native'] }}
                              </a>
                          @endif
                      @endforeach
                  </div>  
              </div>
            </div>
          </div>
        </div>

        <a href="{{ route('pages.cart') }}" class="flex justify-center xl:hidden w-7 xl:w-10 text-gold lg:text-white lg:px-5 lg:py-14 lg:hover:text-gold">
          <x-icon icon="cart" width=28 height=23 viewBox="20 20" strokeWidth=0 />
        @empty(!$cartTotal)
            ({{ $cartTotal }})
        @endempty
        </a>
        
        <div class="hidden xl:ml-6 xl:flex xl:items-center">
          @if (Auth::check())
          <div @click.away="open = false" class="relative ml-3" x-data="{ open: false }">
            <div>
              <button @click="open = !open" class="flex border-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 lg:pr-3 lg:border-r-2" id="user-menu" aria-haspopup="true" x-bind:aria-expanded="open">
                <img class="w-8" src="../images/svg/user.svg" alt="">
                <div class="pl-2 pr-2 text-xl font-medium text-white align-bottom xl:text-2xl">{{ auth()->user()->name }}</div>
                <img x-show="!open" class="w-10" src="/images/svg/down.svg" alt="">
                <img x-show="open" class="w-10" src="/images/svg/up.svg" alt="">
              </button>
            </div>
            <div x-show="open" x-description="Profile dropdown panel, show/hide based on dropdown state." x-transition:enter="transition ease-in duration-500" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-500" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute left-0 py-1 mt-2 text-xl bg-white shadow-lg origin-top-left w-72 rounded-md ring-1 ring-black ring-opacity-5" role="menu" aria-orientation="vertical" aria-labelledby="user-menu" style="display: none;">
              <a href="{{ route('pages.user-orders') }}" class="block px-4 py-2 text-2xl text-gray-700 " role="menuitem">Rendeléses</a>
              <form method="POST" class="block px-4 py-2" action="{{ route('logout') }}">
                  @csrf
                  <button class="text-2xl font-medium text-gray-700" type="submit">{{ __('Kijelenkezés') }}</button>
              </form>
            </div>
          </div> 
          <div class="ml-6">
            <a href="{{ route('pages.cart') }}" class="flex justify-center py-4 text-white w-7 xl:w-10 px-7 lg:px-5 lg:py-14 lg:hover:text-gold">
              <x-icon icon="cart" width=25 height=20 viewBox="20 20" strokeWidth=0 />
              @empty(!$cartTotal)
                  ({{ $cartTotal }})
              @endempty
            </a>
          </div>
          
        @else
        {{-- <div class="flex items-center">
          <a href="{{ route('auth.signin') }}" class="pr-4 text-3xl text-white border-r-2 border-white hover:text-gold">{{ __('Bejelentkezés') }}</a>
          <a href="{{ route('auth.signin') }}" class="pl-4 text-3xl text-white hover:text-gold">{{ __('Regisztráció') }}</a>
        </div>  --}}
        @endif
        </div>
        <div class="flex items-center order-first xl:hidden">
          <!-- Mobile menu button -->
              <button @click=" open = !open" class="xl:hidden focus:outline-none ">
                  <img x-show="!open" class="z-20 w-14 md:w-20 ease-in" src="/images/svg/menu.svg" alt="">
                  <img x-show="open" class="z-20 w-14 md:w-20" src="/images/svg/close.svg" alt="">
              </button>
        </div>
      </div>
    </div>

    <div x-state:on="Menu open" x-state:off="Menu closed" :class="{ 'block': open, 'hidden': !open }" class="hidden text-2xl leading-tight text-white bg-gray26 md:text-3xl xl:hidden">
      <div class="pt-2 pb-3 text-2xl lg:text-4xl space-y-1">
        <!-- Current: "bg-indigo-50 border-indigo-500 text-indigo-700", Default: "border-transparent text-gray-500 hover:bg-gray-50 hover:border-gray-300 hover:text-gray-700" -->
        <a href="{{ route('pages.menu') }}" class="block py-3 pl-3 pr-4 font-medium border-l-4 border-transparent hover:border-gold hover:text-gold">{{ __('Rendelés') }}</a>
        <a href="{{ route('pages.reservation') }}" class="block py-3 pl-3 pr-4 font-medium border-l-4 border-transparent hover:border-gold hover:text-gold">{{ __('Asztalfoglalás') }}</a>
        <a href="{{ route('pages.events') }}" class="block py-3 pl-3 pr-4 font-medium border-l-4 border-transparent hover:border-gold hover:text-gold">{{ __('Rendezvények') }}</a>
        <a href="{{ route('pages.gallery') }}" class="block py-3 pl-3 pr-4 font-medium border-l-4 border-transparent hover:border-gold hover:text-gold">{{ __('Galéria') }}</a>
        <a href="{{ route('pages.about') }}" class="block py-3 pl-3 pr-4 font-medium border-l-4 border-transparent hover:border-gold hover:text-gold">{{ __('Rólunk') }}</a>
        <a href="{{ route('pages.contact') }}" class="block py-3 pl-3 pr-4 font-medium border-l-4 border-transparent hover:border-gold hover:text-gold">{{ __('Kapcsolat') }}</a>
        <div x-data="{ open: false }" @keydown.escape.stop="open = false" @click.away="open = false" class="relative inline-block py-3 pl-5 pr-4 text-right">
          <div class="flex space-x-4">
            @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                @if (LaravelLocalization::getCurrentLocale() != $localeCode)
                    <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                        <img class="w-12 lg:w-14 h-6 lg:h-8" src="/images/flag/{{ $localeCode }}.png" alt="">
                    </a>
                @endif
            @endforeach
          </div>
        </div>
      </div>
      {{-- <div class="py-4 border-t border-white">
      @if (Auth::check())
        <div class="flex items-center px-4">
          <div class="flex-shrink-0">
            <img class="rounded-full w-14 md:w-16" src="/images/svg/user.svg" alt="">
          </div>
          <div class="ml-3">
              <div class="">{{ auth()->user()->name }}</div>
              <div class="">{{ auth()->user()->email }}</div>
          </div>
        </div>
        <div class="mt-3">
          <a href="{{ route('pages.user-orders') }}" class="block px-4 py-2 text-white" role="menuitem">Rendelések</a>
          <form method="POST" class="block py-2 px-4 text-2xl" action="{{ route('logout') }}">
              @csrf
              <button class="text-white text-2xl font-medium" type="submit">{{ __('Kijelenkezés') }}</button>
          </form>
        </div>
      </div>
      @else
      <div class="flex items-center justify-center py-2"> 
          <a href="{{ route('auth.signin') }}" class="px-4 text-3xl text-white border-r-2 border-white hover:text-gold ">{{ __('Bejelentkezés') }}</a>
          <a href="{{ route('auth.signin') }}" class="px-4 text-3xl text-white hover:text-gold">{{ __('Regisztráció') }}</a>
      </div>
      @endif
    </div> --}}
</nav>
  
