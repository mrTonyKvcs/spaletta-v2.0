@props(['event' => null])
@php
    $checkinDate = $event && $event->started_at ? \Carbon\Carbon::parse($event->started_at)->format('Y-m-d') : '';
    $time = $event && $event->started_at ? \Carbon\Carbon::parse($event->started_at)->format('H:i') : '';
@endphp

<div class="w-full mb-10">
    @include('flash-message', ['form' => 'form-reservation'])
</div>
<form name="form-reservation" x-data="{ checkin: '{{ $checkinDate }}' }" id="reservation" action="{{ route('mail.store', 'Asztalfoglalás') }}"
    method="POST" class="w-full lg:w-2/3 lg:grid lg:grid-cols-2 lg:gap-6">

    @csrf
    <div class="mb-6">
        <p class="text-2xl font-medium text-center gray">{{ __('Dátum') }}</p>
        <input x-model="checkin" type="date" name="checkin"
            class="bg-white w-full gray outline-none text-center font-medium py-2.5 px-5 text-xl border-b border-gray-300"
            required>
    </div>
    <div class="mb-6">
        <p class="text-2xl font-medium text-center gray">{{ __('Időpont') }}</p>
        <input type="time" name="time"
            class="bg-white w-full gray outline-none text-center font-medium py-2.5 px-5 text-xl border-b border-gray-300"
            value="{{ $time }}" required>
    </div>
    <div class="mb-6">
        <p class="text-2xl font-medium text-center gray">{{ __('Teljes név') }}</p>
        <input type="text" name="name"
            class="w-full gray outline-none text-center font-medium py-2.5 px-5 text-xl border-b border-gray-300"
            value="{{ auth()->check() ? auth()->user()->name : '' }}" required>
    </div>
    <div class="mb-6">
        <p class="text-2xl font-medium text-center gray">{{ __('E-mail') }}</p>
        <input type="email" name="email"
            class="w-full gray outline-none text-center font-medium py-2.5 px-5 text-xl border-b border-gray-300"
            value="{{ auth()->check() ? auth()->user()->email : '' }}" required>
    </div>
    <div class="mb-6">
        <p class="text-2xl font-medium text-center gray">{{ __('Telefonszám') }}</p>
        <input type="tel" name="phone"
            class="w-full gray outline-none text-center font-medium py-2.5 px-5 text-xl border-b border-gray-300"
            value="{{ auth()->check() ? auth()->user()->phone_number : '' }}" required>
    </div>
    <div>
        <p class="text-2xl font-medium text-center gray ">{{ __('Vendégek') }}</p>
        <select name="persons" id=""
            class=" bg-white w-full gray outline-none text-center font-medium py-2.5 px-5 text-2xl border-b border-gray-300"
            required>
            @for ($i = 1; $i <= 10; $i++)
                <option value="{{ $i }}">{{ $i }} {{ __('fő') }}</option>
            @endfor
        </select>
    </div>
    <div>
        <p class="text-2xl font-medium text-center gray ">{{ __('Helyszín') }}</p>
        <select name="locale" id=""
            class=" bg-white w-full gray outline-none text-center font-medium py-2.5 px-5 text-2xl border-b border-gray-300"
            required>
            @if ($event)
                <option value="Esemény" selected>{{ __('Esemény') }}</option>
            @endif
            <option value="Terasz">{{ __('Terasz') }}</option>
            <option value="Étterem">{{ __('Étterem') }}</option>
            <option value="Sörház">{{ __('Sörház') }}</option>
        </select>
    </div>
    <div>
        <p class="text-2xl font-medium text-center gray ">{{ __('Asztalfoglalás meccsnézésre') }}</p>
        <select name="matchmaker" id=""
            class=" bg-white w-full gray outline-none text-center font-medium py-2.5 px-5 text-2xl border-b border-gray-300"
            required>
            <option value="Nem">{{ __('Nem') }}</option>
            <option value="Igen">{{ __('Igen') }}</option>
        </select>
    </div>

    <div class="flex flex-col justify-between">
        <p class="text-2xl font-medium text-center gray">{{ __('Megjegyzés') }}</p>
        <textarea name="comment"
            class="w-full gray outline-none text-center font-medium py-2.5 px-5 text-xl border-b border-gray-300"></textarea>
    </div>

    {{-- <div class="flex items-center justify-center col-span-2 mt-10">
        <p class="text-2xl text-center lg:text-xl">Felhívjuk vendégeink figyelmét hogy, az Étteremhétre való asztalfoglalás az alábbi linken lehetséges: <a class="text-gold" href="https://www.etteremhet.hu/lang/hu/cities/countryside/restaurants/spaletta-etterem-es-sorhaz-kecskemet/reservations/new?meal_type=&reservation%5Bfor_date%5D=&reservation%5Bno_persons%5D=2&sort=name">Étteremhét link</a> </p>
    </div> --}}

    <div class="flex items-center justify-center col-span-2">
        <x-button type="gray">{{ __('Asztalfoglalás') }}</x-button>
    </div>

</form>
