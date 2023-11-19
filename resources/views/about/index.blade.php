@extends('layouts.index')

@section('content')

<main>
    <div class="container mt-3">
        <!-- sessão #1 - conteúdo about -->
        <div class="row align-items-start">
            <div class="col-lg-6 align-self-center">
                <h1 class="mb-5">ADA Patrocínio</h1>
                <p>
                    A ADA é uma ONG (Organização Não Governamental), sem fins lucrativos, com
                    personalidade jurídica regida pelo direito privado, fundada em 2005 com a missão de disseminar o
                    conhecimento sobre a causa animal para a população de Patrocínio-MG. Para isso, trabalhamos a
                    educação sobre guarda responsável e, respeito aos direitos dos animais, além de defender a
                    esterilização (castração) de cães e gatos como forma de controle populacional e promoção do bem
                    estar dos animais.
                </p>
            </div>

            <div class="col-lg-6">
                <picture class="sessao1-img">
                    <source srcset="{{ asset('assets/img/img-site/img-about-1.jpeg') }}" type="image/jpeg">
                    <img src="{{ asset('assets/img/img-site/img-about-1.jpeg') }}" class="img-fluid img-thumbnail" alt="...">
                </picture>
            </div>
        </div>
        <!-- sessão #2 - conteúdo about -->
        <div class="row justify-content-center">
            <h2 class="my-5">Quem Somos</h2>
            <p>
                A ADA surgiu de um pequeno grupo de pessoas que compartilhavam o mesmo sentimento de respeito à
                vida,
                quando a eutanásia ainda era uma prática vigente no Canil Municipal. Acreditando ser possível uma
                convivência harmônica entre as espécies, nossos voluntários corriam contra o tempo para que os
                animais
                recolhidos pela "carrocinha" voltassem para suas casas ou ganhassem um novo lar.<br><br>

                Em 2010 a ADA fechou seu abrigo para animais devido a falta de recursos para mante-lo e, desde
                então,
                cuida dos animais que restaram, dando qualidade de vida ate que cumpram a sua missão de amor aqui na
                terra.<br><br>

                Em 2017, foi iniciado o Projeto de Mutirão de Castração, através de parcerias com universidades e
                projetos voltados ao controle populacional de animais.<br><br>

                Em 2019, o município de Patrocínio/MG, fez a concessão (cedeu o direito de uso) de um micro-ônibus
                usado, que estava sem uso, no pátio da Secretaria de Obras, para que a ADA o reformasse e, fizesse a
                adaptação de uma sala cirúgica, para ser utilizado como UNIDADE MÓVEL DE ESTERILIZAÇÃO E EDUCAÇÃO EM
                SAÚDE (UMEES ou CASTRA MÓVEL). Através dessa unidade, executamos o Projeto de Esterilização de Cães
                e
                Gatos a preço social, para quem não se enquadra no CADÚNICO.<br><br>

                Como a ONG não conseguiu uma subvenção do municipio, para que fizesse as castrações de forma
                gratuita
                para a população, a castração a preço social, foi a forma encontrada para manter o projeto, a compra
                de
                medicamentos, insumos e fazer manutenção da entidade.<br><br>
            </p>
            <div class="mt-5">
                <strong>PROJETO CASTRA MÓVEL É MANTIDO COM RECURSOS PRÓPRIOS. A ADA NÃO POSSUI PARCERIA COM O MUNICIPIO PARA EXECUÇÃO DE PROJETO DE CASTRAÇÃO DE ANIMAIS.<br><br></strong>
            </div>
        </div>
    </div>
</main>

@endsection