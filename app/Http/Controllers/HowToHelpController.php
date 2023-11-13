<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HowToHelpController extends Controller
{
    public function voluntary()
    {
        return view("howToHelp.voluntary");
    }
}
