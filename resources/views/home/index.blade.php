@extends('layouts.index')

@section('content')

<!-- carrossel -->
<div class="container">
    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>

        <div class="carousel-inner">
            <div id="carrossel-item-1" class="carousel-item active"></div>
            <div id="carrossel-item-2" class="carousel-item"></div>
            <div id="carrossel-item-3" class="carousel-item"></div>
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>

<div class="container container-modificado mt-5">
    <!-- sessão #1 - conteúdo home -->
    <div class="row align-items-start">
        <div class="col-lg-6 align-self-center">
            <h1 class="mb-5">ADA Patrocínio</h1>
            
            <p class="card-text">A ADA é uma ONG (Organização Não Governamental), sem fins lucrativos, com
                personalidade jurídica regida pelo direito privado, fundada em 2005 com a missão de disseminar o
                conhecimento sobre a causa animal para a população de Patrocínio-MG. Para isso, trabalhamos a
                educação sobre guarda responsável e, respeito aos direitos dos animais, além de defender a
                esterilização (castração) de cães e gatos como forma de controle populacional e promoção do bem
                estar dos animais.
            </p>
            <a href="{{ route('about.index') }}"
                class="link-secondary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Saiba
                mais sobre a ADA</a>
        </div>

        <div class="col-lg-6">
            <picture class="sessao1-img">
                <source srcset="{{ asset('assets/img/img-site/img-home-1.jpeg') }}" type="image/jpg">
                <img src="{{ asset('assets/img/img-site/img-home-1.jpeg') }}" class="img-fluid img-thumbnail" alt="...">
            </picture>
        </div>
    </div>
    <!-- sessão #2 - conteúdo home -->
    <div id="sessao2-home-row1" class="row">
        <h2 id="sessao2-home-titulo">Veja como você pode nos ajudar</h2>
        <h5 id="sessao2-home-subtitulo">Existem muitas formas de ajudar o nosso projeto de esterilização de cães e
            gatos, veja como:</h5>
    </div>
    <!-- sessão #3 - conteúdo home -->
    <div class="container text-center">
        <div class="row">
            <div class="tipo-doacao col-lg-4">
                <a href="#"
                    class="link-secondary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">
                    <img src="{{ asset('assets/img/img-site/img_doe_medicamentos.jpg') }}" class="rounded img-doacao" alt="...">
                    <h5 class="sessao3-home-titulo">Doação de Medicamentos</h5>
                </a>
            </div>

            <div class="tipo-doacao col-lg-4">
                <a href="https://pag.ae/bjj8DKb" target="_blank"
                    class="link-secondary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">
                    <img src="{{ asset('assets/img/img-site/img_doe_dinheiro.jpg') }}" class="rounded img-doacao" alt="...">
                    <h5 class="sessao3-home-titulo">Doação em Dinheiro</h5>
                </a>
            </div>

            <div class="tipo-doacao col-lg-4">
                <a href="#"
                    class="link-secondary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">
                    <img src="{{ asset('assets/img/img-site/img_doe_racao.jpg') }}" class="rounded img-doacao" alt="...">
                    <h5 class="sessao3-home-titulo">Doação de Ração</h5>
                </a>
            </div>
        </div>
    </div>
</div>

@endsection