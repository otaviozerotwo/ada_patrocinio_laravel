<?php

namespace App\Http\Controllers;

use App\Models\User;
use Auth;
use Hash;
use Illuminate\Http\Request;
use Str;

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
            return redirect('/adminPanel');
        } else {
            return redirect()->back()->with('danger','e-mail ou senha inválidos!');
        }
    }

    public function create(Request $request)
    {
        return view('adminPanel.register');
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

        return redirect('adminPanel/login')->with('success','Cadastro efetuado com sucesso!');
    }

    public function forgot()
    {
        return view('adminPanel.forgot');
    }
}
