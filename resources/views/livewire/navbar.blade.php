<nav id="nav" x-data="{ open: false }" class="fixed z-50 w-full text-xl font-medium xl:text-2xl">
    <div class="px-5 py-3 lg:py-0 lg:px-6">
        <div class="flex items-center justify-between lg:h-32">
            <div class="flex">
                <div class="flex items-center flex-shrink-0 lg:mr-6">
                    <a href="/" class="md:hidden">
                        <picture>
                            <source srcset="/images/logo/logo.webp" type="image/webp">
                            </source>
                            <img src="/images/logo/logo.png" height="35" width="35" alt="Spaletta-logo"
                                title="Spaletta-logo">
                        </picture>
                    </a>
                    <a href="/" class="hidden md:block">
                        <picture>
                            <source srcset="/images/logo/logo-xl.webp" type="image/webp">
                            </source>
                            <img src="/images/logo/logo-xl.png" height="50" width="50" alt="Spaletta-logo"
                                title="Spaletta-logo">
                        </picture>
                    </a>
                </div>
                <div class="items-center hidden uppercase navbar xl:flex xl:space-x-2 ">
                    {{-- <a href="{{ route('pages.oktobierfest') }}" class="py-4 text-white transition duration-300 ease-in px-7 lg:px-5 lg:py-14 lg:hover:text-gold">
                {{ __('OKTOBIERFEST') }}
            </a> --}}
                    <a href="{{ route('pages.menu') }}"
                        class="py-4 text-white transition duration-300 ease-in px-7 lg:px-5 lg:py-14 lg:hover:text-gold">
                        {{ __('Étlap') }}
                    </a>
                    {{-- <a href="{{ route('pages.bar') }}" --}}
                    {{--    class="py-4 text-white transition duration-300 ease-in px-7 lg:px-5 lg:py-14 lg:hover:text-gold"> --}}
                    {{--    {{ __('Sörház') }} --}}
                    {{-- </a> --}}
                    <a href="{{ route('pages.reservation') }}"
                        class="py-4 text-white transition duration-300 ease-in px-7 lg:px-5 lg:py-14 lg:hover:text-gold">
                        {{ __('Asztalfoglalás') }}
                    </a>
                    <a href="{{ route('events.index') }}"
                        class="py-4 text-white transition duration-300 ease-in px-7 lg:px-5 lg:py-14 lg:hover:text-gold">
                        {{ __('Rendezvények') }}
                    </a>
                    <a href="{{ route('pages.gallery') }}"
                        class="py-4 text-white transition duration-300 ease-in px-7 lg:px-5 lg:py-14 lg:hover:text-gold">
                        {{ __('Galéria') }}
                    </a>
                    <a href="{{ route('pages.about') }}"
                        class="py-4 text-white transition duration-300 ease-in px-7 lg:px-5 lg:py-14 lg:hover:text-gold">
                        {{ __('Rólunk') }}
                    </a>
                    <a href="{{ route('pages.contact') }}"
                        class="py-4 text-white transition duration-300 ease-in px-7 lg:px-5 lg:py-14 lg:hover:text-gold">
                        {{ __('Kapcsolat') }}
                    </a>

                    <div x-data="{ open: false }" @keydown.escape.stop="open = false" @click.away="open = false"
                        class="relative inline-block ml-48 text-right">
                        <div>
                            <button type="button"
                                class="inline-flex items-center justify-center w-full px-4 py-2 font-medium text-gray-700 transition duration-300 ease-in xl:text-2xl focus:outline-none"
                                id="options-menu" aria-expanded="true" @click="open = !open" aria-haspopup="true"
                                x-bind:aria-expanded="open">
                                <img class="w-10" height="25" width="13"
                                    src="/images/flag/{{ LaravelLocalization::getCurrentLocale() }}.png" alt="flag"
                                    title="flag">
                                <img x-show="!open" class="w-10" height="25" width="25"
                                    src="/images/svg/down-white.svg" alt="">
                                <img x-show="open" class="w-10" height="25" width="25"
                                    src="/images/svg/up-white.svg" alt="">
                            </button>
                        </div>

                        <div x-show="open" x-transition:enter="transition ease-in duration-500"
                            x-transition:enter-start="transform opacity-0 scale-95"
                            x-transition:enter-end="transform opacity-100 scale-100"
                            x-transition:leave="transition ease-in duration-300"
                            x-transition:leave-start="transform opacity-100 scale-100"
                            x-transition:leave-end="transform opacity-0 scale-95"
                            class="absolute right-0 mt-2 origin-top-right bg-white focus:outline-none" role="menu"
                            aria-orientation="vertical" aria-labelledby="options-menu">
                            <div class="py-1" role="none">
                                @foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                    @if (LaravelLocalization::getCurrentLocale() != $localeCode)
                                        <a rel="alternate" hreflang="{{ $localeCode }}"
                                            href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}"
                                            class="block px-4 py-2 text-xl text-left text-gray26 hover:bg-gray-100 hover:text-gray-900"
                                            role="menuitem">
                                            {{ $properties['native'] }}
                                        </a>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- <a href="{{ route('pages.cart') }}" class="flex justify-center xl:hidden w-7 xl:w-10 text-gold lg:text-white lg:px-5 lg:py-14 lg:hover:text-gold">
          <x-icon icon="cart" width=28 height=23 viewBox="20 20" strokeWidth=0 />
        @empty(!$cartTotal)
            ({{ $cartTotal }})
        @endempty
        </a> --}}

            <div class="flex items-center xl:hidden">
                <!-- Mobile menu button -->
                <button @click=" open = !open" class="xl:hidden focus:outline-none ">
                    <img x-show="!open" class="z-20 ease-in w-14 md:w-20" src="/images/svg/menu.svg" alt="">
                    <img x-show="open" class="z-20 w-14 md:w-20" src="/images/svg/close.svg" alt="">
                </button>
            </div>
        </div>
    </div>

    <div x-state:on="Menu open" x-state:off="Menu closed" :class="{ 'block': open, 'hidden': !open }"
        class="hidden text-2xl leading-tight text-white bg-gray26 md:text-3xl xl:hidden">
        <div class="pt-2 pb-3 space-y-1 text-2xl lg:text-4xl">
            <!-- Current: "bg-indigo-50 border-indigo-500 text-indigo-700", Default: "border-transparent text-gray-500 hover:bg-gray-50 hover:border-gray-300 hover:text-gray-700" -->
            {{-- <a href="{{ route('pages.oktobierfest') }}" class="block py-3 pl-3 pr-4 font-medium border-l-4 border-transparent hover:border-gold hover:text-gold">{{ __('OKTOBIERFEST') }}</a> --}}
            <a href="{{ route('pages.menu') }}"
                class="block py-3 pl-3 pr-4 font-medium border-l-4 border-transparent hover:border-gold hover:text-gold">{{ __('Étlap') }}</a>
            <a href="{{ route('pages.reservation') }}"
                class="block py-3 pl-3 pr-4 font-medium border-l-4 border-transparent hover:border-gold hover:text-gold">{{ __('Asztalfoglalás') }}</a>
            <a href="{{ route('events.index') }}"
                class="block py-3 pl-3 pr-4 font-medium border-l-4 border-transparent hover:border-gold hover:text-gold">{{ __('Rendezvények') }}</a>
            <a href="{{ route('pages.gallery') }}"
                class="block py-3 pl-3 pr-4 font-medium border-l-4 border-transparent hover:border-gold hover:text-gold">{{ __('Galéria') }}</a>
            <a href="{{ route('pages.about') }}"
                class="block py-3 pl-3 pr-4 font-medium border-l-4 border-transparent hover:border-gold hover:text-gold">{{ __('Rólunk') }}</a>
            <a href="{{ route('pages.contact') }}"
                class="block py-3 pl-3 pr-4 font-medium border-l-4 border-transparent hover:border-gold hover:text-gold">{{ __('Kapcsolat') }}</a>
            <div x-data="{ open: false }" @keydown.escape.stop="open = false" @click.away="open = false"
                class="relative inline-block py-3 pl-5 pr-4 text-right">
                <div class="flex space-x-4">
                    @foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                        @if (LaravelLocalization::getCurrentLocale() != $localeCode)
                            <a rel="alternate" hreflang="{{ $localeCode }}"
                                href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                <img class="w-12 h-6 lg:w-14 lg:h-8" src="/images/flag/{{ $localeCode }}.png"
                                    alt="">
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
          <form method="POST" class="block px-4 py-2 text-2xl" action="{{ route('logout') }}">
              @csrf
<<<<<<< HEAD
              <button class="text-2xl font-medium text-white" type="submit">{{ __('Kijelenkezés') }}</button>
              {{-- <x-jet-responsive-nav-link href="{{ route('logout') }}"
                                         onclick="event.preventDefault();
                                         this.closest('form').submit();">
                  <span class="text-white ">{{ __('Kijelenkezés') }}</span>
              </x-jet-responsive-nav-link> --}}
        {{--               <button class="text-2xl font-medium text-white" type="submit">{{ __('Kijelenkezés') }}</button> --}}
        {{-- </form> --}}
        {{--     </div> --}}
        {{--   </div> --}}
        {{--   @else --}}
        {{--   <div class="flex items-center justify-center py-2">  --}}
        {{--       <a href="{{ route('auth.signin') }}" class="px-4 text-3xl text-white border-r-2 border-white hover:text-gold ">{{ __('Bejelentkezés') }}</a> --}}
        {{--       <a href="{{ route('auth.signin') }}" class="px-4 text-3xl text-white hover:text-gold">{{ __('Regisztráció') }}</a> --}}
        {{--   </div> --}}
        {{--   @endif --}}
        {{-- </div> --}}
</nav>
