@section('title') {{ __('Kapcsolat') }} @endsection

@section('meta_data')
    <meta name="description" content="{{ __('A Spaletta Étterem Kecskeméten a Jókai utca 15. szám alatt található, további kérdéseiket várjuk üzenetben.') }}">
    <meta property="og:description" content="{{ __('A Spaletta Étterem Kecskeméten a Jókai utca 15. szám alatt található, további kérdéseiket várjuk üzenetben.') }}">
    <meta property="og:url" content="https://spalettaetterem.com/kapcsolat"> 
@endsection

<x-layout>
    <x-header>
        {{ __('Kapcsolat') }}
    </x-header>
    <x-section>
        <div class="flex flex-col items-center w-full lg:flex-row lg:items-stretch lg:mb-32">
            <div class="md:w-2/3">
                <x-title text="{{ __('Küldjön') }}" title="{{ __('Üzenetet') }}" price=""></x-title>
                <p class="text-xl text-center text-gray48">{{ __('Az alábbi ürlap kitöltésevel közvetlen üzenetet tud küldeni') }}.</p>
                @include('flash-message')
                @if ($errors->has('g-recaptcha-response'))
                    <span class="help-block">
                        <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                    </span>
                @endif
                <form method="POST" action="{{ route('mail.store','Kapcsolat') }}" class="py-12">
                    @csrf
                    {{-- @honeypot --}}
                    
                    <div class="flex flex-col lg:flex-row">
                        <div class="mb-6 lg:mr-6 lg:w-1/2">
                            <p class="text-2xl font-medium text-center gray">{{ __('Teljes név') }}</p>
                            <input type="text" name="name" class="w-full gray outline-none text-center font-medium py-2.5 px-5 text-xl border-b border-gray-300" value="{{ auth()->check() ? auth()->user()->name : '' }}" required>
                        </div>
                        <div class="mb-6 lg:ml-6 lg:w-1/2">
                            <p class="text-2xl font-medium text-center gray">{{ __('E-mail') }}</p>
                            <input type="email" name="email" class="w-full gray outline-none text-center font-medium py-2.5 px-5 text-xl border-b border-gray-300" value="{{ auth()->check() ? auth()->user()->email : '' }}" required>
                        </div>
                    </div>
                    <div>
                        <div>
                            <p class="text-2xl font-medium text-center gray">{{ __('Üzenet') }}</p>
                            <textarea name="message" class="w-full gray outline-none text-center font-medium py-2.5 px-5 text-xl border-b border-gray-300" required></textarea>
                        </div>
                    </div>
                    <div>
                        {!! NoCaptcha::display() !!}
                    </div>
                    <div class="flex items-center justify-center w-full">
                        <x-button submit="true">{{ __('Küldés') }}</x-button>
                    </div>
                </form>
            </div>
            <x-contact></x-contact>
        </div>
        <x-opening></x-opening>
    </x-section>
    <x-map></x-map>
</x-layout>
