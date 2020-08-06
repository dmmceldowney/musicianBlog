<?php

namespace App\Http\Controllers;

use App\Event;
use App\Http\Requests\CreateEventRequest;
use App\Http\Requests\SaveEventRequest;
use Carbon\Carbon;
use Illuminate\Http\Request;

class EventsController extends Controller
{
    //
    public function eventsIndex(){
        $events = Event::whereDate('start_time', '>=', Carbon::now()->toDate());

        return view('events.index', ['events' => $events]);
    }

}
