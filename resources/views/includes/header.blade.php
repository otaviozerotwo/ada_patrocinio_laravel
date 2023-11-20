<nav class="navbar navbar-expand-xl">
    <div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03"
            aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="logo-div">
            <a class="navbar-brand" href="/">
                <img src="{{ asset('assets/img/img-site/logo_ada.png') }}" class="logo-img" alt="">
            </a>
        </div>

        <div class="menu collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="nav-underline navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('about*') ? 'active' : '' }}" href="{{ route('about.index') }}">Sobre Nós</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('contact*') ? 'active' : '' }}" href="{{ route('contact.index') }}">Contato</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('events*') ? 'active' : '' }}" href="{{ route('events.index') }}">Eventos</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle {{ Request::is('howToHelp*') ? 'active' : '' }}" data-bs-toggle="dropdown" aria-expanded="false" href="">Como Ajudar</a>
                    <ul class="dropdown-menu">
                        <li>
                            <a class="dropdown-item" href="{{ route('howToHelp.voluntary') }}">Quero ser voluntário</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle {{ Request::is('services*') ? 'active' : '' }}" data-bs-toggle="dropdown" aria-expanded="false" href="">Serviços</a>
                    <ul class="dropdown-menu">
                        <li>
                            <a class="dropdown-item" href="{{ route('services.scheduleCastration') }}">Agendar Castração</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('terms*') ? 'active' : '' }}" href="{{ route('terms.index') }}">Termos de Fomento</a>
                </li>
            </ul>
        </div>
        <!-- botão login -->
        <div class="me-3">
            <a class="btn btn-login btn-primary" href="{{ route('login.index') }}">Fazer login</a>
        </div>
        <div>
            <a class="btn btn-login btn-primary" href="{{ route('cadastro.create') }}">Criar conta</a>
        </div>
    </div>
</nav>