<div class="flex h-screen overflow-hidden bg-gray-100" x-data="{ sidebarOpen: false }" @keydown.window.escape="sidebarOpen = false">
    <div x-show="sidebarOpen" class="lg:hidden" x-description="Off-canvas menu for mobile, show/hide based on off-canvas menu state." style="display: none;">
        <div class="fixed inset-0 z-40 flex">
        <div @click="sidebarOpen = false" x-show="sidebarOpen" x-description="Off-canvas menu overlay, show/hide based on off-canvas menu state." x-transition:enter="transition-opacity ease-linear duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition-opacity ease-linear duration-300" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" class="fixed inset-0" style="display: none;">
            <div class="absolute inset-0 bg-gray48" aria-hidden="true"></div>
        </div>
        <div x-show="sidebarOpen" x-description="Off-canvas menu, show/hide based on off-canvas menu state." x-transition:enter="transition ease-in-out duration-300 transform" x-transition:enter-start="-translate-x-full" x-transition:enter-end="translate-x-0" x-transition:leave="transition ease-in-out duration-300 transform" x-transition:leave-start="translate-x-0" x-transition:leave-end="-translate-x-full" class="relative flex flex-col flex-1 w-full max-w-xs pt-5 pb-4 bg-cyan-700" style="display: none;">
            <div class="absolute top-0 right-0 pt-2 -mr-12">
            <button x-show="sidebarOpen" @click="sidebarOpen = false" class="flex items-center justify-center w-10 h-10 ml-1 rounded-full focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" style="display: none;">
                <span class="sr-only">Close sidebar</span>
                <svg class="w-6 h-6 text-white" x-description="Heroicon name: outline/x" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
            </div>
            <div class="flex items-center justify-center flex-shrink-0 px-4">
              <img class="w-14 md:w-20 lg:w-24" src="../images/logo/logo.png" alt="Spaletta-logo">
            </div>
            <nav class="flex-shrink-0 h-full mt-5 overflow-y-auto divide-y divide-cyan-800" aria-label="Sidebar">
            <div class="px-2 space-y-1">
                
                
                    <!-- Current: "bg-cyan-800 text-white", Default: "text-cyan-100 hover:text-white hover:bg-cyan-600" -->
                    <a href="#" class="flex items-center px-2 py-2 text-base font-medium bg-cyan-800 group rounded-md" aria-current="page">
                    <svg class="w-6 h-6 mr-4 text-cyan-200" x-description="Heroicon name: outline/home" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                    </svg>
                    Home
                    </a>
                
                
                    <a href="#" class="flex items-center px-2 py-2 text-base font-medium text-cyan-100 hover:text-white hover:bg-cyan-600 group rounded-md">
                    <svg class="w-6 h-6 mr-4 text-cyan-200" x-description="Heroicon name: outline/clock" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    History
                    </a>
            </div>
            </nav>
        </div>
        <div class="flex-shrink-0 w-14" aria-hidden="true">
            <!-- Dummy element to force sidebar to shrink to fit close icon -->
        </div>
        </div>
    </div>

    <!-- Static sidebar for desktop -->
    <div class="hidden lg:flex lg:flex-shrink-0">
      <div class="flex flex-col w-64">
        <!-- Sidebar component, swap this element with another sidebar if you like -->
        <div class="flex flex-col flex-grow pt-5 pb-4 overflow-y-auto text-white bg-cyan-700 bg-gray48">
          <div class="flex items-center justify-center flex-shrink-0 px-4">
            <img class="w-14 md:w-20 lg:w-24" src="../images/logo/logo.png" alt="Spaletta-logo">
          </div>
          <nav class="flex flex-col flex-1 mt-16 overflow-y-auto divide-y divide-cyan-800" aria-label="Sidebar">
            <div class="px-4 space-y-1">
              
                
                  <!-- Current: "bg-cyan-800 text-white", Default: "text-cyan-100 hover:text-white hover:bg-cyan-600" -->
                  <a href="{{ route('admin') }}" class="flex items-center px-2 py-2 text-2xl font-medium group leading-6 rounded-md text-cyan-100 hover:text-gold hover:bg-cyan-600" aria-current="page">
                    <svg class="w-6 h-6 mr-4 text-cyan-200" x-description="Heroicon name: outline/home" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                    </svg>
                    Home
                  </a>
                
                
                  <a href="#" class="flex items-center px-2 py-2 text-2xl font-medium group leading-6 rounded-md text-cyan-100 hover:text-gold hover:bg-cyan-600">
                    <svg class="w-6 h-6 mr-4 text-cyan-200" x-description="Heroicon name: outline/clock" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    History
                  </a>
            </div>
          </nav>
        </div>
      </div>
    </div>
