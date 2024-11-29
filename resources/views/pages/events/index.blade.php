<x-layout>
    <x-header background="events">
        {{ __('Rendezvények') }}
    </x-header>
    @empty(!$events)
        <div>
            <x-section>
                <x-title text="Spaletta" title="{{ __('Összes rendezvény') }}" price=""></x-title>
                <div class="grid grid-cols-1 gap-12 my-16 md:my-16 md:grid-cols-2 lg:grid-cols-3 lg:gap-16">
                    @foreach ($events as $event)
                        <div class="flex flex-col items-center justify-start rounded-md shadow-lg">
                            <div class="flex flex-col items-center">
                                <img class="event__image"
                                    src="{{ $event->heroImage() ? $event->heroImage() : '/images/events/' . $event->slug . '/' . $event->image_path }}"
                                    alt="">
                            </div>
                            <div class="flex flex-col items-center px-4 py-8 space-y-8 top-80">
                                <p class="px-6 py-2 text-2xl font-semibold text-white rounded-md bg-gold">
                                    {{ $event->started_at }}</p>
                                <h2 class="text-3xl font-medium text-center event__title flex items-center">
                                    {{ $event->title }}</h2>
                                <x-button type="gray-transparent-radius">
                                    <a href="{{ route('events.show', $event->id) }}">{{ __('Részletek') }}</a>
                                </x-button>
                            </div>
                        </div>
                    @endforeach
                </div>
            </x-section>
        </div>
    @endempty
</x-layout>
