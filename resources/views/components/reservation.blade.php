<form class="w-full lg:w-2/3 lg:grid lg:grid-cols-2 lg:gap-6">
    <div class="mb-6">
        <p class="text-center text-2xl gray font-medium">{{ __('Dátum') }}</p>
        <input type="date" class="bg-white w-full gray outline-none text-center font-medium py-2.5 px-5 text-xl border-b border-gray-300">
    </div>
    <div class="mb-6">
        <p class="text-center text-2xl gray font-medium">{{ __('Időpont') }}</p>
        <input type="time" class="bg-white w-full gray outline-none text-center font-medium py-2.5 px-5 text-xl border-b border-gray-300">
    </div>
    <div class="mb-6">
        <p class="text-center text-2xl gray font-medium">{{ __('Teljes név') }}</p>
        <input type="text" class="w-full gray outline-none text-center font-medium py-2.5 px-5 text-xl border-b border-gray-300">
    </div>
    <div class="mb-6">
        <p class="text-center text-2xl gray font-medium">{{ __('E-mail') }}</p>
        <input type="email" class="w-full gray outline-none text-center font-medium py-2.5 px-5 text-xl border-b border-gray-300">
    </div>
    <div class="mb-6">
        <p class="text-center text-2xl gray font-medium">{{ __('Telefonszám') }}</p>
        <input type="tel" class="w-full gray outline-none text-center font-medium py-2.5 px-5 text-xl border-b border-gray-300">
    </div>
    <div>
        <p class="text-center text-2xl gray font-medium ">{{ __('Vendégek') }}</p>
        <select name="vendegek" id="" class=" bg-white w-full gray outline-none text-center font-medium py-2.5 px-5 text-2xl border-b border-gray-300">
            <option value="1">1 {{ __('fő') }}</option>
            <option value="2">2 {{ __('fő') }}</option>
        </select> 
    </div>
</form>