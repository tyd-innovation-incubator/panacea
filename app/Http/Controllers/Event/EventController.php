<?php

namespace App\Http\Controllers\Event;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EventController extends Controller
{
    //

    public function index()
    {
        return view('event.index');
    }

    public function show()
    {
        return view('event.show');
    }
}
