<?php

namespace App\Http\Controllers;

use App\Models\Event;

class PagesController extends Controller
{
    public function index()
    {
        $events = Event::query()
            ->active()
            ->where('type_id', 3)
            ->orderBy('started_at')
            ->take(3)
            ->get();

        return view('pages.index', [
            'events' => $events,
        ]);
    }
}
