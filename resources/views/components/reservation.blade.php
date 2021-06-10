<div class="w-full mb-10">
    @include('flash-message')
</div>
<form id="reservation" action="{{ route('mail.store', 'Asztalfoglalás')}}" method="POST" class="w-full lg:w-2/3 lg:grid lg:grid-cols-2 lg:gap-6">

    @csrf
    <div class="mb-6">
        <p class="text-2xl font-medium text-center gray">{{ __('Dátum') }}</p>
        <input type="date" name="checkin" class="bg-white w-full gray outline-none text-center font-medium py-2.5 px-5 text-xl border-b border-gray-300" required>
    </div>
    <div class="mb-6">
        <p class="text-2xl font-medium text-center gray">{{ __('Időpont') }}</p>
        <input type="time" name="time" class="bg-white w-full gray outline-none text-center font-medium py-2.5 px-5 text-xl border-b border-gray-300" required>
    </div>
    <div class="mb-6">
        <p class="text-2xl font-medium text-center gray">{{ __('Teljes név') }}</p>
        <input type="text" name="name" class="w-full gray outline-none text-center font-medium py-2.5 px-5 text-xl border-b border-gray-300" value="{{ auth()->check() ? auth()->user()->name : '' }}" required>
    </div>
    <div class="mb-6">
        <p class="text-2xl font-medium text-center gray">{{ __('E-mail') }}</p>
        <input type="email" name="email" class="w-full gray outline-none text-center font-medium py-2.5 px-5 text-xl border-b border-gray-300" value="{{ auth()->check() ? auth()->user()->email : '' }}" required>
    </div>
    <div class="mb-6">
        <p class="text-2xl font-medium text-center gray">{{ __('Telefonszám') }}</p>
        <input type="tel" name="phone" class="w-full gray outline-none text-center font-medium py-2.5 px-5 text-xl border-b border-gray-300" value="{{ auth()->check() ? auth()->user()->phone_number : '' }}" required>
    </div>
    <div>
        <p class="text-2xl font-medium text-center gray ">{{ __('Vendégek') }}</p>
        <select name="persons" id="" class=" bg-white w-full gray outline-none text-center font-medium py-2.5 px-5 text-2xl border-b border-gray-300" required>
            @for($i = 1; $i <= 20; $i++)
                <option value="{{ $i }}">{{ $i }} {{ __('fő') }}</option>
            @endfor
        </select> 
    </div>
    <div>
        <p class="text-2xl font-medium text-center gray ">{{ __('Helyszín') }}</p>
        <select name="locale" id="" class=" bg-white w-full gray outline-none text-center font-medium py-2.5 px-5 text-2xl border-b border-gray-300" required>
            <option value="Terasz">{{ __('Terasz') }}</option>
            <option value="Étterem">{{ __('Étterem') }}</option>
            <option value="Sörház">{{ __('Sörház') }}</option>
        </select> 
    </div>

    <div class="flex items-center justify-center col-span-2">
        <x-button type="gray">{{ __('Asztalfoglalás') }}</x-button>
    </div>
    
</form>
