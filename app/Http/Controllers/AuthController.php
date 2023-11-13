<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index()
    {
        return view('adminPanel.index');
    }

    public function login()
    {
        return view('adminPanel.login');
    }

    public function register()
    {
        return view('adminPanel.register');
    }

    public function forgot()
    {
        return view('adminPanel.forgot');
    }
}
