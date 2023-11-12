@extends('layouts.layoutLogin')

@section('content')
    <div class="d-flex mb-5 justify-content-center">
        <h1>Olá, seja bem-vindo!</h1>
    </div>

    <div class="d-flex">
        <div class="row w-100 justify-content-evenly m-auto">
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

                <form action="{{ route('auth.user') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-floating py-2">
                        <input type="email" class="form-control" id="floatingInput" placeholder="E-mail" name="email" required>
                        <label for="floatingInput">E-mail</label>
                    </div>

                    <div class="form-floating">
                        <input type="password" class="form-control" id="floatingInput" placeholder="Senha" name="password" required>
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
        </div>
    </div>

    <div class="d-flex justify-content-center">
        <a class="link-login-cadastro-modificado" href="/">Retornar ao site</a>
    </div>
@endsection