@section('title')
    {{ __('Hírlevél feliratkozás') }}
@endsection

@section('meta_data')
    <meta name="description"
        content="{{ __('A Spaletta Étterem Kecskeméten a Jókai utca 15. szám alatt található, további kérdéseiket várjuk üzenetben.') }}">
    <meta property="og:description"
        content="{{ __('A Spaletta Étterem Kecskeméten a Jókai utca 15. szám alatt található, további kérdéseiket várjuk üzenetben.') }}">
    <meta property="og:url" content="https://spalettaetterem.com/kapcsolat">
@endsection

<x-layout>
    <x-header>
        {{ __('HÍRLEVÉL') }}
    </x-header>
    <x-section>
        <div class="flex flex-col items-center w-full lg:flex-row lg:items-stretch lg:mb-32">
            <div class="md:w-2/3">
                <x-title text="{{ __('HÍRLEVÉL') }}" title="{{ __('FELIRATKOZÁS') }}" price=""></x-title>
                <p class="text-xl text-center text-gray48">
                    {{ __('Iratkozzon fel hírlevelünkre és értesüljön első kézből legújabb eseményeinkről, ajánlatainkról!') }}.
                </p>
                @include('flash-message')
                @if ($errors->has('g-recaptcha-response'))
                    <span class="help-block">
                        <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                    </span>
                @endif
                <form method="POST" action="{{ route('pages.newsletter') }}" class="py-12">
                    @csrf
                    {{-- @honeypot --}}

                    <div class="flex justify-center w-full">
                        <input type="email" name="email" id="email" placeholder="{{ __('E-mail cím') }}"
                            class="h-20 bg-white w-full gray my-10 outline-none text-center font-medium py-2.5 px-5 text-xl border-b border-gray-300"
                            required>
                    </div>
                    <div class="relative flex newsletter-input" style="">
                        <div class="flex items-center h-5">
                            <input id="gdpr" name="gdpr" type="checkbox"
                                class="w-8 h-8 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500" required>
                        </div>
                        <div class="flex items-center ml-3 text-lg">
                            <p class="text-xl text-gray-800">{{ __('Az') }} <a
                                    href="/pdfs/2023-10-adatkezelesi-tajekoztato.pdf" target="_blank"
                                    class="gold">{{ __('Adatkezelési Tájékoztatót') }}</a>
                                {{ __('megértettem és hozzájárulok, hogy a Spaletta ÉTTEREM ÉS SÖRHÁZ az általam megadott e-mail címemre – hozzájárulásom visszavonásig – hírlevelet küldjön, az adataimat kezelje és kapcsolatba lépjen velem marketing célú megkeresésekkel.') }}
                            </p>
                        </div>
                    </div>
                    <div>
                        {!! NoCaptcha::display() !!}
                    </div>
                    <div class="flex items-center justify-center w-full">
                        <x-button submit="true">{{ __('FELIRATKOZÁS') }}</x-button>
                    </div>
                </form>
                <p class="pt-10 mt-10 text-2xl font-medium text-center text-gray-700"><a
                        href="{{ route('pages.unsubscribe-page') }}">{{ __('Hírlevél leiratkozáshoz kattintson ide') }}
                </p>
            </div>
            <x-contact></x-contact>
        </div>
        <x-opening></x-opening>
    </x-section>
    <x-map></x-map>
</x-layout>
