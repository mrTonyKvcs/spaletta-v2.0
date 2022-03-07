<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventsController extends Controller
{
    public function __invoke()
    {
        $events = Event::active()->orderBy('started_at')->get();

        if ($events->isEmpty()) {
            return view('pages.events.empty');
        }

        $nextEvent = $events->shift();

        return view('pages.events.index', [
            'events' => $events,
            'nextEvent' => $nextEvent
        ]);
    }

    public function show($id)
    {
        $event = Event::find($id);
		$ticketSold = $event->tickets->count();

        return view('pages.events.show', [
			'event' => $event,
			'sold' => $ticketSold
        ]);
    }
}
