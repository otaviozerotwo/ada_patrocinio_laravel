<?php

namespace App\Http\Controllers;

use Hash;
use Mail;
use Str;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Mail\RegisterMail;

class UserController extends Controller
{
    public function index()
    {
        return view('login.index');
    }

    public function auth(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ],[
            'email.required'=> 'Campo e-mail é obrigatório!',
            'email.email'=> 'e-mail inválido!',
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
        return view('userRegistration.index');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:6',
            'name' => 'required'
        ],[
            'email.required'=> 'Campo e-mail é obrigatório!',
            'email.email'=> 'e-mail inválido!',
            'password.required'=> 'Campo senha é obrigatório!',
            'password.min' => 'A senha precisa ter no mínimo :min caracteres!',
            'name.required'=> 'Campo nome é obrigatório!',
        ]);

        $userName = $request->input('name');
        $userEmail = $request->input('email');
        $userPassword = $request->input('password');
        
        $user = new User();
        $user->name = $userName;
        $user->email = $userEmail;
        $user->password = Hash::make($userPassword);
        $user->remember_token = Str::random(10);
        
        $user->save();

        Mail::to($user->email)->send(new RegisterMail($user));

        return redirect('login')->with('success','Cadastro efetuado com sucesso!');
    }

    public function verify($token)
    {
        $user = User::where('remember_token', '=', $token)->first();

        if (!empty($user)) {
            $user->email_verified_at = date('Y-m-d H:i:s');
            $user->remember_token = Str::random(10);
            $user->save();

            return redirect('login')->with('success','E-mail verificado com sucesso!');
        } else {
            abort(404);
        }
    }
}
