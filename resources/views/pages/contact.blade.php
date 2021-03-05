<x-layout>
    <x-header>
        Kapcsolat
    </x-header>
    <x-section>
        <div class="flex flex-col items-center w-full lg:flex-row lg:items-stretch lg:mb-32">
            <div class="md:w-2/3">
                <x-title text="Küldjön" title="Üzenetet" price=""></x-title>
                <p class="text-xl text-center text-gray48">Az alábbi ürlap kitöltésevel közvetlen üzenetet tud küldeni.</p>
                @if ($errors->has('g-recaptcha-response'))
                    <span class="help-block">
                        <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                    </span>
                @endif
                <form method="POST" action="{{ route('mail.store','Kapcsolat') }}" class="py-12">
                    @csrf
                    <div class="flex flex-col lg:flex-row">
                        <div class="mb-6 lg:mr-6 lg:w-1/2">
                            <p class="text-2xl font-medium text-center gray">Teljes név</p>
                            <input type="text" class="w-full gray outline-none text-center font-medium py-2.5 px-5 text-xl border-b border-gray-300">
                        </div>
                        <div class="mb-6 lg:ml-6 lg:w-1/2">
                            <p class="text-2xl font-medium text-center gray">E-mail</p>
                            <input type="email" class="w-full gray outline-none text-center font-medium py-2.5 px-5 text-xl border-b border-gray-300">
                        </div>
                    </div>
                    <div>
                        <div>
                            <p class="text-2xl font-medium text-center gray">Üzenet</p>
                            <textarea type="message" class="w-full gray outline-none text-center font-medium py-2.5 px-5 text-xl border-b border-gray-300"></textarea>
                        </div>
                    </div>
                    <div>
                        {!! NoCaptcha::display() !!}
                    </div>
                    <div class="flex items-center justify-center w-full">
                        <x-button submit="true">Küldés</x-button>
                    </div>
                </form>
            </div>
            <div class="flex flex-col justify-center w-full p-4 pl-12 mb-12 text-lg rounded-lg shadow-xl md:w-1/2 lg:w-1/3 lg:ml-48 lg:mb-0 lg:pl-28 xl:text-2xl space-y-4">
                <h2 class="text-xl uppercase lg:text-3xl text-gold">Elérhetőségek</h2>
                <div class="flex">
                    <img class="w-10 pr-2" src="../images/svg/mobile-black.svg" alt="">
                    <a href="" class="">+36 20 219 99 75</a>
                </div>
                <div class="flex">
                    <img class="w-10 pr-2" src="../images/svg/phone-black.svg" alt="">
                    <a href="">+36 76 614 744</a>
                </div>
                <div class="flex">
                    <img class="w-10 pr-2" src="../images/svg/email.svg" alt="">
                    <a href="">spaletta.gasztro@gmail.com</a>
                </div>
                <div class="flex">
                    <img class="w-10 pr-2" src="../images/svg/location.svg" alt="">
                    <a href="">6000 Kecskemét, Jókai utca 15.</a>
                </div>
            </div>
        </div>
        <x-opening></x-opening>
    </x-section>
    <x-map></x-map>
</x-layout>
