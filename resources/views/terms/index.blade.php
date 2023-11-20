@extends('layouts.index')

@section('content')

<main class="container mt-3">
    <section class="row align-items-start">
        <div class="col-lg-6 align-self-center">
            <h1 class="mb-5">Termos de Fomento</h1>
            <p>
                "Instrumento por meio do qual são formalizadas as parcerias estabelecidas pela administração pública com organizações da sociedade civil para a consecução de finalidades de interesse público e recíproco propostas pelas organizações da sociedade civil, que envolvam a transferência de recursos financeiros." 
            </p>
            
            <p class="mt-5">
                Fonte: <a class="link-success link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover" href="https://www.gov.br/cnpq/pt-br/acesso-a-informacao/acoes-e-programas/parcerias/nacionais-1/termo-de-fomento" target="_blank">Gov.br</a>
            </p>
        </div>

        <div class="col-lg-6">
            <picture class="sessao1-img">
                <source srcset="{{ asset('assets/img/img-site/img-home-1.jpeg') }}" type="image/jpeg">
                <img src="{{ asset('assets/img/img-site/img-home-1.jpeg') }}" class="img-fluid img-thumbnail" alt="...">
            </picture>
        </div>
    </section>

    <section>
        <h2 class="my-5">Título provisório</h2>
        <div>
            inserir aqui links para termos de fomento
        </div>
    </section>
</main>

@endsection