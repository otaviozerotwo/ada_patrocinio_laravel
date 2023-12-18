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
                    <a class="nav-link {{ Request::is('about*') ? 'active' : '' }}"
                        href="{{ route('about.index') }}">Sobre Nós</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('contact*') ? 'active' : '' }}"
                        href="{{ route('contact.index') }}">Contato</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('events*') ? 'active' : '' }}"
                        href="{{ route('events.index') }}">Eventos</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle {{ Request::is('howToHelp*') ? 'active' : '' }}"
                        data-bs-toggle="dropdown" aria-expanded="false" href="">Como Ajudar</a>
                    <ul class="dropdown-menu">
                        <li>
                            <a class="dropdown-item" href="{{ route('howToHelp.voluntary') }}">Quero ser voluntário</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle {{ Request::is('services*') ? 'active' : '' }}"
                        data-bs-toggle="dropdown" aria-expanded="false" href="">Serviços</a>
                    <ul class="dropdown-menu">
                        <li>
                            <a class="dropdown-item" href="{{ route('services.scheduleCastration') }}">Agendar
                                Castração</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('terms*') ? 'active' : '' }}"
                        href="{{ route('terms.index') }}">Termos de Fomento</a>
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
        

        <!-- @auth
            <nav class="header-nav ms-auto">
                <ul class="d-flex align-items-center">

                    <li class="nav-item dropdown pe-3">

                        <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                            <img src="{{ asset('assets/img/img-adminPanel/profile-img.jpg') }}" alt="Profile"
                                class="rounded-circle">
                            <span class="d-none d-md-block dropdown-toggle ps-2">Inserir nome do usuário</span>
                        </a>

                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                            <li class="dropdown-header">
                                <h6>Inserir nome do usuário</h6>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>

                            <li>
                                <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                                    <i class="bi bi-person"></i>
                                    <span>My Profile</span>
                                </a>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>

                            <li>
                                <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                                    <i class="bi bi-gear"></i>
                                    <span>Account Settings</span>
                                </a>
                            </li>

                            <li>
                                <hr class="dropdown-divider">
                            </li>

                            <li>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <i class="bi bi-box-arrow-right"></i>
                                    <span>Sign Out</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
        @endauth -->
    </div>
</nav>