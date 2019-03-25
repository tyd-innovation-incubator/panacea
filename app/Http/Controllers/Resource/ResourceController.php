<?php

namespace App\Http\Controllers\Resource;

use App\Http\Controllers\Controller;

class ResourceController extends Controller
{
    public  function __construct()
    {

    }

    public function contactUs()
    {
        return view('resources.contact_us');
    }

    public function aboutUs()
    {

        return view('resources.about');
    }
}