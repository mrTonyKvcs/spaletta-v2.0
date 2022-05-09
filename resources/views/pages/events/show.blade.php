<x-layout>
    <x-header background="reservation">{{ $event->title }}</x-header>
    <x-section>
                <div class="flex flex-col md:flex-row">
                    <div class="w-full md:w-1/2 ">
                        <div class="flex items-center justify-center">
                            <img class="" src="{{ $event->image_path }}" alt="{{ $event->title }}">
                        </div>
                    </div>
                    <div class="flex flex-col justify-center w-full pl-8 space-y-10 md:w-1/2">
                        <div class="flex items-center justify-center mt-8 md:mt-0">
                            <div class="flex justify-center pr-6">
                                <img class="w-7" src="/images/svg/calender.svg" alt="">
                                <p class="ml-4 text-2xl text-gold">{{ $event->started_at }}</p>
                            </div>
                            <div class="flex justify-center pl-6 border-l border-gold">
                                <img class="w-7" src="/images/svg/calender.svg" alt="">
                                <p class="ml-4 text-2xl text-gold">{{ $event->finished_at }}</p>
                            </div>
                        </div>
                        <div class="overflow-y-scroll text-center overscroll-auto h-96"> 
                            <p class="text-2xl">{!! $event->content !!}</p>
                        </div>
                        {{-- <p class="text-2xl">{{ __('További információ') }}<a class="pl-2 text-2xl text-gold"  href="https://www.facebook.com/events/595767197688697">facebook oldalunkon.</a></p> --}}
                        {{-- <div class="text-center">
                            <x-button type="gray-transparent">{{ __('Jegyvásárlás') }}</x-button>
                        </div> --}}
                    </div>
                </div>
                    {{-- <div class="lg:container lg:mx-auto"> --}}
                @empty(!$event->price)
					@if ($sold < 20)
						<div class="w-full mt-8">
							<livewire:order.buy-ticket :event="$event" />
						</div>
					@endif
                @endempty
            {{-- </div> --}}
    </x-section>

</x-layout>
