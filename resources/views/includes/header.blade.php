<nav class="navbar navbar-expand-xl bg-body-tertiary">
    <div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03"
            aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="logo-div">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('assets/img/logo_ada.png') }}" class="logo-img" alt="">
            </a>
        </div>

        <div class="menu collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="nav-underline navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="#">Sobre Nós</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contato</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Eventos</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" href="#">Como Ajudar</a>
                    <ul class="dropdown-menu">
                        <li>
                            <a class="dropdown-item" href="#">Quero ser voluntário</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" href="#">Serviços</a>
                    <ul class="dropdown-menu">
                        <li>
                            <a class="dropdown-item" href="#">Agendar Castração</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" href="#">Termos de Fomento</a>
                    <ul class="dropdown-menu">
                        <li>
                            <a class="dropdown-item" href="#">Termo de Fomento 1491000967/2019</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">Termo de Fomento 1371000951/2021</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">Termo de Fomento 1371001352/2021</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- botão login -->
        <div class="login-div">
            <a href="/login">
                <button type="button" class="btn btn-primary btn-lg">Entrar | Cadastrar</button>
            </a>
        </div>
    </div>
</nav>