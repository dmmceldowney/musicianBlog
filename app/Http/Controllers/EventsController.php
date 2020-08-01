<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateEventRequest;
use Illuminate\Http\Request;

class EventsController extends Controller
{
    //
    public function indexView(){
        return "Events index";
    }

    public function editEventView(){
        return "Edit event";
    }

    public function createEvent(CreateEventRequest $request){

    }

}
