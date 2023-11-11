@extends('layouts.layoutLogin')

@section('content')
    <h2 class="d-flex h1 pb-5 margin-login-cadastro-modificado">Olá, seja bem-vindo!</h2>

    <div class="d-flex">
        <div class="row w-100 justify-content-evenly m-auto">
            <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-9 col-sm-9 col-xs-9 card p-4 card-modificado">
                <h5 class="card-title card-title-modificado">Já tenho cadastro</h5>
                
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

                <form action="{{ route('auth.user') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-floating py-2">
                        <input type="email" class="form-control" id="floatingInput" placeholder="E-mail" name="email">
                        <label for="floatingInput">E-mail</label>
                    </div>

                    <div class="form-floating">
                        <input type="password" class="form-control" id="floatingInput" placeholder="Senha" name="password">
                        <label for="floatingInput">Senha</label>
                    </div>

                    <div class="w-100 pt-2 pb-4">
                        <a class="link-login-cadastro-modificado" href="#">Esqueceu a senha?</a>
                    </div>
                    
                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-primary w-50 py-3 btn-modificado" name="logar">Acessar conta</button>
                    </div>
                </form>
            </div>

            <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-9 col-sm-9 col-xs-9 card p-4 card-modificado">
                <h5 class="card-title card-title-modificado">Quero me cadastrar</h5>
                <form action="{{ route('create.user') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-floating py-2">
                        <input type="email" class="form-control" id="floatingInput" placeholder="E-mail" name="email">
                        <label for="floatingInput">E-mail</label>
                        <input type="hidden" name="password" value="1234">
                        <input type="hidden" name="name" value="test">
                    </div>

                    <div class="form-check text-start mb-5">
                        <input type="checkbox" class="form-check-input" id="flexCheckDefault" required>
                        <label for="form-check-label" class="form-check-label-modificado">Ao criar sua conta você concorda com nossos Termos de uso e com nossa Política de privacidade</label>
                    </div>

                    <div class="d-flex justify-content-center pt-3">
                        <button type="submit" class="btn btn-primary w-50 py-3 btn-modificado" name="enviarEmail">Criar conta</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="d-flex pt-5 margin-login-cadastro-modificado">
        <a class="link-login-cadastro-modificado" href="/">Retornar ao site</a>
    </div>
@endsection