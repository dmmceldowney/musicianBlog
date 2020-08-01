<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventsController extends Controller
{
    //
    public function index(){
        return "Events index";
    }

    public function editEvent(){
        return "Edit event";
    }

}
