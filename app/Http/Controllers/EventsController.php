<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateEventRequest;
use App\Http\Requests\SaveEventRequest;
use Illuminate\Http\Request;

class EventsController extends Controller
{
    //
    public function eventsIndexView(){
        return "Events index";
    }

    public function createEventView(){
        return "Create new event";
    }

    public function saveEvent(SaveEventRequest $request) {
        return null;
    }

    public function editEventView($id){
        return "Edit event view $id";
    }

}
