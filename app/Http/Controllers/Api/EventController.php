<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::with('category')->get();
        return response()->json($events);
    }

    public function show(Event $event)
    {
        $event->load('category', 'attendees');
        return response()->json($event);
    }
}
