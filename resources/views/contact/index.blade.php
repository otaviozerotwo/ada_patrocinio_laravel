@extends('layouts.index')

<!-- Vendor CSS Files -->
<link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
<link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
<link href="{{ asset('assets/vendor/quill/quill.snow.css') }}" rel="stylesheet">
<link href="{{ asset('assets/vendor/quill/quill.bubble.css') }}" rel="stylesheet">
<link href="{{ asset('assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
<link href="{{ asset('assets/vendor/simple-datatables/style.css') }}" rel="stylesheet">

@section('content')

<main id="main" class="main container">

    <div class="pb-5">
        <h1>Fale Conosco</h1>
    </div>

    <section class="section contact">
        <div class="row gy-4">
            <div class="col-xl-6">
                <div class="row">
                <div class="col-lg-6">
                    <div class="info-box card">
                        <div class="d-flex">
                            <i class="bi bi-geo-alt align-self-center"></i>
                            <h3 class="ms-3 mb-4">Endereço</h3>
                        </div>
                        <p>Rua Marechal Floriano n°76<br> Sala 02<br>Centro, Patrocínio-MG</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="info-box card">
                        <div class="d-flex">
                            <i class="bi bi-whatsapp align-self-center"></i>
                            <h3 class="ms-3 mb-4">Whatsapp</h3>                    
                        </div>
                        <p class="mt-4">
                            <a class="link-success link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover"href="https://wa.me/5534992014610" target="_blank">34 99201-4610</a>
                        </p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="info-box card">
                        <div class="d-flex">
                            <i class="bi bi-envelope align-self-center"></i>
                            <h3 class="ms-3 mb-4">Email</h3>
                        </div>
                        <p class="mt-4">
                            <a class="link-success link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover" href="mailto:adapatrocinio@hotmail.com">adapatrocinio@hotmail.com</a>
                        </p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="info-box card">
                        <div class="d-flex">
                            <i class="bi bi-clock align-self-center"></i>
                            <h3 class="ms-3 mb-4">Horário de atendimento</h3>
                        </div>
                        <p>Segunda a Sexta - 9:00 as 17:00</p><br>
                        <p>Sábado - 9:00 as 11:00</p><br>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <picture class="sessao1-img">
                <source srcset="{{ asset('assets/img/img-site/img-home-1.jpeg') }}" type="image/jpg">
                <img src="{{ asset('assets/img/img-site/img-home-1.jpeg') }}" class="img-fluid img-thumbnail" alt="...">
            </picture>
        </div>
    </section>
</main>

@endsection