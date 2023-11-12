<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        return view('login.index');
    }

    public function auth(Request $request)
    {
        $this->validate($request, [
            'email' => 'required',
            'password' => 'required',
        ],[
            'email.required'=> 'Campo e-mail é obrigatório!',
            'password.required'=> 'Campo senha é obrigatório!',
        ]);

        if(Auth::attempt(['email'=> $request->email, 'password'=> $request->password])) {
            return redirect('/');
        } else {
            return redirect()->back()->with('danger','e-mail ou senha inválidos!');
        }
    }

    public function create(Request $request)
    {
        
    }

    public function store(Request $request)
    {
        $userName = $request->input('name');
        $userEmail = $request->session()->get('email');
        $userPassword = $request->input('password');
        
        $user = new User();
        $user->name = $userName;
        $user->email = $userEmail;
        $user->password = $userPassword;
        
        $user->save();

        return redirect('/login');
    }
}
