@extends('layouts.layoutLogin')

@section('content')
    <div class="d-flex mb-5 justify-content-center">
        <h1>Olá, seja bem-vindo!</h1>
    </div>

    <div class="d-flex justify-content-center">
        <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-9 col-sm-9 col-xs-9 card p-4 card-modificado">
            <h5 class="card-title card-title-modificado">Faça seu login</h5>
            
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @if (session('danger'))
                <div class="alert alert-danger">
                    {{ session('danger') }}
                </div>
            @endif

            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <form action="{{ route('login.auth') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-floating py-2">
                    <input type="email" class="form-control" id="floatingInput" placeholder="E-mail" name="email" required>
                    <label for="floatingInput">E-mail</label>
                </div>

                <div class="form-floating">
                    <input type="password" class="form-control" id="floatingInput" placeholder="Senha" name="password" required>
                    <label for="floatingInput">Senha</label>
                </div>

                <div class="form-check text-start mt-2">
                    <input type="checkbox" class="form-check-input" id="flexCheckDefault" name="remember" id="form-check-label">
                    <label for="form-check-label" class="form-check-label-modificado">Lembrar-me</label>
                </div>
                
                <div class="d-flex justify-content-center">
                    <button type="submit" class="btn btn-primary w-50 py-3 btn-modificado" name="logar">Acessar conta</button>
                </div>

                <div class="w-100 pt-2 mt-4">
                    <a class="link-login-cadastro-modificado" href="#">Esqueceu a senha?</a>
                </div>
            </form>
        </div>
    </div>

    <div class="d-flex justify-content-center">
        <h5>Não tem cadastro?</h5>
    </div>

    <div class="d-flex justify-content-center mt-2">
        <a class="btn btn-secondary btn-secondary-modificado py-3" href="{{ route('cadastro.create') }}">Crie sua conta</a>
    </div>

    <div class="d-flex justify-content-center mt-5">
        <a class="link-login-cadastro-modificado" href="/">Retornar ao site</a>
    </div>
@endsection