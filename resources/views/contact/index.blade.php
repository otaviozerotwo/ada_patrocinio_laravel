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

    <div class="pagetitle">
        <h1>Fale Conosco</h1>
    </div>

    <section class="section contact">
        <div class="row gy-4">
            <div class="col-xl-6">
                <div class="row">
                <div class="col-lg-6">
                    <div class="info-box card">
                        <i class="bi bi-geo-alt"></i>
                        <h3>Endereço</h3>
                        <p>Rua Marechal Floriano n°76 sala 02,<br>Centro, Patrocínio-MG</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="info-box card">
                        <i class="bi bi-telephone"></i>
                        <h3>Whatsapp</h3>
                        <p>34 99201-4610</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="info-box card">
                        <i class="bi bi-envelope"></i>
                        <h3>Email</h3>
                        <p>adapatrocinio@hotmail.com</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="info-box card">
                        <i class="bi bi-clock"></i>
                        <h3>Horário de atendimento</h3>
                        <p>Segunda a Sexta<br>9:00 - 17:00</p>
                        <p>Sábado<br>9:00 - 11:00</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

@endsection