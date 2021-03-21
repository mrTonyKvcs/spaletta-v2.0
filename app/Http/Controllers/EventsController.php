<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventsController extends Controller
{
    public function index() 
    {
        return view('pages.events.index');
    }

    public function show() 
    {
        return view('pages.events.show');
    }
}
