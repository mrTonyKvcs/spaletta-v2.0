<x-layout>
    <x-event-header :showButtons="false" backgroundColor="true">{{ $event->title }}</x-event-header>
    <x-section>
        <div class="flex flex-col md:flex-row-reverse">
            <div class="flex flex-col justify-center w-full pl-8 space-y-10">
                <div class="flex items-center justify-center mt-8 md:mt-0">
                    <div class="flex justify-center pr-6">
                        <img class="w-7" src="/images/svg/calender.svg" alt="">
                        <p class="ml-4 text-2xl md:text-3xl text-gold">{{ $event->started_at }}</p>
                    </div>
                    <div class="flex justify-center pl-6 border-l border-gold">
                        <img class="w-7" src="/images/svg/calender.svg" alt="">
                        <p class="ml-4 text-2xl md:text-3xl text-gold">{{ $event->finished_at }}</p>
                    </div>
                </div>
                <div class="flex justify-center pr-6">
                    <img class="w-full h-auto" src="{{ $event->image_path }}" alt="{{ $event->title }}">
                </div>
                <div class="text-left event__content" style="font-size: 18px !important;">
                    <p class="text-2xl">{!! $event->content !!}</p>
                </div>
            </div>
        </div>
        @if ($event->is_paid)
            <div class="w-full mt-8">
                <livewire:order.buy-ticket :event="$event" />
            </div>
        @elseif($event->has_reservation)
            @if ($event->id !== 73 && $event->id !== 71)
                <x-section>
                    <x-title text="Spaletta" title="{{ __('Asztalfoglalás') }}" price=""></x-title>
                    <x-reservation :event="$event"></x-reservation>
                </x-section>
            @endif
        @endif
    </x-section>

</x-layout>
