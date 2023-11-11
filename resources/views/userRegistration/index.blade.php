@extends('layouts.layoutLogin')

@section('content')
    <div class="d-flex mb-5 justify-content-center">
        <h1>Complete os dados para criar sua conta</h2>
    </div>

    <div class="d-flex justify-content-center">    
        <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-9 col-sm-9 col-xs-9 card p-4 card-modificado">
            <h5 class="card-title card-title-modificado">Dados do usuário</h5>

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

            <form action="{{ route('store.user') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-floating pt-2">
                    <input type="email" class="form-control" id="floatingInput" placeholder="E-mail" name="email">
                    <label for="floatingInput">E-mail</label>
                </div>
                <div class="form-floating pt-2">
                    <input type="password" class="form-control" id="floatingInput" placeholder="Senha" name="password">
                    <label for="floatingInput">Senha</label>
                </div>
                <div class="form-floating pt-2">
                    <input type="text" class="form-control" id="floatingInput" placeholder="Nome" name="name">
                    <label for="floatingInput">Nome</label>
                </div>

                <div class="d-flex justify-content-center pt-3">
                    <button type="submit" class="btn btn-primary w-50 py-3 btn-modificado" name="enviarEmail">Criar conta</button>
                </div>
            </form>
        </div>
    </div>
        
    <div class="d-flex justify-content-center">
        <h5>Já possui cadastro?</h5>
    </div>

    <div class="d-flex justify-content-center mt-2">
        <a id="btn-retorna-tela-login" class="btn btn-secondary py-3" href="/login">Faça seu Login</a>
    </div>
@endsection