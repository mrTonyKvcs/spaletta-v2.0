<x-layout>
    <x-event-header :showButtons="false" background="{{ 'events/' . $event->slug . '/' . $event->image_path }}">{{ $event->title }}</x-event-header>
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
                        <div class="text-left event__content"> 
                            <p class="text-2xl">{!! $event->content !!}</p>
                        </div>
                    </div>
                </div>
                @if($event->is_paid)
                    <div class="w-full mt-8">
                        <livewire:order.buy-ticket :event="$event" />
                    </div>
                @endif
    </x-section>

</x-layout>
