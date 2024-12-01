@extends('layouts.app')

@section('content')
<div class="container">
    <header class="bg-primary text-white text-center py-5">
        <h1>Selamat Datang di Website Kami</h1>
        <p class="lead">Kami menyediakan layanan terbaik untuk Anda.</p>

        <a href="#services" class="btn btn-light btn-lg">Pelajari Lebih Lanjut</a>
    </header>

    <section id="services" class="py-5"   >
        <div class="container">
            <h2 class="text-center">Layanan Kami</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Layanan 1</h5>
                            <p class="card-text">Deskripsi layanan 1.</p>
                            <span x-text="variabel"></span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Layanan 2</h5>
                            <p class="card-text">Deskripsi layanan 2.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Layanan 3</h5>
                            <p class="card-text">Deskripsi layanan 3.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection