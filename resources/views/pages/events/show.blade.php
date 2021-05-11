<x-layout>
    <x-header background="reservation">{{ $event->title }}</x-header>
    <x-section>
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-20">
                <img src="{{ $event->image_path }}" alt="{{ $event->title }}">
                <div class="flex flex-col justify-center space-y-10">
                    <div class="flex items-center justify-center">
                        <div class="flex justify-center pr-6">
                            <img class="w-7" src="/images/svg/calender.svg" alt="">
                            <p class="ml-4 text-2xl text-gold">{{ $event->started_at }}</p>
                        </div>
                        <div class="flex justify-center pl-6 border-l border-gold">
                            <img class="w-7" src="/images/svg/calender.svg" alt="">
                            <p class="ml-4 text-2xl text-gold">{{ $event->finished_at }}</p>
                        </div>
                    </div>
                    <div class="overscroll-auto  overflow-y-scroll h-96"> 
                        <p class="text-2xl">{!! $event->content !!}</p>
                    </div>
                    {{-- <p class="text-2xl">{{ __('További információ') }}<a class="pl-2 text-2xl text-gold"  href="https://www.facebook.com/events/595767197688697">facebook oldalunkon.</a></p> --}}
                    {{-- <div class="text-center">
                        <x-button type="gray-transparent">{{ __('Jegyvásárlás') }}</x-button>
                    </div> --}}
                </div>
            </div>
    </x-section>
</x-layout>
