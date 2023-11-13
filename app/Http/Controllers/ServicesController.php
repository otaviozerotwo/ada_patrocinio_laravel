<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function scheduleCastration()
    {
        return view("services.scheduleCastration");
    }
}
