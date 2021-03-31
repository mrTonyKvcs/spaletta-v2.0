<div x-init="$el.focus()" class="flex-1 overflow-auto focus:outline-none" tabindex="0">
    <div class="relative z-10 flex flex-shrink-0 h-20 bg-white border-b border-gray-200 lg:border-none">
      <button @click.stop="sidebarOpen = true" class="px-4 text-gray-400 border-r border-gray-200 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-cyan-500 lg:hidden">
        <span class="sr-only">Open sidebar</span>
        <svg class="w-6 h-6" x-description="Heroicon name: outline/menu-alt-1" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16"></path>
</svg>
      </button>
      <!-- Search bar -->
      <div class="flex justify-between flex-1 px-4 sm:px-6 lg:max-w-8xl lg:mx-auto lg:px-8">
        <div class="flex flex-1">
          {{-- <form class="flex w-full md:ml-0" action="#" method="GET"> --}}
{{--             <label for="search_field" class="sr-only">Search</label> --}}
{{--             <div class="relative w-full text-gray-400 focus-within:text-gray-600"> --}}
{{--               <div class="absolute inset-y-0 left-0 flex items-center pointer-events-none" aria-hidden="true"> --}}
{{--                 <svg class="w-5 h-5" x-description="Heroicon name: solid/search" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"> --}}
{{-- <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path> --}}
{{-- </svg> --}}
{{--               </div> --}}
{{--               <input id="search_field" name="search_field" class="block w-full h-full py-2 pl-8 pr-3 text-gray-900 placeholder-gray-500 border-transparent focus:outline-none focus:ring-0 focus:border-transparent sm:text-sm" placeholder="Search transactions" type="search"> --}}
{{--             </div> --}}
          {{-- </form> --}}
        </div>
        <div class="flex items-center ml-4 md:ml-6">
          {{-- <button class="p-1 text-gray-400 bg-white rounded-full hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cyan-500"> --}}
{{--             <span class="sr-only">View notifications</span> --}}
{{--             <svg class="w-6 h-6" x-description="Heroicon name: outline/bell" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true"> --}}
{{-- <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path> --}}
{{-- </svg> --}}
          {{-- </button> --}}

          <!-- Profile dropdown -->
          <div @click.away="open = false" class="relative ml-3" x-data="{ open: false }">
            <div>
              <button @click="open = !open" class="flex focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" id="user-menu" aria-haspopup="true" x-bind:aria-expanded="open">
                <img class="w-8" src="../images/svg/user.svg" alt="">
                <div class="pl-2 pr-2 text-xl font-medium text-gray-900 align-bottom xl:text-2xl">{{ auth()->user()->name }}</div>
                <img x-show="!open" class="w-8" src="/images/svg/down.svg" alt="">
                <img x-show="open" class="w-8" src="/images/svg/up.svg" alt="">
              </button>
            </div>
            <div x-show="open" x-description="Profile dropdown panel, show/hide based on dropdown state." x-transition:enter="transition ease-out duration-75" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute left-0 py-1 mt-2 text-xl bg-white shadow-lg origin-top-left w-72 rounded-md ring-1 ring-black ring-opacity-5" role="menu" aria-orientation="vertical" aria-labelledby="user-menu" style="display: none;">
              {{-- <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100" role="menuitem">Profil</a> --}}
              <form method="POST" class="block px-4 py-2 text-gray-700 hover:bg-gray-100" action="{{ route('logout') }}">
                  @csrf

                  <x-jet-responsive-nav-link class="text-3xl"
                                            href="{{ route('logout') }}"
                                             onclick="event.preventDefault();
                                             this.closest('form').submit();">
                      {{ __('Kijelenkezés') }}
                  </x-jet-responsive-nav-link>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
