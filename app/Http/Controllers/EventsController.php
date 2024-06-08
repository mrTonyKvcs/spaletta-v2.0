<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventsController extends Controller
{
    public function __invoke()
    {
        $events = Event::query()
            ->active()
            ->where('type_id', 3)
            ->orderBy('started_at')
            ->get();

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
        $ticketSold = $event->tickets()->sum('quantity');

        return view('pages.events.show', [
            'event' => $event,
            'sold' => empty($ticketSold) ? 0 : $ticketSold
        ]);
    }
}
